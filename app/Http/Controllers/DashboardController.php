<?php


namespace App\Http\Controllers;


use App\Models\History;
use App\Models\UserDetails;
use App\Services\ChatServer;
use Gemini\Data\Content;
use Gemini\Enums\Role;
use Gemini\Laravel\Facades\Gemini;
use GeminiAPI\Client;
use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;
use Orhanerday\OpenAi\OpenAi;
use Gemini\Data\GenerationConfig;
use Gemini\Enums\HarmBlockThreshold;
use Gemini\Data\SafetySetting;
use Gemini\Enums\HarmCategory;


class DashboardController extends Controller
{
    public function index()
    {
//        temperature Ниска (0.1 – 0.3) → По-консервативни и предвидими отговори.
//        temperature Висока (0.7 – 1.0) → По-креативни и разнообразни отговори.


//        topP Контролира колко вероятни думи да се включват в отговора.
//        topP Ако topP = 0.9, моделът ще разглежда само 90% от най-вероятните думи.
//        topP Ще ограничи избора на думи, но ще позволи известна вариация.
//        topP Обикновено се използва заедно с temperature (не е задължително).


//        topK Контролира колко опции за следваща дума може да избира моделът.
//        topK Ако topK = 40, моделът ще разглежда само 40-те най-вероятни думи.
//        topK По-ниски стойности правят отговора по-предвидим, по-високи – по-стохастичен (разнообразен).


//        Ако искаш фактически и точен отговор (по-консервативен модел):
//        {
//            "temperature": 0.2,
//            "topP": 0.5,
//            "topK": 20,
//            "maxOutputTokens": 100
//        } Подходящо за научни и бизнес приложения


//        Ако искаш креативен текст (разкази, идеи, маркетинг):
//        {
//            "temperature": 0.9,
//  "topP": 0.95,
//  "topK": 50,
//  "maxOutputTokens": 300
//} По-креативни и разнообразни отговори.
//
//    Ако искаш разнообразни отговори (генериране на идеи):
//        {
//            "candidateCount": 3,
//  "temperature": 0.7,
//  "topP": 0.8,
//  "maxOutputTokens": 150
//} Ще получиш 3 варианта на отговор, за да избереш най-добрия.


//        [
//            'candidateCount' => 1, //(Брой отговори)
//            'stopSequences' => [], //(Секвенции за спиране)
//            'maxOutputTokens' => 100, //(Максимален брой токени в отговора)
//            'temperature' => 0.2, //(Креативност/случайност)
//            'topP' => 0.5, //(Яснота срещу креативност)
//            'topK' => 20, //(Ограничение на избора на думи)
//        ];

        return view('dashboard.view');
    }


    private function buildOptions(string $content, string $locale)
    {
        $ask[] = ['role' => 'System', 'content' => "translate this text to $locale"];
        $ask[] = ['role' => 'User', 'content' => "'$content'"];


        $options = [
            'model' => 'gpt-3.5-turbo-16k',
            'temperature' => 0,
            'max_tokens' => 2048,
            'top_p' => 1,
            'frequency_penalty' => 0,
            'presence_penalty' => 0,
        ];
        $options['messages'] = $ask;


        return $options;
    }
}
