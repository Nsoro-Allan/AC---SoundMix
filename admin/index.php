<?php

	if (!isset($_SESSION['email'])) {
		header('Location: login.php?msg=Login First?.');
		exit;
	}

    else {
        header('Location: Dashboard.php');
    }

?>

