<footer>
    <div class="container">
        <div class="footer-content">
            <div class="footer-column">
                <h3 style="margin-bottom: 1rem;"><?php bloginfo('name'); ?></h3>
                <p><?php bloginfo('description'); ?></p>
            </div>
            
            <div class="footer-column">
                <h4 style="margin-bottom: 1rem;">Services</h4>
                <ul style="list-style: none;">
                    <li><a href="#wordpress-design" style="color: #9ca3af; text-decoration: none;">WordPress Development</a></li>
                    <li><a href="#woocommerce" style="color: #9ca3af; text-decoration: none;">WooCommerce Stores</a></li>
                    <li><a href="#maintenance" style="color: #9ca3af; text-decoration: none;">Site Maintenance</a></li>
                    <li><a href="#optimization" style="color: #9ca3af; text-decoration: none;">Speed Optimization</a></li>
                </ul>
            </div>
            
            <div class="footer-column">
                <h4 style="margin-bottom: 1rem;">Contact</h4>
                <p style="color: #9ca3af;">
                    Email: richardwboas@gmail.com<br>
                    Phone: +44 07412 922 288<br>
                    London, UK<br>
                    Serving clients globally
                </p>
            </div>
            
            <div class="footer-column">
                <h4 style="margin-bottom: 1rem;">Follow Us</h4>
                <div class="social-links">
                    <a href="#" style="color: #9ca3af; text-decoration: none; margin-right: 1rem;">LinkedIn</a>
                    <a href="#" style="color: #9ca3af; text-decoration: none; margin-right: 1rem;">Twitter</a>
                    <a href="#" style="color: #9ca3af; text-decoration: none;">GitHub</a>
                </div>
            </div>
        </div>
        
        <div style="text-align: center; margin-top: 2rem; padding-top: 2rem; border-top: 1px solid #374151;">
            <p style="color: #9ca3af;">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>