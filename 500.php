<?php
$title = "500 Server Error";
$css   = "error";
include 'includes/head.php';
include 'includes/nav.php';
?>

<div class="error-page">
  <div class="error-card" data-animate>
    <div class="error-icon">
      <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
        <line x1="12" y1="9" x2="12" y2="13"></line>
        <line x1="12" y1="17" x2="12.01" y2="17"></line>
      </svg>
    </div>
    <div class="error-code">500</div>
    <div class="error-divider"></div>
    <h1 class="error-title">Internal Server Error</h1>
    <p class="error-message">
      Something went wrong on our end. Our team has been notified and is working to fix it. Try again in a moment.
    </p>
    <div class="error-actions">
      <a href="/" class="btn-primary btn-large">Back to Home</a>
      <a href="https://discord.gg/JzSEyza8Vd" target="_blank" rel="noopener noreferrer" class="btn-secondary btn-large">Report on Discord</a>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
