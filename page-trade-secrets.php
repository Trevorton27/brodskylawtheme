<?php /*trademark law page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/TradeSecretsHeaderImage.jpg">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Trade Secrets</h1>
                    <div class="page-text">
                        <p>A <strong>Trade Secret</strong> is a process, idea, or invention that is not protected by the same bodies of law that govern Trademark, Copyright, or Patents.</p>

                        <p>While Trademarks, Copyrights, and Patents are all public, a Trade Secret is private. </p>

                        <p>Protection of Trade Secrets is effectuated by the use of private, written agreements.</p>

                        <p>Sasha Brodsky's legal services include rendering advice, drafting agreements, and litigating matters pertaining to 
                        Trade Secrets.</p> 	
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
