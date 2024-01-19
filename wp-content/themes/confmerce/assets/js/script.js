(function ($) {
    $(document).ready(function () {
        const decrementButton = document.getElementById("decrement");
		const incrementButton = document.getElementById("increment");
		const countElement = document.getElementById("count");
	
		let count = 1;
		let price = parseFloat($('input#price').val());
	
		decrementButton.addEventListener("click", function() {
			if(count > 1) {
				count--;
				updateCount();
			}
		});
	
		incrementButton.addEventListener("click", function() {
			count++;
			updateCount();
		});
	
		function updateCount() {
			countElement.textContent = count;
			$('input#quantity').val(count);
			let symbol = $('#totalPrice .woocommerce-Price-amount > bdi > .woocommerce-Price-currencySymbol');
			$('#totalPrice .woocommerce-Price-amount > bdi').html(count * price);
			$('#totalPrice .woocommerce-Price-amount > bdi').prepend(symbol);
		}
    });


	$('#addToCart').click(function(event){
		event.preventDefault();

		if($(this).hasClass('added')) {
			location.href = '/cart';
			return;
		}

		$(this).attr('disabled', true);
		var product_id = $(this).data('product');
		var quantity = $('input#quantity').val();
		$.ajax({ 
			data: {
				action: 'add_to_cart_ajax_function',
				product_id: product_id,
				quantity: quantity,
			},
			type: 'post',
			url: ajax_url,
			success: function(data) {
				if(data.status == 'success') {
					$('#addToCart').addClass('added');
					$('#addToCart').find('.button-label').html('Go to Cart');
				}

				$('#addToCart').attr('disabled', false);
			}
		});
	});
})(jQuery);
