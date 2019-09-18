<?php /*contact page template*/ ?>

<?php get_header(); ?>

<div id="main-page">
        <div class="custom-homepage-container"> 
            <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/contact-page-image.png">
        </div>
        <div class="container">
            <h1 class="contact-page-title">Contact</h1>
            <div class="row">
                <div id="contact-page-contact-info" class="col-sm">
                    <div id="inner-contact-box" class="div">
                        <p><strong>Los Angeles Office</strong>
                        <br> 8052 Melrose Avenue,
                        <br>2nd Floor
                        <br> Los Angeles, CA 90046
                        <br>
                        <br>(424) 262-1516 (direct)
                        <br>(831) 920-6651 (fax)
                        <br>
                        <a href="mailto:sasha@brodsky.law">sasha@brodsky.law</a></span>
                        <br>
                        <hr>
                       <strong>Santa Cruz</strong>
                       <br>1362 Pacific Avenue,
                       <br>Suite 219
                       <br>Santa Cruz, CA 95060</p>
                    </div>
                </div>
                <div id="contact-page-contact-form" class="col-sm" >
                    <div class="div"><h2 id="contact-form-wrapper">Send an email:</h2></div>
                <?php echo do_shortcode( '[contact-form-7 id="89" title="Contact Page Form"]' ); ?>
                </div>
            </div>
            </div>
    </div><!-- #primary -->

<?php get_footer(); ?>