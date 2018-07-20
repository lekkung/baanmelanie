<?php
session_start();
$_SESSION["lang"] = $_GET["lang"];
session_write_close();

?>

<script>
window.history.go(-1);
</script>