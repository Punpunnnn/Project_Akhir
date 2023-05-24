<?php
if (isset($_GET['id'])) {
 include "../db_conn.php";
 $id = $_GET['id'];
 $query = mysqli_query($conn, "DELETE FROM booking WHERE 
id='$id'");
 if ($query) {
 $message = "Data berhasil dihapus";
 $message = urlencode($message);
 header("Location:index.php?message={$message}");
 } else {
 $message = "Data gagal dihapus";
 $message = urlencode($message);
 header("Location:add.php?message={$message}");
 }
}
?>