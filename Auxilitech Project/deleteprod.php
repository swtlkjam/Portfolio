<?php
include "conn.php";
$id=$_GET["id"];
mysqli_query($conn, "delete from products where id=$id");
?>

<script type="text/javascript">
window.location="prod-maintenance.php";
</script>