<?php /*copyright law page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/CopyrightLawHeaderImage.jpg">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Copyright Law</h1>
                    <div class="page-text">
                        <p>Copyright protects artistic and commercial expression in a number of areas, including but not 
                        limited to:  
                        </p>

                        <ul>
                            <li>Literary works such as Books, Articles, and Poems</li>
                            <li>Music and Recordings</li>
                            <li>Screenplays</li>
                            <li>Cartoons and Animation</li>
                            <li>Film and Video</li>
                            <li>Multimedia and Digital Works</li>
                            <li>Paintings</li>
                            <li>Sculpture</li>
                            <li>Various other forms of expression.</li>
                        </ul>

                        <p>Sasha Brodsky advises and assists clients in protecting their Copyrighted Works for a range of situations, including but not limited to:</p>
                        <ul>
                            <li>Copyright Registration</li>

                            <li>Contracts and Licenses related to Copyrighted material</li>

                            <li>Enforcing Copyright rights</li>

                            <li>Transfer of Copyright</li>

                            <li>Creating and protecting new works based on pre-existing Copyrighted material</li>

                            <li>Fair Use</li>

                            <li>Copyright Clearance</li>
                        </ul>

                        <p>There are many other Copyright-related matters on which Mr. Brodsky advises.</p> 
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
