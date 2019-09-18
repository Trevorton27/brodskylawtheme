<?php /*about page template*/ ?>

<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/aboutPageImage.png">
    </div>
    <div id="about-page-container" class="container">
        <div class="row">
            <div class="col-9">
                <div class="main-page-text">
                    <h1 class="about-page-title">About Sasha Brodsky</h1>
                    <p style="text-align: justify;"><span style="font-size: 12pt;">Sasha Brodsky has been practicing law since December 1998.</span><br><br><span style="font-size: 12pt;"> He consults with clients primarily in the areas of Business, Real Estate, Contracts, and Litigation. </span><br><br><span style="font-size: 12pt;"> He also practices in a range of other areas, including but not limited to Entertainment, Copyright, and Trademark.</span><br><br><span style="font-size: 12pt;"> For a more complete description of Sasha Brodsky's other areas of practice, click <a href="/index.php/sasha-brodsky-areas-of-practice-lawyer-santa-cruz-los-angeles/additional-legal-practices-sasha-brodsky-attorney">here</a>.</span><br><br><span style="font-size: 12pt;"> Sasha communicates with his clients regularly, appreciates their feedback, and endeavors to achieve cost-effective goals with and for his clients.</span><br><br><span style="font-size: 12pt;"> He feels most accomplished when his clients are happy with the results he produces.</span></p>
                </div>
            </div>
            <div id="contact-widget" class="col-3 align-self-center">
                <?php if ( is_active_sidebar( 'contact-sasha' ) ) : ?>
                    <?php dynamic_sidebar( 'contact-sasha' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>