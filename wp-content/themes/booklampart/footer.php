<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package    WordPress
 * @subpackage Twenty_Fifteen
 * @since      Twenty Fifteen 1.0
 */
?>

<?php
if (is_home()) {

} else {
    ?>
    </div>

    <?php
}
?>

<?php wp_footer(); ?>
<!-- Specials Products Ends -->
<!-- Footer Section Starts -->
<footer id="footer-area">
    <!-- Footer Links Starts -->
    <div class="footer-links">
        <!-- Container Starts -->
        <div class="container">
            <!-- Information Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Information</h5>
                <ul>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <!-- Information Links Ends -->
            <!-- My Account Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>My Account</h5>
                <ul>
                    <li><a href="#">My orders</a></li>
                    <li><a href="#">My merchandise returns</a></li>
                    <li><a href="#">My credit slips</a></li>
                    <li><a href="#">My addresses</a></li>
                    <li><a href="#">My personal info</a></li>
                </ul>
            </div>
            <!-- My Account Links Ends -->
            <!-- Customer Service Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Service</h5>
                <ul>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Specials</a></li>
                </ul>
            </div>
            <!-- Customer Service Links Ends -->
            <!-- Follow Us Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Follow Us</h5>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">RSS</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>
            <!-- Follow Us Links Ends -->
            <!-- Contact Us Starts -->
            <div class="col-md-4 col-sm-12 last">
                <h5>Contact Us</h5>
                <ul>
                    <li>My Company</li>
                    <li>
                        1247 LB Nagar Road, Hyderabad, Telangana - 35
                    </li>
                    <li>
                        Email: <a href="#">info@demolink.com</a>
                    </li>
                </ul>
                <h4 class="lead">
                    Tel: <span>1(234) 567-9842</span>
                </h4>
            </div>
            <!-- Contact Us Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Footer Links Ends -->
    <!-- Copyright Area Starts -->
    <div class="copyright">
        <!-- Container Starts -->
        <div class="container">
            <!-- Starts -->
            <p class="pull-left">
                &nbsp; 2014 Spice Shoppe Stores. Bootstrap Layout All Rights Reserved. Designed By
                <a href="http://sainathchillapuram.com">Sainath Chillapuram</a>
            </p>
            <!-- Ends -->
            <!-- Payment Gateway Links Starts -->
            <ul class="pull-right list-inline">
                <li>
                    <img src="<?=get_template_new_directory()?>images/payment-icon/cirrus.png" alt="PaymentGateway"/>
                </li>
                <li>
                    <img src="<?=get_template_new_directory()?>images/payment-icon/paypal.png" alt="PaymentGateway"/>
                </li>
                <li>
                    <img src="<?=get_template_new_directory()?>images/payment-icon/visa.png" alt="PaymentGateway"/>
                </li>
                <li>
                    <img src="<?=get_template_new_directory()?>images/payment-icon/mastercard.png" alt="PaymentGateway"/>
                </li>
                <li>
                    <img src="<?=get_template_new_directory()?>images/payment-icon/americanexpress.png" alt="PaymentGateway"/>
                </li>
            </ul>
            <!-- Payment Gateway Links Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Copyright Area Ends -->
</footer>
<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="<?=get_template_new_directory()?>js/jquery-1.11.1.min.js"></script>
<script src="<?=get_template_new_directory()?>js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?=get_template_new_directory()?>js/bootstrap.min.js"></script>
<script src="<?=get_template_new_directory()?>js/bootstrap-hover-dropdown.min.js"></script>
<script src="<?=get_template_new_directory()?>js/jquery.magnific-popup.min.js"></script>
<script src="<?=get_template_new_directory()?>js/custom.js"></script>
<script>
function equalHeight(){
    var $colClass = $('.product-col'), //class name of columns
        heights = $colClass.map( function(){ //get height of all columns, pass it to an array (heights)
            return $(this).height();
        }).get();

    $colClass.height( Math.max.apply(null, heights) );
}

equalHeight();
</script>
</body>
</html>