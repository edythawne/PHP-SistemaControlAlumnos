<?php

namespace App\Libraries;

require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

class DomPdfLib {
    // Dompdf Variable
    private $pdf = null;
    private $pdf_size = null;
    private $pdf_orientation = null;

    /**
     * DomPdfLib constructor.
     */
	public function __construct() {
        $this -> pdf = new Dompdf();
	}

    /**
     * @param string $pdf_size
     */
    public function setPdfSize($pdf_size = 'A4'){
        $this -> pdf_size = $pdf_size;
    }

    /**
     * @param string $pdf_orientation
     */
    public function setPdfOrientation($pdf_orientation = 'landscape'){
        $this -> pdf_orientation = $pdf_orientation;
    }

    /**
     * @return null
     */
    public function getPdfSize(){
        return $this->pdf_size;
    }

    /**
     * @return null
     */
    public function getPdfOrientation(){
        return $this->pdf_orientation;
    }

    /**
     * Agregar texto al pdf
     * @param null $text
     */
	public function setText($text = null){
	    $this -> pdf -> loadHtml($text);
    }

    /**
     * Asignar los valores del papel
     */
    public function setPaper(){
	    $this -> pdf -> setPaper($this->getPdfSize(), $this->getPdfOrientation());
    }

    /**
     * PDFRender
     */
    public function render(){
        $this -> pdf -> render();
    }

    /**
     * Opciones para mostrar el PDF
     * @param null $filename
     */
    public function showing($filename = null){
        if ($filename == null){
            $this -> pdf -> stream('Reporte.pdf', array("Attachment" => 0));
        } else {
            $this -> pdf -> stream($filename.'.pdf', array("Attachment" => 0));
        }
    }

    /**
     * Crear un pdf con un solo parametro
     * @param $text
     * @param null $filename
     */
    public function create($text, $filename = null){
        $this -> setText($text);
        $this -> setPaper($this->getPdfSize(), $this->getPdfOrientation());
        $this -> render();
        $this -> showing($filename);
    }

}

?>