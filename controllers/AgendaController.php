<?php

class AgendaController 
{
        public function index()
        {
                $agenda=new Agenda;
                $todos = $agenda->selectAll();
                require 'views/index.view.php';
        }
}