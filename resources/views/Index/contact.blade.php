<!-- //* ==================== Contact Section ==================== -->
<section id="contact" class="contact">
    <div class="container">

        <!-- //? titlul sectiunii -->
        <div class="section-title">
            <h2>Contact</h2>
            <h3><span>Contact us</span> now</h3>
        </div>

        <div class="row">
            <div class="col-lg-5 mb-lg-0 mb-4">
                <main class="container">
                    <!-- //? Partea cu formularul de trimis email-uri -->
                    <p class="send_mail">Send email:</p>

                    <form action="../../../forms/contactform.php" method="post">
                        <ul class="errorMessages"></ul>

                        <div class="padding_bottom_20">
                            <i class="color_icon ri-user-line"></i>
                            <label class="send_mail" for="nume">Name:</label>
                            <br>
                            <input id="nume" type="text" name="name" placeholder="full name" class="text_boxes" required>
                        </div>

                        <div class="padding_bottom_20">
                            <i class="color_icon ri-mail-line"></i>
                            <label class="send_mail" for="mail">E-mail:</label>
                            <br>
                            <input id="mail" type="text" name="email" placeholder="your email" class="text_boxes" required>
                        </div>

                        <div class="padding_bottom_20">
                            <i class="ri-file-text-line color_icon"></i>
                            <label class="send_mail" for="subiect">Subject:</label>
                            <br>
                            <input id="subiect" type="text" name="subject" placeholder="subject" class="text_boxes" required>
                        </div>

                        <div class="padding_bottom_20">
                            <i class="ri-text color_icon"></i>
                            <label class="send_mail" for="txt">Message:</label>
                            <br>
                            <textarea id="txt" name="message" placeholder="message" style="width: 100%" required></textarea>
                        </div>

                        <div class="buttons" style="text-align: center">
                            <button class="send_mail send_mail_button" type="submit" name="submit">SEND MAIL</button>
                        </div>
                    </form>
                </main>
            </div>
            <!-- //? partea cu harta s informatii de contact -->
            <div class="col-lg-7" style="padding-top: 40px">
                <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d45574.733944936364!2d26.025348695403945!3d44.44504047986557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b201eb9755ce5f%3A0xfd63661aa153893!2zUDYsIEJ1Y3VyZciZdGk!5e0!3m2!1sen!2sro!4v1615411120995!5m2!1sen!2sro" frameborder="0" allowfullscreen></iframe>
                <div class="row mt-5 text-center">

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <i class="bi bi-geo-alt"></i>
                        <h4>Locatie:</h4>
                        <p>Bucuresti, Splaiul Independentei numarul 290</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <i class="bi bi-envelope"></i>
                        <h4>Email:</h4>
                        <p>sefl@cumsafacibani.ro</p>
                    </div>

                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <i class="bi bi-phone"></i>
                        <h4>Numar de telefon:</h4>
                        <p>+12345678910</p>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>
<!-- //* ==================== End Contact Section ==================== -->
