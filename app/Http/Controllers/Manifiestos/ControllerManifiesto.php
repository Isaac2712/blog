<?php

namespace App\Http\Controllers\Manifiestos;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Models\Manifiestos\ModelManifiesto;

class ControllerManifiesto extends Controller
{
	public function GenerarPDF($titulo_manifiesto){
		$manifiesto = ModelManifiesto::where('titulo', $titulo_manifiesto)->get();
		$pdf = \PDF::loadView('manifiesto_pdf', compact('manifiesto'));
		return $pdf->stream(); 
	}
}