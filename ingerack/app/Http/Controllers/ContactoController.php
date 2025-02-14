<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email',
            'mensaje' => 'required',
        ]);

        $datos = [
            'nombre' => $request->nombre,
            'email' => $request->email,
            'mensaje' => $request->mensaje,
        ];

        Mail::send('emails.contacto', $datos, function ($message) use ($request) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $message->to(env('MAIL_USERNAME')) // Se enviará al mismo correo configurado en .env
                ->subject('Nuevo mensaje de contacto');
        });

        return back()->with('success', 'Mensaje enviado con éxito.');
    }
}
