<?php /*additional practice areas page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/AdditionalAreasHeaderImage.jpg">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Additional Areas Of Legal Practice</h1>
                    <div class="page-text">	
                        <p>Sasha Brodsky practices in a broad range of additional fields, many of them overlapping with others.</p>
                        
                        <p>Included among these areas are the following:</p>
                        
                        <ul>
                            <li>Labor and Employment</li>
                            
                            <li>Injunctions and Temporary Restraining Orders</li>
                            
                            <li>Mediation</li>
                            
                            <li>Personal Injury</li>
                            
                            <li>Landlord/Tenant</li>
                            
                            <li>Fraud/Misrepresentation</li>
                            
                            <li>Elder Abuse</li>
                            
                            <li>Probate Matters</li>
                            
                            <li>Family Disputes</li>
                            
                            <li>Invasion of Privacy/Slander/Defamation</li>
                        </ul> 	
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
