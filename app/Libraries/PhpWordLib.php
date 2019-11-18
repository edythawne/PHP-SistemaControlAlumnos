<?php

namespace App\Libraries;

require_once 'phpoffice/autoload.inc.php';
use PhpOffice\PhpWord\PhpWord;

class PhpWordLib extends PhpWord {

    public function __construct(){
        parent::__construct();
    }

}