<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>
				<?php echo $current_page.$item_parent[0]['Video']['name']; ?> <a href="#"><?php echo $header; ?></a>
			</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns admin-left-panel">
		<?php echo $this->element('admin'.DS.'video_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php echo $this->Session->flash(); ?>
		<div class="large-12 columns">
			<?php 
				if($item_parent[0]['Video']['category']):
					echo $this->Html->link(__(("&lsaquo; back"), true), array('controller'=> 'videos', 'action'=>'view', $item_parent[0]['Video']['category'], 'admin' => true), array('escape' => false, 'class'=>'button small primary')); 
				else:
					echo $this->Html->link(__(("&lsaquo; back"), true), array('controller'=> 'videos', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary'));
				endif;
				echo $this->Html->link(__(("Add"), true), array('controller'=> 'videos', 'action'=>'add', $item_parent[0]['Video']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); 
				echo $this->Html->link(__(("Edit"), true), array('controller'=> 'videos', 'action'=>'edit', $item['Video']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); 
				echo $this->Form->postLink(__("Delete", true), array('controller'=> 'videos', 'action'=>'delete', $item['Video']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button small alert'), sprintf(__('Are you sure you want to delete '.$item['Video']['name'].'?', true), $item['Video']['id'])); 
			?>
		</div>
		<div class="large-10 columns">
			<?php 
				if(!$item_parent[0]['Video']['category'] && !$item_parent[0]['Video']['parent']){
					echo '<ul class="breadcrumbs">';
					echo '<li>'.$this->Html->link(__(("home"), true), array('controller'=> 'videos', 'action'=>'index', 'admin' => true), array('escape' => false)).'</li>';
					echo '<li>'.$this->Html->link(__(($item_parent[0]['Video']['name']), true), array('controller'=> 'videos', 'action'=>'view', $item_parent[0]['Video']['id'], 'admin' => true), array('escape' => false, 'class'=>'current')).'</li>';
					echo '</ul>';
				}
				
				if($item_parent[0]['Video']['category'] && !$item_parent[0]['Video']['parent']){
					echo '<ul class="breadcrumbs">';
					echo '<li>'.$this->Html->link(__(("home"), true), array('controller'=> 'videos', 'action'=>'index', 'admin' => true), array('escape' => false)).'</li>';
					$parent_data = AppController::getData('Video', 'id', $item_parent[0]['Video']['category']);
					echo '<li>'.$this->Html->link(__(($parent_data['Video']['name']), true), array('controller'=> 'videos', 'action'=>'view', $parent_data['Video']['id'], 'admin' => true), array('escape' => false)).'</li>';
					echo '<li>'.$this->Html->link(__(($item_parent[0]['Video']['name']), true), array('controller'=> 'videos', 'action'=>'view', $item_parent[0]['Video']['id'], 'admin' => true), array('escape' => false, 'class'=>'current')).'</li>';
					echo '</ul>';
				}
				
				if($item_parent[0]['Video']['category'] && $item_parent[0]['Video']['parent']){
					echo '<ul class="breadcrumbs">';
					echo '<li>'.$this->Html->link(__(("home"), true), array('controller'=> 'videos', 'action'=>'index', 'admin' => true), array('escape' => false)).'</li>';
					$parent_data = AppController::getData('Video', 'id', $item['Location']['parent']);
					echo '<li>'.$this->Html->link(__(($parent_data['Video']['name']), true), array('controller'=> 'videos', 'action'=>'view', $parent_data['Video']['id'], 'admin' => true), array('escape' => false)).'</li>';
					$parent_data_1 = AppController::getData('Video', 'id', $item['Location']['category']);
					echo '<li>'.$this->Html->link(__(($parent_data_1['Video']['name']), true), array('controller'=> 'videos', 'action'=>'view', $parent_data_1['Video']['id'], 'admin' => true), array('escape' => false)).'</li>';
					echo '<li>'.$this->Html->link(__(($item_parent[0]['Video']['name']), true), array('controller'=> 'videos', 'action'=>'view', $item_parent[0]['Video']['id'], 'admin' => true), array('escape' => false, 'class'=>'current')).'</li>';
					echo '</ul>';
				}
				
				if($item_parent[0]['Video']['video_content'] == 1){
					if($item['Video']['merchant_id']){
						echo '<div class="panel">';
						echo '<p>';
						echo '<strong>'.__('Merchant: ').'</strong><br />';
						$merchant = AppController::getData('Merchant', 'id', $item['Video']['merchant_id']);
						echo $merchant['Merchant']['name'].'<br /><br />';
						
						if($item['Video']['location_id']){
							echo '<strong>'.__('Location: ').'</strong><br />';
							$location = AppController::getData('Location', 'id', $item['Video']['location_id']);
							$city = AppController::getData('City', 'id', $location['Location']['id']);
							echo $city['City']['name'].', '.$city['Province']['province_code'].'<br /><br />';
						}
						
						if($item['Video']['description']){
							echo '<strong>'.__('Description: ').'</strong><br />';
							echo $item['Video']['description'].'<br />';
						}
						echo '</p>';
						echo '</div>';
					}
				}
			?>
		</div>
		<div class="large-12 columns">
			<?php if($items){ ?>
			<h4>
				<?php
					echo ' Sub category';
				?>
			</h4>
			<table cellspacing="0">
				<thead>
					<tr>
						<th>
							<?php echo $this->Paginator->sort('name');?>
						</th>
						<th>
							<?php echo __('Actions');?>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($items as $item):
					?>
					<tr>
						<td>
							<?php 
								if($item['Video']['name']){
									echo $item['Video']['name']; 
								}else{
									echo $item['Video']['video_file']; 
								}
							?>
						</td>
						<td class="actions">
							<?php 
								$collect = AppController::getChildren('Video', 'category', $item['Video']['id']);
								if($collect){
									$count = '('.count($collect).')';
								}else{
									$count = null;
								}
								
								echo $this->Html->link(__(("view ".$count), true), array('controller'=> 'videos', 'action'=>'view', $item['Video']['id'], 'admin' => true), array('escape' => false, 'class'=>'button tiny primary'));
								echo $this->Html->link(__(("Edit"), true), array('controller'=> 'videos', 'action'=>'edit', $item['Video']['id'], 'admin' => true), array('escape' => false, 'class'=>'button tiny secondary'));
								 
								if(isset($item_parent) && !empty($item_parent)){
									echo $this->Form->postLink(__("Delete", true), array('controller'=> 'videos', 'action'=>'delete', $item['Video']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny alert'), sprintf(__('Are you sure you want to delete '.$item['Video']['name'].'?', true), $item['Video']['id']));
								}
							?>
						</td>
					</tr><?php endforeach; ?>
				</tbody>
			</table><?php } ?>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="pagination">
					<?php echo '<span class="unavailable">&laquo;</span>'.$this->Paginator->prev(__('prev', true), array(), null, array('class'=>'unavailable'));?><?php echo $this->Paginator->numbers();?><?php echo $this->Paginator->next(__('next', true), array(), null, array('class'=>'unavailable')).'<span class="unavailable">&raquo;</span>';?>
				</div>
			</div>
		</div>
	</div>
</div>
