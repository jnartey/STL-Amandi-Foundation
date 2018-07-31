<div class="large-12 columns main-wrapper antialiased">
<?php 
	echo '<div class="large-12 columns padded">';
	echo $this->element('head'); 
	echo '</div>';
?>

<div class="large-12 columns padded antialiased">
		<div class="large-12 content-white">
			<div class="large-12 columns search-field">
				<input type="text" id="more-search" name="more-search" value="<?php echo $keywords; ?>" placeholder="Search" />
			</div>
			<div class="results-wrap-1">
				<div class="inner">
					<h4 class="text-left" id="results-text">Showing results for: <strong class="search-string"><?php echo $keywords; ?></strong></h4>
					<ul id="results">
						<span class='search-results-summary'>About <?php echo '<strong>'.$num_of_rows.'</strong> '; ?> result(s)</span>
						<div class="search-boundary">
						<?php
							if(!empty($search_results)){
								$parent = null;
								$parent_result = null;
								$grand_parent = null;
								$grand_parent_result = null;
								$great_grand_parent = null;
								$great_grand_parent_result = null;

								$parent_1 = null;
								$grand_parent_1 = null;
								$great_grand_parent_1 = null;
								$parent_result_1 = null;
								$grand_parent_result_1 = null;
								$great_grand_parent_result_1 = null;

								$parent_2 = null;
								$grand_parent_2 = null;
								$great_grand_parent_2 = null;
								$parent_result_2 = null;
								$grand_parent_result_2 = null;
								$great_grand_parent_result_2 = null;

								$search = array('@<script[^>]*?>.*?</script>@si',  // Strip out javascript 
								               '@<[\/\!]*?[^<>]*?>@si',            // Strip out HTML tags 
								               '@<style[^>]*?>.*?</style>@siU',    // Strip style tags properly 
								               '@<![\s\S]*?--[ \t\n\r]*>@'         // Strip multi-line comments including CDATA 
								);

								if(isset($search_results['misc'])){
									$root = null;
									$parent_link = null;
									$search_tag = null;

									foreach($search_results['misc'] as $data):

										$parent_result = AppController::getParent('PageContent', 'id', $data['PageContent']['category']);
										if($parent_result){
											$parent = $parent_result['PageContent']['title'];
											if($parent_result['PageContent']['category'] != null){
												$parent_link = $parent;
											}

											if($parent_result['PageContent']['category'] == null){
												if($parent_result['PageContent']['id'] == 1){
													$root = 'about-us';
													$search_tag = 'About Us';
												}

												if($parent_result['PageContent']['id'] == 7){
													$root = 'helping-the-community';
													$search_tag = 'Helping the community';
												}

												if($parent_result['PageContent']['id'] == 10){
													$root = 'projects';
													$search_tag = 'Projects';
												}
											}
										}

										if($parent){
											if($parent_result){
												$grand_parent_result = AppController::getParent('PageContent', 'id', $parent_result['PageContent']['category']);
											}

											if($grand_parent_result){
												$grand_parent = $grand_parent_result['PageContent']['title'];
												if($grand_parent_result['PageContent']['category'] != null){
													$parent_link = $grand_parent;
												}

												if($grand_parent_result['PageContent']['category'] == null){
													if($grand_parent_result['PageContent']['id'] == 1){
														$root = 'about-us';
														$search_tag = 'About Us';
													}

													if($grand_parent_result['PageContent']['id'] == 7){
														$root = 'helping-the-community';
														$search_tag = 'Helping the community';
													}

													if($grand_parent_result['PageContent']['id'] == 10){
														$root = 'projects';
														$search_tag = 'Projects';
													}
												}

											}else{
													$grand_parent = null;
												}

											if($grand_parent){
												$great_grand_parent_result = AppController::getParent('PageContent', 'id', $grand_parent_result['PageContent']['category']);

												if($great_grand_parent_result){
													$great_grand_parent = $great_grand_parent_result['PageContent']['title'];
													if($great_grand_parent_result['PageContent']['category'] != null){
														$parent_link = $great_grand_parent;
													}

													if($great_grand_parent_result['PageContent']['category'] == null){
														if($great_grand_parent_result['PageContent']['id'] == 1){
															$root = 'about-us';
															$search_tag = 'About Us';
														}

														if($great_grand_parent_result['PageContent']['id'] == 7){
															$root = 'helping-the-community';
															$search_tag = 'Helping the community';
														}

														if($great_grand_parent_result['PageContent']['id'] == 10){
															$root = 'projects';
															$search_tag = 'Projects';
														}
													}
												}
											}

										}else{
											$parent_link = $parent;
										}

										if($parent_result){
											if($root == 'projects'){
												$cleaned = strip_tags($data['PageContent']['slug']);
											}else{
												$cleaned = strip_tags($parent_result['PageContent']['slug']);
											}
										}else{
											$cleaned = strip_tags($data['PageContent']['slug']);
										}

										$shortened_title = strlen($data['PageContent']['title']) >= 50 ? substr($data['PageContent']['title'], 0, 50) . ' ...' : $data['PageContent']['title'];

										if($data['PageContent']['content']){
											if($cleaned){
												if($root == 'projects'){
													echo '<li><h5>'.$this->Html->link(__(('<span class="tag">'.$search_tag.'</span> '.strip_tags($shortened_title)), true), array('controller'=> 'pages', 'action'=>$root.'#fndtn-'.$cleaned), array('escape' => false)).'</h5>';
													$text = preg_replace($search, '', $data['PageContent']['content']);
													$shortened_text = strlen($text) >= 350 ? substr($text, 0, 350) . ' ...' : $text;
													echo '<p>'.strip_tags($shortened_text).$this->Html->link(__(('read more'), true), array('controller'=> 'pages', 'action'=>$root.'#fndtn-'.$cleaned), array('escape' => false, 'class'=>'more')).'</p>';
												}else{
													echo '<li><h5>'.$this->Html->link(__(('<span class="tag">'.$search_tag.'</span> '.strip_tags($shortened_title)), true), array('controller'=> 'pages', 'action'=>$root.'#'.$cleaned), array('escape' => false)).'</h5>';
													$text = preg_replace($search, '', $data['PageContent']['content']);
													$shortened_text = strlen($text) >= 350 ? substr($text, 0, 350) . ' ...' : $text;
													echo '<p>'.strip_tags($shortened_text).$this->Html->link(__(('read more'), true), array('controller'=> 'pages', 'action'=>$root.'#'.$cleaned), array('escape' => false, 'class'=>'more')).'</p>';
												}
											}else{
												echo '<li><h5>'.$this->Html->link(__(('<span class="tag">'.$search_tag.'</span> '.strip_tags($shortened_title)), true), array('controller'=> 'pages', 'action'=>$root.'#'.$cleaned), array('escape' => false)).'</h5>';
												$text = preg_replace($search, '', $data['PageContent']['content']);
												$shortened_text = strlen($text) >= 350 ? substr($text, 0, 350) . ' ...' : $text;
												echo '<p>'.strip_tags($shortened_text).$this->Html->link(__(('read more'), true), array('controller'=> 'pages', 'action'=>$root), array('escape' => false, 'class'=>'more')).'</p>';
											}
										}

										echo '</li>';

									endforeach;
								}

								echo '</div>';

							}else{
								echo '<li><p>No results found</p></li>';
							}

						?>
					</ul>
				</div>
			</div>
		</div>
</div>
<?php echo $this->element('footer_misc'); ?>
</div>