<?php
/**
 * Override
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>

<div class="woocommerce-shipping-fields">


		<?php //h3 tidak sama dengan woo ?>
		<h3 id="ship-to-different-address" class="section-title dark">
			<input id="ship-to-different-address-checkbox" class="input-checkbox" type="checkbox" name="ship_to_different_address" value="1">
			<label for="ship-to-different-address-checkbox" class="checkbox">Ship to a different address?</label>
		</h3>


		<?php //dari sini ke bawah, sama dengan woo ?>
		<div class="shipping_address" style="display: none;">



				<p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated" id="shipping_country_field"><label for="shipping_country" class="">Country <abbr class="required" title="required">*</abbr></label><select name="shipping_country" id="shipping_country" class="country_to_state country_select" style="display: none;"><option value="">Select a country…</option></select><div class="chosen-container chosen-container-single" style="width: 284px;" title="" id="shipping_country_chosen"><a class="chosen-single" tabindex="-1"><span>Uruguay</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div><noscript>&lt;input type="submit" name="woocommerce_checkout_update_totals" value="Update country" /&gt;</noscript></p>

				<p class="form-row form-row-first validate-required" id="shipping_first_name_field"><label for="shipping_first_name" class="">First Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_first_name" id="shipping_first_name" placeholder="" value="">
				</p>

				<p class="form-row form-row-last validate-required" id="shipping_last_name_field"><label for="shipping_last_name" class="">Last Name <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_last_name" id="shipping_last_name" placeholder="" value="">
				</p><div class="clear"></div>

				<p class="form-row form-row-wide" id="shipping_company_field"><label for="shipping_company" class="">Company Name</label><input type="text" class="input-text " name="shipping_company" id="shipping_company" placeholder="" value="">
				</p>

				<p class="form-row form-row-wide address-field validate-required" id="shipping_address_1_field"><label for="shipping_address_1" class="">Address <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_address_1" id="shipping_address_1" placeholder="Street address" value="">
				</p>

				<p class="form-row form-row-wide address-field" id="shipping_address_2_field"><input type="text" class="input-text " name="shipping_address_2" id="shipping_address_2" placeholder="Apartment, suite, unit etc. (optional)" value="">
				</p>

				<p class="form-row form-row-wide address-field validate-required woocommerce-invalid woocommerce-invalid-required-field" id="shipping_city_field" data-o_class="form-row form-row-wide address-field validate-required"><label for="shipping_city" class="">Town / City <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_city" id="shipping_city" placeholder="Town / City" value="">
				</p>

				<p class="form-row form-row-first address-field validate-required validate-state" id="shipping_state_field" data-o_class="form-row form-row-first address-field validate-required validate-state"><label for="shipping_state" class="">State / County <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " value="" placeholder="State / County" name="shipping_state" id="shipping_state"></p><p class="form-row form-row-last address-field validate-required validate-postcode" id="shipping_postcode_field" data-o_class="form-row form-row-last address-field validate-required validate-postcode"><label for="shipping_postcode" class="">Postcode / Zip <abbr class="required" title="required">*</abbr></label><input type="text" class="input-text " name="shipping_postcode" id="shipping_postcode" placeholder="Postcode / Zip" value="">
				</p>

				<div class="clear"></div>


		</div>






			<p class="form-row notes" id="order_comments_field"><label for="order_comments" class="">Order Notes</label><textarea name="order_comments" class="input-text " id="order_comments" placeholder="Notes about your order, e.g. special notes for delivery." rows="5" cols="5"></textarea>
				</p>


	</div>
