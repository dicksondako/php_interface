<?php 

	//require 'includes/PaymentInterface.php';
	require_once 'includes/ProductPayment.php';
	
	require_once 'classes/OnlineMerchant.php';
	require_once 'classes/BankTransfer.php';
	require_once 'classes/Card.php';
	require_once 'classes/Cash.php';

	//use Interface\Includes\PaymentInterface;
	use Interface\Includes\ProductPayment;

	use Interface\Classes\OnlineMerchant;
	use Interface\Classes\BankTransfer;
	use Interface\Classes\Card;
	use Interface\Classes\Cash;
	
 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Interface</title>
</head>
<body>
<?php 
	//create a list of the different payment method

	//randomly select from the list.

	//The randomly selected valect should be the User Selected Payment Type

	
	$payment_type = new Cash;
	//var_dump($payment_type);
	$product_payment = new ProductPayment();
	$product_payment->pay($payment_type);


 ?>
</body>
</html>
