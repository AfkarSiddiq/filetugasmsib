// penambahan
function tambah(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 + a2;
    if(a1 && a2){
        frm.hasil.value = total;
    }else{
        alert("Maaf yang Anda Input bukan angka");
        return false;
    }
}   

// pengurangan
function kurang(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 - a2;
    if(a1 && a2){
        frm.hasil.value = total;
    }else{
        alert("Maaf yang Anda Input bukan angka");
        return false;
    }
}

// perkalian
function kali(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 * a2;
    if(a1 && a2){
        frm.hasil.value = total;
    }else{
        alert("Maaf yang Anda Input bukan angka");
        return false;
    }
}

// pembagian
function bagi(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = a1 / a2;
    if(a1 && a2){
        frm.hasil.value = total;
    }else{
        alert("Maaf yang Anda Input bukan angka");
        return false;
    }
}
// perpangkatan
function pangkat(){
    var frm = document.getElementById('kalkulator');
    var a1 = parseFloat(frm.angka.value);
    var a2 = parseFloat(frm.angka2.value);
    var total = Math.pow (a1,a2) ;
    if(a1 && a2){
        frm.hasil.value = total;
    }else{
        alert("Maaf yang Anda Input bukan angka");
        return false;
    }
}