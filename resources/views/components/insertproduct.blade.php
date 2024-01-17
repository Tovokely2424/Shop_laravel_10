@props(['subcategories', 'tags'])
<form class="mr-10" action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="tab-content" id="page1">
        <div class="tab-pane fade active in" id="part1" >
            <x-input name="name" label="Nom du produit"/>
            {{-- <x-input name="slug" label="Slug du produit" help="Laisser vide pour une slug auto."/> --}}
            <div class="flex mt-4 items-center justify-between w-full">
                <x-input name="price" label="Prix" class="w-1/2"/>
                <x-input name="remise" label="Remise" clas="w-1/2"/>
            </div>
            {{-- textarea content --}}
            <x-textarea name="description" label="Description du produit"></x-textarea>
            {{-- input file thumbnail --}}
            
        </div>
        <div class="tab-pane fade" id="part2" >
            {{-- Tag et multiselect --}}
            <div class="flex mt-4 items-center justify-center w-full">
                <div class="w-1/2 mr-5">
                    {{-- select category --}}
                    <x-select id="subcategory_id" name="subcategory_id" label="Sous category" :list="$subcategories" class="w-1/2"/>
                </div>
                <div class="w-1/2">
                    {{-- select multiple tag--}}
                    <x-select id="tagp_id" name="tagp_id" multiple label="Tag" :list="$tags" class="w-1/2"/>
                </div>
            </div>
        </div>
        <div class="tab-content flex justify-between items-center w-full mt-5">
            <div clas="w-1/3 m-5"> <x-check label="Couleur" name="colorable" id="colorable" type="checkbox"/></div>
            <div clas="w-1/3 m-5"> <x-check label="Taille" name="taillable" id="taillable" type="checkbox"/></div>
            <div clas="w-1/3 m-5"> <x-check label="Pointure" name="pointurable" id="pointurable" type="checkbox"/></div>
        </div>
        <div id="page2" class="tab-content">
            <div class="tab-pane fade" id="page3" >
                <div class="flex mt-4 items-center justify-center w-full">
                    <div class="w-full flex flex-col">
                        <div id="dynamiqueContent" class="m-5">
                            <input type="text" name="compteurProduit" id="compteurProduit" class="hidden">
                            <div id="dynam" class="w-full mt-5 flex flex-row rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 transition-all">
                                <div class="w-1/3 mr-5" id="champBdbGauche">
                                  <x-input label="couleur" name="couleur" id="couleur" />
                                  <x-input label="Taille" name="taille" id="taille" />
                                  <x-input label="Quantité" name="quantite" id="quantite" />
                                </div>
                                <div class="w-3/4 flex justify-center items-center" id="champDroite">
                                  <div class="flex mt-4 items-center justify-center w-full">
                                    <label id="dropy" for="dropzone-file" class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                            <p class="mb-2 text-md text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-sm text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                                        </div>
                                        <input name="thumbnail" id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                  </div>  
                                </div>
                            </div>
                        </div>
                        {{--<x-check label="Taille ou pointure" name="colorable" id="colorable" type="checkbox"/>
                        <button id="btnAjouterCouleur" class="block px-4 py-2 m-0 font-normal transition-all opacity-100 text-sm text-slate-700 text-left" href="">
                            <i class="mr-1 fa fa-plus opacity-60"></i>
                            Ajouter une couleur
                        </button>--}}
                    </div>
                </div>
            </div>  
        </div>
        
    </div>
    {{-- <div id="page2" class="tab-content">
        <div class="tab-pane fade" id="page3" >
            <div class="flex mt-4 items-center justify-center w-full">
                <div class="w-full flex flex-col">
                    <x-check label="Couleur" name="colorable" id="colorable" type="checkbox"/>
                    <div id="dynamiqueContent" class="m-5">
                        <input type="text" name="compteurProduit" id="compteurProduit" class="hidden">
                    </div>
                    <x-check label="Taille ou pointure" name="colorable" id="colorable" type="checkbox"/>
                    <button id="btnAjouterCouleur" class="block px-4 py-2 m-0 font-normal transition-all opacity-100 text-sm text-slate-700 text-left" href="">
                        <i class="mr-1 fa fa-plus opacity-60"></i>
                        Ajouter une couleur
                    </button>
                </div>
            </div>
        </div>  
    </div> --}}
    <div class="tab-pane fade mt-3" id="divbtnValidation" >
        <div class="flex mt-4 items-center justify-center w-full">
            <div class="w-1/2 mr-5" id="contBtnValider">
                <button type="submit" id="btnValider" class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all bg-transparent rounded-lg cursor-pointer leading-pro text-xs ease-soft-in shadow-soft-md bg-150 bg-gradient-to-tl from-green-900 to-green-800 hover:shadow-soft-xs active:opacity-85 hover:scale-102 tracking-tight-soft bg-x-25">Valider</button>
            </div>
        </div>
        
    </div>
</form>