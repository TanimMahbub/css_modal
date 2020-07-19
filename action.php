<?php
	if (isset($_POST['submit'])) {
		header('Location:http://localhost/cssModal/');
		echo '<script>window.location.href = "http://localhost/cssModal/";</script>';
	}
?>