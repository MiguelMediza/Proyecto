 //Funcion para que no se puedan ingresar caracteeres especiales ni numeros en los campos de textos requeridos
    function SoloLetras(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32);
}


    //Funcion para que no se puedan ingresar caracteeres especiales en los campos de textos requeridos
    function CharEspeciales(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
            return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k == 32 || (k >= 48 && k <= 57)
);
}

   //Funcion para que no se puedan ingresar caracteeres especiales en los campos de textos requeridos
    function SoloNumeros(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
            return  (k >= 48 && k <= 57);
}
  
