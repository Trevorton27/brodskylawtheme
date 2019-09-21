<?php /*faq-page template*/ ?>
<?php get_header(); ?>
<div class="row" id="main-page">
    <div class="image-container">
        <img class="main-page-image" src="http://localhost/brodsky_law/wp-content/uploads/2019/09/FaqPageHeaderImage.png">
    </div>
    <div id="page-container" class="container">
        <div id="faq-page-mobile" class="row align-items-center">
            <div class="col-sm-9">
                <div class="main-page-text">
                    <h1 class="page-title">Frequently Asked Questions</h1>
                </div>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        
                            <button id="toggleSection" class="btn btn-link no-underline" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Q: Do you take cases on a contigency basis?
                            </button>
                       
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                            A:  Not typically, unless it is a personal injury matter.  Most contingency cases are personal injury matters.  Other cases, depending on the attorney's perceived value of the case, might be suitable for contingency.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        
                            <button id="toggleSection" class="btn btn-link no-underline" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Q: What does contingency mean?
                            </button>
                       
                        </div>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                            A: It typically means that the lawyer's fees are not paid unless and until that attorney is able to collect on behalf of the client.  A typical contingency fee will be anywhere from 33.3% to 40% of the recovery amount.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        
                            <button id="toggleSection" class="btn btn-link no-underline" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Q: How do I know the value of my case?
                            </button>
                       
                        </div>

                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                            A:  The value of a given case is normally measured by what probable value a judge and/or jury would assign to the case.  There is no way to know for certain what this number is.  However, in some cases a general idea as to value can be ascertained after a few hours of exploration of a given case.  On the other hand, it often may take months before an accurate value can be calculated. This is often the case in litigation where the parties must first complete some discovery against one another in order to figure out what are the strengths and weaknesses of each side, as revealed through the party's testimony, documentation, and other evidence. In some cases value takes on a completely different meaning of value, such as "what is the value of this case to you?" but normally there are more objective measures of a case's worth.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour">
                        
                            <button id="toggleSection" class="btn btn-link no-underline" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                            Q: Is an oral contract enforceable?
                            </button>
                       
                        </div>

                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body">
                            A:  Yes, however it is often difficult to prove an oral contract in the absence of documentation such as an email.  It is better to have agreements in writing, and typically better to have such agreements drafted by an attorney.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive">
                        
                            <button id="toggleSection" class="btn btn-link no-underline" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                            Q: Should I represent myself?
                            </button>
                       
                        </div>

                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                            A: Unless you are in a small claims court in California, where you must represent yourself, generally the answer is no.
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix">
                        
                            <button id="toggleSection" class="btn btn-link no-underline" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Q: What is a small claim?
                            </button>
                       
                        </div>

                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                            A:  A small claim in California is a case filed in Small Claims Court.  In Small Claims Court the maximum recovery that a plaintiff is entitled to is $7500 or less.  Small Claims claimants represent themselves, unless the matter is appealed, in which case an attorney may represent the appealing claimant.
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div id="contact-widget" class="col-sm-3  align-self-center .offset-sm-3">
                <?php if ( is_active_sidebar( 'contact-sasha' ) ) : ?>
                    <?php dynamic_sidebar( 'contact-sasha' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
