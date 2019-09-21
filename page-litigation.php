<?php /*litigation page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/LitigationHeaderImage.jpg">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Litigation</h1>
                    <div class="page-text">
                        <p>Mr. Brodsky has litigated cases throughout his practice of 15 years, in a range of matters, including but not 
                        limited to:</p>
                        <ul>
                            <li>Business</li>
                            
                            <li>Real Estate</li>
                            
                            <li>Contract Disputes</li>
                            
                            <li>Corporations, Partnerships, LLCs, and Joint Ventures</li>
                            
                            <li>Construction Law</li>
                            
                            <li>Landlord/Tenant</li>
                            
                            <li>Temporary and Permanent Injunctions</li>
                        </ul>
                        <p>There are many other areas of law in which Mr. Brodsky litigates</p>
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
