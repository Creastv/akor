<?php if( have_rows('slider') ): ?>
	<div class="hero">
			<div class="swiper-container inw-carousel">
				<div class="swiper-wrapper">
				<?php while( have_rows('slider') ): the_row(); 
					$image = get_sub_field('zdjecie');
					$title = get_sub_field('naglowek');
					$desc = get_sub_field( 'opis' );
					$tag = get_sub_field( 'tag' );
					$banner = get_sub_field('baner');
					$link = get_sub_field('link');
					if( $link ): 
						$link_url = $link['url'];
						$link_title = $link['title'];
						$link_target = $link['target'] ? $link['target'] : '_self';
				    endif;

					?>
				<div class="swiper-slide"  style="background-image: url(<?php echo $image; ?>);">
					<div class="bg">
						<div class="copy">
							<div class="container">
								<div class="row">
									<div class="col-md-12">
										<!-- <div class="badge-slider">
											<span class="pro">2%</span>
											<span class="typ">kredyt</span>
										</div> -->
										<?php echo $banner; ?>
									</div>
									<div class="col-md-12 copy__wraper">
										
										<div class="content">
										<<?php echo $tag; ?> class="title">
										<?php echo $title; ?>
										</ <?php echo $tag; ?> >
										<?php echo "<p>" . $desc . "</p>"; ?>
										</div>
										<?php if( $link ): ?>
										<div class="btn-slider">
											<a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>" >
											<span><?php echo esc_html( $link_title ); ?></span>
											<!-- Generator: Adobe Illustrator 23.0.1, SVG Export Plug-In  -->
											<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="59px"
												height="59px" viewBox="0 0 59 59" style="enable-background:new 0 0 59 59;" xml:space="preserve">
												<polygon fill="#FFFFFF" points="24.9,41.8 24.2,41.2 34.8,30.3 23.6,18.8 24.3,18.2 36.2,30.3 		"/>
												<path fill="#FFFFFF" d="M29.5,59C13.2,59,0,45.8,0,29.5C0,13.2,13.2,0,29.5,0S59,13.2,59,29.5C59,45.8,45.8,59,29.5,59z M29.5,1
														C13.8,1,1,13.8,1,29.5C1,45.2,13.8,58,29.5,58S58,45.2,58,29.5C58,13.8,45.2,1,29.5,1z"/>
											</svg>
											</a>
										</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
						
				</div>
				<?php endwhile; ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
			</div>
		<?php endif; ?>