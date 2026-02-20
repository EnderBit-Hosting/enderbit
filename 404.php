<?php
$title = "404 Not Found";
$css   = "error";
include 'includes/head.php';
include 'includes/nav.php';
?>

<div class="error-page">
  <div class="error-card" data-animate>
    <div class="error-icon">
      <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        <line x1="11" y1="8" x2="11" y2="11"></line>
        <line x1="11" y1="14" x2="11.01" y2="14"></line>
      </svg>
    </div>
    <div class="error-code">404</div>
    <div class="error-divider"></div>
    <h1 class="error-title">Page Not Found</h1>
    <p class="error-message">
      Looks like this server went offline. The page you're looking for doesn't exist, was moved, or never existed in the first place.
    </p>
    <div class="error-actions">
      <a href="/" class="btn-primary btn-large">Back to Home</a>
      <a href="/faq.php" class="btn-secondary btn-large">Visit FAQ</a>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
