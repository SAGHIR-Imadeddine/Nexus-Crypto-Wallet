<?php
class Crypto
{
    private $apiUrl = 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest';
    private $apiKey = '15353843-1314-4878-86cd-089263e99d1d';

    public function fetchCryptoData()
    {
        $parameters = [
            'start' => '1',
            'limit' => '100',
            'convert' => 'USD'
        ];

        $qs = http_build_query($parameters);
        $request = "{$this->apiUrl}?{$qs}";

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $request,
            CURLOPT_HTTPHEADER => ['Accepts: application/json', "X-CMC_PRO_API_KEY: {$this->apiKey}"],
            CURLOPT_RETURNTRANSFER => 1
        ));

        $response = curl_exec($curl);
        $data = json_decode($response, true);
        curl_close($curl);
      
        return $data['data'] ?? [];
    }
}
