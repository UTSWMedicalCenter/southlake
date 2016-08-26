<section id="login">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Login To Start Your STA!</h2>
                <h3 class="section-subheading text-muted">And select and view your classes</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name *" id="name" required
                                   data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email *" id="email" required
                                   data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" id="password"
                                   required
                                   data-validation-required-message="Please enter your password.">
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button type="submit" class="btn btn-xl">Login</button>
                            <button type="reset" class="btn btn-xl">Reset</button>
                            <a href="#register" data-toggle="modal">
                                <button type="" class="btn btn-xl">
                                    Register
                                </button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include("register.php"); ?>