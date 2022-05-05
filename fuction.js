//funcion creada de la clase venta
function suma(){
    var num1 = Number(document.getElementById('n1').value);
    var num2 = Number(document.getElementById('n2').value);
    var res= num1*num2;
    document.getElementById('res').value=res;
}
//funcion creada de la clase venta
function sumaIVA(){
    var num1 = Number(document.getElementById('res').value);
    var total = num1*1.19;
    document.getElementById('total').value=total;
}
//funcion creada de la clase Bodega
function scantidad(){
    var n1 = Number(document.getElementById('num-cantidad').value);
    var n2 = Number(document.getElementById('reci').value);
    var reci = n1+n2;
    document.getElementById('reci').value=reci;

    
}