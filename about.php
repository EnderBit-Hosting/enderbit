<?php
$title = "About Us";
$css = "about";
include 'includes/head.php';
include 'includes/nav.php';
?>

<section class="page-hero">
  <div class="hero-bg">
    <img src="https://images.pexels.com/photos/3861958/pexels-photo-3861958.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Team working">
    <div class="hero-overlay"></div>
  </div>
  <div class="container hero-content text-center" data-animate>
    <h1>Built by Gamers. For Gamers.</h1>
    <p class="subheadline">EnderBit started with a simple belief: great hosting should be accessible to everyone.</p>
  </div>
</section>

<section class="story-section container">
  <div class="story-grid">
    <div class="story-text" data-animate>
      <h2>Our Story</h2>
      <p>EnderBit was born out of frustration. Free game hosting options were plagued by crashes, forced advertisements, terrible performance, and sudden shutdowns. Paid hosting was out of reach for many players — especially younger ones who just wanted to play with their friends.</p>
      <p>We set out to build something different. A hosting platform that treated users with respect, delivered real performance, and never asked for a cent. EnderBit is that platform.</p>
      <p>We don't upsell. We don't show ads. We don't throttle your server after a trial period. What you get on day one is what you'll always have — because we believe access to technology shouldn't depend on your wallet.</p>
      <p>Today, EnderBit serves players around the world across multiple game types and regions. We're just getting started.</p>
    </div>
    <div class="story-timeline" data-animate style="transition-delay: 100ms;">
      <svg viewBox="0 0 300 400" class="timeline-svg">
        <line x1="50" y1="20" x2="50" y2="380" stroke="#1e2a3a" stroke-width="2"/>
        <line x1="50" y1="20" x2="50" y2="380" stroke="#2563eb" stroke-width="2" class="timeline-progress"/>
        
        <g transform="translate(50, 50)">
          <circle cx="0" cy="0" r="8" fill="#2563eb"/>
          <text x="20" y="5" fill="#f0f4ff" font-family="Inter" font-size="14" font-weight="600">Founding of EnderBit</text>
        </g>
        <g transform="translate(50, 120)">
          <circle cx="0" cy="0" r="8" fill="#2563eb"/>
          <text x="20" y="5" fill="#f0f4ff" font-family="Inter" font-size="14" font-weight="600">Launch of first game servers</text>
        </g>
        <g transform="translate(50, 190)">
          <circle cx="0" cy="0" r="8" fill="#2563eb"/>
          <text x="20" y="5" fill="#f0f4ff" font-family="Inter" font-size="14" font-weight="600">Added DDoS protection</text>
        </g>
        <g transform="translate(50, 260)">
          <circle cx="0" cy="0" r="8" fill="#2563eb"/>
          <text x="20" y="5" fill="#f0f4ff" font-family="Inter" font-size="14" font-weight="600">Expanded to 4 global regions</text>
        </g>
        <g transform="translate(50, 330)">
          <circle cx="0" cy="0" r="8" fill="#111827" stroke="#2563eb" stroke-width="2"/>
          <text x="20" y="5" fill="#8b9ab0" font-family="Inter" font-size="14" font-weight="600">More regions worldwide</text>
          <text x="20" y="25" fill="#4b5a6e" font-family="Inter" font-size="12">Coming Soon</text>
        </g>
      </svg>
    </div>
  </div>
</section>

<section class="values-section container">
  <h2 class="text-center" data-animate>Our Values</h2>
  <div class="values-grid">
    <div class="value-card" data-animate style="transition-delay: 0ms;">
      <div class="value-icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
      </div>
      <h3>Accessibility</h3>
      <p>Technology should be available to everyone, regardless of financial situation. We break down the barriers to entry for game hosting.</p>
    </div>
    <div class="value-card" data-animate style="transition-delay: 100ms;">
      <div class="value-icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
      </div>
      <h3>Transparency</h3>
      <p>No hidden costs, no fine print. What you see is exactly what you get. We are upfront about our capabilities and our mission.</p>
    </div>
    <div class="value-card" data-animate style="transition-delay: 200ms;">
      <div class="value-icon">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
      </div>
      <h3>Reliability</h3>
      <p>Free doesn't mean flimsy. We hold ourselves to professional standards of uptime and performance, ensuring your community stays online.</p>
    </div>
  </div>
</section>

<section class="community-section container" data-animate>
  <div class="community-card text-center">
    <h2>Join our community</h2>
    <p>Connect with thousands of other server owners, get help from our team, and stay updated on the latest EnderBit news.</p>
    <div class="community-buttons">
      <a href="https://discord.gg/JzSEyza8Vd" target="_blank" rel="noopener noreferrer" class="btn-primary btn-large">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" style="margin-right: 8px; vertical-align: middle;"><path d="M20.317 4.3698a19.7913 19.7913 0 00-4.8851-1.5152.0741.0741 0 00-.0785.0371c-.211.3753-.4447.8648-.6083 1.2495-1.8447-.2762-3.68-.2762-5.4868 0-.1636-.3933-.4058-.8742-.6177-1.2495a.077.077 0 00-.0785-.037 19.7363 19.7363 0 00-4.8852 1.515.0699.0699 0 00-.0321.0277C.5334 9.0458-.319 13.5799.0992 18.0578a.0824.0824 0 00.0312.0561c2.0528 1.5076 4.0413 2.4228 5.9929 3.0294a.0777.0777 0 00.0842-.0276c.4616-.6304.8731-1.2952 1.226-1.9942a.076.076 0 00-.0416-.1057c-.6528-.2476-1.2743-.5495-1.8722-.8923a.077.077 0 01-.0076-.1277c.1258-.0943.2517-.1923.3718-.2914a.0743.0743 0 01.0776-.0105c3.9278 1.7933 8.18 1.7933 12.0614 0a.0739.0739 0 01.0785.0095c.1202.099.246.1981.3728.2924a.077.077 0 01-.0066.1276 12.2986 12.2986 0 01-1.873.8914.0766.0766 0 00-.0407.1067c.3604.698.7719 1.3628 1.225 1.9932a.076.076 0 00.0842.0286c1.961-.6067 3.9495-1.5219 6.0023-3.0294a.077.077 0 00.0313-.0552c.5004-5.177-.8382-9.6739-3.5485-13.6604a.061.061 0 00-.0312-.0286zM8.02 15.3312c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9555-2.4189 2.157-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.9555 2.4189-2.1569 2.4189zm7.9748 0c-1.1825 0-2.1569-1.0857-2.1569-2.419 0-1.3332.9554-2.4189 2.1569-2.4189 1.2108 0 2.1757 1.0952 2.1568 2.419 0 1.3332-.946 2.4189-2.1568 2.4189Z"/></svg>
        Join Discord
      </a>
      <a href="mailto:support@enderbit.com" class="btn-secondary btn-large">Email Support</a>
    </div>
  </div>
</section>

<section class="final-cta" data-animate>
  <div class="container">
    <h2>Ready to experience free hosting done right?</h2>
    <p>It takes less than 2 minutes. No payment needed. Ever.</p>
    <a href="https://dash.enderbit.com" target="_blank" rel="noopener noreferrer" class="btn-primary btn-large">Create Your Free Server</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>