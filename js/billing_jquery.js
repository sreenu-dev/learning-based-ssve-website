/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function (){
   $("#add_item").click(function(){
       $("#items").append("<tr><td><input type='checkbox' name='select'></td><td><input type='number' name='item_no' class='small'></td><td><input type='text' name='item_name' class='small'></td><td><input type='text' name='item_cost' class='small'></td><td><input type='number' name='quantity' class='small'></td><td><input type='text' name='rate' class='small'></td></tr>");
   }); 
   $("#remove_item").click(function(){
//       console.log("Clicked remove button")
        $("#items tr").each(function(){
            var row=$(this);
            
        });
   });
});
