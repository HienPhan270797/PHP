<section id="slider"><!--slider-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div id="slider" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						{foreach $slider_list as $i=>$na}
						{if $i==0}
						<li data-target="#slider" data-slide-to="{$i}" class="active"></li>
						{else}
						<li data-target="#slider" data-slide-to="{$i}"></li>
						{/if}
						{/foreach}
					</ol>

					<div class="carousel-inner">
						{foreach $slider_list as $k=>$slider}
						{if $k==0}
						<div class="item active">
						{else}
						<div class="item">
						{/if}
							<div class="col-sm-6">
								<h1>{$slider->title}</h1>
								<h2>{$slider->subtitle}</h2>
								<p>{$slider->content}</p>
								<a href="{$slider->link}" class="btn btn-default get">Xem chi tiết</a>
							</div>
							<div class="col-sm-6">
								<img src="images/home/{$slider->picture}" class="girl img-responsive" alt="" />
								<img src="images/home/pricing.png"  class="pricing" alt="" />
							</div>
						</div> <!-- ./item -->
						{/foreach}
					</div> <!-- ./carousel-inner -->

					<a href="#slider" class="left control-carousel hidden-xs" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a href="#slider" class="right control-carousel hidden-xs" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
		</div>
	</div>
</section><!--/slider-->