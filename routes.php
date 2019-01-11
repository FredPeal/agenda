<?php 

Router::get('','AgendaController@index');
Router::resource('agenda','AgendaController');