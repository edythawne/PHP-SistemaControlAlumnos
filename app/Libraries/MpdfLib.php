<?php

namespace App\Libraries;

require_once 'mpdf/autoload.inc.php';
use Mpdf\Mpdf;

class MpdfLib extends Mpdf {

    /**
     * MpdfLib constructor.
     * @throws \Mpdf\MpdfException
     */
	public function __construct() {
        parent::__construct();
	}

}

?>