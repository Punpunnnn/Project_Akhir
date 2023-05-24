<!DOCTYPE html>
<html lang="en">
<head>
<title>Articles</title>
<link
href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap
.min.css" rel="stylesheet" integrity="sha384-
EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
crossorigin="anonymous">
</head>
<body>
<div class="container my-5">
<div class="row">
<div class="col-md-12">
<?php
if (isset($_GET['message'])) {
$message = $_GET['message'];
?>
<div class="alert alert-success my-4"><?= $message ?></div>
<?php
}
?>
<div class="card border-0">
<div class="card-header">
<div class="d-flex justify-content-between">
<h2>List Booking</h2>
</div>
</div>
<div class="card-body">
<table class="table">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Number of Guest</th>
<th>Date</th>
</tr>
</thead>
<tbody>
<?php
include "../db_conn.php";
$no = 1;
$query = mysqli_query($conn, "SELECT * FROM booking");
foreach ($query as $data) {
?>
<tr>
<td><?= $no++ ?></td>
<td><?= $data['name'] ?></td>
<td><?= $data['guest'] ?></td>
<td><?= $data['date'] ?></td>
<td>
</td>
<td>
<div class="btn-group">
<a href="delete.php?id=<?= $data['id'] ?>" class="btn btn-danger">Delete</a>
</div>
</td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</body>
</html>