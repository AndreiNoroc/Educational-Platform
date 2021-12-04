<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Scheb\YahooFinanceApi\ApiClient;
use Scheb\YahooFinanceApi\ApiClientFactory;
use GuzzleHttp\Client;

class StocksDisplay extends Controller
{
    public function DisplayVar(Request $req) {

        // Create a new client from the factory
        $client = ApiClientFactory::createApiClient();

        $client->getHistoricalDividendData();

        // Returns an array of Scheb\YahooFinanceApi\Results\Quote
        $exchangeRates = $client->getExchangeRates([
            ["USD", "EUR"],
            ["EUR", "USD"],
        ]);

        return $exchangeRates;
    }
}
