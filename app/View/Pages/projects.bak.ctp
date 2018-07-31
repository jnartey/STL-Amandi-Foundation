<div class="large-12 columns main-wrapper antialiased">
<?php 
	echo '<div class="large-12 columns padded">';
	echo $this->element('head'); 
	echo '</div>';
	
	echo '<div class="large-12 columns content r-pad-bottom text-center emb">';
	echo '<div class="row">';
	echo '<h2>'.strip_tags($parent['PageContent']['content']).'</h2>';
	echo '</div></div>';
	
	echo '<div class="large-12 columns content-blue antialiased project-wrap"><div class="row">';
	echo '<ul class="tabs text-center" data-options="scroll_to_content: false; deep_linking:false;" data-tab>';
	$j=1;
	foreach($projects as $project):
		if($j == 1){
			echo '<li class="tab-title active"><a href="#'.$project['PageContent']['slug'].'">'.$project['PageContent']['title'].'</a></li>';
		}else{
			echo '<li class="tab-title"><a href="#'.$project['PageContent']['slug'].'">'.$project['PageContent']['title'].'</a></li>';
		}
		
		$j++;	
	endforeach;
	echo '<li class="tab-title"><a href="#goal">GOAL</a></li>';
	echo '</ul>';
	
	echo '<div class="tabs-content">';
	$k=1;
	foreach($projects as $project):
		if($k == 1){
			echo '<div class="content active" id="'.$project['PageContent']['slug'].'">';
			echo '<div class="large-12 columns about-content">';
			echo '<div class="medium-4 columns img-box">';
			/*if($project['PageContent']['youtube_link']){
				$link = $project['PageContent']['youtube_link'];
				$video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
				if(empty($video_id[1]))
				    $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

				$video_id = explode("&", $video_id[1]); // Deleting any other params
				$video_id = $video_id[0];
			
				echo '<iframe width="100%" height="334" src="//www.youtube.com/embed/'.$video_id.'?rel=0&loop=0" frameborder="0" allowfullscreen></iframe>';
			}else{*/
				if($project['PageContent']['page_image']){
					echo $this->Html->image('pages'.DS.'thumb'.DS.'large'.DS.$project['PageContent']['page_image'], array('alt' => 'saf'));
				}
			//}
			echo '</div><div class="medium-8 columns text">';
			echo '<h4>'.$project['PageContent']['title'].'</h4>';
			echo $project['PageContent']['content'];
			echo $this->Html->link(__(('read more'), true), array('controller'=> 'pages', 'action'=>'projects-details', $project['PageContent']['slug']), array('escape' => false, 'class'=>'read-more'));
			echo '</div></div></div>';
		}else{
			echo '<div class="content" id="'.$project['PageContent']['slug'].'">';
			echo '<div class="large-12 columns about-content">';
			echo '<div class="medium-4 columns img-box">';
			
			/*if($project['PageContent']['youtube_link']){
				$link = $project['PageContent']['youtube_link'];
				$video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
				if(empty($video_id[1]))
				    $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

				$video_id = explode("&", $video_id[1]); // Deleting any other params
				$video_id = $video_id[0];
			
				echo '<iframe width="100%" height="334" src="//www.youtube.com/embed/'.$video_id.'?rel=0&loop=0" frameborder="0" allowfullscreen></iframe>';
			}else{*/
				if($project['PageContent']['page_image']){
					echo $this->Html->image('pages'.DS.'thumb'.DS.'large'.DS.$project['PageContent']['page_image'], array('alt' => 'saf'));
				}
			//}
			echo '</div><div class="medium-8 columns text">';
			echo '<h4>'.$project['PageContent']['title'].'</h4>';
			echo $project['PageContent']['content'];
			echo $this->Html->link(__(('read more'), true), array('controller'=> 'pages', 'action'=>'projects-details', $project['PageContent']['slug']), array('escape' => false, 'class'=>'read-more'));
			echo '</div></div></div>';
		}
		$k++;	
	endforeach;
	
		echo '<div class="content" id="goal">';
		echo '<div class="large-12 columns about-content">';
		echo '<div class="medium-4 columns img-box">';
		if($goal['PageContent']['page_image']){
			echo $this->Html->image('goal-logo.png'.DS.'thumb'.DS.'large'.DS.$goal['PageContent']['page_image'], array('alt' => 'saf'));
		}
		echo '</div><div class="medium-8 columns text">';
		echo '<h4>'.$goal['PageContent']['title'].'</h4>';
		echo $goal['PageContent']['content'];
		echo $this->Html->link(__(('read more'), true), array('controller'=> 'pages', 'action'=>'goal'), array('escape' => false, 'class'=>'read-more'));
		echo '</div></div></div>';
	echo '</div>';
	echo '</div></div>';
	
	$i=1;
	foreach($content as $data):
		if($data['PageContent']['page_layout'] == 1){
			echo '<div class="large-12 columns content r-pad-top text-center emb layout-i"><div class="row">';
			echo '<h6>'.$data['PageContent']['title'].'</h6>';
			echo $data['PageContent']['content'];
			echo '</div></div>';
		}
		
		if($data['PageContent']['page_layout'] == 2){
			echo '<div class="large-12 columns content-white antialiased text-center emb layout-ii">';
			echo '<span class="img-icon">'.$this->Html->image('pages'.DS.'thumb'.DS.'icon'.DS.$data['PageContent']['icon'], array('alt' => 'saf')).'</span>';
			echo '<div class="row">';
			echo '<h6>'.$data['PageContent']['title'].'</h6>';
			echo $data['PageContent']['content'];
			echo '</div></div>';
		}
		
		$i++; 
	endforeach;
	echo $this->element('footer_misc'); 
?>