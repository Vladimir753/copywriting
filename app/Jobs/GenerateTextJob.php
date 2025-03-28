<?php


namespace App\Jobs;


use App\Models\History;
use App\Services\ChatServer;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;


class GenerateTextJob implements ShouldQueue
{
    use Queueable;
    public array $data;
    public string $prompt;
    /**
     * Create a new job instance.
     */
    public function __construct(array $data, $prompt)
    {
        $this->data = $data;
        $this->prompt = $prompt;
    }


    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $text = app(ChatServer::class)($this->data, $this->prompt);

        History::create([
            'user_id' => auth()->id(),
            'template_id' => $this->data['template_id'],
            'name' => $text['name'],
            'question' => json_encode($this->data['change']),
            'message' => $text['html'],
        ]);
    }
}
