$(document).ready(function () {
    
    // $(".itm_upl").submit(function(e){
    //     e.preventDefault();
    //     $.ajax({
    //         url:'backend_sales_reg.php',
    //         type:'post',
    //         data:new FormData(this),
    //         cache:false,
    //         contentType:false,
    //         processData:false,
    //         success: function(dat) {
    //             $("#masag").css({'visibility':'visible'});
    //             $(".msa").html(dat);            

    //         }
        
    //     });     
    // });

    $(".qem-fsi").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'quota_fold/quot_del.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#total-div").load("#total-div");
            }
        
        });     
    });


    $(".rem-fsi").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'sales_reg_fold/rcp_del.php',
            type:'post',
            data:new FormData(this),
            cache:false,
            contentType:false,
            processData:false,
            success: function(dat) {
                $("#total-div").load("#total-div");
            }
        
        });     
    });


    

});
