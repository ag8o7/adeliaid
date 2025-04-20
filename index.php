<?php
require_once 'includes/config.php';
require_once 'includes/auth.php';

$page_title = 'Home';
include 'includes/header.php';
?>

<div class="container">
    <section class="hero">
        <h2>Welcome to AdeliaID</h2>
        <p>Your secure identity management system</p>
        
        <?php if (isLoggedIn()): ?>
            <div class="auth-actions">
                <p>Welcome back, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
                <a href="processes/logout.php" class="btn">Logout</a>
            </div>
        <?php else: ?>
            <div class="auth-actions">
                <a href="pages/login.php" class="btn">Login</a>
                <a href="pages/register.php" class="btn btn-secondary">Register</a>
            </div>
        <?php endif; ?>
    </section>
    
    <section class="features">
        <div class="feature-card">
            <i class="fas fa-shield-alt"></i>
            <h3>Secure</h3>
            <p>Advanced security measures to protect your identity</p>
        </div>
        
        <div class="feature-card">
            <i class="fas fa-user-check"></i>
            <h3>Verified</h3>
            <p>All users are verified through our approval process</p>
        </div>
        
        <div class="feature-card">
            <i class="fas fa-mobile-alt"></i>
            <h3>WhatsApp Integration</h3>
            <p>Get notifications and reset password via WhatsApp</p>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>