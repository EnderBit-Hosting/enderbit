<?php
$title = "503 Service Unavailable";
$css   = "error";
include 'includes/head.php';
include 'includes/nav.php';
?>

<div class="error-page">
  <div class="error-card" data-animate>
    <div class="error-icon">
      <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <line x1="12" y1="2" x2="12" y2="6"></line>
        <line x1="12" y1="18" x2="12" y2="22"></line>
        <line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line>
        <line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line>
        <line x1="2" y1="12" x2="6" y2="12"></line>
        <line x1="18" y1="12" x2="22" y2="12"></line>
        <line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line>
        <line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line>
      </svg>
    </div>
    <div class="error-code">503</div>
    <div class="error-divider"></div>
    <h1 class="error-title">Service Unavailable</h1>
    <p class="error-message">
      EnderBit is temporarily down for maintenance or is experiencing heavy load. We'll be back online shortly — check our Discord for updates.
    </p>
    <div class="error-actions">
      <a href="/" class="btn-primary btn-large">Try Again</a>
      <a href="https://discord.gg/JzSEyza8Vd" target="_blank" rel="noopener noreferrer" class="btn-secondary btn-large">Status on Discord</a>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
