<x-auth-layout title="Insertion de produit">
  <section>
    <div class="relative flex items-center p-0 overflow-hidden bg-center bg-cover min-h-75-screen">
      <div class="container z-10">
        <div class="flex flex-wrap mt-0 -mx-3">
          <div class="flex flex-col w-full max-w-full px-3 mx-auto md:flex-0 shrink-0 md:w-8/12 lg:w-8/12 xl:w-6/12">
            <div class="relative flex flex-col min-w-0 mt-32 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
              <div class="p-6 pb-0 mb-0 bg-transparent border-b-0 rounded-t-2xl">
                <h3 class="relative z-10 font-bold text-transparent bg-gradient-to-tl from-blue-600 to-cyan-400 bg-clip-text">Insertion produit</h3>
                <p class="mb-0">Veuillez repecter les règles de remplissage de chaque case.</p>
              </div>
              <div class="flex-auto p-6">
                <x-insertproduct :$subcategories :$tags/>
              </div>
            </div>
          </div>
          <div class="w-full max-w-full px-3 lg:flex-0 shrink-0 md:w-4/12">
            <div class="absolute top-0 hidden w-3/5 h-full -mr-32 overflow-hidden -skew-x-10 -right-40 rounded-bl-xl md:block">
              <div class="absolute inset-x-0 top-0 z-0 h-full -ml-16 bg-cover skew-x-10" style="background-image: url('{{ asset("assets/img/curved-images/curved6.jpg") }}')"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  @section('script')
  <script>
    /*$(function() {
        $('#btnSuivant').click(function(e) {
            e.preventDefault();
            $('#page1').addClass('hidden');
            $('#page2').removeClass('hidden');
            $('#contBtnSuivant').addClass('hidden')
            $('#contBtnPrecedent').removeClass('hidden');
            $('#contBtnValider').removeClass('hidden');
        });
        $('#btnPrecedant').click(function(e) {
            e.preventDefault();
            $('#page1').removeClass('hidden');
            $('#page2').addClass('hidden');
            $('#contBtnSuivant').removeClass('hidden')
            $('#contBtnPrecedent').addClass('hidden');
            $('#contBtnValider').addClass('hidden');
        });

        $('#colorable').change(function() {
          if (!$(this).is(':checked')) {
              $('#btnAjouterCouleur').prop('disabled', true);
          } else {
              $('#btnAjouterCouleur').prop('disabled', false);
          }
        });
        let compte = 1;
        $('#btnAjouterCouleur').click(function(e){
          e.preventDefault();
          $('#compteurProduit').val(compte);
          $('#dynamiqueContent').append(`
              <div id="dynam" class="w-full mt-5 flex flex-row rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all">
                <div class="w-1/3 mr-5" id="champBdbGauche">
                  <x-input label="couleur" name="couleur${compte}" id="couleur${compte}" />
                  <x-input label="Taille" name="taille${compte}" id="taille${compte}" />
                  <x-input label="Quantité" name="quantite${compte}" id="quantite${compte}" />
                </div>
                <div class="w-3/4 flex justify-center items-center" id="champDroite">
                  <div class="flex mt-4 items-center justify-center w-full">
                    <label id="dropy" for="dropzone-file" class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                            <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                            <p class="mb-2 text-md text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                            <p class="text-sm text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                        </div>
                        <input name="thumbnail${compte}" id="dropzone-file" type="file" class="hidden" />
                    </label>
                  </div>  
                </div>
            </div>
          `);
          compte++;
        });

        $('#dropzone-file').change(function() {
          if ($(this).val() !== '') {
            $('#dropy').removeClass('border-gray-500');
            $('#dropy').addClass('border-green-500');
          } else {
            $('#dropy').addClass('border-gray-300');
            $('#dropy').removeClass('border-green-500');
          }
        });
        
        if (!$('#colorable').is(':checked')) {
        $('#btnAjouterCouleur').prop('disabled', true);
    }
    });*/
  </script>
  @endsection
</x-auth-layout>