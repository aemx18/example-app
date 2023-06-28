<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;


class ProfileController extends Controller
{

    //view profile
   public function index()
    {
        $profiles = Profile::all();
        return view('profile', ['profiles' => $profiles]);
    }


public function update(Request $request, $id)
{
   //Validate the input data
  
 $request->validate([
        'name' => 'required',
        'age' => 'required',
        'phone' => 'required',
        'ic' => 'required',
        'status' => 'required',
        'gender' => 'required',
        'race' => 'required',
        'email' => 'required',
        'address' => 'required',
        
    ]);

    // Find the profile by ID
    $profile = Profile::find($id);

    if (!$profile) {
        // Handle if the profile is not found
        return redirect()->back()->withErrors('Profile not found');
    }

    // Update the profile attributes
    $profile->name = $request->input('name');
    $profile->age = $request->input('age');
    $profile->phone = $request->input('phone');
    $profile->ic = $request->input('ic');
    $profile->status = $request->input('status');
    $profile->gender = $request->input('gender');
    $profile->race = $request->input('race');
    $profile->email = $request->input('email');
    $profile->address = $request->input('address');
    // Update other attributes...

    // Save the updated profile
    $profile->save();

    // Redirect back with a success message
    return redirect()->route('profile')->with('success', 'Item updated successfully');
}
    
}

