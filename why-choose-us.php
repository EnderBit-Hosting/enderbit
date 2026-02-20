<?php
$title = "Why Choose Us";
$css = "why-choose-us";
include 'includes/head.php';
include 'includes/nav.php';
?>

<section class="page-hero">
  <div class="hero-bg">
    <img src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Data Center">
    <div class="hero-overlay"></div>
  </div>
  <div class="container hero-content text-center" data-animate>
    <h1>Why EnderBit?</h1>
    <p class="subheadline">Because free hosting should actually work.</p>
  </div>
</section>

<section class="comparison-section container">
  <h2 class="text-center" data-animate>EnderBit vs. The Rest</h2>
  <div class="comparison-table" data-animate>
    <div class="table-header">
      <div class="col-feature">Feature</div>
      <div class="col-enderbit">EnderBit</div>
      <div class="col-free">Typical Free Host</div>
      <div class="col-paid">Paid Host</div>
    </div>
    <div class="table-row">
      <div class="col-feature">Cost</div>
      <div class="col-enderbit">$0 / Forever</div>
      <div class="col-free">$0 / Trial</div>
      <div class="col-paid">$10+ / Month</div>
    </div>
    <div class="table-row">
      <div class="col-feature">DDoS Protection</div>
      <div class="col-enderbit"><svg class="icon-check" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg></div>
      <div class="col-free"><svg class="icon-x" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg></div>
      <div class="col-paid"><svg class="icon-check" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg></div>
    </div>
    <div class="table-row">
      <div class="col-feature">Uptime SLA</div>
      <div class="col-enderbit">99.9%</div>
      <div class="col-free">No Guarantee</div>
      <div class="col-paid">99.9%</div>
    </div>
    <div class="table-row">
      <div class="col-feature">Support</div>
      <div class="col-enderbit">24/7 Human</div>
      <div class="col-free">Community Only</div>
      <div class="col-paid">Ticket System</div>
    </div>
    <div class="table-row">
      <div class="col-feature">Server Locations</div>
      <div class="col-enderbit">Global (4 Regions)</div>
      <div class="col-free">1 Region</div>
      <div class="col-paid">Global</div>
    </div>
    <div class="table-row">
      <div class="col-feature">Forced Ads</div>
      <div class="col-enderbit"><svg class="icon-check" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> None</div>
      <div class="col-free"><svg class="icon-x" viewBox="0 0 24 24"><path d="M18 6L6 18M6 6l12 12"/></svg> Yes</div>
      <div class="col-paid"><svg class="icon-check" viewBox="0 0 24 24"><path d="M20 6L9 17l-5-5"/></svg> None</div>
    </div>
    <div class="table-row">
      <div class="col-feature">Trial Period</div>
      <div class="col-enderbit">Never Expires</div>
      <div class="col-free">7-14 Days</div>
      <div class="col-paid">N/A</div>
    </div>
    <div class="table-row">
      <div class="col-feature">Performance</div>
      <div class="col-enderbit">High</div>
      <div class="col-free">Throttled</div>
      <div class="col-paid">High</div>
    </div>
  </div>
</section>

<section class="pillars-section container">
  <div class="pillars-grid">
    <div class="pillar-card" data-animate style="transition-delay: 0ms;">
      <div class="pillar-icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
      </div>
      <h3>Built for Reliability</h3>
      <p>We don't cut corners on hardware. Our infrastructure is built with redundancy in mind, ensuring your server stays online when you need it most. We target 99.9% uptime across all our global regions.</p>
    </div>
    <div class="pillar-card" data-animate style="transition-delay: 100ms;">
      <div class="pillar-icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
      </div>
      <h3>Built for Gamers</h3>
      <p>EnderBit is made by people who play games. We understand the frustration of high latency and lag spikes. That's why we optimize our network routes specifically for gaming traffic.</p>
    </div>
    <div class="pillar-card" data-animate style="transition-delay: 200ms;">
      <div class="pillar-icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
      </div>
      <h3>Built for Everyone</h3>
      <p>No gatekeeping. No premium tiers that lock away essential features. If you want a server to play with your friends, you can have one. It's that simple.</p>
    </div>
  </div>
</section>

<section class="infographic-section container">
  <h2 class="text-center" data-animate>How It Works</h2>
  <div class="infographic-container" data-animate>
    <svg viewBox="0 80 800 190" class="infra-svg">
      <defs>
        <linearGradient id="line-grad" x1="0%" y1="0%" x2="100%" y2="0%">
          <stop offset="0%" stop-color="#2563eb" />
          <stop offset="100%" stop-color="#10b981" />
        </linearGradient>
      </defs>
      
      <!-- Paths -->
      <path d="M 150 150 L 350 150" fill="none" stroke="url(#line-grad)" stroke-width="4" stroke-dasharray="8,8" class="animated-path"/>
      <path d="M 450 150 L 650 150" fill="none" stroke="url(#line-grad)" stroke-width="4" stroke-dasharray="8,8" class="animated-path"/>
      
      <!-- Nodes -->
      <!-- User -->
      <g transform="translate(100, 150)">
        <circle cx="0" cy="0" r="40" fill="#111827" stroke="#1e2a3a" stroke-width="3"/>
        <svg x="-20" y="-20" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#f0f4ff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect><line x1="8" y1="21" x2="16" y2="21"></line><line x1="12" y1="17" x2="12" y2="21"></line></svg>
        <text x="0" y="65" fill="#f0f4ff" font-family="Inter" font-size="14" text-anchor="middle" font-weight="600">Player</text>
      </g>

      <!-- Edge -->
      <g transform="translate(400, 150)">
        <circle cx="0" cy="0" r="50" fill="#111827" stroke="#2563eb" stroke-width="3"/>
        <svg x="-24" y="-24" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        <text x="0" y="75" fill="#f0f4ff" font-family="Inter" font-size="14" text-anchor="middle" font-weight="600">EnderBit Edge</text>
        <text x="0" y="95" fill="#8b9ab0" font-family="Inter" font-size="12" text-anchor="middle">DDoS Filter</text>
      </g>

      <!-- Server -->
      <g transform="translate(700, 150)">
        <circle cx="0" cy="0" r="40" fill="#111827" stroke="#10b981" stroke-width="3"/>
        <svg x="-20" y="-20" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#10b981" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6.01" y2="6"></line><line x1="6" y1="18" x2="6.01" y2="18"></line></svg>
        <text x="0" y="65" fill="#f0f4ff" font-family="Inter" font-size="14" text-anchor="middle" font-weight="600">Game Server</text>
      </g>
    </svg>
  </div>
</section>

<section class="testimonials-section container">
  <h2 class="text-center" data-animate>Community Quotes</h2>
  <div class="testimonials-grid">
    <div class="testimonial-card" data-animate style="transition-delay: 0ms;">
      <div class="stars">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
      </div>
      <p class="quote">"I've tried so many free hosts that shut down after a week. EnderBit has been running my SMP flawlessly for months. The latency is incredible."</p>
      <div class="author">Alex, Minecraft player</div>
    </div>
    <div class="testimonial-card" data-animate style="transition-delay: 100ms;">
      <div class="stars">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
      </div>
      <p class="quote">"Setting up my Discord bot took literally two minutes. The dashboard is super clean and I don't have to worry about it going offline."</p>
      <div class="author">Sarah, Bot Developer</div>
    </div>
    <div class="testimonial-card" data-animate style="transition-delay: 200ms;">
      <div class="stars">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
        <svg width="20" height="20" viewBox="0 0 24 24" fill="#f59e0b" stroke="#f59e0b" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg>
      </div>
      <p class="quote">"We moved our CS2 practice server here. The fact that it's free and has DDoS protection built-in is mind-blowing. Support team is super helpful too."</p>
      <div class="author">Marcus, CS2 Team Captain</div>
    </div>
  </div>
</section>

<section class="final-cta" data-animate>
  <div class="container">
    <h2>Ready to launch your server?</h2>
    <p>It takes less than 2 minutes. No payment needed. Ever.</p>
    <a href="https://dash.enderbit.com" target="_blank" rel="noopener noreferrer" class="btn-primary btn-large">Create Your Free Server</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>