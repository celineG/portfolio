<?php
	
/******************************************************************
/* Deleting the Table Row
******************************************************************/
if($_GET['page'] == 'videos' && ($_GET['opt'] == 'up' || $_GET['opt'] == 'down')) {
	$cid  = $wpdb->get_row("SELECT * FROM $table_name WHERE id=".$_GET['id']);
	$oid  = $wpdb->get_row("SELECT * FROM $table_name WHERE id=".$_GET['oid']);
	$wpdb->update($table_name, array('ordering' => $oid->ordering), array('id' => $cid->id));
	$wpdb->update($table_name, array('ordering' => $cid->ordering), array('id' => $oid->id));
	echo '<script>window.location="?page=videos";</script>';
}

?>