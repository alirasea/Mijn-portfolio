
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
</head>
<style>

table, th, td {
  border:1px solid white;
}
@media only screen and (max-width: 600px) {
  
}
</style>
<body style="color:white; background-color:black;" media="( min-width:200px) and (max-width:1400px)">
    
<?php

include("conection.php");

        //$conn = contact();
        $query = "SELECT * FROM comments";
        $com = $conn->prepare($query);

try {
  $pdo = new PDO("mysql:host=localhost;dbname=$database", "$username", "$password");
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo $e->getMessage();
  exit;
}



if(isset($_GET['id'])) {
  try {
    $stmt = $pdo->prepare("DELETE FROM comments WHERE id = :id");
    $stmt->bindParam(":id", $_GET['id']);
    $stmt->execute();
  } catch(PDOException $e) {
    echo $e->getMessage();
  }
}



$stmt = $pdo->query("SELECT * FROM comments");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<table style="width:100%";>
<tr>
<th>Id</th>
<th>Name</th>
<th>Email</th>
<th>Comment</th>
<th>Date</th>
<th>Delete</th>
</tr>
<?php foreach($rows as $row): ?>
<tr>
<td><?php echo $row['Id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['comment']; ?></td>
<td><?php echo $row['Date']; ?></td>
<td><a style = "color:red;"href="?id=<?php echo $row['Id']; ?>">Delete</a></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>