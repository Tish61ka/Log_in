<?php 
    $connect = mysqli_connect('localhost', 'root', 'root', 'registration');
    if(!$connect){
        die('Ошибка подключения к БД');
    }