<?php get_header(); ?>

<?php if (is_home()) : ?>
    <div class="hero">
        <div class="column">
            <img src="<?php echo (get_template_directory_uri(). '/assets/images/hd.png') ?>" alt="advertise">
        </div>


        <div class="column">
            <div class="right-box">
                <div class="icons">
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-twitter"></a>
                </div>

                <div id="name-text">
                    <h2>MRP CALCULATOR</h2>
                </div>

                <div id="sec-text">
                    <p>It will help you to find selling price of your product quickly.</p>
                    <p>No need to remember tax percentage.</p>
                </div>

                <button type="button" id="more-btn" onclick="loadToolPage()">Try Now</button>
            </div>
        </div>
    </div>


    <div class="benefit">
        <ul>
            <h2><u>Benefits</u></h2>
            <li>Easy to find Selling Price of Your Product</li>
            <li>No need to remember gst on product</li>
            <li>Add whatever margin you want</li>
            <li>Sell your product with perfect selling price</li>
        </ul>
    </div>
    <div class="middle">
        <div class="column">
            <img src="<?php echo (get_template_directory_uri(). '/assets/images/MRP-Calculator.png') ?>" alt="Tool Image">

        </div>

        <div class="column">
            <div class="work">
                <ul>
                    <h1>How it works?</h1>
                    <li>Select your product</li>
                    <li>Enter the cost of your product</li>
                    <li>Enter the margin you want (in percentage)</li>
                    <li>Click on Calculate to find MRP</li>
                </ul>
            </div>

        </div>

    </div>
<?php endif; ?>



<?php get_footer(); ?>