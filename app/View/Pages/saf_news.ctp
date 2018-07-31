<div class="large-12 columns main-wrapper antialiased">
<?php 
	echo '<div class="large-12 columns padded">';
	echo $this->element('head'); 
	echo '</div>';
	echo '<div class="large-12 columns content text-center"><div class="row padded"><div class="large-12 news-files">';
			$i = 1;
			foreach($news as $data):
				if($data['News']['file']){
					if($data['News']['file_image']){
						echo '<div class="large-3 news-file text-center">';
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

	echo '</div>';
	echo '<div class="large-12 columns text-center"><div class="pagination">';
				 	echo '<span class="unavailable"></span>'.$this->Paginator->prev(__('prev', true), array('class'=>'d-menu'), null, array('class'=>'unavailable'));
					echo $this->Paginator->numbers(array('class'=>'d-menu'));
					echo $this->Paginator->next(__('next', true), array('class'=>'d-menu'), null, array('class'=>'unavailable')).'<span class="unavailable"></span>';
	echo '</div></div></div></div>';
	echo $this->element('footer_misc'); 
?>
</div>