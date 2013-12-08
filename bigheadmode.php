<?php 
	$loadModule = 'bigheadmode'; 
	$meta_title = 'Big Head Mode | Michael Ngo | Front-end Developer';
	include_once('header.php');
?>

<body class="casestudy bigheadmode <?php if($detect->isMobile()) {echo 'mobile';} ?>">
	<?php include_once('navigation.php');?>

	<article id="main">
		<div class="wrapper" data-type="casestudy" data-start="modules/bigheadmode" data-title="<?php echo $meta_title;?>">
	 		<div class="feature">
	 			<img src="img/bigheadmode/hero.jpg" alt="Big Head Mode"/>
	 		</div>

	 	  	<div class="content">
	 	  		<section class="brief">
					<div class="container">
						<div class="sixteen columns">
			 				<h1 class="heading">
			 					<span>A Papercraft Homage</span>
								<span class="subtitle">to our favorite easter egg setting</span>
			 				</h1>

							<div class="row">
								<div class="logo five columns omega">
									<div>
										<img src="img/bigheadmode/logo.png" alt="Big Head Mode"/>
									</div>
								</div>

								<div class="eleven columns alpha">
									<div>
										<p>I grew up on the N64, spending countless hours after school playing Smash Brothers, Mario Tennis, and Tony Hawk. But nothing would test the stability of friendships more so than Goldeneye 007. Notorious for it's cheat codes, the game  played inspiration to this 'Big Head Mode' halloween costume.</p>

										<p>Utilizing skills and technologies from multiple disciplines, the project involved creating a 3D replica of my head to generate cutting and folding patterns for construction. Good friend and concept artist <a target="_blank" href="http://emanlandau.com/">Eman Landau</a> provided much of his expertise in helping perfect the final product.</p>
									</div>
								</div>
							</div>
						</div>
					</div> 
				</section>

				<section class="papercraft">
					<div class="container">
						<div class="six columns alpha">
							<div class="animation" 
								data-0="background: !url(img/bigheadmode/animation/animation0001.gif) no-repeat;"

								data-40p="background: !url(img/bigheadmode/animation/animation0002.gif) no-repeat;"
								data-43p="background: !url(img/bigheadmode/animation/animation0003.gif) no-repeat;"
								data-46p="background: !url(img/bigheadmode/animation/animation0004.gif) no-repeat;"
								data-49p="background: !url(img/bigheadmode/animation/animation0005.gif) no-repeat;"
								data-52p="background: !url(img/bigheadmode/animation/animation0006.gif) no-repeat;"
								data-55p="background: !url(img/bigheadmode/animation/animation0007.gif) no-repeat;"
								data-58p="background: !url(img/bigheadmode/animation/animation0008.gif) no-repeat;"
								data-61p="background: !url(img/bigheadmode/animation/animation0009.gif) no-repeat;"
								data-64p="background: !url(img/bigheadmode/animation/animation0010.gif) no-repeat;"
								data-67p="background: !url(img/bigheadmode/animation/animation0011.gif) no-repeat;"
								data-70p="background: !url(img/bigheadmode/animation/animation0012.gif) no-repeat;"
								data-73p="background: !url(img/bigheadmode/animation/animation0013.gif) no-repeat;"
								data-76p="background: !url(img/bigheadmode/animation/animation0014.gif) no-repeat;"
								data-79p="background: !url(img/bigheadmode/animation/animation0015.gif) no-repeat;"
								data-82p="background: !url(img/bigheadmode/animation/animation0016.gif) no-repeat;"
								data-85p="background: !url(img/bigheadmode/animation/animation0017.gif) no-repeat;"
								data-88p="background: !url(img/bigheadmode/animation/animation0018.gif) no-repeat;"
								data-91p="background: !url(img/bigheadmode/animation/animation0019.gif) no-repeat;"
								data-94p="background: !url(img/bigheadmode/animation/animation0020.gif) no-repeat;"
							>

							<?php if(!$detect->isMobile()) :?>
								<img class="preload" src="img/bigheadmode/animation/animation0001.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0002.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0003.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0004.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0005.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0006.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0007.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0008.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0009.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0010.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0011.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0012.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0013.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0014.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0015.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0016.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0017.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0018.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0019.gif" alt="preload"/>
								<img class="preload" src="img/bigheadmode/animation/animation0020.gif" alt="preload"/>
							<?php endif;?>
								
							</div>
						</div>

						<div class="facegen nine columns omega offset-by-one">
							<img src="img/bigheadmode/pepakura.png" alt="Pepakura Designer"/>
						</div>
					</div>
				</section>

				<section class="pepakura">
					<div class="container">
						<div class="five columns alpha">
							<p>Utilizing FaceGen Modeller, a 3D replica of my head was generated from front-facing and side-profile images. This model was exported into Maya where the amount of polygons was reduced and the faces retextured. From there, the object was imported into Pepakura Designer which generated unfolded patterns that could fit on letter sized paper. The model was printed on 80 pds glossy stock. It took 3 days to cut, fold, just finishing on time for a Halloween deadline.</p>
						</div>

						<div class="eleven columns omega">
							<img src="img/bigheadmode/bhm1.jpg" alt="Big Head Mode"/>
							<img style="margin-top: -105px;" src="img/bigheadmode/bhm2.png" alt="Big Head Mode"/>
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
						</ul>
					</div>
				</section>	
			</div>
		</div>
	</article>	

	<div class="cover"></div>
</body>
</html>