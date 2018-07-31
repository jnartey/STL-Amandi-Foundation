<?php
	foreach($locations as $location):
		$city = AppController::getData('City', 'id', $location['Location']['city_id']);
		echo '<option value="'.$location['Location']['id'].'">'.$city['City']['name'].'</option>';
	endforeach;
?>