<?php namespace App\Controllers\app\reports;

use App\Controllers\BaseController;
use App\Libraries\PdfLib;
use App\Models\AlumnoModel;

class ListReportController extends BaseController {
    // Report Variable
    protected $pdf = null;

    // Student Model
    protected $student = null;

    // Array
    private $data = [];

    /**
     * ListReportController constructor.
     */
    public function __construct(){
        $this -> pdf = new PdfLib();
        $this -> student = new AlumnoModel();
    }

    /**
     * Index
     */
    public function index(){
        $this -> data['html']['title'] = 'Lista de Alumnos';
        $this -> data['html']['director'] = $this -> student -> getDirector();
        $this -> data['html']['students'] = $this -> student -> getTodosAlumnosGrados();

        $html_content =  view('reports/report1', $this -> data, array('saveData' => true));
        //print_r($html_content);
        $this->pdf->loadHtml($html_content);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream('Reporte F1 .pdf', array("Attachment"=>0));
    }

    /**
     * Genera Reporte de alumno por grado (Separando NOMBRE - APELLIDOS)
     */
    public function report2(){
        $this -> data['html']['title'] = 'Lista de Alumnos';
        $this -> data['html']['director'] = $this -> student -> getDirector();
        $this -> data['html']['students'] = $this -> student -> getTodosAlumnosGrados();

        $html_content =  view('reports/report2', $this -> data, array('saveData' => true));
        //print_r($html_content);
        $this->pdf->loadHtml($html_content);
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->render();
        $this->pdf->stream('Reporte F2.pdf', array("Attachment"=>0));
    }

}
