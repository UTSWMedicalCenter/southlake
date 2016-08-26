<!-- Register -->
<div class="portfolio-modal modal fade" id="register" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Register Form</h2>
                            <p class="item-intro text-muted">*You can create an account by submitting this form</p>
                            <p class="item-intro text-muted">*After getting your account, you will be able to select your class!</p>
                            <form name="RegisterAccount" id="contactForm" action="account.register" method="post" novalidate>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your name *" id="name" required
                                           data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your email *" id="email"
                                           required
                                           data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your phone number *"
                                           id="phonenum"
                                           required
                                           data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control"
                                           placeholder="Your relationship with your child *" id="phonenum"
                                           required
                                           data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Another parent name"
                                           id="name2">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Another email address"
                                           id="email2">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Another phone number"
                                           id="phonenum2">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="txt" class="form-control" placeholder="Your home address *"
                                           id="homeaddress" required
                                           data-validation-required-message="Please enter your home address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="txt" class="form-control" placeholder="Home address line 2"
                                           id="homeaddress2">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-xl">Send your register request!</button>
                                    <button type="reset" class="btn btn-xl">Reset</button>
                                    <p>* We will process your requester in 3 business days!</p>
                                    <p>* After approving your registration, we will send your ID and password to your first email address!</p>
                                </div>
                            </form>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i
                                    class="fa fa-times"></i> Close register form
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>