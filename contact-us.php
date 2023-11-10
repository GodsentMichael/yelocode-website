<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "component/style.php" ?>
</head>

<body>

    <?php include_once "component/page_loader.php" ?>

    <?php include_once "component/header.php" ?>

    <!--Contacts & Forms Start-->
    <section class="contact-form">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-lg-5">
                    <div class="pq-bg-dark pq-contact-form-p">
                        <div class="pq-section pq-style-1 text-left">
                            <h5 class="pq-section-title pq-text-white" id="contacts" data-high_text="Contacts"
                                data-title_text="Our Contacts" data-rough_color="#fd4a18" data-rough_type="underline">
                                Our Contacts</h5>
                            <p class="pq-section-description pq-text-white"></p>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="pq-icon-box pq-style-5">
                                        <div class="pq-icon">
                                            <a href="contact-us.html#"><i class="ion ion-ios-location"></i></a>
                                        </div>
                                        <div class="pq-icon-box-content">
                                            <h4 class="pq-text-white">Our Address</h4>
                                            <p class="pq-text-white mb-0">
                                                11, Elekahia Road, Rebisi Port Harcourt, Rivers State, Nigeria</p>
                                        </div>
                                    </div>
                                    <div class="pq-icon-box pq-style-5">
                                        <div class="pq-icon">
                                            <a href="contact-us.html#"><i class="ion ion-email"></i></a>
                                        </div>
                                        <div class="pq-icon-box-content">
                                            <h4 class="pq-text-white">E-Mail Address</h4>
                                            <p class="pq-text-white mb-0">Hello@Yelocodesystems.Com</p>
                                        </div>
                                    </div>
                                    <div class="pq-icon-box pq-style-5">
                                        <div class="pq-icon">
                                            <a href="contact-us.html#"><i class="fas fa-phone"></i></a>
                                        </div>
                                        <div class="pq-icon-box-content">
                                            <h4 class="pq-text-white">Phone Number</h4>
                                            <p class="pq-text-white mb-0">
                                                +234- 836-255-713 </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 mt-4 mt-lg-0">
                    <div class="form-div">
                        <div class="pq-section pq-style-1 text-left">
                            <h5 class="pq-section-title" id="quote" data-high_text="Quote"
                                data-title_text="Request A Quote" data-rough_color="#fd4a18"
                                data-rough_type="underline">Contact Us</h5>
                            <p class="pq-section-description"></p>
                        </div>
                        <form action="#" class="pq-contactform pq-applyform" novalidate>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" id="first-name" class="name-field" placeholder="Your Name"
                                        required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" id="e-mail" class="e-mail-field" placeholder="Email" required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" id="phone-number" class="phone-number-field"
                                        placeholder="Cell Phone" required>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <input type="text" id="subject" class="subject-field" placeholder="Subject"
                                        required>
                                </div>
                                <div class="col-lg-12">
                                    <textarea id="message" rows="5" cols="10" placeholder="Your Message"
                                        required></textarea>
                                </div>
                                <div class="col-lg-12">
                                    <a class="pq-button form-btn">
                                        <div class="pq-button-block">
                                            <span class="pq-button-text">Send Message</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Contacts & Forms End-->

    <!--Map Start-->
    <div class="map p-0">
        <div class="pq-bg-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m19!1m8!1m3!1d317893.19730324426!2d-0.1195537!3d51.5032973!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x487604b900d26973:0x4291f3172409ea92!2slastminute.com%20London%20Eye%20Riverside%20Building,%20County%20Hall%20London%20SE1%207PB%20United%20Kingdom!3m2!1d51.5032973!2d-0.1195537!5e0!3m2!1sen!2sin!4v1652772883319!5m2!1sen!2sin"
                allowfullscreen="" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!--Map ENd-->

    <?php include_once "component/footer.php" ?>

    <!--Back to top Start-->
    <div id="back-to-top">
        <a class="top" id="#top" href="contact-us.html#"> <i class="ion-ios-arrow-up"></i> </a>
    </div>
    <!--Back to top End-->

    <!--Jquery js-->
    <script src="js/jquery.min.js"></script>
    <!--Bootstrap js-->
    <script src="js/bootstrap.min.js"></script>
    <!--Isotope js-->
    <script src="js/isotope.pkgd.min.js"></script>
    <!--Counter js -->
    <script src="js/jquery.countTo.min.js"></script>
    <!--Magnefic Popup js -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!--Animation js -->
    <script src="js/wow.min.js"></script>
    <!--Custom js-->
    <script src="js/rough-script.js"></script>
    <script src="js/rough-notation.iife.js"></script>
    <script src="js/rough-custom.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>