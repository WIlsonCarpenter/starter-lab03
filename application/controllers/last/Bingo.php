<?php

class Bingo extends Application {

    function __construct() {
        parent::__construct();
    }

    //-------------------------------------------------------------
    //  The normal pages
    //-------------------------------------------------------------

    function index() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->get('5');
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();
    }

    function wisdom() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->get('6');
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];

        $this->render();   
    }
}