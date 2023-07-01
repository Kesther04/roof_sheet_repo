var total = document.getElementById("total");
var amt = document.getElementsByClassName("amt");

function grandTot() {
    form = document.getElementById('itm_quotatn');

    if(form.elements['tot'].value == ""){
        var ftot = 0; 
    }else{
        var ftot = form.elements['tot'].value;
    }

    if(form.elements['instal'].value == ""){
        var finstal = 0; 
    }else{
        var finstal = form.elements['instal'].value;
    }

    if(form.elements['acces'].value == ""){
        var facces = 0; 
    }else{
        var facces = form.elements['acces'].value;
    }

    if(form.elements['transprt'].value == ""){
        var ftrpt = 0; 
    }else{
        var ftrpt = form.elements['transprt'].value;
    }

    var grArr = [ftot,finstal,facces,ftrpt];
    var yenn = 0;
    for (let v = 0; v < grArr.length; v++) {
        yenn +=  parseInt(grArr[v]);
    }
    form.elements['gr_tot'].value = yenn;

    // var maxan = grArr.reduce((x,y)=>x+y);
    // var afMaxan = maxan;
    // form.elements['gr_tot'].value = parseInt(afMaxan);
    //console.log(grArr);
}

function totalSum() {
    var cal = 0;
    for (let i = 0; i < amt.length; i++) {
        cal +=  parseInt(amt[i].value);
    }
    total.value=cal;
}


function quantity(q) {
    
    var priceValue = q.parentElement.parentElement.children[2].children[0].value;
    q.parentElement.parentElement.children[3].children[0].value = q.value * priceValue;
    totalSum();
    grandTot();
}


function price(p) {
    var quanValue = p.parentElement.parentElement.children[1].children[0].value;
    p.parentElement.parentElement.children[3].children[0].value = p.value * quanValue;
    totalSum();
    grandTot();
}

