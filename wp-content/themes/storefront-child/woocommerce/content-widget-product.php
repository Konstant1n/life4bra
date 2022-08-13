<?php
if (!defined('ABSPATH')) {
	exit;
}

global $product;
?>
<li class="container-fluid ">
	<div class="row">
		<div class="col-xs-4">
			<a href="<?php echo esc_url($product->get_permalink()); ?>">
				<figure>
					<?php echo $product->get_image(); ?>
				</figure>
			</a>
		</div>

		<div class="col-xs-8 b_widget_product-data">
			<h5>
				<a href="<?php echo esc_url($product->get_permalink()); ?>">
					<?php echo $product->get_title(); ?>
				</a>
			</h5>

			<div>
				<div>
					<?php echo $product->short_description; ?>
				</div>
				<div class="b_widget_product-attribute">
					<div class="pull-left">
						<span class="glyphicon glyphicon-lock"></span>
						<span><?php echo $product->stock_quantity ?></span>
					</div>
					<div class="pull-right">
						<span> от <?php echo $product->price ?></span>
						<span class="glyphicon glyphicon-rub"></span>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="text-center">
				<a href="<?php echo esc_url($product->get_permalink()); ?>">
					<div class="btn btn-default btn-sm">Заказать</div>
				</a>
			</div>
		</div>
	</div>
</li>