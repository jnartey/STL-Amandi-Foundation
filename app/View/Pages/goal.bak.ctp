<div class="large-12 columns main-wrapper antialiased">
<?php 
	echo '<div class="large-12 columns padded">';
	echo $this->element('head'); 
	echo '</div>';
	echo '<div class="large-12 columns projects r-pad-top antialiased"><div class="row">';

	echo '<div class="large-12 columns content r-pad-bottom text-center sp emb">';
	
	echo '<div class="large-12 columns"><ul class="project-categories">';
		
		echo '<li class="back">'.$this->Html->link(__(('<span class="fa fa-angle-left"></span> Back'), true), array('controller'=> 'pages', 'action'=>'projects'), array('escape' => false)).'</li>';

		foreach($projects as $link):
		echo '<li>'.$this->Html->link(__(($link['PageContent']['title']), true), array('controller'=> 'pages', 'action'=>'projects', $link['PageContent']['slug']), array('escape' => false)).'</li>';
		endforeach;
		echo '<li class="active">'.$this->Html->link(__(("GOAL"), true), array('controller'=> 'pages', 'action'=>'goal'), array('escape' => false)).'</li>';
	echo '</ul></div>';
	
	echo '<div class="row goal-logo">';
	echo '<h2>'.$parent['PageContent']['title'].$this->Html->image('goal-logo.png', array('alt' => 'saf')).'</h2>';
	echo '</div></div>';
	
	echo '<div class="large-4 columns gallery-index-i">';
	echo '<div class="large-12 columns text-left"><div class="large-12 news-files">';
			$images = null;
			$gallery = AppController::getData('Gallery', 'link_id', $parent['PageContent']['id']);
			if($gallery){
				$images =  AppController::getChildren('Image', 'gallery_id', $gallery['Gallery']['id']); 
			}
			if($gallery){
				if($images){
					echo '<h5>Project Gallery</h5><br />';
					foreach($images as $image):
					echo '<a class="gallery-index-item fancybox-thumb" rel="'.$gallery['Gallery']['name'].'" href="'.$this->Html->url(DS.'img'.DS.'photogallery'.DS.'thumb'.DS.'large'.DS.$image['Image']['img_file'], true).'">';
					echo '<div class="overlay-black"></div>';
					echo $this->html->image('photogallery'.DS.'thumb'.DS.'small'.DS.$image['Image']['img_file'], array('alt' => 'amandi', 'class'=>'gallery-index-item'));
					if($image['Image']['name']){
						echo '<span class="gallery-title">';
						echo $image['Image']['name'];
						echo '</span>';
					}	
					echo '</a>';
					endforeach;
				}
			}
			
			if($news){
				echo '<h5>Project News</h5><br />';
				foreach($news as $data):
					if($data['News']['file']){
						if($data['News']['file_image']){
							echo '<div class="large-6 news-file text-center">';
							echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$data['News']['file'].DS.'news', true).'" class=""  target="_blank">'.$this->Html->image('news'.DS.'thumb'.DS.'large'.DS.$data['News']['file_image'], array('alt' => 'saf'));
							echo '<span>'.$data['News']['title'].'</span>';
							echo '</a>';
							echo '</div>';
						}else{
							echo '<div class="large-3 news-blank">';
							echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$data['News']['file'].DS.'news', true).'" class="blank" target="_blank">'.$data['News']['file'].'</a>';
							echo '</div>';
						}
					}
				endforeach;	
			}else{
				echo '<p>No news available</p>';
			}

	echo '</div>';
	echo '<div class="large-12 columns text-center"><div class="pagination">';
 	echo '<span class="unavailable"></span>'.$this->Paginator->prev(__('prev', true), array('class'=>'d-menu'), null, array('class'=>'unavailable'));
	echo $this->Paginator->numbers(array('class'=>'d-menu'));
	echo $this->Paginator->next(__('next', true), array('class'=>'d-menu'), null, array('class'=>'unavailable')).'<span class="unavailable"></span>';
	echo '</div></div></div>';
	
	echo '</div>';
	
	echo '<div class="large-8 columns"><div class="large-12 columns goal-logo text-center">';
	echo '</div>';
	echo '<div class="large-12 columns project-content text-center emb">';
	//echo '<h2>'.strip_tags($parent['PageContent']['title']).'</h2>';
	echo $parent['PageContent']['content'];
	echo '<br /><br />';
	echo '<div class="large-12 columns gallery-large-i">';
	
	if($parent['PageContent']['youtube_link']){
		$link = $parent['PageContent']['youtube_link'];
		if($link){
			$video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
			if(empty($video_id[1])){
				$video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..
			}
			
			if(!empty($video_id[1])){
				$video_id = explode("&", $video_id[1]); // Deleting any other params
				$video_id = $video_id[0];
				
				echo '<iframe width="100%" height="480" src="//www.youtube.com/embed/'.$video_id.'?rel=0&loop=0&autoplay=0" frameborder="0" allowfullscreen></iframe>';
			}else{
				$url = $link;
				$urlParts = explode("/", parse_url($url, PHP_URL_PATH));
				$videoId = (int)$urlParts[count($urlParts)-1];
				if($videoId){
					echo '<iframe src="https://player.vimeo.com/video/'.$videoId.'?autoplay=0" width="100%" height="480" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
				}
			}
		}
	}else{
		if($parent['PageContent']['page_image']){
			echo $this->Html->image('pages'.DS.'thumb'.DS.'large'.DS.$parent['PageContent']['page_image'], array('alt' => 'saf'));
		}
	}
									
	echo '</div>';
	
	echo '</div>';
	echo '<div class="large-12 columns margin-top">';
	foreach($goal as $data):
		if($data['PageContent']['page_layout'] == '1'){
			echo '<div class="row"><div class="large-12 columns goal-content">';
			echo '<div class="large-3 columns goal-img">';
			echo $this->Html->image('pages'.DS.'thumb'.DS.'large'.DS.$data['PageContent']['page_image'], array('alt' => 'saf'));
			echo '</div>';
			echo '<div class="large-9 columns goal-text">';
			echo $data['PageContent']['content'];
			echo '</div>';
			echo '</div></div>';
		}
		
		if($data['PageContent']['page_layout'] == '2'){
			echo '<div class="row"><div class="large-12 columns goal-white">';
			echo $data['PageContent']['content'];
			echo '</div></div>';
		}
		
		if($data['PageContent']['page_layout'] == '3'){
			echo '<div class="large-12 columns goal-blue"><div class="row">';
			echo '<div class="medium-2 columns goal-img">';
			echo $this->Html->image('bulb.png', array('alt' => 'saf'));
			echo '</div>';
			echo '<div class="medium-10 columns goal-text">';
			echo $data['PageContent']['content'];
			echo '</div>';
			echo '</div></div>';
		}
		
		if($data['PageContent']['page_layout'] == '4'){
			echo '<div class="large-12 columns goal-content-i">';
			echo '<div class="large-12 columns goal-banner">';
			echo $this->Html->image('pages'.DS.'thumb'.DS.'banner'.DS.$data['PageContent']['page_image'], array('alt' => 'saf'));
			echo '</div>';
			echo '<div class="row"><div class="large-12 columns goal-text">';
			echo '<div class="medium-12 columns">';
			echo '<p>'.$data['PageContent']['title'].'</p><br />';
			echo $data['PageContent']['content'];
			echo '</div>';
			echo '</div></div>';
			echo '</div>';
		}
		
	endforeach;
	echo '</div></div></div></div></div>';
	echo $this->element('footer_misc'); 
?>