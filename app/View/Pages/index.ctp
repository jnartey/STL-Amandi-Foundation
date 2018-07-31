<div id="slider" class="large-12 columns sl-slider-wrapper antialiased">
	<?php
		foreach($banners as $banner):
			echo '<div class="large-12 columns sl-slider"><div class="large-12 columns sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2"><div class="large-12 columns sl-slide-inner">';
			echo '<div class="overlay"></div>';
			echo '<div class="bg-img" style="background-image:url('.$this->Html->url(DS.'img'.DS.'banners'.DS.'thumb'.DS.'large'.DS.$banner['Banner']['banner_image'], true).');"></div>';
			echo '<div class="large-12 columns content">';
			echo $this->element('head');
			echo '<div class="large-12 columns"><div class="medium-4 columns heading-wrapper">';
			echo '<h2>'.$banner['Banner']['title'].$this->Html->link(__(('go'), true), array('controller'=> 'pages', 'action'=>'about-us'), array('escape' => false, 'class'=>'go-button')).'</h2>';
			echo '<div class="large-12 columns banner-caption">';
			echo '<p>'.$banner['Banner']['description'].'</p>';
			echo '</div></div>';
			echo '<div class="medium-6 columns right goal-home">';
			echo $this->Html->link(__(($this->Html->image('goal-logo.png', array('alt' => 'saf'))), true), array('controller'=> 'pages', 'action'=>'goal'), array('escape' => false, 'class'=>'goal-bg'));
			echo '</div>';
			
			echo '</div>';
			echo '<ul class="partner-links text-center">';
			echo '<li class="heading"><h3>our partners:</h3></li>';
			if($partners){
				$i=1;
				foreach($partners as $partner):
					//if($i == 3){
						/*echo '<li>';
						echo '<a class="g" href="'.$this->Html->url(DS.'pages'.DS.'goal', true).'">';
						echo $this->Html->image('goal.png', array('alt' => 'saf'));
						echo '<span class="link-overlay"></span>';
						echo '</a></li>';*/
						
						echo '<li>';
						if($partner['PageContent']['website']){
							echo '<a href="'.$partner['PageContent']['website'].'" target="_blank">';
						}else{
							echo '<a href="#">';
						}

						echo $this->Html->image('pages'.DS.'thumb'.DS.'logo'.DS.$partner['PageContent']['partner_logo'], array('alt' => 'saf'));
						echo '<span class="link-overlay"></span>';
						echo '</a></li>';
						/*}else{
						echo '<li>';
						if($partner['PageContent']['website']){
							echo '<a href="'.$partner['PageContent']['website'].'" target="_blank">';
						}else{
							echo '<a href="#">';
						}

						echo $this->Html->image('pages'.DS.'thumb'.DS.'logo'.DS.$partner['PageContent']['partner_logo'], array('alt' => 'saf'));
						echo '<span class="link-overlay"></span>';
						echo '</a></li>';
						}*/
					$i++;
				endforeach;
			}
			echo '</ul>';
			if($banner['Banner']['youtube']){
				echo '<div class="video-box">';
				$link = $banner['Banner']['youtube'];
				$video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
				if(empty($video_id[1])){
					$video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..
				}
				
				if(!empty($video_id[1])){
					$video_id = explode("&", $video_id[1]); // Deleting any other params
					$video_id = $video_id[0];
					
					echo '<iframe width="100%" height="280" src="//www.youtube.com/embed/'.$video_id.'?rel=0&loop=0&autoplay=1" frameborder="0" allowfullscreen></iframe>';
				}else{
					$url = $link;
					$urlParts = explode("/", parse_url($url, PHP_URL_PATH));
					$videoId = (int)$urlParts[count($urlParts)-1];
					if($videoId){
						echo '<iframe src="https://player.vimeo.com/video/'.$videoId.'?autoplay=1" width="100%" height="280" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
					}
				}
				
				echo '</div>';
			}
			echo '</div></div></div></div>';
		endforeach;
	?><!-- /sl-slider -->
	<?php echo $this->element('footer');  ?>
</div><!-- /slider-wrapper -->