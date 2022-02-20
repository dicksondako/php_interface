<?php
namespace Interface\Classes;

require_once 'includes/PaymentInterface.php';

use Interface\Includes\PaymentInterface;

class Cash implements PaymentInterface
{

		public function payNow()
		{
			var_dump("Payment Using Cash interface");
		}

}