<?php  namespace App\Libraries;

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class PdfLib extends Dompdf {

	public function __construct() {
		 parent::__construct();
	}

}

?>