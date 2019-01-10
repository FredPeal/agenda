<?php
         $agenda = new Agenda;
        $todos = $agenda->selectAll();
        include 'views/index.view.php';
      