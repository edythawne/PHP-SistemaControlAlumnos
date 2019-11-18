<?php

namespace App\Libraries;

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class DomPdfLib extends Dompdf {

    /**
     * DomPdfLib constructor.
     */
	public function __construct() {
        parent::__construct();
	}

}

?>