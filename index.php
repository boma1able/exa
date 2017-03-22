<?php get_header(); ?>

	<div class="container grid">
		<div class="row">
			<div class="box col-md-6 col-sm-4 col-xs-12">
				<div class="photo">
					<a href="">
						<img class="img-responsive" src="<?php echo home_url('/wp-content/themes/exa/', 'http');?>img/sample-thumb1.jpg" alt="img">
						  <span class="info">
							<div class="big-title">We help brands connect with people</div>
							<span class="exerpt">
							  <p>Let's see why you need to go digital. We will study how to improve your perception and rebuild your image.</p>
							</span>
							<em class="arrow-right">
								<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
							</em>
						  </span>
					</a>
				</div>
			</div>

				<?php
				global $post;
				$args = array(
					'offset' => 1,
					'posts_per_page' => '8'
				);

				$myposts = get_posts( $args );
				foreach( $myposts as $post ){ setup_postdata($post);
					?>
				<div class="box col-md-3 col-sm-4 col-xs-6">
					<div class="thumb">
						<div class="photo">
								<a href="<?php the_permalink(); ?>">
									<?php echo get_the_post_thumbnail( $page->ID, 'medium', array('class' => 'img-responsive')); ?>
									<div class="info">
									  <strong class="title"><h4><?php the_title(); ?></h4></strong>
									  <span class="exerpt"><p><?php the_excerpt(); ?></p></span>
									<em class="arrow-right">
										<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
									</em>
									</div>
								</a>
						</div>
					</div>
				</div>
					<?php
				}
				wp_reset_postdata();
				?>
		</div>
	</div>
<?php
get_footer();
