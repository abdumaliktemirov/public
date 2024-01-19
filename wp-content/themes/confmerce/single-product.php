<?php
get_header();
$product = wc_get_product( $post );
$all = wc_get_products( array( 'status' => 'publish' ) );
$benefits = get_field( 'benefits' );
$real_price = $product->get_regular_price();
if($product->is_on_sale()) {
	$real_price = $product->get_sale_price();
}
?>
<main>
	<div class="container">

		<section class="products">
			<h2 class="products__title">Choose Your Pass for Netevia conference 2024</h2>
			<div class="products__buttons">
				<?php foreach ( $all as $pr ) : ?>
					<a href="<?php echo get_permalink( $pr->get_id() ); ?>" class="<?php echo get_the_ID() === $pr->get_id() ? 'active' : ''; ?>"><?php echo $pr->get_name(); ?></a>
				<?php endforeach; ?>
			</div>
			<div class="products__bottom-card">
				<div class="products__image">
					<img src="<?php echo wp_get_attachment_image_url( $product->get_image_id(), 'full' ); ?>" alt="Product image">
				</div>
				<div class="products__info">
					<p class="products__info-name"><?php echo $product->get_name(); ?></p>
					<p class="products__info-mouch">
						<?php if ( $product->is_on_sale() ) : ?>
							<span class="one"><?php echo wc_price( $product->get_sale_price() ); ?></span>
							<del class="two"><?php echo wc_price( $product->get_regular_price() ); ?></del>
							<span class="three">-<?php echo intval( $product->get_sale_price() / $product->get_regular_price() * 100 ); ?>%</span>
						<?php else : ?>
							<span class="one"><?php echo wc_price( $product->get_regular_price() ); ?></span>
						<?php endif; ?>
					</p>
					<div class="products__card">
						<div class="counter">
							<button id="decrement">-</button>
							<span id="count">1</span>
							<input type="hidden" id="quantity" value="1" min="1" step="1">
							<input type="hidden" id="price" value="<?php echo number_format($real_price, 2); ?>">
							<button id="increment">+</button>
						</div>
					</div>
					<div>
						<?php echo $product->get_description(); ?>
					</div>
					<div class="products__text-buy">
						<p>To secure your pass, simply click on </p>
						<div class="products__text-box">
							<p>
								<svg width="21" height="21" viewBox="0 0 21 21" fill="none"
									xmlns="http://www.w3.org/2000/svg">
									<path
										d="M13.4583 11.3333C14.0833 11.3333 14.6333 10.9916 14.9166 10.475L17.8999 5.06663C18.2083 4.51663 17.8083 3.83329 17.1749 3.83329H4.84159L4.05825 2.16663H1.33325V3.83329H2.99992L5.99992 10.1583L4.87492 12.1916C4.26659 13.3083 5.06659 14.6666 6.33325 14.6666H16.3333V13H6.33325L7.24992 11.3333H13.4583ZM5.63325 5.49996H15.7583L13.4583 9.66663H7.60825L5.63325 5.49996ZM6.33325 15.5C5.41658 15.5 4.67492 16.25 4.67492 17.1666C4.67492 18.0833 5.41658 18.8333 6.33325 18.8333C7.24992 18.8333 7.99992 18.0833 7.99992 17.1666C7.99992 16.25 7.24992 15.5 6.33325 15.5ZM14.6666 15.5C13.7499 15.5 13.0083 16.25 13.0083 17.1666C13.0083 18.0833 13.7499 18.8333 14.6666 18.8333C15.5833 18.8333 16.3333 18.0833 16.3333 17.1666C16.3333 16.25 15.5833 15.5 14.6666 15.5Z"
										fill="#197AC9" />
								</svg>
							</p>
							<p class="products__text-blue">Add to Cart</p>
						</div>
						<p>below and proceed with your purchase.</p>
					</div>
				</div>
			</div>
		</section>

		<section class="agreement">
			<div class="agreement__info-text">
				<?php if ( ! empty( $benefits ) ) : ?>
					<h4>Benefits:</h4>
					<div class="agreement__info-card">
						<?php foreach ( $benefits as $item ) : ?>
							<p><?php echo $item['benefit']; ?></p>
						<?php endforeach; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="agreement__info-right">
				<h5><?php echo $product->get_name(); ?></h5>
				<div class="agreement__right-much">
					<div>
						<p class="agreement__much-name"><?php echo $product->get_name(); ?> - Launch Rate</p>
						<p class="agreement__much-bold">
							<?php echo wc_price( $real_price ); ?>
						</p>
					</div>
					<div class="agreement__info-hr"></div>
					<div>
						<p class="agreement__name-bottom">Total</p>
						<p class="agreement__number-bottom" id="totalPrice">
							<?php echo wc_price( $real_price ); ?>
						</p>
					</div>
				</div>
				<button class="agreement__button-black" id="addToCart" data-product="<?php echo $product->get_id(); ?>">
					<p>
						<svg width="24" height="25" viewBox="0 0 24 25" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<path
								d="M15.55 13.5C16.3 13.5 16.96 13.09 17.3 12.47L20.88 5.98C21.25 5.32 20.77 4.5 20.01 4.5H5.21L4.27 2.5H1V4.5H3L6.6 12.09L5.25 14.53C4.52 15.87 5.48 17.5 7 17.5H19V15.5H7L8.1 13.5H15.55ZM6.16 6.5H18.31L15.55 11.5H8.53L6.16 6.5ZM7 18.5C5.9 18.5 5.01 19.4 5.01 20.5C5.01 21.6 5.9 22.5 7 22.5C8.1 22.5 9 21.6 9 20.5C9 19.4 8.1 18.5 7 18.5ZM17 18.5C15.9 18.5 15.01 19.4 15.01 20.5C15.01 21.6 15.9 22.5 17 22.5C18.1 22.5 19 21.6 19 20.5C19 19.4 18.1 18.5 17 18.5Z"
								fill="white" />
						</svg>
					</p>
					<p class="button-label">Add to Cart</p>
				</button>
				<button class="agreement__button-white">
					<p><?php echo is_user_logged_in() ? 'Quick checkout' : 'Checkout as a guest'; ?></p>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/image/logo-agreement-left.svg" alt="">
				</button>
			</div>

		</section>

	</div>
</main>
<?php

get_footer();
