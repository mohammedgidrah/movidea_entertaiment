<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ], [
            'name.required' => 'Please enter your name',
            'email.required' => 'Please enter your email address',
            'email.email' => 'Please enter a valid email address',
            'message.required' => 'Please enter your message',
            'message.min' => 'Your message should be at least 10 characters',
        ]);

        // Send email
        try {
            Mail::to('m7mdgidrah@gmail.com')
                ->send(new ContactFormMail(
                    $validated['name'],
                    $validated['email'],
                    $validated['subject'] ?? 'Contact Form Message from ' . $validated['name'],
                    $validated['message']
                ));

            return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Sorry, there was an error sending your message. Please try again later.');
        }
    }
}