<?php
// connect to db

$host = "localhost";
$user = "root";
$password = "";
$database = "tutorial";
$conn = mysqli_connect($host, $user, $password, $database);
$results = $conn->query("SELECT * FROM users");
?>

<?php while ($data = $results->fetch_assoc()): ?>

    <tr>
        <td><?php echo $data['id'] ?></td>
        <td><?php echo $data['username'] ?></td>
        <td><?php echo $data['created_at'] ?></td>
    </tr>
<?php endwhile; ?>
