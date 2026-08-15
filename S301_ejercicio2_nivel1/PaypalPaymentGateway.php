<?php

require_once 'S301_ejercicio2_nivel1/InterfacePaymentMethod.php';

class PayPalPaymentGateway implements PaymentMethod
{
    
    public function sendPayment(float $amount): string
    {
        return "Sent {$amount}€ payment processed by Paypal.";
    }
}

?>