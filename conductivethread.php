<?php 
	$loadModule = 'conductivethread'; 
	$meta_title = 'Conductive Thread | Michael Ngo | Front-end Developer';
	include_once('header.php');
?>

<body class="casestudy conductivethread <?php if($detect->isMobile()) {echo 'mobile';} ?>">
	<?php include_once('navigation.php');?>

	<article id="main">
		<div class="wrapper" data-type="casestudy" data-start="modules/conductivethread" data-title="<?php echo $meta_title;?>">
	 		<div class="feature">
	 			<img src="img/conductivethread/hero.jpg" alt="Conductive Thread"/>
	 		</div>

	 	  	<div class="content">
	 	  		<section class="brief">
					<div class="container">
						<div class="sixteen columns">
			 				<h1 class="heading">
			 					<span>A Digital Lemonade Stand</span>
								<span class="subtitle">Hustling on the Interwebs</span>
			 				</h1>

							<div class="row">
								<div class="logo five columns omega">
									<div>
										<img src="img/conductivethread/logo.png" alt="Art School Logo"/>
									</div>

									<a target="_blank" href="http://www.conductivethread.ca">
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
										<p>Wanting to dive into the world of entrepreneurship, I did what any kid would do: built a lemonade stand. Paralleling <a target="_blank" href="http://www.appsumo.com/sumo-jerky/">AppSumo's jerky venture</a>, I really needed to know that making a dollar online was possible. ConductiveThread.ca is an answer to that hypthothesis.</p>

										<p>Used to create touchscreen compatibile gloves, ConductiveThread.ca keeps the electronic DIY community stocked with their favorite thread. With a little SEO magic, it reached the top of the SERPS on Google and continually brings in sales from around the world.</p>
									</div>

									<div class="role">
										<ul class="tags">
											<li><span>Entrepreneurship</span></li>
											<li><span>Front-End Development</span></li>
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
						<img src="img/conductivethread/screenshot.jpg" alt="Conductive Thread"/>
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
						</ul>
					</div>
				</section>	
			</div>
		</div>
	</article>	

	<div class="cover"></div>
</body>
</html>