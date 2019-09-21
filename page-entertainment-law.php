<?php /*entertainment law page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/EntertainmentLawHeaderImage.jpg">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Entertainment Law</h1>
                    <div class="page-text">	
                        <p><strong>Entertainment Law</strong> is a broad field.  Nearly any matter, if it involves entertainment, can be considered Entertainment Law.</p>
                        <p>Most of the time an Entertainment Law matter falls into one of the following areas:</p>
                        <ul>
                            <li>Music</li>
                            <li>Film</li>
                            <li>Animation</li>
                            <li>Multimedia</li>
                            <li>Internet</li>
                            <li>Theatre</li>
                            <li>Visual Arts</li>
                        </ul>
                        <p>Each of these areas further breaks down into many sub areas comprising a long list.  Instances of such areas include but are hardly limted to screenplays, music agreements, production agreements, distribution and licensing agreements, enforcing digital property rights, band agreements, music publishing, and a range of additional legal issues.</p>
                        <p>Whether it involves drafting agreements, negotiating entertainment-related deals, entertainment litigation, or a broad range of other Entertainment Law matters, Sasha Brodsky can advise and assist you.</p>
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
