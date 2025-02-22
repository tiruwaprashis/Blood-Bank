<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\BloodDonation;
use Carbon\Carbon;

class ToggleHiddenDonations extends Command
{
    protected $signature = 'donations:toggle-hidden';
    protected $description = 'Automatically toggle the is_hidden field for blood donations based on the eligible_at date.';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get the current date
        $today = Carbon::now();
    
        // Log the current date
        \Log::info("Running ToggleHiddenDonations command at: " . $today);
    
        // Find all donations where eligible_at is today or earlier, and is_hidden is still true
        $donations = BloodDonation::where('eligible_at', '<=', $today)
                                   ->where('is_hidden', true)
                                   ->get();
    
        foreach ($donations as $donation) {
            $donation->is_hidden = false;
            $donation->save();
            \Log::info("Donation ID {$donation->id} is now visible.");
        }
    
        \Log::info('Eligible donations have been updated.');
    }
    
}
