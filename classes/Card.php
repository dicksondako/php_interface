<?php 

namespace Interface\Classes;

require_once 'includes/PaymentInterface.php';

use Interface\Includes\PaymentInterface;

class Card implements PaymentInterface
{

		public function payNow()
		{

			var_dump("Payment Using Card interface");

		}

}