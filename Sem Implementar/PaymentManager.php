<?php

class PaymentManager {

	protected $paypal;

	public function __construct(PaypalIpn $paypal) {
		$this->paypal = $paypal;
	}

	public function process() {
		$this->paypalInp->processPayment();

		// e outras coisas do pagamento
	}
}