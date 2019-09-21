<?php /*contract page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/ContractLawHeaderImage.png">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Contract Law</h1>
                    <div class="page-text">
                        <p><strong>Contract</strong> law is a vast field.</p>
                        
                        <p>Mr. Brodsky advises on, drafts, and litigates matters related to contracts and licenses across a spectrum of subject areas including but not limited to:</p>
                        
                        <ul>
                            <li>Business</li>
                            
                            <li>Real Estate</li>
                            
                            <li>Intellectual Property (Copyright , Trademark , Patents , Trade Secrets)</li>
                            
                            <li>Corporations</li>
                            
                            <li>Small to Medium to Large Businesses</li>
                            
                            <li>Entertainment</li>
                            
                            <li>Licensing and Distribution</li>
                        
                        </ul>
                        
                        <p>And a range of other matters where contracts are relevant.</p>
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
