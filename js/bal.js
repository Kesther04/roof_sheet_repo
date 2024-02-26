
function erbal(){
    var form = document.getElementById("recp");

    if(form.elements['total'].value == "" && form.elements['amt'].value == ""){
        var ftot = 0;
    }else{
        var ftot = (form.elements['total'].value)-(form.elements['amt'].value);
    }

    console.log(ftot);
    form.elements['bal'].value = ftot;
}