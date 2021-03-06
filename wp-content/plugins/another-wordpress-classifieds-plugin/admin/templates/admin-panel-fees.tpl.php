<?php
/**
 * @package AWPCP\Templates\Admin
 */

if ( awpcp_get_option( 'freepay' ) !== '1' ) :
        $payment_tab_link = sprintf( '<a href="%s">%s</a>', admin_url( 'admin.php?page=awpcp-admin-settings&g=payment-settings' ), __( 'Payment Settings page', 'another-wordpress-classifieds-plugin' ) );

        $notice = __( 'Currently your classifieds are in Free mode. Fee plans are not available or used during free mode.<br/><br/> To change this, visit the <payment-settings-tab-link> and enable Charge Listing Fee setting.', 'another-wordpress-classifieds-plugin' );
        $notice = str_replace( '<payment-settings-tab-link>', '<strong>' . $payment_tab_link . '</strong>', $notice );

        echo $notice; // XSS Ok.
else : ?>
<form method="get" action="<?php echo esc_attr( $page->url( array( 'action' => false ) ) ); ?>">
    <?php foreach ( $page->params as $name => $value ) : ?>
    <input type="hidden" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_attr( $value ); ?>" />
    <?php endforeach ?>

    <?php $url   = $page->url( array( 'awpcp-action' => 'add-fee' ) ); ?>
    <?php $label = __( 'Add Fee Plan', 'another-wordpress-classifieds-plugin' ); ?>
    <a class="button-primary" title="<?php echo esc_attr( $label ); ?>" href="<?php echo esc_attr( $url ); ?>" accesskey="s"><?php echo esc_html( $label ); ?></a>
    <?php
        $fee_settings_url  = awpcp_get_admin_settings_url( 'payment-settings' );
        $fee_settings_link = sprintf( '<a href="%s">%s</a>', $fee_settings_url, __( 'Fee Plan sort order and sort direction Settings', 'another-wordpress-classifieds-plugin' ) );

        $message = __( 'If you wish to change the sorting of your fee plans, you can change the <fee-settings-link>.', 'another-wordpress-classifieds-plugin' );
        $message = str_replace( '<fee-settings-link>', $fee_settings_link, $message );
    ?>
    <p><?php echo $message; // XSS Ok. ?></p>

    <?php echo $table->display(); // XSS Ok. ?>
</form>
<?php endif; ?>
