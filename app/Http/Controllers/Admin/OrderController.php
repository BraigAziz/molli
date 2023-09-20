<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:20',
            'address' => 'required|max:255',
            'email' => 'nullable|email|max:255',
        ]);

        $order = new Order();

        $order->name = $request->input('name');
        $order->address = $request->input('address');
        $order->phone = $request->input('phone');
        $order->email = $request->input('email');

        $order->save();


// Check if an email is provided, otherwise generate a random one
        $email = $request->input('email');
        if (empty($email)) {
            $email = Str::random(10) . '@mycompany.com';
        }

// Check if the email already exists in the User table
        if (!User::where('email', $email)->exists()) {
            // Email does not exist, create the user
            $user = new User();
            $user->name = $request->input('name');
            $user->email = $email;
            $password = Str::random(10);
            $user->password = bcrypt($password);  // Generating a random password
            $user->save();

            // Optionally log the user in
            Auth::login($user);

            return redirect(route('thank_you_page'))->with([
                'details' => [
                    'type' => 'new_user',
                    'email' => $email,
                    'password' => $password
                ]
            ]);
        } else {
            return redirect(route('thank_you_page'))->with([
                'details' => [
                    'type' => 'existing_user'
                ]
            ]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }


    /**
     * done ordering.
     */

    public function done(){
        $details = session('details');

        if (!$details) {
            return redirect(route('home_page'));
        }

        return view('front.thank_you', compact('details'));
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        //
    }
}
