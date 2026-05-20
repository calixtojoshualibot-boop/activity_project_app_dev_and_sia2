<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CapReservationController extends Controller
{
    // Show the Reservation Form
    public function create() {
        return view('reservation');
    }

    // Handle the Form Submission
    public function store(Request $request) {
        // Requirement 3: Validation Rules
        $rules = [
            'full_name' => 'required|min:5|max:50',
            'email'     => 'required|email',
            'quantity'  => 'required|numeric|min:1|max:3',
            'cap_style' => 'required|in:snapback,fitted,trucker',
            'note'      => 'required|min:10',
        ];

        // Bonus: Custom Validation Messages
        $messages = [
            'full_name.min' => 'Please provide your full official name.',
            'quantity.max'  => 'Limit reached! You can only reserve up to 3 caps.',
            'note.min'      => 'Please explain why you want to reserve this specific model.',
        ];

        $request->validate($rules, $messages);

        // Bonus: Redirect with Success Message
        return redirect('/')->with('status', 'Reservation Locked! Check your email for confirmation.');
    }
}