<?php 
	$loadModule = 'asr'; 
	$meta_title = 'Art School Reviews | Michael Ngo | Front-end Developer';
	include_once('header.php');
?>

<body class="casestudy asr <?php if($detect->isMobile()) {echo 'mobile';} ?>">
	<?php include_once('navigation.php');?>

	<article id="main">
		<div class="wrapper" data-type="casestudy" data-start="modules/asr" data-title="<?php echo $meta_title;?>">
	 		<div class="feature">
	 			<img src="img/asr/hero.jpg" alt="Art School Reviews"/>
	 		</div>

	 	  	<div class="content">
	 	  		<section class="brief">
					<div class="container">
						<div class="sixteen columns">
			 				<h1 class="heading">
			 					<span>Building a Community</span>
								<span class="subtitle">A platform to share education experiences</span>
			 				</h1>

							<div class="row">
								<div class="logo five columns omega">
									<div>
										<img src="img/asr/logo.png" alt="Art School Logo"/>
									</div>

									<a target="_blank" href="http://beta.artschoolreviews.ca">
										<h5>Launch Website</h5>

										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
											 width="16px" height="16px" viewBox="0 0 16 16" enable-background="new 0 0 16 16" xml:space="preserve">
										<g>
											<g>
												<g>
													<path class="arrow" fill="#C33" d="M11.829,9.828c0.292,0.293,0.53,0.193,0.53-0.219V4.391c0-0.412-0.337-0.75-0.75-0.75H6.391
														c-0.412,0-0.512,0.239-0.22,0.531L11.829,9.828z"/>
												</g>
												<path class="arrow" fill="#C33" d="M7.781,10.939c-0.395,0.397-1.039,0.397-1.436,0L5.059,9.652c-0.397-0.396-0.397-1.039,0-1.436L8.98,4.296
													c0.395-0.396,1.038-0.396,1.437,0l1.284,1.287c0.398,0.396,0.398,1.04,0,1.437L7.781,10.939z"/>
											</g>
											<path fill="#C33" d="M9.078,11.181v1.47c0,0.236-0.191,0.428-0.428,0.428h-1.47l-0.023,0.023l-0.023-0.023H3.35
												c-0.236,0-0.428-0.191-0.428-0.428V8.865L2.899,8.842l0.023-0.022V7.35c0-0.236,0.192-0.428,0.428-0.428h1.47l1.5-1.5H3.35
												c-1.064,0-1.928,0.863-1.928,1.928v5.301c0,1.064,0.863,1.928,1.928,1.928H8.65c1.064,0,1.928-0.863,1.928-1.928V9.68L9.078,11.181
												z"/>
										</g>
										</svg>
									</a>
								</div>

								<div class="eleven columns alpha">
									<div>
										<p>
<p>Deciding to receive a post-secondary education can be one of the most important life decisions one can make. Deciding to recieve a post-secondary education in an artistic field can be one of the worst. With a myriad of educational institutions across the country vying for attention, Art School Reviews was established to cut through marketing PR and help aspiring students learn about the programs directly from graduated alumni.</p>

<p>Originally launched in 2009 as a wordpress blog, the site now collectively attracts over 60,000 visitors a year. Working collaboratively with fellow interaction designer Crystal Cui, a new version of ASR from the ground up, interchanging roles in UX, front-end, and back-end development.</p>
									</div>

									<div class="role">
										<ul class="tags">
											<li><span>Front-End Development</span></li>
											<li><span>CodeIgniter/PHP Development</span></li>
											<li><span>UI/UX Design</span></li>
											<li><span>Visual Design</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</section>

				<section class="review">
					<div class="container">
						<div class="sixteen columns">
							<div class="row">
								<figure class="eight columns alpha">
									<img src="img/asr/review.jpg" alt="Directories"/>
									<figcaption><sup>[1]</sup> a sample review of a program</figcaption>
								</figure>

								<figure class="eight columns omega">
									<img src="img/asr/directory.jpg" alt="Directories"/>
									<figcaption><sup>[2]</sup> a directory of reviews pertaining to industry</figcaption>
								</figure>
							</div>
						</div>
					</div>
				</section>

				<section class="development">
					<div class="container">
						<div class="sixteen columns">
							<h3 class="subheading">Development Cycle</h3>
								
							<div class="timeline row">							
								<div class="spine"></div>

								<div class="seven columns alpha">
									<h4>Front-End Development</h4>
								</div>

								<div class="seven columns omega offset-by-two">
									<h4 style="margin-top: 50px;">PHP/CodeIgniter Development</h4>
								</div>

								<div class="event seven columns alpha">
									<div>
										<img src="img/asr/timeline-splicing.jpg" alt="Slicing PSD to XHTML"/>

										<div class="description">
											<h6>Slicing PSD to XHTML</h6>
											<p>Before preprocessors were the norm, we converted over a dozen designs to html templates with plain 'ol CSS.</p>

											<span class="tools">XHTML, CSS</span>
										</div>
									</div>

									<div class="dot"></div>
								</div>

								<div class="event seven columns omega offset-by-two">
									<div>
										<img src="img/asr/timeline-submission.jpg" alt="CodeIgniter Integration"/>

										<div class="description">
											<h6>CodeIgniter Integration</h6>
											<p>Diving head first into back-end development, ASR launched with custom taxonomies, user profiles, review submissions, program directories, and more.</p>

											<span class="tools">CodeIgniter, PHP, Mysql</span>
										</div>
									</div>

									<div class="dot"></div>
								</div>

								<div class="event seven columns alpha">
									<div>
										<img src="img/asr/timeline-distribution.jpg" alt="Interactive Review Submission"/>

										<div class="description">
											<h6>Interactive Review Submission</h6>
											<p>The multi-step review submission process is littered with clever UI interactions to indicate progress as well as an ongoing review averages.</p>

											<span class="tools">jQuery, javascript</span>
										</div>
									</div>

									<div class="dot"></div>
								</div>

								<div class="event seven columns omega offset-by-two">
									<div>
										<img src="img/asr/timeline-queries.jpg" alt="Review and School Directories"/>

										<div class="description">
											<h6>Review and School Directories</h6>
											<p>CodeIgniter's Active Record provided a layer abstraction that made it much easier to manipulate queries to return meaningful results.</p>

											<span class="tools">CodeIgniter, PHP, Mysql</span>
										</div>
									</div>

									<div class="dot"></div>
								</div>	

							</div>
						</div>
					</div>
				</section>

				<section class="more-work">
					<div class="container">
						<h1 class="heading">
							<span>More Work</span>
							<span class="subtitle">A showcase of design,</span>
							<span class="subtitle">development, experiments and more</span>
						</h1>

			 			<ul class="projects row">
							<li class="one-third column project foodsters">
								<a class="ajax" href="foodsters">
	 								<div class="info">
										<div class="background"></div>

										<div class="description">
											<h4>Foodsters Restaurant Delivery</h4>
											<span class="snippet">Foodsters is a "clicks to bricks" startup offering Vancouver the best in restaurant delivery.</span>
											<span class="link">View Case Study</span>
										</div>
									</div>

									<img src="img/projects/foodsters.jpg" alt="Foodsters Restaurant Delivery"/>
								</a>
							</li>

							<li class="one-third column project bjjstack">
								<a class="ajax" href="bjjstack">
									<div class="info">
										<div class="background"></div>

										<div class="description">
											<h4>BjjStack</h4>
											<span class="snippet">BJJStack is an online community bringing you the latest in jiu-jitsu reviews, media, and more.</span>
											<span class="link">Visit Website</span>
										</div>
									</div>

									<img src="img/projects/bjjstack.jpg" alt="BjjStack"/>
								</a>
							</li>

							<li class="one-third column project bhm">
								<a class="ajax" href="bigheadmode">
									<div class="info">
										<div class="background"></div>

										<div class="description">
											<h4>Big Head Mode</h4>
											<span class="snippet">Big Head Mode is a papercraft homage to the easter-egg setting found in our favorite childhood video games.</span>
											<span class="link">View Project</span>
										</div>
									</div>

									<img src="img/projects/bighead.jpg" alt="Big Head Mode"/>
								</a>
							</li>
						</ul>
					</div>
				</section>	
			</div>
		</div>
	</article>	

	<div class="cover"></div>
</body>
</html>