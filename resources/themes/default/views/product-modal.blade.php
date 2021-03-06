<div class="modal-body">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<div class="row">
		<!-- Modal view slider -->
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="aa-product-view-slider">
				<div class="simpleLens-gallery-container" id="demo-1">
					<div class="simpleLens-container">
						<div class="simpleLens-big-image-container">
							<a class="simpleLens-lens-image" data-lens-image="https://i.imgsafe.org/832f6dac93.png">
								<img src="https://i.imgsafe.org/832c1eb073.png" class="simpleLens-big-image">
							</a>
						</div>
					</div>
					<div class="simpleLens-thumbnails-container">
						<a href="#" class="simpleLens-thumbnail-wrapper"
						data-lens-image="https://i.imgsafe.org/832f6dac93.png"
						data-big-image="https://i.imgsafe.org/832c1eb073.png">
							<img src="https://i.imgsafe.org/833296db9b.png">
						</a>                                    
						<a href="#" class="simpleLens-thumbnail-wrapper"
						data-lens-image="https://i.imgsafe.org/832f6dac93.png"
						data-big-image="https://i.imgsafe.org/832c1eb073.png">
							<img src="https://i.imgsafe.org/833296db9b.png">
						</a>

						<a href="#" class="simpleLens-thumbnail-wrapper"
						data-lens-image="https://i.imgsafe.org/832f6dac93.png"
						data-big-image="https://i.imgsafe.org/832c1eb073.png">
							<img src="https://i.imgsafe.org/833296db9b.png">
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Modal view content -->
		<div class="col-md-6 col-sm-6 col-xs-12">
			{!! Form::open(['url' => '/cart']) !!}
			<div class="aa-product-view-content">
				{!! Form::hidden('product_id', $product->id) !!}
				<h3>{{ $product->name }}</h3>
				<div class="aa-price-block">
					<span class="aa-product-view-price">{{ Helpers::reggo($product->price) }}</span>
				</div>
				<p>{{ $product->description }}</p>
				<div class="aa-prod-quantity">
					{!! Form::label('quantity', 'Jumlah', ['class' => 'control-label']) !!}
					{!! Form::number('quantity', 1, ['required', 'class' => 'form-control']) !!}
					{!! Form::select('aroma_id', $aroma, 'default', ['placeholder' => 'pilih aroma', 'class' => 'form-control']) !!}
					<p class="aa-prod-category">
						Category: <a href="#">Polo T-Shirt</a>
					</p>
				</div>
				<div class="aa-prod-view-bottom">
					<a href="#" class="aa-add-to-cart-btn pull-left" style="border:none;margin-top:0;">View Details</a>
					<button type="submit" class="btn aa-add-to-cart-btn pull-right" style="border:none;margin-top:0;"><span class="fa fa-shopping-cart"></span>Add To Cart</button>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>