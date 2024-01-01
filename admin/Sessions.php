<?php

	if (!isset($_SESSION['email'])) {
		header('Location: index.php?msg=Login First?.');
		exit;
	}

?>

