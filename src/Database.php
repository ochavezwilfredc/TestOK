<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author crist
 */
class Database {

    //put your code here

    public function reallyLongTime() {
        $results = array(
            array(1, 'test', 'foo value')
        );
        sleep(6000000000000000000000); 
        return $results;
    }

}
