<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class RegularizacionesController extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $registros = [
            [
                'nombre' => 'Juan Pérez',
                'empresa' => 'ABC Corp',
                'email' => 'juan.perez@example.com',
                'fechaPoliza' => '2022-03-15'
            ],
            [
                'nombre' => 'María Gómez',
                'empresa' => 'XYZ Solutions',
                'email' => 'maria.gomez@example.com',
                'fechaPoliza' => '2021-12-02'
            ],
            [
                'nombre' => 'Andrés López',
                'empresa' => 'QRS Services',
                'email' => 'andres.lopez@example.com',
                'fechaPoliza' => '2023-01-18'
            ],
            [
                'nombre' => 'Laura Rodríguez',
                'empresa' => 'PQR Group',
                'email' => 'laura.rodriguez@example.com',
                'fechaPoliza' => '2022-11-30'
            ],
            [
                'nombre' => 'Carlos Ramírez',
                'empresa' => 'LMN Industries',
                'email' => 'carlos.ramirez@example.com',
                'fechaPoliza' => '2023-06-20'
            ],
            [
                'nombre' => 'Ana Martínez',
                'empresa' => 'ABC Corp',
                'email' => 'ana.martinez@example.com',
                'fechaPoliza' => '2022-07-12'
            ],
            [
                'nombre' => 'Roberto Sánchez',
                'empresa' => 'XYZ Solutions',
                'email' => 'roberto.sanchez@example.com',
                'fechaPoliza' => '2021-10-05'
            ],
            [
                'nombre' => 'Gabriela Torres',
                'empresa' => 'QRS Services',
                'email' => 'gabriela.torres@example.com',
                'fechaPoliza' => '2023-04-25'
            ],
            [
                'nombre' => 'Manuel Herrera',
                'empresa' => 'PQR Group',
                'email' => 'manuel.herrera@example.com',
                'fechaPoliza' => '2022-09-08'
            ],
            [
                'nombre' => 'Ana María Gómez',
                'empresa' => 'LMN Industries',
                'email' => 'ana.gomez@example.com',
                'fechaPoliza' => '2023-02-14'
            ]
        ];

        return view('regularizaciones', ['registros' => $registros]);
    }
}
