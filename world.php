<?php
$host = 'localhost';
$username = 'lab5_user';
$password = 'password123';
$dbname = 'world';

$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);


$input = $_GET['country'];
?>
<?php if ($input == ""){?>
<table>
<tr>
<th>Name</th>
<th>Continent</th>
<th>Independence</th>
<th>Head of State</th>
</tr>
<?php foreach ($results as $row): ?>
  <tr>
    <td><?= $row['name']?></td>
    <td><?= $row['continent']?></td>
    <td><?= $row['independence_year']?></td>
    <td><?= $row['head_of_state']?></td>
  </tr>
<?php endforeach; ?>
</table>

<?php } else{?>
<?php $sql = "SELECT * FROM countries WHERE name LIKE '%$input%'";?>
<?php $results = $conn->query($sql);?>
<?php if ($results->rowCount() > 0){?>
<table>
<tr>
<th>Name</th>
<th>Continent</th>
<th>Independence</th>
<th>Head of State</th>
</tr>
<?php foreach ($results as $row): ?>
  <tr>
    <td><?= $row['name']?></td>
    <td><?= $row['continent']?></td>
    <td><?= $row['independence_year']?></td>
    <td><?= $row['head_of_state']?></td>
  </tr>
<?php endforeach; ?>
</table>
<?php }?>
<?php }?>
