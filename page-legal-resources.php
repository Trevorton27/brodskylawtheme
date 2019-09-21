<?php /*legal resources page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/LegalResourcesHeaderImage.png">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Legal Resources</h1>
                <div class="page-text">		
                    <p>A judge once said "representing yourself without an attorney is like doing your own dental work: it isn't advisable."</p>
                    
                    <p>Aside from representing oneself in Small Claims (Small Claimants represent themselves and the most that a Small Claims judge can award a party in California is $7,500 to $10,000), this is very true.</p>
                    
                    <p>However, the more familiar with the relevant law that a person whose legal rights are in question is, generally the better.   Anything that an individual can do to increase his or her understanding of a situation also tends to yield less frustration and stress.</p>
                    
                    <p>Many legal resources can be helpful for understanding but most legally significant actions (or decision not to act) should be with the advice of experienced counsel, and should never be used as a substitute, including the use of a "paralegal" type service--many of which can be helpful provided they are used in conjunction with an attorney.</p>
                    
                    <p>A few sources can be useful for familiarizing oneself with a given area of law:</p>
                    
                    <p>Books at Nolo Press: <a href="http://www.nolobooks.com">http://www.nolobooks.com</a></p>
                    
                    <p>Findlaw: <a href="http://www.findlaw.com">http://www.findlaw.com</a></p>
                    
                    <p>California Courts (Self-Help and Forms): <a href="http://www.courtinfo.ca.gov/">http://www.courtinfo.ca.gov/</a></p>
                    
                    <p>Licensing/Copyright: <a href="http://www.library.yale.edu/~llicense/liclinks.shtml">http://www.library.yale.edu/~llicense/liclinks.shtml</a></p> 
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
</div>

<?php get_footer(); ?>
