<?php namespace App\Controllers\user;

use App\Controllers\BaseController;
use App\Models\AlumnoModel;

class HomeController extends BaseController {
    // Variables
    private $data = [];
    private $student = null;

    /**
     * HomeController constructor.
     */
    public function __construct(){
        $this -> student = new AlumnoModel();
    }

    /**
     * Index Method
     * @return string
     */
    public function index(){
        $this -> data['html']['title'] = 'Principal';
        $this -> data['html']['getInfGrados'] = jsonToArray($this -> student -> getInfGrados());

        //print_r($this->data);
        return view('user/home', $this -> data);
	}
}
