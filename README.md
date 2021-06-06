# Ultimate Member - Resend Activation Email
User initiated Resend of Account Activation Email from a page supported by Google reCAPTCHA version 3 and a shortcode for the page setup.

* Logged in users are excluded from the shortcode by default.
* User must enter their email address and password submitted at the account registration.

The plugin relies on UM reCAPTCHA plugin being installed for version 3 in getting the Google site and secret keys.

# Plugin setup
UM -> Settings -> Extensions -> Resend Activation Email

1. Enable/disable the Resend Activation Email plugin shortcode.
2. Select the Resend Activation Google reCAPTCHA score minimum value for accepting a request. 
3. Select after number of hours until the next Resend Activation email request is allowed by the user.

# Shortcode
[my_um_resend_activation] 

# Installation
Download the .zip file and install with WordPress plugin upload function
