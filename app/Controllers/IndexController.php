<?php


namespace App\Controllers;


use App\Models\AlumnoModel;

class IndexController extends BaseController {
    // Variables
    private $data = [];
    private $student = null;

    /**
     * IndexController constructor.
     */
    public function __construct(){

    }

    /**
     * Index Method
     */
    public function index(){
        $this -> student = new AlumnoModel();

        $this -> data['html']['title'] = 'Ford 32';
        $this -> data['html']['getInfGrados'] = jsonToArray($this -> student -> getInfGrados());

        return view('index', $this -> data);
    }

}