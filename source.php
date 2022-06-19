<?php

add_action( 'um_submit_form_errors_hook_logincheck', 'my_submit_form_errors_hook_logincheck', 10, 1 );

function my_submit_form_errors_hook_logincheck( $args ) {

    $user_id = ( isset( UM()->login()->auth_id ) ) ? UM()->login()->auth_id : '';
    um_fetch_user( $user_id );

    $status = um_user( 'account_status' );
    if( $status == 'awaiting_email_confirmation' ) {
        UM()->user()->email_pending();
        um_reset_user();
        exit( wp_redirect(  add_query_arg( 'err', esc_attr( 'awaiting_new_email_confirmation' ), UM()->permalinks()->get_current_url() ) ) );
    }
}

add_filter( 'um_custom_error_message_handler', 'my_custom_error_message_handler', 999, 2 );

function my_custom_error_message_handler( $err, $error ) {

    if( $error == 'awaiting_new_email_confirmation' ) {
        return __( 'Your account is awaiting e-mail verification and we have now sent you a new e-mail for verification.', 'ultimate-member' );
    } else {
        return false;
    }
}
