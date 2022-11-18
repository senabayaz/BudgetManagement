<?php 

require_once 'incomesql.php';
session_start();
$sqlincome = $db->prepare("INSERT INTO incometbl SET
		income_amount=:income_amount,
		income_date=:income_date,
		income_category=:income_category
	");

$sqlinsert = $sqlincome->execute(array(
	'income_amount'=>$_POST['income_amount'],
	'income_category'=>$_POST['income_category'],
	'income_date'=>$_POST['income_date']
));


if($sqlinsert){
	$_SESSION['sql_insert_control']="ok";
	Header("Location:income_add.php");
	exit;
} else{
	$_SESSION['sql_insert_control']="err";
	Header("Location:income_add.php");
	exit;
}
?>