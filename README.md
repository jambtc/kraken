# kraken

Client libraries for use with the kraken.com API. Now support proxy settings.

php/: Kraken authored PHP client library. Requires PHP with curl support.

For other programming languages and general information, please refer to https://www.kraken.com/help/api#example-api-code

Examples:
$api = new KrakenAPI('key', 'secret');


$proxy = [
     'address' => 'proxy.example.it',
     'port' => '8080',
     'user' => 'username',
     'pass' => 'password'
];

$api->setProxy($proxy);

$result = $api->balances();
