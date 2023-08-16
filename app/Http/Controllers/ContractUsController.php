<?php
namespace App\Http\Controllers;

use App\Models\ContactFormSubmission;
use Illuminate\Http\Request;

class ContractUsController extends Controller
{
    public function store(Request $request)
    {
        $submission = new ContactFormSubmission();
        $submission->full_name = $request->input('name');
        $submission->email = $request->input('email');
        $submission->subject = $request->input('subject');
        $submission->message = $request->input('message');
        $submission->save();

        // Optionally, you can redirect the user after successful submission
        return redirect()->back()->with('success', 'Message submitted successfully.');
    }
    public function contuctus() {
        return view('frontend.layout.contuctus');
    }
}
