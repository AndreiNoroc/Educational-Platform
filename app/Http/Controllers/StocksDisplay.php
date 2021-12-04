<?php

namespace App\Http\Controllers;

use Scheb\YahooFinanceApi\ApiClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Scheb\YahooFinanceApi\ApiClientFactory;

class StocksDisplay extends Controller
{
    public function DisplayVar() {

        // Create a new client from the factory
        $client = ApiClientFactory::createApiClient();

        $exchangeVec = array(["USD", "RON"], ["RON", "USD"], ["USD", "EUR"], ["EUR", "USD"]);
        $topStocks = array("AMZN", "AAPL", "GOOG", "FB", "TSLA", "NFLX");

        $DataExchange = array();
        for($i = 0; $i < count($exchangeVec); $i++) {
            $exchangeRates = $client->getExchangeRates([
                $exchangeVec[$i]
            ]);
            $data = array();
            array_push($data, $exchangeVec[$i][0], $exchangeVec[$i][1], $exchangeRates[0]->getAsk(), $exchangeRates[0]->getFiftyDayAverage(),
            $exchangeRates[0]->getFiftyDayAverageChange(), $exchangeRates[0]->getFiftyDayAverageChangePercent());
            array_push($DataExchange, $data);
        }

        $DataTopStock = array();
        for($i = 0; $i < count($topStocks); $i++) {
            $historicalData = $client->getHistoricalQuoteData(
                $topStocks[$i],
                ApiClient::INTERVAL_1_DAY,
                new \DateTime("-1 days"),
                new \DateTime("today")
            );
            $data = array($topStocks[$i], $historicalData[0]->getLow(), $historicalData[0]->getHigh(), $historicalData[0]->getVolume(), $historicalData[0]->getHigh() - $historicalData[0]->getLow());
            array_push($DataTopStock, $data);
        }

       // return compact('DataExchange', 'DataTopStock');
        return View::first(['Stocks.stocks', '/stocks'], compact('DataExchange', 'DataTopStock'));
    }

    public function SearchStock() {
        $data = request()->all();

        $client = ApiClientFactory::createApiClient();
        $searchResult = $client->search($data['text']);

        $historicalData = $client->getHistoricalQuoteData(
            $data['text'],
            ApiClient::INTERVAL_1_DAY,
            new \DateTime("-14 days"),
            new \DateTime("today")
        );

        $parsedata = array();

        array_push($parsedata, $searchResult[0]->getSymbol(), $searchResult[0]->getName(), $searchResult[0]->getExchDisp(), $historicalData[0]->getOpen(), $historicalData[0]->getCLose(), $historicalData[0]->getHigh(), $historicalData[0]->getLow(), $historicalData[0]->getVolume());

        return back()->with('searchResult', $parsedata);
    }
}
