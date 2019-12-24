<?php

    /**
     * Array a JSON
     * @param $data
     * @return false|string
     */
    function arrayToJson($data){
        return json_encode($data, JSON_FORCE_OBJECT);
    }

    /**
     * JSON a Array
     * @param $json
     * @return false|string
     */
    function jsonToArray($json){
        return json_decode($json, JSON_HEX_TAG);
    }


?>