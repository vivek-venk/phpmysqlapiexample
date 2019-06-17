<?php

  $json = file_get_contents('http://localhost/api/emp/read.php');
  $test = json_decode($json, true);
  $listItems = ($test);
  //dump($listItems);

?>

<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;
}
table.names tr:nth-child(even) {
  background-color: #eee;
}
table.names tr:nth-child(odd) {
  background-color:#fff;
}
table.names th {
  background-color: black;
  color: white
}
</style>

<center><h1> <u>Employee Database Contents</u></h1></center>

<table class="names">
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
	            <td> <?php echo $item['id']; ?> </td>
	            <td> <?php echo $item['name']; ?> </td>
	            <td> <?php echo $item['designation']; ?> </td>
	            <td> <?php echo $item['age']; ?> </td>
	            <td> <?php echo $item['skills']; ?> </td>
	        </tr>
		<?php endforeach; ?>
	</tbody>
</table>
