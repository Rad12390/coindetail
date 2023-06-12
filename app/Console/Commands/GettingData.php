<?php

namespace App\Console\Commands;
use App\Http\Controllers\FetchApiResponseController;

use Illuminate\Console\Command;

class GettingData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getting:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Retrieves data from the provided Coingecko API endpoint.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
     $controller = new FetchApiResponseController();

     $res = $controller->GetApiResponse();

     if($res){
        echo "successful saved.";
     }
    }
}
