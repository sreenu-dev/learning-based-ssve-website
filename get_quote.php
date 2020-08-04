<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$file= file_get_contents("json/quote.json");
$json_quote= json_decode($file,true);
echo $json_quote['quote'];
?>
