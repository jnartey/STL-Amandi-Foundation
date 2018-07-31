<!-- File: /app/View/Roles/admin_add.ctp -->
<script>
	$(function() {
		//datepicker
		$('.event-date').datepick({ 
		    yearRange: '2000:2050',
			dateFormat: 'yyyy-mm-dd',
			showTrigger: '#calImg'});
	});
</script>
	<div class="row">
		<div class="large-12 columns">
			<div class="module yellow">
				<h2><?php echo $current_page.' | '. substr($news['News']['title'], 0, strrpos(substr($news['News']['title'], 0, 30), ' '))."..."; ?> <a href="#"><?php echo $header; ?></a></h2>
				</ul>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="large-2 columns">
			<?php echo $this->element('admin'.DS.'news_menu'); ?>
		</div>
		<div class="large-10 columns content">
			<div class="main-content">
			<?php echo $this->Session->flash(); ?>
			<div class="large-12 columns">
				<?php
								if($news_parent[0]['News']['category']):
									echo $this->Html->link(__(("cancel"), true), array('controller'=> 'news', 'action'=>'view', $news_parent[0]['News']['category'], 'admin' => true), array('escape' => false, 'class'=>'button small primary right')); 
								else:
									echo $this->Html->link(__(("cancel"), true), array('controller'=> 'news', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary right'));
								endif;
							?><br /><br />
			<?php
				echo $this->Form->create('News', array('type' => 'file'));
				echo "<p><label>Publish</label>";
				echo $this->Form->checkbox('publish', array('value' => 1));
				echo "<p>";
				echo $this->Form->input('news_date', array('type' => 'text', 'class'=>'event-date', 'label'=>false, 'placeholder'=>'Date'));
				echo $this->Form->input('title', array('label'=>false, 'placeholder'=>'Title'));
				echo $this->Form->input('summary', array('label'=>false, 'placeholder'=>'Summary'));
				echo $this->Form->textarea('story', array('class'=>'ckeditor'));
				echo $this->Form->input('image', array('type'=>'file', 'label'=>'Image'));
				echo '<br />';
				echo $this->Form->input('file_image', array('type'=>'file', 'label'=>'File Image Thumb'));
				echo $this->Form->input('file', array('type'=>'file'));
				echo '<br />';
				echo $this->Form->input('file_image_1', array('type'=>'file', 'label'=>'File Image Thumb'));
				echo $this->Form->input('file_1', array('type'=>'file'));
				echo '<br />';
				echo $this->Form->input('file_image_2', array('type'=>'file', 'label'=>'File Image Thumb'));
				echo $this->Form->input('file_2', array('type'=>'file'));
				echo '<br />';
				echo $this->Form->input('file_image_3', array('type'=>'file', 'label'=>'File Image Thumb'));
				echo $this->Form->input('file_3', array('type'=>'file'));
				echo '<br />';
				echo "</p>";
			?>
			<?php echo $this->Form->end('Update'); ?>
			</div>
			</div>
		</div>
	</div>