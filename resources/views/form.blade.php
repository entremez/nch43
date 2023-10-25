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
      <input required min="1" max="250" name="row" class="shadow appearance-none border rounded w-2/6 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="number" placeholder="2">
      /
      <input  required  min="1" max="20" name="columm" class="shadow appearance-none border rounded w-2/6 py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="number" placeholder="15">
      <!--<p class="text-red-500 text-xs italic">Please choose a password.</p>-->
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit" onclick="return validateForm()">
        Generar muestreo
      </button>
      <button></button>
    </div>
  </form>

  <a href="/how" class="text-blue-600 visited:text-purple-600 ... px-10">
Otra forma de obtener muestreos
</a>

</div>
</div>

<script>
function validateForm() {
  event.preventDefault()
  let lote = document.getElementById('lot').value;
  let muestras = document.getElementById('samples').value;
    if(lote <= muestras){
      alert("El lote debe ser mayor al número de muestras a sleccionar.")
    }else{
      document.getElementById('form').submit();
    }
} 

</script>