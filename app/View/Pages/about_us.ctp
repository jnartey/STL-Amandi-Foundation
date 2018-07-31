<div class="large-12 columns main-wrapper antialiased">
<?php 
	echo '<div class="large-12 columns padded">';
	echo $this->element('head'); 
	echo '</div>';
	$i=1;
	foreach($content as $data):
		$children =  AppController::getChildren('PageContent', 'category', $data['PageContent']['id']); 
		if($i == 1){
			foreach($children as $child):
				if($child['PageContent']['page_layout'] == 1){
					echo '<div class="row"><div class="large-12 columns content r-pad-bottom emb layout-iii">';
					echo '<div class="large-12 text-center">';
					echo '<h2>'.$child['PageContent']['title'].'</h2>';
					echo '</div>';
					echo $child['PageContent']['content'];
					echo '</div></div>';
				}
				
				if($child['PageContent']['page_layout'] == 2){
					echo '<div class="row"><div class="large-12 columns content r-pad-top text-center emb">';
					echo '<h6>';
					echo '<span class="img-icon-x">'.$this->Html->image('pages'.DS.'thumb'.DS.'icon'.DS.$child['PageContent']['icon'], array('alt' => 'saf')).'</span><br /><br />';
					echo $child['PageContent']['title'];
					echo '</h6>';
					echo '</div></div>';
					echo '<div class="large-12 columns content-blue antialiased"><div class="row"><div class="large-12 columns about-content">';
					echo '<div class="medium-4 columns img-box">'.$this->Html->image('pages'.DS.'thumb'.DS.'large'.DS.$child['PageContent']['page_image'], array('alt' => 'saf')).'</div>';
					echo '<div class="medium-8 columns text">';
					echo $child['PageContent']['content'];
					echo '</div>';
					echo '</div></div></div>';
				}
			endforeach;
		}else{
			if($data['PageContent']['page_layout'] == 1){
				echo '<div class="large-12 columns content r-pad-bottom emb layout-iii"><div class="row">';
				echo '<div class="large-12 text-center">';
				echo '<h2>'.$data['PageContent']['title'].'</h2>';
				echo '</div>';
				echo $data['PageContent']['content'];
				echo '</div></div>';
			}
			
			foreach($children as $child):
				if($child['PageContent']['page_layout'] == 1){
					echo '<div class="row"><div class="large-12 columns content text-center emb layout-iii">';
					echo '<h2>'.$child['PageContent']['title'].'</h2>';
					echo $child['PageContent']['content'];
					echo '</div></div>';
				}
				
				if($child['PageContent']['page_layout'] == 2){
					echo '<div class="row"><div class="large-12 columns content r-pad-top text-center emb layout-iii">';
					echo '<h6>';
					echo '<span class="img-icon-x">'.$this->Html->image('pages'.DS.'thumb'.DS.'icon'.DS.$child['PageContent']['icon'], array('alt' => 'saf')).'</span><br /><br />';
					echo $child['PageContent']['title'];
					echo '</h6>';
					echo '</div></div>';
					echo '<div class="large-12 columns content-blue antialiased"><div class="row"><div class="large-12 columns about-content">';
					echo '<div class="medium-4 columns img-box">'.$this->Html->image('pages'.DS.'thumb'.DS.'large'.DS.$child['PageContent']['page_image'], array('alt' => 'saf')).'</div>';
					echo '<div class="medium-8 columns text">';
					$child['PageContent']['content'];
					echo '</div>';
					echo '</div></div></div>';
				}
				
				if($child['PageContent']['page_layout'] == 3){
					echo '<div class="row"><div class="large-12 columns content r-pad-top text-center emb layout-iii">';
					//echo '<p>'.$child['PageContent']['title'].'</h6>';
					echo '</div></div>';
					echo '<div class="large-12 columns content-blue antialiased">';
					echo '<span class="img-icon">'.$this->Html->image('pages'.DS.'thumb'.DS.'icon'.DS.$child['PageContent']['icon'], array('alt' => 'saf')).'</span>';
					echo '<h6>'.$child['PageContent']['title'].'</h6>';
					echo '<div class="row"><div class="large-12 columns philosophy-content layout-iii"><div class="large-12 columns text">';
					echo $child['PageContent']['content'];
					echo '</div></div></div>';
					echo '</div>';
				}
				
			endforeach;
		}
		
		if($data['PageContent']['page_layout'] == 4){
			echo '<div class="large-12 columns content text-center emb layout-i"><div class="row">';
			echo '<h6>'.$data['PageContent']['title'].'</h6>';
			echo $data['PageContent']['content'];
			echo '</div></div>';
		}

		if($data['PageContent']['page_layout'] == 5){
			echo '<div class="large-12 columns content-white antialiased text-center emb layout-ii">';
			echo '<span class="img-icon">'.$this->Html->image('pages'.DS.'thumb'.DS.'icon'.DS.$data['PageContent']['icon'], array('alt' => 'saf')).'</span>';
			echo '<div class="row">';
			echo '<h6>'.$data['PageContent']['title'].'</h6>';
			echo $data['PageContent']['content'];
			echo '</div></div>';
		}
		
		$i++; 
	endforeach;
	?>
</div>
<?php echo $this->element('footer_misc'); ?>
