<?php
include'../includes/connection.php';

	if (!isset($_GET['do']) || $_GET['do'] != 1) {
						
    	switch ($_GET['type']) {
    		case 'operator':
    			$query = 'DELETE FROM users WHERE ID = ' . $_GET['id'];
    			$result = mysqli_query($db, $query) or die(mysqli_error($db));				
            ?>
    			<script type="text/javascript">alert("Operator Successfully Deleted.");window.location = "Operator.php";</script>					
            <?php
    			//break;
            }
	}
?>