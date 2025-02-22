<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BloodDonation;

class BloodDonationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'mobile' => 'required|string|max:15',
            'blood-type-donate' => 'required',
            'location' => 'required',
        ]);

        // Check if a record with the same mobile number exists
        $existingDonation = BloodDonation::where('mobile', $request->input('mobile'))->first();

        if ($existingDonation) {
            return redirect()->back()->with('error', 'You have already registered with this mobile number.');
        }

        BloodDonation::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'blood_type' => $request->input('blood-type-donate'),
            'location' => $request->input('location'),
            'is_hidden' => false,  // Default value, adjust as needed
        ]);

        return redirect()->back()->with('success', 'Thank you for donating blood!');
    }

    public function search(Request $request)
    {
        $request->validate([
            'blood-type' => 'required',
            'location' => 'required',
        ]);

        $bloodType = $request->input('blood-type');
        $location = $request->input('location');

        // Search the blood donations table for matching records and exclude hidden records
        $donations = BloodDonation::where('blood_type', $bloodType)
                                   ->where('location', 'like', '%' . $location . '%')
                                   ->where('is_hidden', false) // Exclude hidden records
                                   ->get();

        return view('find_blood_results', [
            'donations' => $donations,
            'bloodType' => $bloodType,
            'location' => $location
        ]);
    }
}

