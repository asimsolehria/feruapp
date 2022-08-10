<?php

/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

if (!defined('ABSPATH')) {
	exit;
}

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email); ?>

<!-- <?php /* translators: %s: Customer first name */ ?>
<p><?php printf(esc_html__('Hi %s,', 'woocommerce'), esc_html($order->get_billing_first_name())); ?></p>
<p><?php esc_html_e('We have finished processing your order.', 'woocommerce'); ?></p> -->
<tr>
	<td style="padding:0px 0px 30px 0px" align="center">
		<table cellspacing="0" cellpadding="0" border="0">
			<tbody>
				<tr>
					<td valign="middle" align="center">
						<img src="https://hive.gg/wp-content/uploads/2020/12/shopping-chart-blue.png" alt="" style="display:block" width="33">
					</td>
					<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#bfbfbf;font-size:22px;padding:0px 12px 0px 12px" valign="middle" align="center">
						–
					</td>
					<td valign="middle" align="center">
						<img src="https://hive.gg/wp-content/uploads/2020/12/card-blue.png" alt="" style="display:block" width="31">
					</td>
					<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#bfbfbf;font-size:22px;padding:0px 12px 0px 12px" valign="middle" align="center">
						–
					</td>
					<td valign="middle" align="center">
						<img src="https://hive.gg/wp-content/uploads/2020/12/box-car-blue.png" alt="" style="display:block" width="39">
					</td>
					<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#bfbfbf;font-size:22px;padding:0px 12px 0px 12px" valign="middle" align="center">
						–
					</td>
					<td valign="middle" align="center">
						<img src="https://hive.gg/wp-content/uploads/2020/12/box-grey.png" alt="" style="display:block" width="33">
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#2f3132;font-size:16px;line-height:20px" valign="top" align="center">
		Great News! Your order is completed. <br> <br>
		Meanwhile join us using the link below.

	</td>
</tr>
</tbody>
</table>
</td>
</tr>
<?php

/*
 * @hooked WC_Emails::order_details() Shows the order details table.
 * @hooked WC_Structured_Data::generate_order_data() Generates structured data.
 * @hooked WC_Structured_Data::output_structured_data() Outputs structured data.
 * @since 2.5.0
 */
do_action('woocommerce_email_order_details', $order, $sent_to_admin, $plain_text, $email);

?>


<table width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#ffffff">
	<tbody>
		<tr>
			<td style="padding:0px 40px 0px 40px" align="center">
				<?php

				/*
				* @hooked WC_Emails::order_meta() Shows order meta data.
				*/
				do_action('woocommerce_email_order_meta', $order, $sent_to_admin, $plain_text, $email);
				?>
			</td>
		</tr>
	</tbody>
</table>
<?php

/*
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action('woocommerce_email_customer_details', $order, $sent_to_admin, $plain_text, $email);


/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
