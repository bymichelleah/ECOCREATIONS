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
            'g-recaptcha-response' => 'required' // Validación de reCAPTCHA
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Verificación del reCAPTCHA
        $recaptchaResponse = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
        ]);

        if (!$recaptchaResponse->json('success')) {
            return redirect()->back()->withErrors(['captcha' => 'No se pudo verificar el reCAPTCHA.'])->withInput();
        }

        // Datos a enviar por correo
        $datos = [
            'nombres'  => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'email'     => $request->input('email'),
            'telefono'  => $request->input('telefono'),
            'asunto'    => $request->input('asunto'),
            'mensaje'   => $request->input('mensaje'),
        ];

        // Envío del correo
        Mail::send('email.validar_contacto', ['data' => $datos], function ($message) use ($request) {
            $message->to('alanyakatherine@gmail.com')
                ->subject($request->input('asunto'))
                ->replyTo($request->input('email'));
        });

        return redirect()->back()->with('success', 'Mensaje enviado correctamente.');
    }
}

