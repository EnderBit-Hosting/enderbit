<?php
$title = "Free Game Server Hosting";
$css = "index";
include 'includes/head.php';
include 'includes/nav.php';
?>

<section class="hero">
  <canvas id="particles"></canvas>
  <div class="hero-content container">
    <div class="hero-text" data-animate>
      <div class="badge">100% Free — No Credit Card Required</div>
      <h1>Powerful Game Servers.<br><span class="text-blue">Zero Cost. Forever.</span></h1>
      <p class="subheadline">EnderBit gives everyone access to high-performance, DDoS-protected game servers — Minecraft, CS2, Rust, and more — completely free. No trials. No limits. No catch.</p>
      <div class="hero-buttons">
        <a href="https://dash.enderbit.com" target="_blank" rel="noopener noreferrer" class="btn-primary btn-large">Start Hosting Free</a>
        <a href="/why-choose-us" class="btn-secondary btn-large">Explore What We Offer</a>
      </div>
      <p class="trust-text">Join thousands of players already hosting with EnderBit</p>
    </div>
    <div class="hero-graphic" data-animate style="transition-delay: 100ms;">
      <!-- Custom inline SVG illustration of a stylized server rack -->
      <svg viewBox="0 0 400 500" xmlns="http://www.w3.org/2000/svg" class="server-rack-svg">
        <defs>
          <linearGradient id="rack-bg" x1="0%" y1="0%" x2="0%" y2="100%">
            <stop offset="0%" stop-color="#111827" />
            <stop offset="100%" stop-color="#0a0a0f" />
          </linearGradient>
          <linearGradient id="server-bg" x1="0%" y1="0%" x2="100%" y2="0%">
            <stop offset="0%" stop-color="#1e2a3a" />
            <stop offset="100%" stop-color="#0d1117" />
          </linearGradient>
          <filter id="glow" x="-20%" y="-20%" width="140%" height="140%">
            <feGaussianBlur stdDeviation="4" result="blur" />
            <feComposite in="SourceGraphic" in2="blur" operator="over" />
          </filter>
        </defs>
        <!-- Rack Frame -->
        <rect x="40" y="20" width="320" height="460" rx="8" fill="url(#rack-bg)" stroke="#1e2a3a" stroke-width="4"/>
        <rect x="50" y="30" width="300" height="440" fill="#07070c"/>
        
        <!-- Server Units -->
        <!-- Unit 1 -->
        <g transform="translate(60, 50)">
          <rect width="280" height="60" rx="4" fill="url(#server-bg)" stroke="#2563eb" stroke-width="1"/>
          <rect x="10" y="10" width="200" height="8" rx="2" fill="#111827"/>
          <rect x="10" y="26" width="160" height="8" rx="2" fill="#111827"/>
          <circle cx="240" cy="30" r="6" fill="#10b981" filter="url(#glow)" class="led-pulse"/>
          <circle cx="260" cy="30" r="6" fill="#2563eb" filter="url(#glow)" class="led-pulse" style="animation-delay: 0.5s;"/>
          <!-- Cables -->
          <path d="M 240 40 Q 240 80 280 100" fill="none" stroke="#2563eb" stroke-width="2" opacity="0.6"/>
        </g>
        
        <!-- Unit 2 -->
        <g transform="translate(60, 130)">
          <rect width="280" height="60" rx="4" fill="url(#server-bg)" stroke="#1e2a3a" stroke-width="1"/>
          <rect x="10" y="10" width="180" height="8" rx="2" fill="#111827"/>
          <rect x="10" y="26" width="140" height="8" rx="2" fill="#111827"/>
          <circle cx="240" cy="30" r="6" fill="#10b981" filter="url(#glow)" class="led-pulse" style="animation-delay: 0.2s;"/>
          <circle cx="260" cy="30" r="6" fill="#2563eb" filter="url(#glow)" class="led-pulse" style="animation-delay: 0.7s;"/>
          <path d="M 260 40 Q 260 80 300 120" fill="none" stroke="#10b981" stroke-width="2" opacity="0.6"/>
        </g>

        <!-- Unit 3 -->
        <g transform="translate(60, 210)">
          <rect width="280" height="60" rx="4" fill="url(#server-bg)" stroke="#1e2a3a" stroke-width="1"/>
          <rect x="10" y="10" width="220" height="8" rx="2" fill="#111827"/>
          <rect x="10" y="26" width="180" height="8" rx="2" fill="#111827"/>
          <circle cx="240" cy="30" r="6" fill="#10b981" filter="url(#glow)" class="led-pulse" style="animation-delay: 0.4s;"/>
          <circle cx="260" cy="30" r="6" fill="#2563eb" filter="url(#glow)" class="led-pulse" style="animation-delay: 0.9s;"/>
        </g>

        <!-- Unit 4 -->
        <g transform="translate(60, 290)">
          <rect width="280" height="60" rx="4" fill="url(#server-bg)" stroke="#1e2a3a" stroke-width="1"/>
          <rect x="10" y="10" width="150" height="8" rx="2" fill="#111827"/>
          <rect x="10" y="26" width="120" height="8" rx="2" fill="#111827"/>
          <circle cx="240" cy="30" r="6" fill="#10b981" filter="url(#glow)" class="led-pulse" style="animation-delay: 0.1s;"/>
          <circle cx="260" cy="30" r="6" fill="#2563eb" filter="url(#glow)" class="led-pulse" style="animation-delay: 0.6s;"/>
        </g>

        <!-- Unit 5 -->
        <g transform="translate(60, 370)">
          <rect width="280" height="60" rx="4" fill="url(#server-bg)" stroke="#1e2a3a" stroke-width="1"/>
          <rect x="10" y="10" width="190" height="8" rx="2" fill="#111827"/>
          <rect x="10" y="26" width="170" height="8" rx="2" fill="#111827"/>
          <circle cx="240" cy="30" r="6" fill="#10b981" filter="url(#glow)" class="led-pulse" style="animation-delay: 0.3s;"/>
          <circle cx="260" cy="30" r="6" fill="#2563eb" filter="url(#glow)" class="led-pulse" style="animation-delay: 0.8s;"/>
        </g>
      </svg>
    </div>
  </div>
</section>

<section class="stats-bar">
  <div class="container stats-grid">
    <div class="stat-item" data-animate>
      <div class="stat-number"><span class="counter" data-target="99.99">0</span>%</div>
      <div class="stat-label">Uptime Guaranteed</div>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item" data-animate style="transition-delay: 100ms;">
      <div class="stat-number text-blue">Global</div>
      <div class="stat-label">Server Locations Worldwide</div>
    </div>
    <div class="stat-divider"></div>
    <div class="stat-item" data-animate style="transition-delay: 200ms;">
      <div class="stat-number text-blue">24/7</div>
      <div class="stat-label">Support & DDoS Protection</div>
    </div>
  </div>
</section>

<section class="mission-section container">
  <div class="mission-grid">
    <div class="mission-text" data-animate>
      <div class="section-label">OUR MISSION</div>
      <h2>Free hosting shouldn't mean bad hosting.</h2>
      <p>EnderBit was built because good free hosting didn't exist. We were tired of platforms that forced you to watch ads, throttled your performance, or shut down your server without warning.</p>
      <p>We believe every gamer deserves a high-quality server to play with their friends. That's why EnderBit is community-supported and built on enterprise-grade infrastructure.</p>
      <p>No upsells. No forced upgrades. Just powerful game servers, completely free.</p>
      <a href="/about" class="text-link">Learn Our Story &rarr;</a>
    </div>
    <div class="mission-image" data-animate style="transition-delay: 100ms;">
      <img src="https://images.pexels.com/photos/1181467/pexels-photo-1181467.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Data Center" loading="lazy">
    </div>
  </div>
</section>

<section class="features-section container">
  <h2 class="text-center" data-animate>Everything You Need. Nothing You Don't.</h2>
  <div class="features-grid">
    <div class="feature-card" data-animate style="transition-delay: 0ms;">
      <div class="feature-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
      </div>
      <h3>DDoS Protection</h3>
      <p>Enterprise-grade attack mitigation on every server, at no cost. Keep your community online and safe from disruptions.</p>
    </div>
    <div class="feature-card" data-animate style="transition-delay: 100ms;">
      <div class="feature-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
      </div>
      <h3>Zero Cost, Always</h3>
      <p>No hidden fees, no expiring trials, no credit card ever required. We mean it when we say 100% free.</p>
    </div>
    <div class="feature-card" data-animate style="transition-delay: 200ms;">
      <div class="feature-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
      </div>
      <h3>High Performance</h3>
      <p>Low-latency infrastructure across multiple global regions. Powered by modern hardware for smooth gameplay.</p>
    </div>
    <div class="feature-card" data-animate style="transition-delay: 300ms;">
      <div class="feature-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
      </div>
      <h3>24/7 Human Support</h3>
      <p>Real people ready to help via Discord and email around the clock. We're here when you need us.</p>
    </div>
  </div>
</section>

<section class="games-teaser">
  <div class="container">
    <h2 data-animate>10+ Games & Services Supported</h2>
  </div>
  <div class="games-scroll-container">
    <div class="games-scroll-track">
      <!-- Original set -->
      <div class="game-card">
        <img src="https://www.minecraft.net/content/dam/games/minecraft/key-art/Games_Subnav_Minecraft-300x465.jpg" alt="Minecraft" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">Minecraft</div>
      </div>
      <div class="game-card">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/730/capsule_616x353.jpg" alt="CS2" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">CS2</div>
      </div>
      <div class="game-card">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/252490/capsule_616x353.jpg" alt="Rust" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">Rust</div>
      </div>
      <div class="game-card">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/346110/capsule_616x353.jpg" alt="ARK" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">ARK: Survival Evolved</div>
      </div>
      <div class="game-card">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/4000/capsule_616x353.jpg" alt="Garry's Mod" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">Garry's Mod</div>
      </div>
      <!-- Duplicate set for seamless loop -->
      <div class="game-card" aria-hidden="true">
        <img src="https://www.minecraft.net/content/dam/games/minecraft/key-art/Games_Subnav_Minecraft-300x465.jpg" alt="" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">Minecraft</div>
      </div>
      <div class="game-card" aria-hidden="true">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/730/capsule_616x353.jpg" alt="" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">CS2</div>
      </div>
      <div class="game-card" aria-hidden="true">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/252490/capsule_616x353.jpg" alt="" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">Rust</div>
      </div>
      <div class="game-card" aria-hidden="true">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/346110/capsule_616x353.jpg" alt="" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">ARK: Survival Evolved</div>
      </div>
      <div class="game-card" aria-hidden="true">
        <img src="https://cdn.cloudflare.steamstatic.com/steam/apps/4000/capsule_616x353.jpg" alt="" loading="lazy">
        <div class="game-overlay"></div>
        <div class="game-name">Garry's Mod</div>
      </div>
    </div>
  </div>
  <div class="container text-center" style="margin-top: 40px;" data-animate>
    <a href="/games" class="btn-secondary">See All Supported Games &rarr;</a>
  </div>
</section>

<section class="final-cta" data-animate>
  <div class="container">
    <h2>Ready to launch your server?</h2>
    <p>It takes less than 2 minutes. No payment needed. Ever.</p>
    <a href="https://dash.enderbit.com" target="_blank" rel="noopener noreferrer" class="btn-primary btn-large">Create Your Free Server</a>
  </div>
</section>

<script src="/js/index.js"></script>
<?php include 'includes/footer.php'; ?>