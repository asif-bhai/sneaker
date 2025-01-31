<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: index.html");
    exit;
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support - Sneaker Sanctuary</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="header-container">
            <img src="logo.jpg" alt="Logo" class="logo">
            <nav>
                <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="support.php">Support</a></li>
                    <li><a href="track-order.php">Track Your Order</a></li>
                    <li>Welcome, <?php echo htmlspecialchars($user['username']); ?>!</li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Support Section -->
    <div class="section support">
        <h2>Customer Support</h2>

        <!-- Contact Info -->
        <div class="support-details">
            <h3>Contact Us</h3>
            <p>If you have any questions or need assistance, feel free to reach out to us:</p>
            <ul>
                <li><strong>Email:</strong> <a href="mailto:support@sneakersanctuary.com">support@sneakersanctuary.com</a></li>
                <li><strong>Phone:</strong> +1 800 123 4567</li>
                <li><strong>Address:</strong> 123 Sneaker Lane, City, Country</li>
            </ul>
        </div>

        <!-- FAQs -->
        <div class="faq">
            <h3>Frequently Asked Questions</h3>
            <ul>
                <li><strong>Q:</strong> How do I track my order?</li>
                <li><strong>A:</strong> You can track your order by visiting the 'Track Your Order' page and entering your order ID.</li>
                <li><strong>Q:</strong> How can I return a product?</li>
                <li><strong>A:</strong> Returns can be initiated by contacting our support team or visiting the 'Returns' section in the footer.</li>
            </ul>
        </div>

        <!-- Support Form -->
        <div class="support-form">
            <h3>Submit a Request</h3>
            <form action="submit-support-request.php" method="POST">
                <input type="text" name="name" placeholder="Enter Your Name" required>
                <input type="email" name="email" placeholder="Enter Your Email" required>
                <textarea name="message" placeholder="Describe your issue..." rows="5" required></textarea>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#">Delivery Info</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Size Guide</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Connect</h3>
                <ul class="social-links">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twitter</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Payment</h3>
                <img src="placeholder-payment.png" alt="Payment Methods" class="payment-icons">
            </div>
        </div>
    </footer>

</body>
</html>

