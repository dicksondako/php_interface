<?php
namespace Interface\Classes;

require_once 'includes/PaymentInterface.php';

use Interface\Includes\PaymentInterface;

Class OnlineMerchant implements PaymentInterface
{

		public function payNow()
		{

				var_dump("In Online Merchant");
			
		}

} 


