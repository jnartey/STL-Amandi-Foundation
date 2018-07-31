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
		<?php echo $this->element('admin'.DS.'video_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php echo $this->Session->flash(); ?>
		<div class="large-7 columns">
			<div class="row">
				<?php
					if($item_parent[0]['Video']['category']):
						echo $this->Html->link(__(("cancel"), true), array('controller'=> 'videos', 'action'=>'view', $item_parent[0]['Video']['category'], 'admin' => true), array('escape' => false, 'class'=>'button small primary right')); 
					else:
						echo $this->Html->link(__(("cancel"), true), array('controller'=> 'videos', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary right'));
					endif;
				?>
			</div><?php
						
						if($item_parent[0]['Video']['video_category'] == 1 && $item_parent[0]['Video']['video_content'] == 0){
							echo $this->Form->create('Video', array('type' => 'file'));
							echo $this->Form->input('name', array('label'=>false, 'placeholder'=>'Name'));
							echo $this->Form->hidden('video_category', array('value' => 1));
							echo $this->Form->hidden('video_content', array('value' => 1));
							if($item_parent[0]['Video']['id']){
								echo $this->Form->hidden('category', array('value'=>$item_parent[0]['Video']['id']));
							}
							echo $this->Form->hidden('cid', array('value'=>$rev));
						 	echo $this->Form->end('Add');
						}elseif($item_parent[0]['Video']['video_content'] == 0){
							echo $this->Form->create('Video', array('type' => 'file'));
							echo $this->Form->input('name', array('label'=>false, 'placeholder'=>'Name'));
							echo $this->Form->hidden('video_category', array('value' => 1));
							echo $this->Form->hidden('video_content', array('value'=>0));
							if($item_parent[0]['Video']['id']){
								echo $this->Form->hidden('category', array('value'=>$item_parent[0]['Video']['id']));
							}
							echo $this->Form->hidden('cid', array('value'=>$rev));
						 	echo $this->Form->end('Add');
						}

						if($item_parent[0]['Video']['video_content'] == 1){
							echo $this->Form->create('Video', array('type' => 'file'));
							echo $this->Form->hidden('name', array('label'=>false, 'placeholder'=>'Name'));
							echo $this->Form->input('merchant_id', array(
								'type'    => 'select',
								'options' => $merchants,
								'empty'   => false,
								'label'=>'Merchants'
							));
							echo '<br />';
							echo $this->Form->input('location_id', array('label'=>'Location'));
							echo '<br />';
							echo $this->Form->input('description', array('label'=>false, 'placeholder'=>'Video Description'));
							echo '<br />';
							echo $this->Form->input('video_file', array('type'=>'file', 'label'=>'Video'));
							echo $this->Form->hidden('video_category', array('value'=>0));
							echo $this->Form->hidden('video_content', array('value'=>1));
							
							if($item_parent[0]['Video']['category']){
								echo $this->Form->hidden('parent', array('value'=>$item_parent[0]['Video']['category']));
								echo $this->Form->hidden('category', array('value'=>$item_parent[0]['Video']['id']));
							}
							echo $this->Form->hidden('cid', array('value'=>$rev));
						 	echo $this->Form->end('Add');
						}
					?>
		</div>
	</div>
</div>
<?php
	$this->Js->get('#VideoMerchantId')->event('change', 
	$this->Js->request(array('controller'=>'videos', 'action'=>'get_location', 'admin'=>true), array(
			'update'=>'#VideoLocationId',
			'async' => true,
			'method' => 'post',
			'dataExpression'=>true,
			'data'=> $this->Js->serializeForm(array(
				'isForm' => true,
				'inline' => true
			))
		))
	);
?>

<script>
$(document).ready(function() {
	var dataId = $("#VideoMerchantId").val(); 
	$.ajax({
		type: "POST",
		url: "<?php echo $this->Html->url(DS.'admin'.DS.'videos'.DS.'get_location', true); ?>",
		data: 'merch_id=' + dataId,
		beforeSend: function(xhr){
			//$("#VideoLocationId").html('<p class="loading">Loading please wait...</p>');
		 },
		success: function(data) {
			$("#VideoLocationId").html(data);
		}
	});
});
</script>