<?php


namespace App\Http\Controllers;


use App\Jobs\GenerateTextJob;
use App\Models\History;
use App\Services\ChatServer;
use Gemini\Data\Content;
use Gemini\Enums\Role;
use Gemini\Laravel\Facades\Gemini;
use GeminiAPI\Client;
use GeminiAPI\Resources\ModelName;
use GeminiAPI\Resources\Parts\TextPart;
use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;
use Gemini\Data\GenerationConfig;
use Gemini\Enums\HarmBlockThreshold;
use Gemini\Data\SafetySetting;
use Gemini\Enums\HarmCategory;


class TemplateController extends Controller
{
    protected array $config;
    public function __construct()
    {
        $this->config = config('templates');
    }


    public function index()
    {
        return view('template.view', [
            'templates' => $this->config,
        ]);
    }


    public function store(Request $request)
    {
        $prompt = $this->config[$request->template]['prompt'];
        $change = [];
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'change[') === 0) {
                $newKey = str_replace(['change[', ']'], '', $key);
                $change[$newKey] = $value;
            }
        }
        $data = $request->all();
        $data['change'] = $change;


        GenerateTextJob::dispatch($data, $prompt);


        return response()->json(['ok' => true]);
    }
}
