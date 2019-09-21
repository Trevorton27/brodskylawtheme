<?php /*intellectual property page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/IntellectualPropertyHeaderImage.jpg">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Intellectual Property</h1>
                    <div class="page-text">		
                        <p><strong>Intellectual Property</strong> roughly divides into four areas:</p>
                        <ul>
                            <li><a href="/Areas-of-Practice/trademark-law.html" alt="Trademark Law">Trademark</a></li>

                            <li><a href="/Areas-of-Practice/copyright-law.html" alt="Copyright">Copyright</a></li>

                            <li><a href="/Areas-of-Practice/patent-law.html" alt="Patent Law">Patent Law</a></li>

                            <li><a href="/Areas-of-Practice/trade-secrets.html" alt="Trade Secrets">Trade Secrets.</a></li>
                        </ul>
                            <p>Sasha Brodsky's practice extends to both transactions and litigation in all four areas. However he is not a patent attorney.</p>

                            <p>If your needs include patent registration, Sasha Brodsky can direct you to an appropriate source for your particular requirements, taking whatever comprehensive approach legally necessary to protect your intellectual property.</p> 	
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
