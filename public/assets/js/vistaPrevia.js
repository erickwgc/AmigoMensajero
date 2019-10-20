/*function imagendiv() {
               var imagen = document.createElement("img"); 
               // agregamos propiedades al elemento
               imagen.src = "http://localhost:8000/assets/img/microfono.png"; 
               
               // agregamos la imagen
               document.getElementById("clonado").appendChild(imagen); 
               return alert('se ha subido la imagen')
           }
*/

document.getElementById('mi:_imagen[]').addEventListener('change', handleFileSelect, false);
function handleFileSelect(evt) {
    var files = evt.target.files; // onjeto fileList


    // Recorra la FileList y renderice los archivos de imagen como miniaturas.
    for (var i = 0, f; f = files[i]; i++) {

      //Solo procesar archivos de imagen.
      if (!f.type.match('image.*')) {
        continue;
      }

      var reader = new FileReader();

      //Cierre para capturar la información del archivo.
      reader.onload = (function(theFile) {
        return function(e) {
           // Renderizar miniatura
          var span = document.createElement('span');
         // var span1 = document.getElementById('prueba');
          span.innerHTML = ['<img class="imagen"  src="', e.target.result,
                            '" title="', escape(theFile.name), '"/>'].join('');
          document.getElementById('list').insertBefore(span, null);
          
          
        };
      })(f);

      // Leer en el archivo de imagen como una URL de datos.
      reader.readAsDataURL(f);
    }
  }
