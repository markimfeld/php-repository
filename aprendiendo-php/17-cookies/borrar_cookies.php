<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if(isset($_COOKIE['micookie'])){
    unset($_COOKIE['micookie']);
    
    //hay que caducarla
    setcookie('micookie', '', time()-100);
}
//redirreciona la pagina
header('Location:ver_cookies.php');


?>