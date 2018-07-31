<div class="large-12 columns main-wrapper antialiased">
<?php 
	echo '<div class="large-12 columns padded">';
	echo $this->element('head'); 
	echo '</div>';
	
	echo '<div class="large-12 columns projects r-pad-top antialiased"><div class="row">';

	echo '<div class="large-12 columns content r-pad-bottom text-center sp emb">';
	
	echo '<div class="large-12 columns"><ul class="project-categories">';
		
		//echo '<li class="back">'.$this->Html->link(__(('<span class="fa fa-angle-left"></span> Back'), true), array('controller'=> 'pages', 'action'=>'projects'), array('escape' => false)).'</li>';

		foreach($projects as $link):
			if($link['PageContent']['slug'] == $current_category){
				echo '<li class="active">'.$this->Html->link(__(($link['PageContent']['title']), true), array('controller'=> 'pages', 'action'=>'projects', $link['PageContent']['slug']), array('escape' => false)).'</li>';
			}else{
				echo '<li>'.$this->Html->link(__(($link['PageContent']['title']), true), array('controller'=> 'pages', 'action'=>'projects', $link['PageContent']['slug']), array('escape' => false)).'</li>';
			}
		endforeach;
		echo '<li>'.$this->Html->link(__(("GOAL"), true), array('controller'=> 'pages', 'action'=>'goal'), array('escape' => false)).'</li>';
	echo '</ul></div>';
	
	echo '<div class="row">';
	echo '<h2>'.$project['PageContent']['title'].'</h2>';
	echo '</div></div>';

	echo '<div class="large-4 columns gallery-index-i">';
	$images = null;
	$gallery = AppController::getData('Gallery', 'link_id', $project['PageContent']['id']);
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
	
	echo '<div class="large-12 columns text-left"><div class="large-12 news-files">';
			$i = 1;
			
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
				$i++;
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
	
	echo '<div class="large-8 columns project-content">';
	$k=1;
	
	echo $project['PageContent']['content'];
	
	echo '<div class="large-12 columns gallery-large-i">';
	
	if($project['PageContent']['youtube_link']){
		$link = $project['PageContent']['youtube_link'];
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
			
			//echo '<a class="fancybox-thumb fancybox.iframe" rel="'.$project['PageContent']['title'].'" href="https://www.youtube.com/embed/'.$video_id.'?rel=0&loop=0"><span class="fa fa-play"></span><div class="overlay-black"></div><img src="http://i1.ytimg.com/vi/'.$video_id.'/sddefault.jpg" yt:name="sddefault" alt="saf" /></a>';
			//echo '<iframe width="100%" height="480" src="//www.youtube.com/embed/'.$video_id.'?rel=0&loop=0&autoplay=0" frameborder="0" allowfullscreen></iframe>';
		}
	}else{
		if($project['PageContent']['page_image']){
			echo $this->Html->image('pages'.DS.'thumb'.DS.'large'.DS.$project['PageContent']['page_image'], array('alt' => 'saf'));
		}
	}
									
	echo '</div>';
			
	echo '</div></div>';
	echo '</div>';
	echo $this->element('footer_misc'); 
?>
</div>