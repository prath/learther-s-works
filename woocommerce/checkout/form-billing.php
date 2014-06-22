<?php
/**
 * Override
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<div class="woocommerce-billing-fields">

		<?php //h3 tidak sama dengan woo ?>
		<h3 class="section-title dark">Billing Details</h3>


		<?php //dari sini ke bawah, sama dengan woo ?>
		<p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="billing_country_field">
			<label for="billing_country" class="">Country <abbr class="required" title="required">*</abbr></label>

			<select name="billing_country" id="billing_country" class="country_to_state country_select" style="display: none;"><option value="">Select a country…</option>
			</select>

			<div class="chosen-container chosen-container-single" style="width: 284px;" title="" id="billing_country_chosen"><a class="chosen-single" tabindex="-1"><span>Uruguay</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div><noscript>&lt;input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /&gt;</noscript>
		</p>

		<p class="form-row form-row-first validate-required" id="billing_first_name_field"><label for="billing_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_first_name" id="billing_first_name" placeholder="" value="">
				</p>

		<p class="form-row form-row-last validate-required" id="billing_last_name_field"><label for="billing_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_last_name" id="billing_last_name" placeholder="" value="">
				</p><div class="clear"></div>

		<p class="form-row form-row-wide" id="billing_company_field"><label for="billing_company" class="">Company Name</label><input type="text" class="input-text " name="billing_company" id="billing_company" placeholder="" value="">
				</p>

		<p class="form-row form-row-wide address-field validate-required" id="billing_address_1_field"><label for="billing_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_address_1" id="billing_address_1" placeholder="Street address" value="">
				</p>

		<p class="form-row form-row-wide address-field" id="billing_address_2_field"><input type="text" class="input-text " name="billing_address_2" id="billing_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="">
				</p>

		<p class="form-row form-row-wide address-field validate-required" id="billing_city_field" data-o_class="form-row form-row-wide address-field validate-required"><label for="billing_city" class="">Town / City <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_city" id="billing_city" placeholder="Town / City" value="">
				</p>

		<p class="form-row form-row-first address-field validate-required validate-state" id="billing_state_field" data-o_class="form-row form-row-first address-field validate-required validate-state"><label for="billing_state" class="">State / County <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " value="" placeholder="State / County" name="billing_state" id="billing_state"></p><p class="form-row form-row-last address-field validate-required validate-postcode" id="billing_postcode_field" data-o_class="form-row form-row-last address-field validate-required validate-postcode"><label for="billing_postcode" class="">Postcode / Zip <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_postcode" id="billing_postcode" placeholder="Postcode / Zip" value="">
				</p>

		<div class="clear"></div>

		<p class="form-row form-row-first validate-required validate-email" id="billing_email_field"><label for="billing_email" class="">Email Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_email" id="billing_email" placeholder="" value="">
				</p>

		<p class="form-row form-row-last validate-required validate-phone" id="billing_phone_field"><label for="billing_phone" class="">Phone <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="billing_phone" id="billing_phone" placeholder="" value="">
				</p><div class="clear"></div>




			<p class="form-row form-row-wide create-account">
				<input class="input-checkbox" id="createaccount" type="checkbox" name="createaccount" value="1"> <label for="createaccount" class="checkbox">Create an account?</label>
			</p>




			<div class="create-account" style="display: none;">

				<p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>


					<p class="form-row validate-required" id="account_password_field"><label for="account_password" class="">Account password <abbr class="required" title="required">*</abbr></label><input type="password" class="input-text " name="account_password" id="account_password" placeholder="Password" value="">
				</p>

				<div class="clear"></div>

			</div>



	</div>
