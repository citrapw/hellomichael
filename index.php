<?php 
	$loadModule = 'home'; 
	$meta_title = 'Michael Ngo | Front-end developer by day, UX designer by night';
	include_once('header.php');
?>

<body class="home <?php if($detect->isMobile()) {echo 'mobile';} ?>">
	<?php include_once('navigation.php');?>

	<div id="main">
		<div class="wrapper" data-start="modules/home" data-title="<?php echo $meta_title;?>">
			<?php if(!$detect->isMobile()):?>
		 		<div class="feature">
				  	<video id="video" autoplay loop width="0">
				  		<source src="video/portrait.webm" type="video/webm">
				    	<source src="video/portrait.mp4" type="video/mp4">
				  	</video>
			  	</div>
		  	<?php endif;?>

	 	  	<div class="content">
			  	<div class="modal">
			  		<div class="video-wrapper">
			  			<div class="iframe"></div>
			  			<button class="flat">Close</button>
			  		</div>
			  	</div>

				<div class="container">
					<?php if(!$detect->isMobile()):?>
			 			<img class="leftHand moveHand" src="img/lefthand.png" alt="hand"/>
			 			<img class="rightHand moveHand" src="img/righthand.png" alt="hand"/>
		 			<?php endif;?>

		 			<section id="about" class="row">
		 				<h1 class="heading">
		 					<span>Michael Ngo</span>
		 					
			 				<span class="subtitle byline">Front-End Developer by Day, Ux Designer by Night</span>
							<span class="subtitle">Perfecting the web one pixel at a time</span>
		 				</h1>

		 				<div class="eleven columns">
							<p>Though I am a front-end developer by day, I have put pen to paper during a design process, been completely lost in a full stack environment, and have even worn the entrepreneurship hat.</p>

							<p>I am an alumni of <a target="_blank" href="http://www.sfu.ca/siat.html">SFU's School of Interactive Arts + Technology</a> program, graduating with a Bachelors of Science with a major in Media Arts. Currently residing in Vancouver, B.C, Canada, I'm looking to grow professionally and personally anywhere outside of the country.</p>

							<p>I want to be involved in projects that I can be proud of, join an amazing team, and advance my development career. Take some time to look at my work, credentials, and if you're interested in helping me make this happen, <a class="ajax scroll" target="_blank" href="?section=contact">let's get in touch</a>.</p>
						</div>

						<div class="five columns resume">
							<a class="ajax" href="resume">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
								<polygon fill="#FCFCFC" points="8.75,4.375 8.75,44 39.5,44 39.5,12.875 30.781,4.281 "/>
								<path fill="#C33"  d="M31.075,2.817H7.266v42.367h33.468V12.017L31.075,2.817z M31.837,7.053l4.448,4.237h-4.448V7.053z M9.808,42.641V5.36
									h19.487v8.473h8.896v28.808H9.808z"/>
								</svg>

								<h4>Resume</h4>
								<span class="subtitle">View Profile</span>
							</a>

							<a target="_blank" href="https://github.com/hellomichael">
								<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
									 width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
								<g>
									<g>
										<path fill="#C33" d="M22.583,44.019c0.289-1.811,0.232-8.261,0.207-10.292l-0.027-2.117l-1.83,1.064c-0.157,0.09-1.538,0.959-1.538,3.293
											c0,0.336-0.021,5.76-0.021,6.503c0,0.22-0.179,0.45-0.443,0.657c0.16-0.346,0.259-0.74,0.259-1.197
											c0-1.382-0.029-4.938-0.029-4.938l-0.013-1.445l-1.428,0.236c-0.011,0.003-1.033,0.17-2.469,0.17c-2.734,0-3.829-1.307-4.53-2.8
											c0.61,0.697,1.296,1.304,2.199,1.585c0.718,0.223,1.537,0.34,2.372,0.34c1.39,0,2.683-0.314,3.546-0.863l0.506-0.32l0.062-0.598
											c0.087-0.857,0.738-1.727,1.387-2.258c0.555-0.145,2.62-0.39,4.835-0.39c2.045,0,2.973,0.224,3.177,0.341
											c1.231,0.764,1.825,1.566,1.825,5.563c0,2.398-0.021,3.541-0.033,4.271c-0.01,0.497-0.016,0.811-0.01,1.188
											c0.006,0.454,0.119,0.854,0.294,1.205c-0.489-0.407-0.512-0.865-0.5-1.033l0.006-0.139l-0.079-5.331
											c0.041-0.682,0.048-2.574-0.83-3.505c-0.354-0.373-0.824-0.579-1.322-0.579h-1.236v9.96c0,0.541,0.084,1.008,0.213,1.41
											c-0.685-0.705-0.648-2.697-0.623-4.154l0.008-0.417c0.027-1.847-0.016-5.767-0.018-5.933l-0.014-1.248l-3.287,0.067l0.045,1.255
											c0.149,4.101,0.076,9.051-0.303,9.898C22.847,43.671,22.723,43.854,22.583,44.019L22.583,44.019z"/>
										<path fill="#C33" d="M7.204,28.861c-0.21,0-0.431,0.021-0.663,0.063c-0.758,0.14-0.606,0.632,0.049,1.05c1.07,0.681,2.074,1.53,2.85,3.342
											c0.596,1.389,1.849,3.873,5.811,3.873c1.571,0,2.674-0.187,2.674-0.187s0.029,3.548,0.029,4.927c0,1.592-2.186,2.039-2.186,2.805
											c0,0.301,0.724,0.331,1.305,0.331c1.149,0,3.538-0.942,3.538-2.596c0-1.313,0.021-5.728,0.021-6.503
											c0-1.689,0.922-2.225,0.922-2.225s0.113,9.016-0.22,10.227c-0.392,1.422-1.1,1.219-1.1,1.854c0,0.275,0.248,0.41,0.619,0.41
											c0.901,0,2.535-0.783,3.211-2.25c0.737-1.608,0.414-10.456,0.414-10.456l0.786-0.018c0,0,0.045,4.05,0.018,5.902
											c-0.026,1.916-0.16,4.341,0.998,5.484c0.54,0.534,1.938,1.353,2.706,1.353c0.313,0,0.522-0.138,0.522-0.487
											c0-0.7-1.352-1.275-1.352-3.171v-8.723c1.08,0,0.917,2.867,0.917,2.867l0.079,5.33c0,0-0.238,1.941,2.139,2.754
											c0.408,0.141,1.043,0.23,1.598,0.23c0.582,0,1.072-0.1,1.116-0.348c0.085-0.485-2.159-1.207-2.18-2.709
											c-0.013-0.918,0.042-1.453,0.042-5.439s-0.546-5.458-2.443-6.633c-0.645-0.371-2.165-0.507-3.797-0.507
											c-2.331,0-4.888,0.276-5.438,0.53c-0.851,0.635-1.873,1.836-2.013,3.228c-0.667,0.423-1.755,0.671-2.884,0.671
											c-0.681,0-1.378-0.09-2.006-0.285C11.099,32.879,10.172,28.861,7.204,28.861L7.204,28.861z"/>
									</g>
									<path class="head" fill="#FFFFFF" stroke="#C33" stroke-width="2.4722" d="M29.424,29.592c5.855-0.591,9.481-2.016,11.248-5.828
										c0.137,0.001,0.72-1.781,0.644-1.781c0.396-1.439,0.611-3.143,0.651-5.16c-0.01-5.468-2.672-7.402-3.184-8.31
										c0.754-4.141-0.127-6.025-0.535-6.671c-1.51-0.527-5.252,1.358-7.295,2.686c-3.33-0.958-10.374-0.865-13.015,0.247
										c-4.872-3.428-7.451-2.905-7.451-2.905s-1.666,2.936-0.44,7.23c-1.602,2.009-2.798,3.429-2.798,7.195
										c0.001,2.123,0.256,4.021,0.829,5.68c-0.07,0,0.768,1.776,0.792,1.776c1.832,3.268,5.362,5.301,11.32,5.864L29.424,29.592z"/>
								</g>
								</svg>

								<h4>Github</h4>
								<span class="subtitle">View Repositories</span>
							</a>
						</div>
					</section>	

					<section id="work">
						<h1 class="heading">
							<span>Work</span>
							<span class="subtitle">A showcase of design,</span>
							<span class="subtitle">development, experiments and more</span>
						</h1>

			 			<ul class="projects row">
							<li class="two-thirds column project foodsters">
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

							<li class="one-third column project bjjstack">
								<a class="ajax" href="bjjstack">
									<div class="info">
										<div class="background"></div>

										<div class="description">
											<h4>BjjStack</h4>
											<span class="snippet">BJJStack is an online community bringing you the latest in jiu-jitsu reviews, media, and more.</span>
											<span class="link">View Project</span>
										</div>
									</div>

									<img src="img/projects/bjjstack.jpg" alt="BjjStack"/>
								</a>
							</li>

							<li class="two-thirds column project bhm">
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

							<li class="one-third column project icbc">
								<a class="video" target="_blank" href="http://vimeo.com/22231899" data-video="22231899">
									<div class="info">
										<div class="background"></div>

										<div class="description">
											<h4>A Memory Still</h4>
											<span class="snippet">An award winning animated feature for ICBC's 180 Video Contest.</span>
											<span class="link">Watch Video</span>
										</div>
									</div>

									<img src="img/projects/icbc.jpg" alt="ICBC"/>
								</a>
							</li>

							<li class="one-third column project sockeye">
								<a class="video" target="_blank" href="http://vimeo.com/27933300" data-video="27933300">
									<div class="info">
										<div class="background"></div>

										<div class="description">
											<h4>The Sockeye</h4>
											<span class="snippet">A film tribute to my father, a practicing fisherman for over 2 decades.</span>
											<span class="link">Watch Video</span>
										</div>
									</div>

									<img src="img/projects/sockeye.jpg" alt="the Sockeye"/>
								</a>
							</li>
						</ul>
					</section>	

					<section id="contact" class="row clearfix">
						<h1 class="heading">
							<span>Contact</span>
							<span class="subtitle">Currently available for hire</span>
							<span class="subtitle">and would love to hear from you</span>
						</h1>

						<div class="one-third column info">
							<h4>Michael Ngo</h4>
							<p>
								michael@hellomichael.com<br/>
								778.883.9631<br/>
								Vancouver, B.C, Canada<br/>

								<a target="_blank" href="http://ca.linkedin.com/in/hellomichael/">LinkedIn</a> / <a target="_blank" href="https://www.facebook.com/hello.michael.ngo">Facebook</a> / <a target="_blank" rel="author" href="https://plus.google.com/114848968741255018590">Google +</a>
							</p>
						</div>

						<div class="two-thirds column">
							<form id="contact-form" method="post" action="scripts/mailer">
								<input type="text" name="foo" style="display: none;"/>

								<div class="input">							
									<label class="name" for="name">Your Name</label>	
									<input type="text" id="name" name="name" placeholder="Your Name"/>
								</div>

								<div class="input">
									<label class="email" for="email">Your Email</label>
									<input type="text" id="email" name="email" placeholder="Your Email"/>
								</div>

								<div class="input clearfix">
									<label class="message" for="message">Your Message</label>
									<textarea id="message" name="message" placeholder="Your Message"></textarea>

									<button class="flat" type="submit">Submit</button>
								</div>

								<div class="error">&nbsp;</div>
							</form>
						</div>
					</section>
				</div>
			</div>	 

			<?php if(!$detect->isMobile()):?>
			  	<footer>
					<img src="img/footer.jpg" alt="footer"/>
				</footer>
			<?php endif;?>
		</div>
	</div>

	<div class="cover"></div>
</body>
</html>