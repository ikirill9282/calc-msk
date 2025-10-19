<?php

use App\Models\Order;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\OrderSuccess;
use App\Models\User;
use App\Models\Agent;
use Illuminate\Support\Facades\Schedule;
use Revolution\Google\Sheets\Facades\Sheets;
use Illuminate\Support\Facades\Log;

Schedule::command('app:load-sheet')->everyFifteenMinutes();
Schedule::command('app:write-sheet')->everyFiveMinutes();

Artisan::command('tt', function() {
  foreach (Order::all() as $order) {
    
  }
});

Artisan::command('ttp', function() {
  $user = User::where('email', 'youbizz.rus@gmail.com')->first();
});

Artisan::command('tts', function() {
  Log::debug('Schedule task');
});