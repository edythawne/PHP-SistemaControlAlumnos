<?php namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\AlumnoModel;

class InfoController extends BaseController {
    // Variables
    private $data = [];
    private $student = null;

    /**
     * InformationController constructor.
     */
    public function __construct(){
        // Models
        $this -> student = new AlumnoModel();
    }

    /**
     * Index Method
     * @param $response
     * @return string
     */
    public function index($response){
        $this -> data['html']['title'] = 'Información';
        $this -> data['html']['getAlumnosGrado'] = jsonToArray($this -> student -> getAlumnosGrado($response));
        $this -> data['html']['getIDGradoGrupo'] = jsonToArray($this -> student -> getIDGradoGrupo());

        return view('user/info', $this -> data);
    }
}