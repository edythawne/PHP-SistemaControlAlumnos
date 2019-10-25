<?php

function css_report(){
    return base_url('public/v1/report/styles.css');
}

function getImageReport($filename){
    return $_SERVER['DOCUMENT_ROOT'].'/ford32/public/img/'.$filename;
}

?>