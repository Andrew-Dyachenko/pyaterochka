<?php include('header.php'); ?>
<div class="wrapper">
	<div id="mainSlider" class="carousel slide mainSlider" data-ride="carousel" data-interval="false">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#mainSlider" data-slide-to="0"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item chiken">
				<img src="/dist/images/chiken.png" alt="Курочка">
				<div class="carousel-caption">
					<p class="event">
						с 30 июня по 6 июля 2015 года
					</p>
					<h3 class="title">
						Окорочка куриные<br> охлажденные
					</h3>
					<p class="details">
						1 кг
					</p>
				</div>
			</div>
		</div>
		<div class="priceTag spriteSmith wow fadeIn" data-wow-delay=".382s">
			<div class="icon-priceTag">
				<div class="price">
					<div class="overflow">
						129 <sup>00</sup>
					</div>
				</div>
				<div class="oldPrice">
					<div class="overflow">
						<div class="inline-block">
							154 <sup>80</sup>
							<strike class="wow fadeIn" data-wow-delay="1.618s"></strike>
						</div>
					</div>
				</div>
				<div class="discount wow pulse" data-wow-delay="2.382s">
					-20%
				</div>
			</div>
		</div>
		<div class="social">
			<a href="#" class="item vk spriteSmith">
				<span class="icon-vk"></span>
			</a>
			<a href="#" class="item od spriteSmith">
				<span class="icon-odnoklassniki"></span>
			</a>
			<a href="#" class="item ma spriteSmith">
				<span class="icon-mail"></span>
			</a>
		</div>
	</div>
</div>
<?php include('footer.php'); ?>