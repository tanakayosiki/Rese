<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Reservation;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReminderMail;
use Carbon\Carbon;

class Reminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature ='reminder:send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description ='reservation reminder';

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
        $today=Carbon::today();
        $reservations=Reservation::with('user')->where('date',$today)->get();
        foreach($reservations as $reservation){
        Mail::to($reservation->user->email)->send(new ReminderMail($reservation));
        }
    }
}
