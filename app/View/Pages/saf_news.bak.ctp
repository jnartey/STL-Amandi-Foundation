<div class="large-12 columns main-wrapper antialiased">
<?php 
	echo '<div class="large-12 columns padded">';
	echo $this->element('head'); 
	echo '</div>';
	if($read){ 
		echo '<div class="large-12 columns content text-left"><div class="row">';
		echo '<div class="large-12 columns">'.$this->Html->link(__(('<span class="fa fa-angle-left"></span> back'), true), array('controller'=> 'pages', 'action'=>'saf-news'), array('escape' => false, 'class'=>'back')).'</div>';
		echo '<div class="large-12 columns news-read">';
		echo '<div class="large-3 columns news-img">';
		if($news['News']['image']){
			echo $this->Html->image('news'.DS.'thumb'.DS.'small'.DS.$news['News']['image'], array('alt' => 'saf'));
		}else{
			echo '&nbsp;';
		}
		echo '</div>';
		echo '<div class="large-9 columns news-text">';
		echo '<span class="date">'.date('jS F\, Y\.', strtotime($news['News']['news_date'])).'</span>';
		echo '<h6>'.$news['News']['title'].'</h6>';
		echo '<p>'.$news['News']['story'].'</p>';
		echo '<div class="large-12 columns text-center"><div class="large-5 columns news-files">';
		if($news['News']['file']){
			if($news['News']['file_image']){
				echo '<div class="large-6 columns news-file">';
				echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$news['News']['file'].DS.'news', true).'" class="">'.$this->Html->image('news'.DS.'thumb'.DS.'large'.DS.$news['News']['file_image'], array('alt' => 'saf')).'</a>';
				echo '</div>';
			}else{
				echo '<div class="large-6 columns news-file">';
				echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$news['News']['file'].DS.'news', true).'" class="blank">'.$news['News']['file'].'</a>';
				echo '</div>';
			}
		}
		if($news['News']['file_1']){
			if($news['News']['file_image_1']){
				echo '<div class="large-6 columns news-file">';
				echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$news['News']['file_1'].DS.'news', true).'" class="">'.$this->Html->image('news'.DS.'thumb'.DS.'large'.DS.$news['News']['file_image_1'], array('alt' => 'saf')).'</a>';
				echo '</div>';
			}else{
				echo '<div class="large-6 columns news-file">';
				echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$news['News']['file_1'].DS.'news', true).'" class="blank">'.$news['News']['file_1'].'</a>';
				echo '</div>';
			}
		}
		if($news['News']['file_2']){
			if($news['News']['file_image_2']){
				echo '<div class="large-6 columns news-file">';
				echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$news['News']['file_2'].DS.'news', true).'" class="">'.$this->Html->image('news'.DS.'thumb'.DS.'large'.DS.$news['News']['file_image_2'], array('alt' => 'saf')).'</a>';
				echo '</div>';
			}else{
				echo '<div class="large-6 columns news-file">';
				echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$news['News']['file_2'].DS.'news', true).'" class="blank">'.$news['News']['file_2'].'</a>';
				echo '</div>';
			}
		}
		if($news['News']['file_3']){
			if($news['News']['file_image_3']){
				echo '<div class="large-6 columns news-file">';
				echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$news['News']['file_3'].DS.'news', true).'" class="">'.$this->Html->image('news'.DS.'thumb'.DS.'large'.DS.$news['News']['file_image_3'], array('alt' => 'saf')).'</a>';
				echo '</div>';
			}else{
				echo '<div class="large-6 columns news-file">';
				echo '<a href="'.$this->Html->url(DS.'pages'.DS.'download'.DS.$news['News']['file_3'].DS.'news', true).'" class="blank">'.$news['News']['file_3'].'</a>';
				echo '</div>';
			}
		}
		echo '</div></div></div>';
		echo '</div>';

		echo '</div></div>';
	}else{
		echo '<div class="large-12 columns content text-left"><div class="row padded">';
				$i = 1;
				foreach($news as $data):
					if($i%2 == 1){
						echo '<div class="large-12 columns news-content">';
						echo '<div class="large-3 columns news-img">';
						if($data['News']['image']){
							echo $this->Html->image('news'.DS.'thumb'.DS.'small'.DS.$data['News']['image'], array('alt' => 'saf'));
						}else{
							echo '&nbsp;';
						}
						echo '</div>';
						echo '<div class="large-9 columns news-text">';
						echo '<span class="date">'.date('jS F\, Y\.', strtotime($data['News']['news_date'])).'</span>';
						echo '<h6>'.$data['News']['title'].'</h6>';
						echo '<p>'.$data['News']['summary'].'</p>';
						echo $this->Html->link(__(('read more'), true), array('controller'=> 'pages', 'action'=>'saf-news', $data['News']['slug']), array('escape' => false, 'class'=>'read-more'));
						echo '</div>';
						echo '</div>';
					}else{
						echo '<div class="large-12 columns news-content">';
						echo '<div class="large-9 columns news-text">';
						echo '<span class="date">'.date('jS F\, Y\.', strtotime($data['News']['news_date'])).'</span>';
						echo '<h6>'.$data['News']['title'].'</h6>';
						echo '<p>'.$data['News']['summary'].'</p>';
						echo $this->Html->link(__(('read more'), true), array('controller'=> 'pages', 'action'=>'saf-news', $data['News']['slug']), array('escape' => false, 'class'=>'read-more'));
						echo '</div>';
						echo '<div class="large-3 columns news-img">';
						if($data['News']['image']){
							echo $this->Html->image('news'.DS.'thumb'.DS.'small'.DS.$data['News']['image'], array('alt' => 'saf'));
						}else{
							echo '&nbsp;';
						}
						echo '</div>';
						echo '</div>';
					}
				$i++;
				endforeach;	

		echo '</div></div>';
	}
	echo $this->element('footer_misc'); 
?>
</div>