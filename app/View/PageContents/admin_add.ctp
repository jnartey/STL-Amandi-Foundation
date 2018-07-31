<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>
				<?php echo $current_page; ?> <a href="#"><?php echo strip_tags($header); ?></a>
			</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns">
		<?php echo $this->element('admin'.DS.'page_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php 
			echo $this->Session->flash(); 
			echo '<div class="large-12 columns">';
				if($parent['PageContent']['id']):
					echo $this->Html->link(__(("cancel"), true), array('controller'=> 'pageContents', 'action'=>'view', $parent['PageContent']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small primary right')); 
				else:
					echo $this->Html->link(__(("cancel"), true), array('controller'=> 'pageContents', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary right'));
				endif;
			echo '</div>';
			echo '<div class="large-12 columns">';
				echo $this->Form->create('PageContent', array('type' => 'file'));
				
				if($parent['PageContent']['page_type'] == 0){
					echo $this->Form->hidden('add_content', array('value' => 1));
					$options = array(
			        	'1' => 'About Us',
			        	'2' => 'Helping the community',
						'3' => 'partners',
						'4' => 'projects',
						'5' => 'contact us',
						'6' => 'newsletter',
						'7' => 'goal'
			        );
		
			        echo $this->Form->input('page_type', array(
			        	'type'    => 'select',
			        	'options' => $options,
			        	'empty'   => false
			        ));
					echo '<br />';
					echo $this->Form->input('title', array('placeholder'=>'Title'));
				}
				
				if($parent['PageContent']['page_type'] == 1){
					$options = array(
			        	'1' => 'layout 1',
			        	'2' => 'layout 2',
						'3' => 'layout 3',
						'4' => 'layout 4',
						'5' => 'layout 5'
			        );
		
			        /*echo $this->Form->input('page_layout', array(
			        	'type'    => 'select',
			        	'options' => $options,
			        	'empty'   => false
			        ));
					echo '<br />';*/
					echo $this->Form->input('title', array('placeholder'=>'Title'));
					echo $this->Form->textarea('content', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Add content'));
					echo '<br />';
					
					echo '<div id="icon">';
					echo $this->Form->input('icon', array('type'=>'file', 'label'=>'icon'));
					echo '</div>';
					echo '<div id="page-image">';
					echo $this->Form->input('page_image', array('type'=>'file', 'label'=>'image'));
					echo '</div>';
					echo $this->Form->hidden('category', array('value' => $parent['PageContent']['id']));
					echo $this->Form->hidden('page_type', array('value' => $parent['PageContent']['page_type']));
				}
				
				if($parent['PageContent']['page_type'] == 2){
					$options = array(
			        	'1' => 'layout 1',
			        	'2' => 'layout 2'
			        );
		
			        /*echo $this->Form->input('page_layout', array(
			        	'type'    => 'select',
			        	'options' => $options,
			        	'empty'   => false
			        ));
					echo '<br />';*/
					echo '<div id="icon">';
					echo $this->Form->input('icon', array('type'=>'file', 'label'=>'icon'));
					echo '</div>';
					echo $this->Form->input('title', array('placeholder'=>'Title'));
					echo $this->Form->textarea('content', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Add content'));
					echo '<br />';
					echo $this->Form->hidden('category', array('value' => $parent['PageContent']['id']));
					echo $this->Form->hidden('page_type', array('value' => $parent['PageContent']['page_type']));
				}
				
				if($parent['PageContent']['page_type'] == 3){
					echo $this->Form->input('title', array('placeholder'=>'Title'));
					echo $this->Form->input('website', array('placeholder'=>'http://www.partnerwebsite.com'));
					echo $this->Form->textarea('content', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Add content'));
					echo '<br />';
					echo $this->Form->input('partner_logo', array('type'=>'file', 'label'=>'logo'));
					echo $this->Form->hidden('category', array('value' => $parent['PageContent']['id']));
					echo $this->Form->hidden('page_type', array('value' => $parent['PageContent']['page_type']));
				}
				
				if($parent['PageContent']['page_type'] == 4){
					echo "<p><label>Hide</label>";
					echo $this->Form->checkbox('hide', array('value' => 1));
					echo "</p>";
					echo $this->Form->input('title', array('placeholder'=>'Title'));
			        echo $this->Form->input('project_category', array(
			        	'type'    => 'select',
			        	'options' => $project_category,
			        	'empty'   => true
			        ));
					echo '<br />';
					echo $this->Form->textarea('content', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Add content'));
					echo '<br />';
					echo $this->Form->input('page_image', array('type'=>'file', 'label'=>'Project Image'));
					echo $this->Form->input('youtube_link', array('placeholder'=>'Youtube/Vimeo link must be full link not shortened', 'label'=>'Video link (YouTube/Vimeo)'));
					echo $this->Form->hidden('category', array('value' => $parent['PageContent']['id']));
					echo $this->Form->hidden('page_type', array('value' => $parent['PageContent']['page_type']));
				}
				
				if($parent['PageContent']['page_type'] == 5){
					echo $this->Form->input('title', array('placeholder'=>'Title'));
					echo $this->Form->textarea('content', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Add content'));
					echo '<br />';
					echo $this->Form->hidden('category', array('value' => $parent['PageContent']['id']));
					echo $this->Form->hidden('page_type', array('value' => $parent['PageContent']['page_type']));
				}
				
				if($parent['PageContent']['page_type'] == 6){
					echo $this->Form->input('title', array('placeholder'=>'Title'));
					echo $this->Form->input('file', array('type'=>'file', 'label'=>'Newsletter'));
					echo $this->Form->hidden('category', array('value' => $parent['PageContent']['id']));
					echo $this->Form->hidden('page_type', array('value' => $parent['PageContent']['page_type']));
				}
				
				if($parent['PageContent']['page_type'] == 7){
					
					echo $this->Form->input('title', array('placeholder'=>'Title'));
					echo $this->Form->textarea('content', array('id'=>'editor', 'label'=>false, 'placeholder'=>'Add content'));
					echo '<br />';
					echo $this->Form->input('page_image', array('type'=>'file', 'label'=>'Project Image'));
					echo $this->Form->input('youtube_link', array('placeholder'=>'Youtube/Vimeo link must be full link not shortened', 'label'=>'Video link (YouTube/Vimeo)'));
					echo $this->Form->hidden('category', array('value' => $parent['PageContent']['id']));
					echo $this->Form->hidden('page_type', array('value' => $parent['PageContent']['page_type']));
					
					if(!$parent['PageContent']['page_layout']){
						echo $this->Form->hidden('add_content', array('value' => 1));
						$options = array(
				        	'1' => 'layout 1',
				        	'2' => 'layout 2',
							'3' => 'layout 3',
							'4' => 'layout 4'
				        );

				        echo $this->Form->input('page_layout', array(
				        	'type'    => 'select',
				        	'options' => $options,
				        	'empty'   => false
				        ));
						echo '<br />';
					}
				}
				
				echo $this->Form->hidden('cid', array('value'=>$rev));
				echo $this->Form->end('Add'); 
			?>
		</div>
	</div>
</div>
<script>
$(function() {
	$('#icon').hide(); 
	$('#page-image').hide(); 
	
	$('#PageContentPageLayout').on('change', function (e) {
	    var optionSelected = $("option:selected", this);
	    var valueSelected = this.value;
	
		if(valueSelected == '2' || valueSelected == '3') {
			$('#icon').show(); 
		} else {
		  	$('#icon').hide(); 
		}
		
		if(valueSelected == '2') {
			$('#page-image').show(); 
		} else {
		  	$('#page-image').hide(); 
		}
	});
});
</script>