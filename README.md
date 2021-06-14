# Ultimate Member - Resend Activation Email at Login
A user attempt to login without e-mail activation will give the user a new (resend) activation e-mail and a prompt to verify the account.

Error message displayed in the login form above user name field: Your account is awaiting e-mail verification and we have now sent you a new e-mail for verification.

# Installation
Add the source.php file from this posting https://github.com/MissVeronica/um-resend-activation/blob/main/source.php to your child-theme functions.php file

or use the Code Snippets plugin https://wordpress.org/plugins/code-snippets/

# Solution
um_submit_form_errors_hook_logincheck function is copied for the 'awaiting_email_confirmation' account status and a new error exit for this login error 'awaiting_new_email_confirmation' is created including the addition of UM()->user()->email_pending(); for resending the activation e-mail.

The new error message for 'awaiting_new_email_confirmation' is added to the um_custom_error_message_handler function.

# References
UM issue: https://github.com/ultimatemember/ultimatemember/issues/707

UM Support forum:

https://wordpress.org/support/topic/allow-users-to-resend-confirmation-email/

https://wordpress.org/support/topic/how-to-resend-activation-mail/
