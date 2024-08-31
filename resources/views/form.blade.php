<div class="flex flex-row mt-6">
<div class="w-full max-w-xs">
  <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="get" action="/form" id="form">
    <div class="text-2xl mb-3 text-center">Muestras según NCh43</div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="lot">
        Lote
      </label>
      <input name="lot" required class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="lot" type="number" placeholder="180">
    </div>
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="samples">
        Muestras
      </label>
      <input required name="samples" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="samples" type="number" placeholder="10">
    </div>
    <div class="mb-6 flex-wrap">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Coordenada inicial (fila / columna )
      </label>
      <input required min="1" max="250" name="row" class="shadow appearance-none border rounded w-2/6 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="row" type="number" placeholder="2">
      /
      <input  required  min="1" max="20" name="column" class="shadow appearance-none border rounded w-2/6 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="column" type="number" placeholder="15">
      
      <div class="flex items-center mb-4">
        <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
        <label for="default-checkbox" class="ms-2 text-sm font-medium text-gray-900">Coordenadas aleatorias</label>
      </div>


    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" onclick="return validateForm()">
        Generar muestreo
      </button>
      <button></button>
    </div>
    <input type="hidden" id="random_row" name="random_row">
    <input type="hidden" id="random_column" name="random_column">
  </form>

  <div style="text-align: center;">
  <div><a href="/how" class="text-blue-600 visited:text-purple-600 ... px-10">
Otra forma de obtener muestreos
</a></div>
<div><a href="/consideraciones" class="text-blue-600 visited:text-purple-600 ... px-10">
*Consideraciones*
</a></div>
<div><a href="/control-cambios" class="text-blue-600 visited:text-purple-600 ... px-10">
Control de cambios
</a></div>
</div>
<hr
  class="my-5 h-0.5 border-t-0 bg-neutral-100" />
<footer class="footer footer-center  w-full p-4 ">
      <div class="text-center">
      <p class="text-center"><span  class="underline decoration-1">hola@nch43.cl</span></p>
      </div>
      <div class="text-center">
      <p class="text-center"><span  class="text-slate-600">by <br> mez | chs</span></p>
      </div>
</footer>



</div>
</div>



<script>
function validateForm() {
  let lote = document.getElementById('lot').value;
  let muestras = document.getElementById('samples').value;
  let fila = document.getElementById("row").value;
  let columna = document.getElementById("column").value;
  event.preventDefault();
    if(lote == "" || muestras == ""){
      alert('Se deben completar los campos "Lote" y "Muestras"')
    }else if(Number(lote) <= Number(muestras)){
      alert("El lote debe ser mayor al número de muestras a sleccionar.");
    }else if( (fila == "" || columna == "") && !selectElement.checked){
      alert('Se debe indicar la coordenada inicial (fila/columna) o seleccionar "Coordenadas aleatorias"');
    }else{
      document.getElementById('form').submit();
    }
  
} 

const selectElement = document.querySelector("#default-checkbox");
const fila = document.getElementById("row")
const columna = document.getElementById("column")
const random_row = document.getElementById("random_row");
const random_column = document.getElementById("random_column");
fila.disabled = false;
columna.disabled = false;
selectElement.checked = false;
fila.value = "";
columna.value = "";
random_row.value = "";
random_column.value = ""; 

selectElement.addEventListener("change", (event) => {
    fila.disabled = selectElement.checked;
    columna.disabled = selectElement.checked;
    if(selectElement.checked){
      let new_row = getRandomInt(250)+1;
      let new_column = getRandomInt(20)+1;
      fila.value = new_row;
      columna.value = new_column;
      random_row.value = new_row;
      random_column.value = new_column;
    }else{
      fila.value = "";
      columna.value = "";
      random_row.value = "";
      random_column.value = "";      
    }
});

function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}


</script>