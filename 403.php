<?php
$title = "403 Forbidden";
$css   = "error";
include 'includes/head.php';
include 'includes/nav.php';
?>

<div class="error-page">
  <div class="error-card" data-animate>
    <div class="error-icon">
      <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
        <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
      </svg>
    </div>
    <div class="error-code">403</div>
    <div class="error-divider"></div>
    <h1 class="error-title">Access Denied</h1>
    <p class="error-message">
      You don't have permission to access this area. If you believe this is a mistake, reach out to our support team.
    </p>
    <div class="error-actions">
      <a href="/" class="btn-primary btn-large">Back to Home</a>
      <a href="https://discord.gg/JzSEyza8Vd" target="_blank" rel="noopener noreferrer" class="btn-secondary btn-large">Contact Support</a>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
