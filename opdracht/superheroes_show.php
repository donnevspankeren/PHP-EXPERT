<?php
require 'database.php';
include 'header.php';

$id=$_GET['ID'];

$sql = "SELECT * FROM superheroes WHERE ID = :ph_id";
$statement = $db_conn->prepare($sql);
$statement->bindParam(":ph_id", $ph_id);
$statement->execute();
$database_gegevens = $statement->fetch(PDO::FETCH_ASSOC);
?>
<table class="table">
<thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Alignment</th>
        <th></th>
    </tr>
</thead>
<tbody>
    <?php foreach($database_gegevens as $hero):?>
        <tr>
            <td><?php echo $hero['ID']?></td>
            <td><?php echo $hero['Title']?></td>
            <td><?php echo $hero['Alignment']?></td>
        </tr>
        </tr>
    <?php endforeach;?>
</tbody>
</table>


