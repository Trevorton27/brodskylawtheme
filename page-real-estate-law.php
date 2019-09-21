<?php /*real estate law page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/RealEstateLawHeaderImage.png">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Real Estate Law</h1>
                    <div class="page-text">
                        <p><strong>Real Estate Law</strong> is comprised of many sub-fields. </p>
                        
                        <p>Included among the areas in which Sasha Brodsky advises and represents his clients, are: </p>
                        <ul>
                            <li>Drafting, Reviewing, and Negotiating Real Estate Contracts</li>
                            
                            <li>Boundary and Easement Disputes</li>
                            
                            <li>Foreclosures</li>
                            
                            <li>Real Estate Litigation</li>
                            
                            <li>Construction Defect Law</li>
                            
                            <li>Landlord/Tenant</li>
                        
                        </ul>
                        <p>Mr. Brodsky's practice includes many other areas of Real Estate law.</p> 	
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