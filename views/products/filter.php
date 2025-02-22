<main class="main">
	<div class="page-header cph-header pl-4 pr-4" style="background-color: #fff7ec">
		<h1 class="page-title font-weight-light text-capitalize">Panda Shop</h1>
		<div class="category-container row justify-content-center cols-2 cols-xs-3 cols-sm-4 cols-md-6 pt-6">
			<?php foreach ($categorys as $category) : ?>
				<div class="category category-ellipse mb-4 mb-md-0">
					<a href="index.php?controller=category&id=<?= $category['id'] ?>">
						<figure>
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTjzupWnuFsS-btcV7bMOeYw6V30fnRRXuCFd1kGRfb5-FyDOzF7D5qVpNw8t_-X74GUKI&usqp=CAU" alt="category" width="160" height="161">
						</figure>
					</a>

					<div class="category-content">
						<h3 class="category-name"><a href="#"><?= $category['name'] ?></a>
						</h3>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
	<nav class="breadcrumb-nav has-border">
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Trang Chủ</a></li>
				<li>Tất Cả</li>
			</ul>
		</div>
	</nav>

	<div class="page-content mb-10 shop-page">
		<div class="container">
			<div class="row main-content-wrap">
				<div class="col-lg-12 main-content pl-lg-6">
					<nav class="toolbox sticky-toolbox sticky-content fix-top">
						<div class="toolbox-left">
							<a href="#" class="toolbox-item left-sidebar-toggle btn btn-outline btn-primary btn-icon-right d-lg-none"><span>Filter</span><i class="p-icon-category-1 ml-md-1"></i></a>
							<div class="toolbox-item toolbox-sort select-menu">
								<label>Bộ Lọc</label>
								<select name="orderby">
									<option value="0" selected="selected">Món ăn nổi bật</option>
									<option value="1">Giá: Tăng dần</option>
									<option value="2">Giá: Giảm dần</option>
									<option value="3">Tên: A-Z</option>
									<option value="4">Tên: Z-A</option>
									<option value="5">Mới nhất</option>
									<option value="6">Cũ nhất</option>
									<option value="6">Tồn kho giảm dần</option>
								</select>
							</div>
						</div>
						<div class="toolbox-right">
						</div>
					</nav>
					<div class="row product-wrapper cols-lg-5 cols-2">
						<?php if (!empty($products)) : foreach ($products as $product) : ?>
								<div class="product-wrap">
									<div class="product shadow-media text-center">
										<figure class="product-media">
											<a href="index.php?controller=product&action=detail&id=<?= $product['id'] ?>">
												<img src="./upload/<?php echo $product['image'] ?>" alt="product" width="295" height="369" />
											</a>
											<div class="product-action-vertical">
												<a href="index.php?controller=cart&action=store&id=<?= $product['id'] ?>" class="btn-product-icon" title="Add to Cart">
													<i class="p-icon-cart-solid"></i>
												</a>
												<a href="#" class="btn-product-icon btn-wishlist" title="Add to Wishlist">
													<i class="p-icon-heart-solid"></i>
												</a>
											</div>
										</figure>
										<div class="product-details">
											<div class="ratings-container">
												<div class="ratings-full">
													<span class="ratings" style="width:60%"></span>
													<span class="tooltiptext tooltip-top"></span>
												</div>
											</div>
											<h5 class="product-name">
												<a href="index.php?controller=product&action=detail&id=<?= $item['id'] ?>">
													<?= $product['name'] ?>
												</a>
											</h5>
											<span class="product-price">
												<?php if ($product['sale']) : ?>
													<del class="old-price"><?= number_format($product['price'], 0, ',', '.') ?></del>
													<ins class="new-price"><?= number_format($product['sale'], 0, ',', '.') ?></ins>
												<?php else : ?>
													<del class="new-price"><?= number_format($product['price'], 0, ',', '.') ?></del>
												<?php endif; ?>
											</span>
										</div>
									</div>
								</div>
						<?php endforeach;
						endif; ?>
					</div>
					<nav class="toolbox toolbox-pagination pt-2 pb-6">
						<p class="toolbox-item show-info"></p>
						<ul class="pagination">
							<li class="page-item disabled">
								<a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
									<i class="p-icon-angle-left"></i>
								</a>
							</li>
							<li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item page-item-dots"></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item">
								<a class="page-link page-link-next" href="#" aria-label="Next">
									<i class="p-icon-angle-right"></i>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End .page-content-->
</main>