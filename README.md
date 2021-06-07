# Ultimate Member - Resend Activation Email
User initiated Resend of Account Activation Email from a page supported by Google reCAPTCHA version 3 and a shortcode for the page setup.

* Logged in users are excluded from the shortcode by default.
* User must enter their email address and password submitted at the account registration.

The plugin relies on UM reCAPTCHA free extension plugin being installed for version 3 in getting the Google site and secret keys.

# Plugin setup
UM -> Settings -> Extensions -> Resend Activation Email

1. Enable/disable the Resend Activation Email plugin shortcode.
2. Select the Resend Activation Google reCAPTCHA score minimum value for accepting a request. 
3. Select the number of hours until the next Resend Activation email request is allowed by the user.

# Shortcode
[my_um_resend_activation] 

# Installation
Download the .zip file and install with WordPress plugin upload function

# User meta data
'resend_activation_last'

A Unix time stamp in seconds, which can be used as an additional admin column in the WP User list with a WP plugin supporting this feature.

# Page Caching
Exclude the page with the shortcode from all caching

# UM reCAPTCHA free extension
https://wordpress.org/plugins/um-recaptcha/
