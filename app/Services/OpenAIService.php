<?php

namespace App\Services; 
use Illuminate\Support\Facades\Http; 
use Illuminate\Http\Client\Response;
class OpenAIService { 
    protected $apiKey;
    protected $baseUri;
public function __construct() {
    $this->apiKey = config('services.openai.api_key');

    $this->apiKey = env('OPENAI_API_KEY');
    $this->baseUri = 'https://api.openai.com/v1/';
}

public function generateText($prompt, $model = "gpt-3.5-turbo")
{
    $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . $this->apiKey,
        'Content-Type' => 'application/json'
    ])->post($this->baseUri . 'chat/completions', [
        'model' => $model,
        'messages' =>  [
            ['role' => 'user', 'content' => $prompt]
        ],
        'temperature' => 0.7
    ]);
    
    return $this->handleResponse($response);
}


private function handleResponse(Response $response)
{
    if ($response->successful()) {
        return $response->json();
    } else {
        // Handle errors accordingly
        throw new \Exception('Failed to communicate with OpenAI API: ' . $response->body());
    }
}

}



