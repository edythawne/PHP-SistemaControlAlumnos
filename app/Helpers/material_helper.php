<?php

/**
 * Devuelve la URL de los CSS File
 * @param $filename
 * @return string
 */
function css_url($filename){
    return base_url('public/v1/css/'.$filename);
}

/**
 * Devuelve la URL de los JS File
 * @param $filename
 * @return string
 */
function js_url($filename){
    return base_url('public/v1/js/'.$filename);
}

/**
 * Devuelve la URL de los IMG File
 * @param $filename
 * @return string
 */
function img_url($filename){
    return base_url('public/img/'.$filename);
}

?>