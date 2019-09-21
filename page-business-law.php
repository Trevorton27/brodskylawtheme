<?php /*business law page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/BusinessLawHeaderImage.png">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Business Law</h1>
                    <p class="page-text">Business Law is a broad field of law with many sub areas.</p>
                    <ul class="page-text">
                        <li>Forming and Advising Businesses <br>
                            (Individuals, Partnerships, LLCs, and Corporations)</li>

                        <li>Contracts: Drafting, Advising On, Negotiating</li>

                        <li>Litigation</li>

                        <li>Resolution of Business Disputes</li>

                        <li>Collection Matters</li>
                    </ul>
                    <p>There are many other areas of Business Law in which Mr. Brodsky practices.</p>
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