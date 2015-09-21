<?php

$paypalIpn = new PaypalIpn();

$paymentManager = new PaymentManager($paypalIpn);

$paymentManager->process();
