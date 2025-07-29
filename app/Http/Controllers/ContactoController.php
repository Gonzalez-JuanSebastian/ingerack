<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\MensajeContacto;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'telefono' => 'required',
            'mensaje' => 'required',
        ]);

        $datos = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'mensaje' => $request->mensaje,
        ];

        // Guardar en base de datos
        MensajeContacto::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'mensaje' => $request->mensaje,
            'estado' => true, // por defecto lo guardamos como activo
        ]);

        // Enviar correo
        Mail::send('emails.contacto', $datos, function ($message) use ($request) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $message->to(env('MAIL_USERNAME'))->subject('Nuevo mensaje de contacto');
        });

        return redirect()->to(url()->previous() . '#formulario')->with('success', 'Mensaje enviado con éxito.');

    }
}
