<div class="large-12 columns head antialiased">
	<div class="large-12 columns balloon">
		<div class="small-8 columns">
			<?php
				if($newsletter){
					echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$newsletter['PageContent']['file'], true).'" class="download-item">Download Newsletter <span class="fa fa-chevron-circle-down"></span></a>';
				}
			?>
		</div>
		<div class="small-4 columns text-right">
			<span class="fa fa-search search-icon" data-dropdown="search-dd" aria-controls="search-dd" aria-expanded="false"></span>
			<div id="search-dd" data-dropdown-content class="f-dropdown medium content" aria-autoclose="false" aria-hidden="true" tabindex="-1">
			  <input type="text" id="search" name="search" placeholder="Search" />
			  	<!-- Show Results -->
				<div class="results-wrap">
					<div class="inner">
						<h4 class="text-left" id="results-text">Showing results for: <strong class="search-string"></strong></h4>
						<ul id="results"><p>Please wait loading...</p></ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="large-12 columns menu">
		<nav class="top-bar" data-topbar role="navigation">
		  <ul class="title-area">
		    <li class="name">
				<h1><a href="<?php echo $this->Html->url(DS.'pages'.DS, true); ?>"><?php echo $this->Html->image('saf-logo.png', array('alt' => 'saf')); ?></a></h1>
		    </li>
		     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		  </ul>
		  	<section class="top-bar-section">
			    <!-- Right Nav Section -->
			    <ul>
					<li <?php if($title_for_layout === "home"){ echo "class='active'"; } ?>>
						<?php echo $this->Html->link(__(('Home'), true), array('controller'=> 'pages', 'action'=>'index'), array('escape' => false)); ?>
					</li>
					<li <?php if($title_for_layout === "About Us"){ echo "class='active'"; } ?>>
						<?php echo $this->Html->link(__(('About Us'), true), array('controller'=> 'pages', 'action'=>'about-us'), array('escape' => false)); ?>
					</li>
					<li <?php if($title_for_layout === "Projects"){ echo "class='active'"; } ?>>
						<?php echo $this->Html->link(__(('Projects'), true), array('controller'=> 'pages', 'action'=>'projects'), array('escape' => false)); ?>
					</li>
					<!-- <li <?php if($title_for_layout === "Goal"){ echo "class='active'"; } ?>>
						<?php echo $this->Html->link(__(('GOAL'), true), array('controller'=> 'pages', 'action'=>'goal'), array('escape' => false)); ?>
					</li> -->
					<!-- <li <?php if($title_for_layout === "SAF News"){ echo "class='active'"; } ?>>
						<?php echo $this->Html->link(__(('SAF News'), true), array('controller'=> 'pages', 'action'=>'saf-news'), array('escape' => false)); ?>
					</li> -->
					<!-- <li <?php if($title_for_layout === "GOAL News"){ echo "class='active'"; } ?>>
						<?php echo $this->Html->link(__(('GOAL News'), true), array('controller'=> 'pages', 'action'=>'goal-news'), array('escape' => false)); ?>
					</li> -->
					<li <?php if($title_for_layout === "Contact us"){ echo "class='active'"; } ?>>
						<?php echo $this->Html->link(__(('Contact Us'), true), array('controller'=> 'pages', 'action'=>'contact-us'), array('escape' => false)); ?>
					</li>
			    </ul>
			  </section>
		</nav>
	</div>
</div>