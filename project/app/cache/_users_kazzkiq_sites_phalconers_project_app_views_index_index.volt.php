<div class="landing-page">
	<div class="big-blue-banner">
		<div class="call">
			<h1>Find and hire <span>professionals</span> for your <span>PhalconPHP</span> projects</h1>
			<div class="or">or</div>
			<h1>Seek and find <span>awesome projects</span> to work on as a Phalcon <span>developer</span></h1>
			
			<?php echo $this->tag->linkTo(array('jobs/new', 'Post a job offer', 'class' => 'main-btn')); ?>
			
			<ul class="mini-links">
				<li><?php echo $this->tag->linkTo(array('what-is-phalcon', 'What is Phalcon')); ?></li>
				<li><?php echo $this->tag->linkTo(array('jobs/new', 'Post a Job offer')); ?></li>
				<li><?php echo $this->tag->linkTo(array('jobs', 'Find Jobs')); ?></li>
				<li><?php echo $this->tag->linkTo(array('signup', 'Create an Account')); ?></li>
			</ul>
		</div>
	</div>
	<div class="main-wrapper">
		<div class="main-title">
			<div class="container">
				<h1>Latest Job Offers</h1>
			</div>
		</div>
		<div class="container shift-top">
			<div class="pure-g">
				<div class="pure-u-1 pure-u-md-2-3 l-box">
					<nav class="jobs-wrapper">
						<ul>
							<li class="job">
								<a href="#">
									<div class="pure-g">
										<div class="pure-u-1 pure-u-sm-4-5">
											<div class="date">27 Dec 2014</div>
											<h3>Senior PHP developer for SA startup</h3>
											<p>
												We are a company located at San Francisco who needs a senior PHP developer to help build our..
											</p>
											<div class="tags-wrapper">
												<span class="tag">Startup</span>
												<span class="tag">Senior</span>
												<span class="tag">MongoDB</span>
											</div>
										</div>
										<div class="pure-u-1 pure-u-sm-1-5">
											<div class="budget-wrapper">
												<span>Budget</span>
												<div class="budget">
													$1000 - $2000
												</div>
											</div>
											<div class="type">
												Full time
											</div>
										</div>
									</div>
								</a>
							</li>
							<li class="job">
								<a href="#">
									<div class="pure-g">
										<div class="pure-u-1 pure-u-sm-4-5">
											<div class="date">27 Dec 2014</div>
											<h3>Senior PHP developer for SA startup</h3>
											<p>
												We are a company located at San Francisco who needs a senior PHP developer to help build our..
											</p>
											<div class="tags-wrapper">
												<span class="tag">Startup</span>
												<span class="tag">Senior</span>
												<span class="tag">MongoDB</span>
											</div>
										</div>
										<div class="pure-u-1 pure-u-sm-1-5">
											<div class="budget-wrapper">
												<span>Budget</span>
												<div class="budget">
													$1000 - $2000
												</div>
											</div>
											<div class="type">
												Full time
											</div>
										</div>
									</div>
								</a>
							</li>
							<li class="job">
								<a href="#">
									<div class="pure-g">
										<div class="pure-u-1 pure-u-sm-4-5">
											<div class="date">27 Dec 2014</div>
											<h3>Senior PHP developer for SA startup</h3>
											<p>
												We are a company located at San Francisco who needs a senior PHP developer to help build our..
											</p>
											<div class="tags-wrapper">
												<span class="tag">Startup</span>
												<span class="tag">Senior</span>
												<span class="tag">MongoDB</span>
											</div>
										</div>
										<div class="pure-u-1 pure-u-sm-1-5">
											<div class="budget-wrapper">
												<span>Budget</span>
												<div class="budget">
													Not informed
												</div>
											</div>
											<div class="type">
												Full time
											</div>
										</div>
									</div>
								</a>
							</li>
						</ul>
					</nav>
					<?php echo $this->tag->linkTo(array('jobs', 'See all available jobs', 'class' => 'btn-big-job')); ?>
				</div>
				
				<div class="pure-u-1 pure-u-md-1-3 l-box">
					<?php echo $this->tag->linkTo(array('jobs/new', 'Post a job', 'class' => 'btn-big-job')); ?>
					<p class="mini-terms-call">
						Before posting a job, we encourage you to read our <?php echo $this->tag->linkTo(array('legal', 'terms of service', 'class' => 'df-link')); ?>.
					</p>
				</div>
			</div>
			
			<hr class="sep">
			
			<div class="pure-g triade">
				<div class="pure-u-1 pure-u-md-1-3 l-box l-tc">
					<img src="/Phalconers/project/img/icon-circle-developers.png" width="108">
					<h2>Find Developers</h2>
					<p>Wait for the community get to you! Post your job and receive messages from interested developers.</p>
				</div>
				<div class="pure-u-1 pure-u-md-1-3 l-box l-tc">
					<img src="/Phalconers/project/img/icon-circle-jobs.png" width="108">
					<h2>Find Jobs</h2>
					<p>Seek and apply for Phalcon related jobs all around the globe. All oportunities united in one place.</p>
				</div>
				<div class="pure-u-1 pure-u-md-1-3 l-box l-tc">
					<img src="/Phalconers/project/img/icon-circle-work.png" width="108">
					<h2>Work together</h2>
					<p>Phalconers aim to be the bridge between powerful Phalcon developers and awesome projects.</p>
				</div>
			</div>
		<div>
	</div>
</div>