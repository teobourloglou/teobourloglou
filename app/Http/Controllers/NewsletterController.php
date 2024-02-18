<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function __invoke() {
        request()->validate(['email' => 'required|email']);

        try {
            (new Newsletter())->subscribe(request('email'));

        } catch (\Exception $e) {
            \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'This email could not be added'
            ]);
        }

        return redirect('/')
            ->with('success', 'You are now signed up for our newsletter');
    }
}
