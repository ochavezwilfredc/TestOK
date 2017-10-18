<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calc
 *
 * @author crist
 */
class Calc {

    //put your code here

    function __construct() {
        
    }

    public function add($a, $b) {
        return $a + $b;
    }

    public function render() {
        return "Hello World!";
    }

    public function returnTrue() {
        return true;
    }

    public function returnArray() {
        return ['Hey', 'World', 'This', 'Is', 'Test'];
    }

}
