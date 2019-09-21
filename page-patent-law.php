<?php /*patent law page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/PatentLawHeaderImage.jpg">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Patent Law</h1>
                    <div class="page-text">
                        <p>Patent Law is a highly specialized area of law.  Only individuals with a science background who have passed the Patent Bar can practice law before the Patent Bar.</p>
                        
                        <p>However many attorneys who do not practice law before the Patent Bar, nevertheless engage in a host of services related to Patents.  This includes drafting agreements related to the sale or exploitation of a patent, as well as litigating patent infringement matters.</p>
                        
                        <p>Sasha Brodsky does not practice law before the Patent Bar, however many of his services include advice related to Patents and other intellectual property, as well as referrals to Patent Attorneys and Patent Agents.</p> 	
                    </div>
                </div> 
            </div>
            <div id="contact-widget" class="col-sm-3 align-self-center">
                <?php if ( is_active_sidebar( 'contact-sasha' ) ) : ?>
                    <?php dynamic_sidebar( 'contact-sasha' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
