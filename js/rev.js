$(document).ready(function () {
   
    $("#cat").change(function () {
        var catna = $("#cat").val();
        xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET","bf_item_upload.php?items="+catna,false);
        xmlhttp.send(null);
        $("#item").html(xmlhttp.responseText);
    
    }); 

    
});