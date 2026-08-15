<?php

require_once 'S301_ejercicio2_nivel1/BankTransfer.php';
require_once 'S301_ejercicio2_nivel1/PaypalPaymentGateway.php';
require_once 'S301_ejercicio2_nivel1/StripePaymentGateway.php';

class PaymentProcessor
{
    private $gateway;

    public function __construct(PaymentMethod $gateway)
    {
        $this->gateway = $gateway;
    }

    public function processPayment(float $amount)
    {
        return $this->gateway->sendPayment($amount);
    }
}