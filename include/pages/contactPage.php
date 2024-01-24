<!-- CONTACT-CONTENT -->
<div class="contact bg-dark">
    <div class="container h-100">
        
        <!-- CONTACT-HEADING -->
        <div class="py-5 mb-3">
            <div class="section-heading">
                <h2>Contact</h2>
                <span></span>
            </div>
        </div>

        <?php echo $message; ?>

        <div class="row">
            <div class="col">
                <div class="box-tinsel bg-black p-4">
                    <div class="row">
                        <div class="col">
                            <form method="post" action="https://saleem.pk/#contact" autocomplete="off" class="needs-validation" novalidate>
                                <div class="form-row">
                                    <div class="col-md-6 mb-3">
                                        <input type="text" name="name" class="form-control rounded-0" placeholder="Name*" value="" required>
                                        <div class="invalid-feedback">Please type your name</div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <input type="email" name="email" class="form-control rounded-0" placeholder="Email*" value="" required>
                                        <div class="invalid-feedback">Please type your email</div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea name="desc" class="form-control rounded-0" placeholder="Your Message" rows="5" required></textarea>
                                    <div class="invalid-feedback">Please type your message</div>
                                </div>
                                <div class="d-flex justify-content-sm-end justify-content-center">
                                    <input type="hidden" id="g-token" name="g-token" />
                                    <input type="submit" name="submit" class="btn btn-success rounded-0" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row my-5">
            <div class="col">
                <div class="box-tinsel bg-black p-4 text-white">
                    <div class="row">
                        <div class="col-md-4 mb-md-0 mb-3">
                            <div class="contact-info-content text-center">
                                <i class="bi bi-envelope"></i>
                                <a href="mailto:saleem.coder&#64;gmail.com"><h6 class="my-md-3">saleem.coder&#64;gmail.com</h6></a>
                                <label class="d-md-block d-none">Email</label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-3">
                            <div class="contact-info-content text-center">
                                <i class="bi bi-skype"></i>
                                <a href="skype:acc.saleem?chat"><h6 class="my-md-3">acc.saleem</h6></a>
                                <label class="d-md-block d-none">Skype</label>
                            </div>
                        </div>
                        <div class="col-md-4 mb-md-0 mb-3">
                            <div class="contact-info-content text-center">
                                <i class="bi bi-phone"></i>
                                <a href="tel:+923227819152"><h6 class="my-md-3">(+92) 322 781 9152</h6></a>
                                <label class="d-md-block d-none">Phone</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>