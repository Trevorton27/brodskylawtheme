<?php /*trademark law page template*/ ?>
<?php get_header(); ?>
<div class="div" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/IntellectualPropertyHeaderImage.jpg">
    </div>
    <div id="page-container" class="container">
        <div class="row">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Trademark Law</h1>
                    <div class="page-text">
                        <p><strong>Trademarks</strong> protect the name of a business or individual's service and/or product.</p>

                        <p>Sasha Brodsky's services regarding trademarks include but are not limited to:</p>

                        <ul>
                            <li>
                            Advising on the strength and weaknesses of a proposed trademark.</li>

                            <li>Registering a trademark.</li>

                            <li>Arguing before the USPTO on behalf of a client whose trademark has been denied or is 
                            being challenged.</li>

                            <li>Enforcing a client's trademark rights by bringing a halt to any trademark infringement.</li>

                            <li>Proposing legally sound and cost-effective strategies to enhance and grow a given client's trademark portfolio by investing in trademarks that carry the most weight and have the most impact in a given market.</li>
                        </ul>
                        <p>There are many other Trademark-related matters on which Mr. Brodsky advises.</p>
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
