<?php


namespace App\Traits;
use Paymentsds\MPesa\Client;


trait PaymentsTrait
{
    public function handlePayment(){

            $client = new Client([
                'apiKey' => env('MPESA_PI_KEY'),             // API Key
                'publicKey' => env('MPESA_PUBLIC_KEY'),          // Public Key
                'serviceProviderCode' => env('MPESA_SERVICE_PROVIDER_CODE'), // input_ServiceProviderCode
            ]);

            $paymentData = [
                'from' => '258840525605',       // input_CustomerMSISDN
                'reference' => 'CURSO2T0',      // input_ThirdPartyReference
                'transaction' => 'T12344CC', // input_TransactionReference
                'amount' => '500'             // input_Amount
            ];

            $result = $client->receive($paymentData);

            if ($result->success) {
               // dd('Pagamento realizado com sucesso');
            } else {
               // dd('Erro de pagamento');
            }
    }
}
