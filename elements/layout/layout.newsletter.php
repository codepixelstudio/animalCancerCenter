
<!-- newsletter -->
<section id="newsletter_signup">

    <!-- subheading -->
    <span class="subheading">

        flint animal cancer center newsletter

    </span>
    <!-- END subheading -->

    <!-- heading -->
    <h2 class="heading">

        join our community

    </h2>
    <!-- END heading -->

    <!-- text -->
    <span class="small_text">

        Be among the first to learn the latest Flint Animal Cancer Center news and pet cancer treatment information.

    </span>
    <!-- END text -->

    <!-- load reCAPTCHA js -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- reCAPTCHA callback -->
    <script type="text/javascript">

        function validateRecaptcha() {

            var response = grecaptcha.getResponse();

            if ( response.length === 0 ) {

                alert( 'Please check the "I am not a robot" box.' );

                return false;

            }

        }

        function renderSubmit ( response ) {

            console.log( 'valid submission' );

        };

    </script>
    <!-- END reCAPTCHA callback -->

    <!-- form -->
    <form id="newsletter_signup_form" action="//analytics.clickdimensions.com/forms/h/ajV5r9WE8zUCPi7F71du3F" method="post" onsubmit="return validateRecaptcha();">

        <!-- container -->
        <div id="input_fields" class="form_fields">

            <!-- wrap -->
            <span class="input_wrap input_first_name">

                <label for="First Name">first name</label>
                <input id="First Name" class="text" type="text" name="First Name" value="" placeholder="first name" required>

            </span>
            <!-- END wrap -->

            <!-- wrap -->
            <span class="input_wrap input_last_name">

                <label for="Last Name">last name</label>
                <input id="Last Name" class="text" type="text" name="Last Name" value="" placeholder="last name" required>

            </span>
            <!-- END wrap -->

            <!-- wrap -->
            <span class="input_wrap input_email">

                <label for="email">e-mail address</label>
                <input id="email" class="text" type="email" name="email" value="" placeholder="e-mail address" required>

            </span>
            <!-- END wrap -->

        </div>
        <!-- END container -->

        <!-- container -->
        <div id="terms_fields" class="form_fields">

            <input id="terms" type="checkbox" name="terms" value="">
            <label for="terms">Yes, please add me to the CSU Animal Cancer Center mailing list.</label>

        </div>
        <!-- END container -->

        <!-- privacy links -->
        <div id="policy_fields" class="form_fields">

            <a class="privacy_link" href="<?php echo home_url(); ?>/privacy-statement">

                Privacy Statement

            </a>

        </div>
        <!-- END privacy links -->

        <!-- reCAPTCHA -->
        <div id="reCAPTCHA" class="form_fields">

            <!-- empty div -->
            <div class="g-recaptcha" data-sitekey="6LdeTdUZAAAAAD1V5uxCo2pxr1Z_7y1DoOVC0zAR" data-theme="dark" data-callback="renderSubmit"></div>
            <!-- END empty div -->

        </div>
        <!-- END reCAPTCHA -->

        <!-- submit -->
        <input id="newsletter_signup_submit" type="submit" value="add me to the mailing list">

    </form>
    <!-- END form -->

</section>
<!-- END newsletter -->
