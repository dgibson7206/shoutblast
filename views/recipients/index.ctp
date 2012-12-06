<h1>My Recipients</h1>

<table>

<tr>
	<th>Email</th>
	<th>Type</th>
	<th></th>
</tr>

<?php
	echo '<pre>'; print_r($_REQUEST); echo '</pre>';
	echo '<pre>'; print_r($_SESSION); echo '</pre>';
	echo '<pre>'; print_r($recipients); echo '</pre>';


	foreach($recipients as $data){
	echo '<tr>';
	echo '  <td>'.$data['Recipient']['email'].'</td>';
	echo '	<td>'.$data['Recipient']['type'].'</td>';
	echo '	<td><a href="#">Edit</a> <a href="#">Delete</a></td>';
	echo '</tr>';
	}

?>


</table>
