<?php 
	$loadModule = 'bjjstack'; 
	$meta_title = 'BjjStack | Michael Ngo | Front-end Developer';
	include_once('header.php');
?>

<body class="casestudy bjjstack <?php if($detect->isMobile()) {echo 'mobile';} ?>">
	<?php include_once('navigation.php');?>

	<article id="main">
		<div class="wrapper" data-type="casestudy" data-start="modules/bjjstack" data-title="<?php echo $meta_title;?>">
	 		<div class="feature">
	 			<img src="img/bjjstack/hero.jpg" alt="BjjStack"/>
	 		</div>

	 	  	<div class="content">
	 	  		<section class="brief">
					<div class="container">
						<div class="sixteen columns">
			 				<h1 class="heading">
			 					<span>Content Is King</span>
								<span class="subtitle">A Digital Jiu Jitsu Magazine</span>
			 				</h1>

							<div class="row">
								<div class="logo five columns omega">
									<div>
										<img src="img/bjjstack/logo.png" alt="BjjStack"/>
									</div>

									<a target="_blank" href="http://www.bjjstack.com">
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
										<p>Freshly launched, BJJStack is an online magazine for jiu jitsu practitioners. A combination of my passions for jiu jitsu and web development, it features social reviews of gear, guest articles, media and more.</p>

										<p>The very first article on competitor <a target="_blank" href="http://bjjstack.com/timelines/kron-gracie">Kron Gracie</a>, went viral in the community and received over 5000 views in 3 days, a reminder that content is always king.</p>
									</div>

									<div class="role">
										<ul class="tags">
											<li><span>Front-End Development</span></li>
											<li><span>PHP/Wordpress Development</span></li>
											<li><span>UI/UX Design</span></li>
											<li><span>Visual Design</span></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</section>

				<section class="mock">
					<div class="container">
						<div class="sixteen columns">
							<div class="row">
								<figure class="eight columns alpha">
									<img src="img/bjjstack/review.jpg" alt="Directories"/>
									<figcaption><sup>[1]</sup> a sample review of a jiu-jitsu gi</figcaption>
								</figure>

								<figure class="eight columns omega">
									<img src="img/bjjstack/article.jpg" alt="Directories"/>
									<figcaption><sup>[2]</sup> a blog article</figcaption>
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
									<h4 style="margin-top: 50px;">PHP/Wordpress Development</h4>
								</div>

								<div class="event seven columns alpha">
									<div>
										<img src="img/bjjstack/timeline-splicing.jpg" alt="Slicing PSD to XHTML"/>

										<div class="description">
											<h6>Slicing PSD to HTML5</h6>
											<p>Joining the bootstrap bandwagon, BJJStack takes advantange of the responsive framework and jquery plugin goodness.</p>

											<span class="tools">Bootstrap, HTML5, Less.js</span>
										</div>
									</div>

									<div class="dot"></div>
								</div>

								<div class="event seven columns omega offset-by-two">
									<div>
										<img src="img/bjjstack/timeline-wordpress.jpg" alt="Custom Wordpress Theme"/>

										<div class="description">
											<h6>Custom Wordpress Theme</h6>
											<p>Custom post types and advanced custom fields provide all the functionality needed for this Wordpress theme.</p>

											<span class="tools">Wordpress, PHP</span>
										</div>
									</div>

									<div class="dot"></div>
								</div>

								<div class="event seven columns alpha">
									<div>
										<img src="img/bjjstack/timeline-parallax.jpg" alt="Parallax"/>

										<div class="description">
											<h6>Parallax</h6>
											<p>Wanting to add a little visual eye candy to the reviews, the above-the-fold feature uses the Parallax effect to showcase the pros and cons of each category.</p>

											<span class="tools">jQuery, javascript</span>
										</div>
									</div>

									<div class="dot"></div>
								</div>

								<div class="event seven columns omega offset-by-two">
									<div>
										<img src="img/bjjstack/timeline-plugin.jpg" alt="Wordpress Plugin"/>

										<div class="description">
											<h6>Extending Wordpress Plugin</h6>
											<p>Although the <a target="_blank" href="http://www.myreviewplugin.com/">My Review Plugin</a> provided the bare bones structure for reviews, the plugin needed to be extended to provide editing/updating functionality.</p>

											<span class="tools">Wordpress, PHP, Mysql</span>
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
							<li class="one-third column project asr">
								<a class="ajax" href="asr">
									<div class="info">
										<div class="background"></div>

										<div class="description">
											<h4>Art School Reviews</h4>
											<span class="snippet">Art School Reviews is an online review aggregator for post-secondary creative institutions.</span>
											<span class="link">View Project</span>
										</div>
									</div>

									<img src="img/projects/asr.jpg" alt="Art School Reviews"/>
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

							<li class="one-third column project conductive_thread">
								<a class="ajax" href="conductivethread">
									<div class="info">
										<div class="background"></div>

										<div class="description">
											<h4>ConductiveThread.ca</h4>
											<span class="snippet">ConductiveThread.ca keeps the electronic DIY community stocked with their favorite thread.</span>
											<span class="link">View Project</span>
										</div>
									</div>

									<img src="img/projects/conductive_thread.jpg" alt="Conductive Thread"/>
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