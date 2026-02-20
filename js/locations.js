// locations.js — hostnames defined here only, never in HTML/PHP
const REGIONS = [
  { id: "na-east", name: "NA-East",  city: "Virginia",     country: "United States", url: "https://na-east-1.enderbit.com", img: "https://images.pexels.com/photos/1486222/pexels-photo-1486222.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" },
  { id: "na-west", name: "NA-West",  city: "Los Angeles",  country: "United States", url: "https://na-west-1.enderbit.com", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/5/57/LA_Skyline_Mountains2.jpg/800px-LA_Skyline_Mountains2.jpg" },
  { id: "eu-west", name: "EU-West",  city: "London",       country: "United Kingdom", url: "https://eu-west-1.enderbit.com", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/e/e4/Palace_of_Westminster_from_the_dome_on_Methodist_Central_Hall_%28cropped%29.jpg/800px-Palace_of_Westminster_from_the_dome_on_Methodist_Central_Hall_%28cropped%29.jpg" },
  { id: "au-east", name: "AU-East",  city: "Sydney",       country: "Australia",      url: "https://au-east-1.enderbit.com", img: "https://upload.wikimedia.org/wikipedia/commons/thumb/a/a0/Sydney_Australia._%2821339175489%29.jpg/800px-Sydney_Australia._%2821339175489%29.jpg" },
];

async function pingRegion(url) {
  const start = performance.now();
  try {
    await fetch(url + "/favicon.ico?nocache=" + Date.now(), {
      method: "HEAD", mode: "no-cors", cache: "no-store"
    });
    return Math.round(performance.now() - start);
  } catch { return null; }
}

async function measureRegion(region) {
  // Run 3 pings, return median
  const results = [];
  for (let i = 0; i < 3; i++) {
    const ms = await pingRegion(region.url);
    if (ms !== null) results.push(ms);
    await new Promise(r => setTimeout(r, 200));
  }
  if (results.length === 0) return null;
  results.sort((a, b) => a - b);
  return results[Math.floor(results.length / 2)];
}

function getStatus(ms) {
  if (ms === null) return { class: 'status-poor', label: 'Unreachable', color: '#ef4444' };
  if (ms < 80) return { class: 'status-excellent', label: 'Excellent', color: '#10b981' };
  if (ms < 150) return { class: 'status-good', label: 'Good', color: '#f59e0b' };
  if (ms < 250) return { class: 'status-fair', label: 'Fair', color: '#f97316' };
  return { class: 'status-poor', label: 'Poor', color: '#ef4444' };
}

document.addEventListener('DOMContentLoaded', () => {
  const grid = document.getElementById('regions-grid');
  const chart = document.getElementById('latency-chart');
  
  // Initialize UI
  REGIONS.forEach((region, index) => {
    // Card
    const card = document.createElement('div');
    card.className = 'region-card measuring';
    card.id = `card-${region.id}`;
    card.setAttribute('data-animate', '');
    card.style.transitionDelay = `${index * 100}ms`;
    
    card.innerHTML = `
      <img src="${region.img}" alt="${region.city}" class="region-image" loading="lazy">
      <div class="region-content">
        <div class="region-name">${region.name}</div>
        <div class="region-location">${region.city}, ${region.country}</div>
        <div class="ping-display">
          <div class="ping-value" id="ping-${region.id}">— ms</div>
          <div class="status-label" id="status-${region.id}">
            <span class="status-dot"></span> Measuring...
          </div>
        </div>
        <button class="btn-retest" onclick="retest('${region.id}')">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"></polyline><path d="M20.49 15a9 9 0 1 1-2.12-9.36L23 10"></path></svg>
          Re-test
        </button>
      </div>
    `;
    grid.appendChild(card);

    // Chart Row
    const row = document.createElement('div');
    row.className = 'chart-row';
    row.innerHTML = `
      <div class="chart-label">${region.name}</div>
      <div class="chart-bar-container">
        <div class="chart-bar" id="bar-${region.id}"></div>
        <div class="chart-value" id="bar-val-${region.id}"></div>
      </div>
    `;
    chart.appendChild(row);
  });

  // Run initial tests
  REGIONS.forEach(region => runTest(region.id));
});

window.retest = function(id) {
  const card = document.getElementById(`card-${id}`);
  card.className = 'region-card measuring visible';
  document.getElementById(`ping-${id}`).innerText = '— ms';
  document.getElementById(`status-${id}`).innerHTML = '<span class="status-dot"></span> Measuring...';
  
  const bar = document.getElementById(`bar-${id}`);
  bar.style.width = '0%';
  document.getElementById(`bar-val-${id}`).innerText = '';
  
  runTest(id);
};

async function runTest(id) {
  const region = REGIONS.find(r => r.id === id);
  const ms = await measureRegion(region);
  const status = getStatus(ms);
  
  const card = document.getElementById(`card-${id}`);
  card.className = `region-card ${status.class} visible`;
  
  document.getElementById(`ping-${id}`).innerText = ms === null ? '—' : `${ms} ms`;
  document.getElementById(`status-${id}`).innerHTML = `<span class="status-dot"></span> ${status.label}`;
  
  // Update chart
  const bar = document.getElementById(`bar-${id}`);
  const val = document.getElementById(`bar-val-${id}`);
  
  if (ms !== null) {
    // Max scale 300ms
    const width = Math.min(100, Math.max(5, (ms / 300) * 100));
    bar.style.width = `${width}%`;
    bar.style.backgroundColor = status.color;
    val.innerText = `${ms} ms`;
  } else {
    bar.style.width = '100%';
    bar.style.backgroundColor = '#ef4444';
    val.innerText = 'Unreachable';
  }
}