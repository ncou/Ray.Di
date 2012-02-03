<?php

namespace Ray\Di;

use Ray\Di\SalesTax;
use Ray\Di\Di\ImplementedBy;

/**
 * @Aspect
 */
class RealBillingService implements BillingService {

	/**
	 * @SalesTax
	 */
	public function chargeOrder()
	{
	    return array(100, "yen");
	}
}