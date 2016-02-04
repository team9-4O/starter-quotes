<?php

/* fixed Wisdom link */
class Wise extends Application
{
    function __construct()
    {
        parent::__construct();
    }
    function bingo()
    {
        $this->data['pagebody'] = 'justone';
        $quote = $this->quotes->get(6);
        $this->data = array_merge($this->data, $quote);
        $this->render();
    }
    
    
}