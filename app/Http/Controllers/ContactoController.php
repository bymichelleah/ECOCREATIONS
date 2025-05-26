<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function enviarFormulario(Request $request)
    {
        // Validación de datos del formulario
        $validator = Validator::make($request->all(), [
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telefono' => 'required|string|max:20',
            'asunto' => 'required|string|max:255',
            'mensaje' => 'required|string',
            'terminos' => 'accepted',
            'g-recaptcha-response' => 'required' // Para reCAPTCHA
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // Validar reCAPTCHA manualmente
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
        ]);

        if (!$response->json('success')) {
            return back()->withErrors(['captcha' => 'Error con el reCAPTCHA'])->withInput();
        }

        // Enviar correo
        Mail::send('email.validar_contacto', [
            'data' => [
                'nombres' => $request->nombres,
                'apellidos' => $request->apellidos,
                'email' => $request->email,
                'telefono' => $request->telefono,
                'asunto' => $request->asunto,
                'mensaje' => $request->mensaje,
            ]
        ], function ($message) use ($request) {
            $message->to('alanyakatherine@gmail.com')
                ->subject($request->asunto)
                ->replyTo($request->email);
        });

        return back()->with('success', 'Mensaje enviado correctamente.');
    }
}
