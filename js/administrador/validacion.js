function sololetras(e){
            var key = e.keyCode || e.which,
      tecla = String.fromCharCode(key).toLowerCase(),
      letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
      especiales = [8, 37, 39, 46],
      tecla_especial = false;

    for (var i in especiales) {
      if (key == especiales[i]) {
        tecla_especial = true;
        break;
      }
    }

    if (letras.indexOf(tecla) == -1 && !tecla_especial) {
      return false;
    }
        }
        
        
        function solonumeros(e){
            key=e.keyCode || e.which;
            teclado=String.fromCharCode(key);
            numeros="0123456789.$";
            especiales="8-37-46";
            teclado_especial=false;
            
            for(var i in especiales){
                if(key == especiales[i]){
                    teclado_especial=true;
                   
                    break;
                }
            }
            
            if(numeros.indexOf(teclado)==-1 && !teclado_especial){
                return false;
            }
            
        }
 