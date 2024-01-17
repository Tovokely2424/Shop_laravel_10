<section id="modalcompte" class="hidden fixed inset-0 z-50 flex justify-center items-center">
    <div class="bg-black bg-opacity-50 backdrop-filter backdrop-blur-sm absolute inset-0"></div>
    <div class="bg-white w-3/4 opacity-100 relative p-4 rounded-lg flex flex-col justify-center items-center">
        <header class="mt-0 w-full border-border-purple-300 flex justify-between mr-4">
            <div id="logo"></div>
            <div ><a href=""><span class="text-2xl text-red-700 font-bold hover:cursor-pointer">X</span></a></div>
        </header>
        <main class="flex justify-between w-full overflow-auto">
            <div class="w-full sm:w-1/4 flex flex-col justify-center items-center">
                <div class="border border-purple-300 w-60 h-60 rounded-full">

                </div>
                <div class="border border-purple-300 w-3/4 mt-2 h-min-20 flex justify-center items-center">

                </div>
            </div>
            
            <div class="w-full sm:w-3/4 px-4">

                <form action="{{ route('home') }}" method="POST">
                    @csrf
                    @method('PATCH')
                    
                    <x-input name="current_password" label="Mot de passe actuel" type="password"/>
                    <x-input name="newpass" label="Nouveau mot de passe" type="password"/>
                    <x-input name="newpass_confirmation" label="Confirmation du nouveau mot de passe" type="password"/>
                
                    <div class="flex justify-center items-center mt-4">
                            <button class="shadow bg-purple-500 hover:bg-purple-400 h-20 focus:shadow-outline focus:outline-none text-white font-bold py-3 px-3" type="button">
                                Enregistrer le modification
                            </button>
                    </div>
                </form>
            </div>
        </main>
        <footer>
            <!-- Contenu du pied de page du modal -->
        </footer>
    </div>
</section>
