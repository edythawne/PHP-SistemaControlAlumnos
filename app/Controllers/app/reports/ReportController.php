<?php namespace App\Controllers\app\reports;

use App\Controllers\BaseController;
use App\Libraries\PdfLib;
use App\Models\AlumnoModel;
use Config\Services;

class ReportController extends BaseController {
    // Report Variable
    protected $pdf = null;
    private $pdf_zise = null;
    private $pdf_orientation = null;

    // Student Model
    protected $student = null;

    // Array
    private $data = [];

    // Objects
    protected $request = null;

    /**
     * ReportController constructor.
     */
    public function __construct(){
        $this -> pdf = new PdfLib();
        $this -> request = Services::request();
        $this -> student = new AlumnoModel();
    }

    /**
     * Index
     */
    public function index(){
        $this -> data['html']['title'] = 'Generar Reportes';
        return view('reports/home', $this-> data);
    }

    /**
     * Valida la generacion de reportes
     */
    public function validarReporteGenerador(){
        $arg_campos = $this -> request -> getVar('params');
        $arg_grupos = $this -> request -> getVar('grupos');

        $this -> pdf_zise = $this -> request -> getVar('tamanio')[0];
        $this -> pdf_orientation = $this -> request-> getVar('orientacion')[0];

        $campos = "CONCAT(Grupos.grado, Grupos.grupo) AS 'Grado', ";
        $grupos = '';

        for ($i = 0; $i < count($arg_campos); $i++){
            if ($i == count($arg_campos) - 1 ){ $campos.= $arg_campos[$i].'';
            } else { $campos.= $arg_campos[$i].', ';}
        }

        if (!empty($arg_grupos)){
            for ($i = 0; $i < count($arg_grupos); $i++){
                if ($i == count($arg_grupos) - 1 ){ $grupos.= $arg_grupos[$i].'';
                } else { $grupos.= $arg_grupos[$i].', ';}
            }
        }

        // Call Model
        print_r($this -> student -> buildQueryReport($campos, $grupos));
        //$this -> createPDF($response);
    }

    private function createPDF($response){
        $this -> data['html']['title'] = 'Reporte';

        // PDF Content
        $html_content =  view('reports/pdf_viewer', $this -> data, array('saveData' => true));

        // PDF Config
        $this -> pdf -> loadHtml($html_content);
        $this -> pdf -> setPaper($this -> pdf_zise, $this -> pdf_orientation);
        $this -> pdf -> render();
        $this -> pdf -> stream('Reporte.pdf', array("Attachment"=>0));
    }

    /**
     * Reporte 1 Genera la lista general de alumnos
     */
    public function reporte1(){
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
    public function reporte2(){
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
