$(document).ready(function () {

    
    var feat = 
    '<tr>'
    +'<td> <input type="text" name="item[]" required placeholder="Enter Item Description"> </td>'
    +'<td> <input type="number" name="qty[]" onkeyup="quantity(this)" required placeholder="Enter Quantity"> </td>'
    +'<td> <input type="number" name="unit[]" onkeyup="price(this)" required placeholder="Enter Unit Price"> </td>'
    +'<td> <input type="text" name="amt[]" class="amt" required readonly> </td>'
    +'</tr>';


    var geat =
    '<tr>'
    +'<td><input type="text" name="desnmon[]" placeholder="Enter Label Name" ></td>'
    +'<td><input type="text" name="despropon[]" placeholder="Enter Label property"></td>'
    +'</tr>';

    var heat =
    '<tr>'
    +'<td><input type="text" name="desnmtw[]" placeholder="Enter Label Name" ></td>'
    +'<td><input type="text" name="desproptw[]" placeholder="Enter Label property"></td>'
    +'</tr>';

    $("#bcl").click(function(){
        
        $(".fir-div-container .first-max").append(feat);
    }); 


    $("#ccl").click(function(){
        
        $(".quot-des fieldset .des-ccl ").append(geat);
    }); 


    $("#dcl").click(function(){
        
        $(".quot-des fieldset .des-dcl ").append(heat);
    }); 

});