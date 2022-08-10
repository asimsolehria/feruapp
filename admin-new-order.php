<?php

/**
 * Admin new order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/admin-new-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails\HTML
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

/*
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action('woocommerce_email_header', $email_heading, $email); ?>

<tr>
	<td style="padding:0px 0px 30px 0px" align="center">
		<table cellspacing="0" cellpadding="0" border="0">
			<tbody>
				<tr>
					<td valign="middle" align="center">
						<img src="https://hive.gg/wp-content/uploads/2020/12/shopping-chart-grey.png" alt="" style="display:block" width="33">
					</td>
					<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#bfbfbf;font-size:22px;padding:0px 12px 0px 12px" valign="middle" align="center">
						–
					</td>
					<td valign="middle" align="center">
						<img src="https://hive.gg/wp-content/uploads/2020/12/card-grey.png" alt="" style="display:block" width="31">
					</td>
					<td style="font-family:Geogrotesque,Arial,Verdana,Helvetica,sans-serif;color:#bfbfbf;font-size:22px;padding:0px 12px 0px 12px" valign="middle" align="center">
						–
					</td>
					<td valign="middle" align="center">
						<img src="https://hive.gg/wp-content/uploads/2020/12/box-car-grey.png" alt="" style="display:block" width="39">
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
		Great News! Your order received a new order from <?php echo $order->get_billing_first_name(); ?>. <br> <br>
		Let's Just process this order with woocommerce.
	</td>
</tr>
</tbody>
</table>
</td>
</tr>














<!-- <?php /* translators: %s: Customer billing full name */ ?>
<p><?php printf(esc_html__('You’ve received the following order from %s:', 'woocommerce'), $order->get_formatted_billing_full_name()); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
	?></p> -->
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

// /**
//  * Show user-defined additional content - this is set in each email's settings.
//  */
// if ($additional_content) {
// 	echo wp_kses_post(wpautop(wptexturize($additional_content)));
// }

/*
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action('woocommerce_email_footer', $email);
