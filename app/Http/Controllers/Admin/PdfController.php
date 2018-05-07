<?php

namespace App\Http\Controllers\Admin;


use Barryvdh\DomPDF\Facade as PDF;
//use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\applicant;


class PdfController extends Controller
{
    //
    /**
     *Create a new controller instance
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function downloadPdf($id)
    {
        $applicant = applicant::find($id);
        $pdf = PDF::loadView('admin.pdf.pdf', compact('applicant'));

        return $pdf->stream('applicant.pdf');
    }

}
