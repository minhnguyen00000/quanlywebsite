<?php 

if(isset($_GET['id']))
{
	$query = $pdo->prepare('DELETE FROM nhanvien WHERE manhanvien=:id');
	$query->bindParam(':id',$_GET['id']);
	$query ->execute();
}


?>