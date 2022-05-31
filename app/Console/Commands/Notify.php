<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifyEmail;
use App\User;


class Notify extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send email notify for all user every day';

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
        //$users = User::select('email')->get(); 
        //OU

        $emails = User::pluck('email')->toArray();
        $data=['title'=>'programming' , 'body'=>'php'];
        
        foreach($emails as $email){
        //   how to send emails in laravel?
        Mail::To($email)->send(new NotifyEmail($data));
        }

    }
}
