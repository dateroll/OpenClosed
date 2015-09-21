<?php

	
	$creditCard = new CreditCard();

	$paymentManager = new PaymentManager($creditCard);

	$paymentManager->process();
