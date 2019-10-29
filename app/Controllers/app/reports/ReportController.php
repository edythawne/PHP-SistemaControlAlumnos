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
        $variables = [];
        $arg_campos = $this -> request -> getVar('params');
        $arg_grupos = $this -> request -> getVar('grupos');
        $arg_sexo = $this -> request -> getVar('sexo');

        $this -> pdf_zise = $this -> request -> getVar('tamanio')[0];
        $this -> pdf_orientation = $this -> request-> getVar('orientacion')[0];

        $campos = "CONCAT(Grupos.grado, Grupos.grupo) AS 'Grado', ";
        $grupos = '';
        $sexo = '';

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

        if (!empty($arg_sexo)){
            for ($i = 0; $i < count($arg_sexo); $i++){
                if ($i == count($arg_sexo) - 1 ){ $sexo.= $arg_sexo[$i].'';
                } else { $sexo.= $arg_sexo[$i].', ';}
            }
        }

        // Call Model
        $variables['sexo'] = $sexo;
        $variables['campos'] = $campos;
        $variables['grupos'] = $grupos;

        //print_r($variables);

        $data = json_decode($this -> student -> buildQueryReport($variables), 1);
        $this -> pdfRender($data);
    }

    /**
     * PDF Render
     * @param $data
     */
    private function pdfRender($data){
        $this -> data['html']['title'] = 'Reporte';
        $this -> data['html']['report'] = $data['data'];
        $this -> data['html']['director'] = $this -> student -> getDirector();

        // PDF Content
        $html_content =  view('reports/pdf_viewer', $this -> data, array('saveData' => true));

        // PDF Config
        $this -> pdf -> loadHtml($html_content);
        $this -> pdf -> setPaper($this -> pdf_zise, $this -> pdf_orientation);
        $this -> pdf -> render();
        $this -> pdf -> stream('Reporte.pdf', array("Attachment"=>0));
    }

}
