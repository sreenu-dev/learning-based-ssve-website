<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn=new mysqli("localhost:3308","root","","ssve");
if($conn){
    echo "Working";
}else{
    echo "Not working";
}
?>