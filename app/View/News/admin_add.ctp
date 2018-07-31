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
			<h2>
				<?php echo $current_page; ?> <a href="#"><?php echo $header; ?></a>
			</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns">
		<?php echo $this->element('admin'.DS.'news_menu'); ?>
	</div>
	<div class="large-10 columns content">
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
							echo "</p>";
							
							echo "<p>";
							echo $this->Form->input('news_date', array('type' => 'text', 'class'=>'event-date', 'label'=>false, 'placeholder'=>'Date'));
							echo $this->Form->input('title', array('label'=>false, 'placeholder'=>'Title'));
							echo $this->Form->input('file_image', array('type'=>'file', 'label'=>'File Image Thumb'));
							echo $this->Form->input('file', array('type'=>'file'));
							echo "</p>";
							echo $this->Form->hidden('category', array('value'=>$parent['News']['id']));
							echo $this->Form->hidden('cid', array('value'=>$rev));
					 		echo $this->Form->end('Add'); ?>
		</div>
	</div>
</div>
