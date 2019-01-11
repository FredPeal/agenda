<?php

class AgendaController 
{
        public function index()
        {
                $agenda=new Agenda;
                $todos = $agenda->selectAll();
                var_dump($_GET["name"]);
                //require 'views/index.view.php';
        }

        public function store()
        {

        }

        public function show()
        {
                
        }
}       
