<?php

namespace App\Console\Commands;

use App\Models\ApiRecord;
use Http;
use Illuminate\Console\Command;

class FetchJokeCommand extends Command
{
    /**
     * @var string
     */
    protected $signature = 'jokes:fetch';

    /**
     * @var string
     */
    protected $description = 'Fetch joke from API in to database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $response = Http::get('https://official-joke-api.appspot.com/random_joke');

        if ($response->failed()) {
            $this->error('Failed to retrieve joke');

            return self::FAILURE;
        }

        $joke = $response->json();

        ApiRecord::create([
            'external_id' => $joke['id'],
            'type' => $joke['type'],
            'setup' => $joke['setup'],
            'punchline' => $joke['punchline'],
        ]);

        $this->info('Joke saved successfully');

        return self::SUCCESS;
    }
}
