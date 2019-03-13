<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


if(isset($_POST['titulo']) && isset($_POST['descripcion'])){
    echo '<h1>'.$_POST['titulo'].'</h1>'.'<h2>'.$_POST['descripcion'].'</h2>';
}


?>