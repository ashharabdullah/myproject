<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;

class NewsController extends Controller
{
    public function index()
{
    $client = new Client();

    $response = $client->get('https://newsapi.org/v2/top-headlines', [
        'query' => [
            'country' => 'us',
            'apiKey' => env('NEWS_API_KEY'),
        ],
        'verify' => false,
    ]);

    $newsData = json_decode($response->getBody()->getContents(), true);

    return view('news.index', ['news' => $newsData['articles']]);
}

}
