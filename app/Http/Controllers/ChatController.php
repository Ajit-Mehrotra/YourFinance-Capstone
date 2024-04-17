<?php

namespace App\Http\Controllers;

use App\Services\OpenAIService;
use Illuminate\Http\Request;

class ChatController extends Controller
{
protected $openaiService;

public function __construct(OpenAIService $openaiService)
{
$this->openaiService = $openaiService;
}

public function chat(Request $request)
{
$prompt = $request->input('message');
$response = $this->openaiService->generateText($prompt);


return response()->json([
    'choices' => [
        ['text' => $response['choices'][0]['message']]
    ]
]);
}
}