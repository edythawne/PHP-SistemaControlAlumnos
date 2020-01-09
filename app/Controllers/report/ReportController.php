<?php namespace App\Controllers\report;

use App\Controllers\BaseController;
use App\Libraries\DomPdfLib;
use App\Models\AlumnoModel;
use Config\Services;

class ReportController extends BaseController {
    // Report Variable
    protected $pdf = null;
    protected $word = null;

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
        // Models
        $this -> student = new AlumnoModel();

        // Libraries
        $this -> pdf = new DomPdfLib();
        //$this -> word = new PhpWordLib();

        // Services
        $this -> request = Services::request();
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
        $arg_sexo = $this -> request -> getVar('sexo');
        $arg_campos = $this -> request -> getVar('params');
        $arg_grupos = $this -> request -> getVar('grupos');

        $this -> pdf -> setPdfSize($this -> request -> getVar('tamanio')[0]);
        $this -> pdf -> setPdfOrientation($this -> request-> getVar('orientacion')[0]);

        $campos = "CONCAT(Grupos.grado, Grupos.grupo) AS 'Grado', ";

        // Call Model
        $variables['sexo'] = implode(',', $arg_sexo);
        $variables['campos'] = $campos.implode(',', $arg_campos);
        $variables['grupos'] = implode(',', $arg_grupos);

        $data = jsonToArray($this -> student -> buildQueryReport($variables));
        $this -> pdfRender($data);
    }

    /**
     * PDF Render
     * @param $data
     */
    private function pdfRender($data) {
        $this -> data['html']['title'] = 'Lista de Alumnos';
        $this -> data['html']['report'] = $data['data'];
        $this -> data['html']['director'] = $this -> student -> getDirector();

        // PDF Content
        $html_content = view('reports/report_viewer', $this -> data, array('saveData' => true));

        // PDF Config
        $this -> pdf -> create($html_content);
    }

}
