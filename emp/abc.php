<?php

  $json = file_get_contents('http://localhost/api/emp/read.php');
  $test = json_decode($json, true);
  $listItems = ($test);
  //dump($listItems);

?>

<table>
	<tbody>
		<tr>
			<th>id</th>
			<th>Name</th>
			<th>Designation</th>
			<th>Age</th>
			<th>Skills</th>
		</tr>
		<?php foreach ($listItems as $item): ?>
	        <tr>
	            <td> <?php echo $item['name']; ?> </td>
	            <td> <?php echo $item['id']; ?> </td>
	            <td> <?php echo $item['designation']; ?> </td>
	            <td> <?php echo $item['age']; ?> </td>
	            <td> <?php echo $item['skills']; ?> </td>
	        </tr>
		<?php endforeach; ?>
	</tbody>
</table>