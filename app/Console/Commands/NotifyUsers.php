<?php

namespace App\Console\Commands;

use App\Jobs\SendMailJob;
use App\Mail\ReminderToPost;
use App\Post;
use App\User;
use Illuminate\Console\Command;

class NotifyUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email to users';

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
        //One hour is added to compensate for PHP being one hour faster

        $before_seven_days = \Carbon\Carbon::now()->subDays(7);

        $users = User::all();
        foreach ($users as $user) {

            if($user->posts()){

                $last_date_posted = $user->posts()->latest()->first()->created_at;

                if ($last_date_posted < $before_seven_days){
                    dispatch(new SendMailJob(
                        $user->email,
                        new ReminderToPost($user)
                    ));
                }

            }

       }
    }
}
