<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;



class BloodDonation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'mobile', 'blood_type', 'location',];

   

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($bloodDonation) {
            $bloodDonation->eligible_at = Carbon::now()->addDays(91);
        });
    }
}
