<?php

namespace App\Console\Commands;

use App\UserLog;
use Illuminate\Console\Command;
use Carbon\Carbon;

class DeleteLoggedUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'logged_users:delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
     * @return mixed
     */
    public function handle()
    {
        $loggedUsers = UserLog::where('created_at', '<', Carbon::now()->subDays(30))
            ->get();

        foreach ($loggedUsers as $loggedUser) {

            $loggedUser->delete();

        }
    }
}
