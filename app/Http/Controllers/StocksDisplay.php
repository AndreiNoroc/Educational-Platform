<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Scheb\YahooFinanceApi\ApiClientFactory;

class StocksDisplay extends Controller
{
    public function DisplayVar() {

        // Create a new client from the factory
        $client = ApiClientFactory::createApiClient();

        $exchangeVec = array(["USD", "RON"], ["RON", "USD"], ["USD", "EUR"], ["EUR", "USD"]);
        $Data = array();

        for($i = 0; $i < count($exchangeVec); $i++) {
            $exchangeRates = $client->getExchangeRates([
                $exchangeVec[$i]
            ]);
            $data = array();
            array_push($data, $exchangeRates[0]->getAsk(), $exchangeRates[0]->getFiftyDayAverage(),
            $exchangeRates[0]->getFiftyDayAverageChange(), $exchangeRates[0]->getFiftyDayAverageChangePercent());
            array_push($Data, $data);
        }

        return View::first(['Stocks.stocks', '/stocks'], compact('Data'));
    }
}
