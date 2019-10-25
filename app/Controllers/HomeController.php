<?php namespace App\Controllers;

use App\Models\AlumnoModel;

class HomeController extends BaseController {
    private $data = [];
    private $student = null;

    public function __construct(){
        $this -> student = new AlumnoModel();
    }

    public function index(){
        $this -> data['html']['title'] = 'Ford 32';
        $this -> data['html']['getInfGrados'] = $this -> student -> getInfGrados();
        //$this -> data['html']['getNumbersStudents'] = $this -> student -> getNumeroAlumnos();

        return view('home', $this-> data);
	}
}
