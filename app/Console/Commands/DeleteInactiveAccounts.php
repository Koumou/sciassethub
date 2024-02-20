<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class DeleteInactiveAccounts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deleteInactiveAccountCreated:daily';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete inactive account that was created.';

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
        // return 0;
        $threshold = now()->subMinutes(15); // Accounts older than 3 days
      return  User::where('email_verified_at', null)
            ->where('created_at', '<', $threshold)
            ->delete();
    }
}
