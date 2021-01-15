<?php
/*
    Template Name: Home Page
 */

//advanced custom fields
$income_featured_image = get_field('income_featured_image');
$income_section_title = get_field('income_section_title');
$income_section_desc = get_field('income_section_description');
$reason_one_title = get_field('reason_one_title');
$reason_one_desc = get_field('reason_one_description');
$reason_two_title = get_field('reason_two_title');
$reason_two_desc = get_field('reason_two_description');
//who
$who_featured_image = get_field('who_featured_image');
$who_section_title = get_field('who_section_title');
$who_section_body = get_field('who_section_body');
//features
$features_section_image = get_field('features_section_image');
$features_section_title = get_field('features_section_title');
$features_section_body = get_field('features_section_body');
//project feature
$project_feature_title = get_field('project_feature_title');
$project_feature_body = get_field('project_feature_body');
//video section
$video_section_title = get_field('video_section_title');
$video_section_url = get_field('video_url');
//instructor
$instructor_section_title = get_field('instructor_section_title');
$instructor_name = get_field('instructor_name');
$bio_excerpt = get_field('bio_excerpt');
$full_bio = get_field('full_bio');
$twitter_username = get_field('twitter_username');
$facebook_username = get_field('facebook_username');
$google_plus_username = get_field('google_plus_username');
$num_students = get_field('num_students');
$num_reviews = get_field('num_reviews');
$num_courses = get_field('num_courses');


get_header();
?>

	<main id="primary" class="site-main">

        <!-- HERO
    ================================================== -->
    <section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
    			
    				<div class="col-sm-5">
		    			<img src="wp-content/themes/ayohdev-starter/assets/img/logo-badge.png" alt="Bootstrap to Wordpress" class="logo">
    				</div><!-- col -->
		    		
		    		<div class="col-sm-7 hero-text">
			    		<h1><?php bloginfo( 'name' ) ?></h1>
			            <p class="lead"><?php bloginfo( 'description' )?></p>
			            
			            <div id="price-timeline">
			            	<div class="price active">
			            		<h4>Pre-Launch Price <small>Ends soon!</small></h4>
			            		<span><?php echo $prelaunch; ?></span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4>Launch Price <small>Coming soon!</small></h4>
			            		<span><?php echo $launch; ?></span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4>Final Price <small>Coming soon!</small></h4>
			            		<span><?php echo $final; ?></span>
			            	</div><!-- end price -->
			            </div><!-- price-timeline -->

			            <p><a class="btn btn-lg btn-danger" href="/" role="button">Enroll now &raquo;</a></p>
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>
	
	
	<!-- OPT IN SECTION
	================================================== -->
    <section id="optin">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8">
					<p class="lead"><strong>Subscribe to our mailing list.</strong> We'll send something special as a thank you.</p>
				</div><!-- end col -->
				
				<div class="col-sm-4">
					<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
						Click here to subscribe
					</button>
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
    </section><!-- optin -->
    
    
    <!-- BOOST YOUR INCOME
	================================================== -->
	<section id="boost-income">
		<div class="container">
			
			<div class="section-header">
                <!-- If user uploaded an image-->
                <?php  if( !empty($income_featured_image) ) : ?>
                    <img src="<?php echo $income_featured_image['url']; ?>" alt="<?php echo $income_featured_image['alt']?>">
                <?php endif?>

				<h2><?php echo $income_section_title;?></h2>
			</div><!-- section-header -->
			
			<p class="lead"><?php echo $income_section_desc;?></p>
			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $reason_one_title?></h3>
					<p><?php echo $reason_one_desc?></p>
				</div><!-- end col -->
				
				<div class="col-sm-6">
                    <h3><?php echo $reason_two_title?></h3>
					<p><?php echo $reason_two_desc?></p>
				</div><!-- end col -->
			</div><!-- row -->
		
		</div><!-- container -->
	</section><!-- boost-income -->
	
	
	<!-- WHO BENEFITS
	================================================== -->
	<section id="who-benefits">
		<div class="container">
			
			<div class="section-header">
            <?php  if( !empty($who_featured_image) ) : ?>
                    <img src="<?php echo $who_featured_image['url']; ?>" alt="<?php echo $who_featured_image['alt']?>">
                <?php endif?>
				<h2><?php echo $who_section_title;?></h2>
			</div><!-- section-header -->
			
			<div class="row">
				<div class="col-sm-8 offset-sm-2">
                    <?php echo $who_section_body;?>
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- who-benefits -->
    

	<!-- COURSE FEATURES
	================================================== -->
	<section id="course-features">
		<div class="container">
		
			<div class="section-header">
                <?php  if( !empty($features_section_image) ) : ?>
                    <img src="<?php echo $features_section_image['url']; ?>" alt="<?php echo $features_section_image['alt']?>">
                <?php endif?>
                <h2><?php echo $features_section_title;?></h2>
                <?php if( !empty($features_section_body)) : ?>
                    <p class="lead mb-5"><?php echo $features_section_body;?></p>    
                <?php endif?>
            </div><!-- section-header -->
			
			<div class="row">
                
            
                <?php $loop = new WP_Query(array('post_type' => 'course_feature', 'orderby' => 'post_id', 'order' => 'ASC'));?>

                <?php while( $loop->have_posts()) : $loop->the_post(); ?>
                <div class="col-sm-2">
					<i class="<?php the_field('course_feature_icon')?>"></i>
					<h4><?php the_title();?></h4>
                </div><!-- end col -->
                
                <?php endwhile?>
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- course-features -->
	
	
	<!-- PROJECT FEATURES
	================================================== -->
	<section id="project-features">
		<div class="container">
		
            <h2><?php echo $project_feature_title; ?></h2>
            <p class="lead"><?php echo $project_feature_body; ?></p>
			
			<div class="row">

                <?php $loop = new WP_Query(array('post_type' => 'project_feature', 'orderby' => 'post_id', 'order' => 'ASC'));?>

                    <?php while( $loop->have_posts()) : $loop->the_post(); ?>

                        <div class="col-sm-4">
                            <?php 
                                if( has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                            ?>

                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content();?></p>
                        </div><!-- col -->

                    <?php endwhile?>
				
			</div><!-- row -->
			
		</div><!-- container -->
	</section><!-- project-features -->
	
	
	<!-- VIDEO FEATURETTE
	================================================== -->
	<section id="featurette">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 offset-sm-2">
					<h2><?php echo $video_section_title; ?></h2>
					<iframe width="100%" height="415" src="<?php echo $video_section_url; ?>" frameborder="0" allowfullscreen></iframe>
				</div><!-- end col -->
			</div><!-- row -->			
		</div><!-- container -->
	</section><!-- featurette -->
	
	
	<!-- INSTRUCTOR
	================================================== -->
	<section id="instructor">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
						<div class="col-lg-8">
							<h2><?php echo $instructor_section_title; ?><br><small><?php echo $instructor_name; ?></small></h2>
						</div><!-- end col -->
						<div class="col-lg-4">
                            <?php if ( !empty($twitter_username)) :?>
                                <a href="<?php echo $twitter_username; ?>" class="badge social twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <?php endif ?>
                            <?php if ( !empty($facebook_username)) :?>
                                <a href="<?php echo $facebook_username; ?>" class="badge social facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <?php endif ?>
                            <?php if ( !empty($google_plus_username)) :?>
                                <a href="<?php echo $google_plus_username; ?>" class="badge social gplus" target="_blank"><i class="fa fa-google-plus"></i></a>
                            <?php endif ?>
						</div><!-- end col -->
					
					</div><!-- row -->
					
					<p class="lead"><?php echo $bio_excerpt; ?><p>
					
                    <?php echo $full_bio; ?>
					
					<hr>
					
					<h3>The Numbers <small>They Don't Lie</small></h3>
					<div class="row">
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_students; ?><span>students</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_reviews; ?><span>reviews</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
						
						<div class="col-xs-4">
							<div class="num">
								<div class="num-content">
									<?php echo $num_courses; ?><span>courses</span>
								</div><!-- num-content -->
							</div><!-- num -->
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- instructor -->
	
	
	<!-- TESTIMONIALS
	================================================== -->
	<section id="kudos">
		<div class="container">
			<div class="row">
			
				<div class="col-sm-8 offset-sm-2">
					<h2>What People Are Saying About Brad</h2>
					
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="wp-content/themes/ayohdev-starter/assets/img/brennan.jpg" alt="Brennan">
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								These videos are well created, concise, fast-paced, easy to follow, and just funny enough to keep you chuckling as you're slamming out lines of code. I've taken 3 courses from this instructor. Whenever I have questions he is right there with a simple solution or a helpful suggestion to keep me going forward with the course work.
								<cite>&mdash; Brennan, graduate of all of Brad's courses</cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
					
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="wp-content/themes/ayohdev-starter/assets/img/ben.png" alt="Illustration of a man with a moustache">
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								I found Brad to be a great teacher, and a very inspiring person. It's clear he is very passionate about helping designers learn to code, and I look forward to more courses from him!
								<cite>&mdash; Ben, graduate of Build a Website from Scratch with HTML &amp; CSS</cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
					
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="wp-content/themes/ayohdev-starter/assets/img/aj.png" alt="Illustration of a man with a beard">
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								Brad is amazing and I honestly think he's the best tutor of all the courses I have taken on Udemy. Will definitely be following him in the future. Thanks Brad!
								<cite>&mdash; AJ, graduate of Code a Responsive Website with Bootstrap 3</cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
	
					<!-- TESTIMONIAL -->
					<div class="row testimonial">
						<div class="col-sm-4">
							<img src="wp-content/themes/ayohdev-starter/assets/img/ernest.png" alt="Illustration of a man with a goatee">
						</div><!-- end col -->
						<div class="col-sm-8">
							<blockquote>
								Brad is an excellent instructor. His content is super high quality, and you can see the love and care put into every section. The tutorials are the perfect length, and you feel like your doing something right out the gate! I really can't believe this is free. I highly recommend taking advantage of this course.
								<cite>&mdash; Ernest, graduate of Code Dynamic Websites with PHP</cite>
							</blockquote>
						</div><!-- end col -->
					</div><!-- row -->
					
				</div><!-- end col -->
				
			</div><!-- row -->
		</div><!-- container -->
	</section><!-- kudos -->


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
