<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pacientes;
use App\Doctores;
use App\Medicamentos;
use App;
use PDF;

class PDFController extends Controller
{
    //
    public function PDF(){
       $pdf = \PDF::loadView('pdf.prueba');
       return $pdf->stream('prueba.pdf');
    }

    public function PDFPacientes(){
        $pacientes = App\Pacientes::all();
        $pdf = \PDF::loadView('pdf.pacientespdf', compact('pacientes'));
        return $pdf->stream('pacientes.pdf');
    }
    public function PDFDoctores(){
        $doctores = App\Doctores::all();
        $pdf = \PDF::loadView('pdf.doctorespdf', compact('doctores'));
        return $pdf->stream('doctores.pdf');
    }
    public function PDFMedicamentos(){
        $medicamentos = App\Medicamentos::all();
        $pdf = \PDF::loadView('pdf.medicamentospdf', compact('medicamentos'));
        return $pdf->stream('medicamentos.pdf');
    }
    
 
}
