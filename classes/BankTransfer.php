<?php

namespace Interface\Classes;

require_once 'includes/PaymentInterface.php';

use Interface\Includes\PaymentInterface;


class BankTransfer implements PaymentInterface
{

		public function payNow()
		{

			var_dump("In Bank transfer");

		}

		public function processPayment(){

			var_dump("process Payment");
		}

}