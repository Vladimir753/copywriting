<?php


namespace App\Http\Controllers;


use App\Jobs\GenerateTextJob;
use App\Models\HardTemplate;
use App\Models\Template;
use Illuminate\Http\Request;


class TemplateController extends Controller
{
    protected array $config;
    public function __construct()
    {
        $this->config = config('templates');
    }


    public function index()
    {
        $hardcodedTemplates = app(HardTemplate::class)->byPermission()->toArray();

        $templates = Template::byPermission()->get();

        $a = [];
        foreach ($templates as $template) {
            $a[$template->slug] = $template->toArray();
        }

        return view('template.view', [
            'templates' => array_merge($hardcodedTemplates, $a),
        ]);
    }

    public function create()
    {
        return view('template.create');
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
