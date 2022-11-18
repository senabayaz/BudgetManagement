<?php 

require_once 'incomesql.php';
session_start();
$sqlexpense = $db->prepare("INSERT INTO expensetbl SET
		expense_amount=:expense_amount,
		expense_date=:expense_date,
		expense_category=:expense_category
	");

$sqlinsert = $sqlexpense->execute(array(
	'expense_amount'=>$_POST['expense_amount'],
	'expense_category'=>$_POST['expense_category'],
	'expense_date'=>$_POST['expense_date']
));


if($sqlinsert){
	$_SESSION['sql_insert_control']="ok";
	Header("Location:expense_add.php");
	exit;
} else{
	$_SESSION['sql_insert_control']="err";
	Header("Location:expense_add.php");
	exit;
}
?>