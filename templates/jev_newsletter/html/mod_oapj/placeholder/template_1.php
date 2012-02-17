<?php // no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$ads = $zoneList->zoneList;
$ads_ready = array();

for($i=0; $i<count($ads); $i++) {	
	switch($ads[$i]['name']) {
		
		case 'b':
			$ads_ready[] = 
				'<tr><td colspan="3"><a href="'.$params->get('block_ckurl').'?bannerid='.$ads[$i]['id'].'" target="_blank">
				 	<img src="'.$params->get('block_avwurl').'?bannerid='.$ads[$i]['id'].'" border="0" width="253" height="211" />
				 </a></td></tr>';
			break;
		
		case 'e':
			$ads_ready[] = 
				'<tr>
					<td><a href="'.$params->get('block_ckurl').'?bannerid='.$ads[$i]['id'].'" target="_blank">
						 <img src="'.$params->get('block_avwurl').'?bannerid='.$ads[$i]['id'].'" border="0" width="120" height="90" />
				 	</a></td>
				 	<td></td>
				 	<td><a href="'.$params->get('block_ckurl').'?bannerid='.$ads[$i+1]['id'].'" target="_blank">
				 		<img src="'.$params->get('block_avwurl').'?bannerid='.$ads[$i+1]['id'].'" border="0" width="120" height="90" />
				 	</a></td>
				 </tr>';
				 $i = $i+1;
			break;
			
		case 'd':
			$ads_ready[] =
				'<tr>
					<td><a href="'.$params->get('block_ckurl').'?bannerid='.$ads[$i]['id'].'" target="_blank">
				 		<img src="'.$params->get('block_avwurl').'?bannerid='.$ads[$i]['id'].'" border="0" width="120" height="240" />
				 	</a></td>
				 	<td></td>
				 	<td><a href="'.$params->get('block_ckurl').'?bannerid='.$ads[$i+1]['id'].'" target="_blank">
				 		<img src="'.$params->get('block_avwurl').'?bannerid='.$ads[$i+1]['id'].'" border="0" width="120" height="240" />
				 	</a></td>
				 </tr>';
				  $i = $i+1;
			break;
			
		default:
			break;
		
	}
	
}

foreach($ads_ready as $ad) {
	echo $ad;
}