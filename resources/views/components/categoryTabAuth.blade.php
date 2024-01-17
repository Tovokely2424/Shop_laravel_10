@auth
    <div id="categoryTabAuth" class=" grid grid-cols-1 md:grid-cols-2 gap-1 bg-purple-400 bg-opacity-2 w-100 h-auto rounded mr-6">
        <div id="gCompte" class="bg-purple-400 shadow-lg m-4 hover:bg-purple-500 hover:cursor-pointer bg-opacity-1 rounded flex justify-center items-center">
            <div class="flex justify-center items-center w-1/4"><i class="fa fa-user text-5xl font-bold text-purple-300"></i></div>
            <div class="flex flex-col justify-start items-start">
                <h1 class="text-4xl font-bold text-white">Gestion de mon Compte</h1>
                <p class="text-2xl text-purple-200 mt-4 pr-40">Photo de profil, Changement de mot de passe, Mise à jour de numéro, etc...</p>
            </div>
        </div>
        <div id="gProduit" class="bg-purple-400 shadow-lg m-4 hover:bg-purple-600 hover:cursor-pointer bg-opacity-1 rounded flex justify-center items-center">
            <div class="flex justify-center items-center w-1/4"><i class="fa fa-folder-open text-5xl font-bold text-purple-300"></i></div>
            <div class="flex flex-col justify-start items-start">
                <h1 class="text-4xl font-bold text-white">Gestion des Produits</h1>
                <p class="text-2xl text-purple-200 mt-4 pr-40">Gerer les produits, En ajouter ou en supprimer, etc...</p>
            </div>
        </div>
        @if (Auth::user()->isAdmin())

        <div class="bg-purple-400 shadow-lg m-4 hover:bg-purple-500 hover:cursor-pointer bg-opacity-1 rounded flex justify-center items-center">
            <div class="flex justify-center items-center w-1/4"><i class="fa fa-users text-5xl font-bold text-purple-300"></i></div>
            <div class="flex flex-col justify-start items-start">
                <h1 class="text-4xl font-bold text-white">Utilisateurs</h1>
                <p class="text-2xl text-purple-200 mt-4 pr-40">Cliquez ici pour gerer les utilisateur et leur droit, ajouter ou supprimez, etc...</p>
            </div>
        </div>
        <div class="bg-purple-400 shadow-lg m-4 hover:bg-purple-500 hover:cursor-pointer 0 bg-opacity-1 rounded flex justify-center items-center">
            <div class="flex justify-center items-center w-1/4"><i class="fa fa-list-ul text-5xl font-bold text-purple-300"></i></div>
            <div class="flex flex-col justify-start items-start">
                <h1 class="text-4xl font-bold text-white">Cathegories et Sous-cathégories</h1>
                <p class="text-2xl text-purple-200 mt-4 pr-40">Ici pour la gestion des cathégorie et sous cathegorie de la base , etc...</p>
            </div>
        </div>
        <div class="bg-purple-400 shadow-lg m-4 hover:bg-purple-500 hover:cursor-pointer bg-opacity-1 rounded flex justify-center items-center">
            <div class="flex justify-center items-center w-1/4"><i class="fa fa-th-large text-5xl font-bold text-purple-300"></i></div>
            <div class="flex flex-col justify-start items-start">
                <h1 class="text-4xl font-bold text-white">Fournisseurs</h1>
                <p class="text-2xl text-purple-200 mt-4 pr-40">Gestion de mes fournisseurs, leurs activités et journaux</p>
            </div>
        </div>
        <div class="bg-purple-400 shadow-lg m-4 hover:bg-purple-500 hover:cursor-pointer 0 bg-opacity-1 rounded flex justify-center items-center">
            <div class="flex justify-center items-center w-1/4"><i class="fa fa-bars text-5xl font-bold text-purple-300"></i></div>
            <div class="flex flex-col justify-start items-start">
                <h1 class="text-4xl font-bold text-white">Clients</h1>
                <p class="text-2xl text-purple-200 mt-4 pr-40">Gerer les clients enregistrés ici, leurs historiques, etc...</p>
            </div>
        </div>
        <div class="bg-purple-400 shadow-lg m-4 hover:bg-purple-500 hover:cursor-pointer bg-opacity-1 rounded flex justify-center items-center">
            <div class="flex justify-center items-center w-1/4"><i class="fa fa-exchange text-5xl font-bold text-purple-300"></i></div>
            <div class="flex flex-col justify-start items-start">
                <h1 class="text-4xl font-bold text-white">Transactions</h1>
                <p class="text-2xl text-purple-200 mt-4 pr-40">Verifiez les transactions et les validation de PJ</p>
            </div>
        </div>
        <div class="bg-purple-400 shadow-lg m-4 hover:bg-purple-500 hover:cursor-pointer 0 bg-opacity-1 rounded flex justify-center items-center">
            <div class="flex justify-center items-center w-1/4"><i class="fa fa-calendar text-5xl font-bold text-purple-300"></i></div>
            <div class="flex flex-col justify-start items-start">
                <h1 class="text-4xl font-bold text-white">Journaux</h1>
                <p class="text-2xl text-purple-200 mt-4 pr-40">Cette partie est faite pour tout ce qui est journaux</p>
            </div>
        </div>

        @endif
    </div>
@endauth