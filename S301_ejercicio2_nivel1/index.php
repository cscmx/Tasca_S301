<?php

require_once 'S301_ejercicio2_nivel1/PaymentProcessor.php';

$stripePaymentGateway = new StripePaymentGateway();
$paymentMethod = new PaymentProcessor($stripePaymentGateway);
echo $paymentMethod->processPayment(45).PHP_EOL;

$paypalPaymentGateway = new PaypalPaymentGateway();
$paymentMethod = new PaymentProcessor($paypalPaymentGateway);
echo $paymentMethod->processPayment(67).PHP_EOL;

$bankTransferPaymentGateway = new BankTransfer();
$paymentMethod = new PaymentProcessor($bankTransferPaymentGateway);
echo $paymentMethod->processPayment(89.9).PHP_EOL;


?>