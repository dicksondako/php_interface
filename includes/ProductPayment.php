<?php

namespace Interface\Includes;

require_once 'includes/PaymentInterface.php';
require_once 'classes/OnlineMerchant.php';
require_once 'classes/Card.php';
require_once 'classes/Cash.php';
require_once 'classes/BankTransfer.php';

use Interface\Includes\PaymentInterface;
use Interface\Classes\OnlineMerchant;
use Interface\Classes\Card;
use Interface\Classes\Cash;
use Interface\Classes\BankTransfer;



class ProductPayment
{

	public function pay(PaymentInterface $process_type)
	{
		//echo "Pay using your prefer method";
		//$payment_type =new BankTransfer();
		$process_type->payNow();
	}

}

