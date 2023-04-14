<footer id="footer">
    <div class="footer_container">
        <div class="footer_wrapper">


            <div class="contact_us">
                <h2>GET A QUOTE</h2>
                <h3>CONTACT US</h3>
                <p>Please fill out the form below and we will get back to you as soon as we can with a reply. Thank you.
                </p>
                <form action="sendContactForm" method="post" class="sends-email ctc-form">
                <label for="name" class="screen-reader-text">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Name:">
                    <input type="email" class="form-control" name="email" placeholder="Email:">
                    <input type="number" class="form-control" name="phone" placeholder="Phone:">
                    <textarea cols="30" rows="6" class="form-control" name="message"
                        placeholder="Message / Questions:"></textarea>
                    <label for="g-recaptcha-response"><span class="ctc-hide">Recaptcha</span></label>
                    <div class="g-recaptcha"></div>
                    <label>
                        <input type="checkbox" name="consent" class="consentBox"> I hereby consent to having this website
                        store my submitted information so that they can respond to my inquiry.
                    </label><br>
                    <?php if ($this->siteInfo['policy_link']): ?>
                        <label>
                            <input type="checkbox" name="termsConditions" class="termsBox" /> I hereby confirm that I have
                            read and understood this website's <a href="<?php $this->info("policy_link"); ?>"
                                target="_blank">Privacy Policy.</a>
                        </label>
                    <?php endif ?>
                    <div class="submit_btn">
                        <button type="submit"
                            class="contact_us_btn ctcBtn">Submit form</button>
                    </div>
                </form>
            </div>

                       
                    
                
            

        </div>

        <div class="owners">
            <p class="copyright">©
                <?php echo date("Y"); ?> Hi-Tech Appliance Specialists All Rights Reserved.
            </p>
        </div>

</footer>






<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?php echo URL; ?>public/scripts/sendform.js" data-view="<?php echo $view; ?>" id="sendform"></script>
<script src="<?php echo URL; ?>public/scripts/responsive-menu.js"></script>
<script src="https://unpkg.com/sweetalert2@7.20.10/dist/sweetalert2.all.js"></script>

<?php if ($this->siteInfo['cookie']): ?>
    <script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script>
    <script src="<?php echo URL; ?>public/scripts/cookie-script.js"></script>
<?php endif ?>

<?php if (in_array($view, ["home", "contact"])): ?>
    <textarea id="g-recaptcha-response" class="destroy-on-load"></textarea>
    <script src='//www.google.com/recaptcha/api.js?onload=captchaCallBack&render=explicit' async defer></script>
    <script>
        var captchaCallBack = function () {
            $('.g-recaptcha').each(function (index, el) {
                var recaptcha = grecaptcha.render(el, {
                    'sitekey': '<?php $this->info("site_key"); ?>'
                });
                $('.destroy-on-load').remove();
            })
        };


        $('.consentBox').click(function () {
            if ($(this).is(':checked')) {
                if ($('.termsBox').length) {
                    if ($('.termsBox').is(':checked')) {
                        $('.ctcBtn').removeAttr('disabled');
                    }
                } else {
                    $('.ctcBtn').removeAttr('disabled');
                }
            } else {
                $('.ctcBtn').attr('disabled', true);
            }
        });

        $('.termsBox').click(function () {
            if ($(this).is(':checked')) {
                if ($('.consentBox').is(':checked')) {
                    $('.ctcBtn').removeAttr('disabled');
                }
            } else {
                $('.ctcBtn').attr('disabled', true);
            }
        });
    </script>

<?php endif; ?>


<?php if ($view == "gallery"): ?>
    <script src="<?php echo URL; ?>public/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
    <script src="<?php echo URL; ?>public/scripts/jquery.pajinate.js"></script>
    <script>
        $('#gall1').pajinate({
            num_page_links_to_display: 3,
            items_per_page: 10
        });
        $('.fancy').fancybox({
            helpers: {
                title: {
                    type: 'over'
                }
            }
        });
    </script>
<?php endif; ?>

<a class="cta" href="tel:<?php $this->info("phone"); ?>"><span
        style="display: block; width: 1px; height: 1px; overflow: hidden;">Call To Action Button</span></a>

<?php $this->checkSuspensionFooter(); ?>
</body>

</html>