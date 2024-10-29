<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
   

        $request->validate([
            'name' => 'required' , 'string' , 'max:255',
            'email' => 'required' ,'string' , 'lowercase', 'email', 'max:255' ,'unique:'.User::class,
            'password' => 'required', 'confirmed', Rules\Password::defaults(),
            'confirm_password' => 'required', 'confirmed', Rules\Password::defaults(),
            // 'telefono' => 'required', 'string' ,'max:10',
            // 'confirm_telefono' => 'required', 'string' ,'max:10',
            // 'sexo' => 'required', 'string',
            // 'fecha_nacimiento' => 'required', 'date',
            // 'nss' => 'required', 'string' ,'max:11',
            // 'curp' => 'required', 'string' ,'max:18'
        ]);
        

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'confirm_password' =>  Hash::make($request->confirm_password),
            // 'telefono' => $request->telefono,
            // 'confirm_telefono' => $request->confirm_telefono,
            // 'sexo' => $request->sexo,
            // 'fecha_nacimiento' => $request->fecha_nacimiento,
            // 'nss' => $request->nss,
            // 'curp' => $request->curp,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    }
}
