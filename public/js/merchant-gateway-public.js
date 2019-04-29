(function( $ ) {
	/**
	 * Card
	 * https://github.com/jessepollak/card
	 */
	var cardInit = function(){
		$('form.woocommerce-checkout').card({
			container: '.card-wrapper',
			formSelectors: {
				cvcInput: 'input#card_code',
				nameInput: 'input#billing_first_name, input#billing_last_name',
				numberInput: 'input#card_number',
				expiryInput: 'input#expiry'
			},
			formatting: true,
			masks: {
				cardNumber: '•'
			}
		}).bind();
	};

	$(document).on('updated_checkout', function(e){
		$(document).ready(function() {
			$('form.woocommerce-checkout').card({
				container: '.card-wrapper',
				formSelectors: {
					cvcInput: 'input#card_code',
					nameInput: 'input#billing_first_name, input#billing_last_name',
					numberInput: 'input#card_number',
					expiryInput: 'input#expiry'
				},
				formatting: true,
				masks: {
					cardNumber: '•'
				}
			}).unbind();
			cardInit();
		});
	});
})( jQuery );
