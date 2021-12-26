# Ultimate Member - Resend Activation Email at Login
A user attempt to login without an e-mail activation will give the user a new (by a resend) activation e-mail and an error prompt to verify the account.

Error message displayed in the login form above user name field after user clicks on the Login button:

Your account is awaiting e-mail verification and we have now sent you a new e-mail for verification.

# Installation
Add the source.php file from this posting https://github.com/MissVeronica/um-resend-activation/blob/main/source.php to your child-theme functions.php file

or use the Code Snippets plugin https://wordpress.org/plugins/code-snippets/

# Solution
This code snippet takes control over login attempts with pending e-mail activitations before UM and resends the activation e-mail and creates a new UM error message to display for the users on the login page.

/includes/core/um-actions-form.php hook um_submit_form_errors_hook_logincheck

The um_submit_form_errors_hook_logincheck function (in /include/core/um-actions-login.php) is copied for the 'awaiting_email_confirmation' account status and a new error exit for this login error 'awaiting_new_email_confirmation' is created including the addition of UM()->user()->email_pending(); for resending the activation e-mail.

/includes/core/um-actions-misc.php

The new error message for 'awaiting_new_email_confirmation' is added to the um_custom_error_message_handler filter.

# References
UM issue: https://github.com/ultimatemember/ultimatemember/issues/707

UM Support forum:

https://wordpress.org/support/topic/allow-users-to-resend-confirmation-email/

https://wordpress.org/support/topic/how-to-resend-activation-mail/

https://wordpress.org/support/topic/allow-users-to-resend-confirmation-email-2/
