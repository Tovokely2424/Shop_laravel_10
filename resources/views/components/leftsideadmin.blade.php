@auth
    <div class="panel-group category-products" id="accordian"><!--category-productsr-->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordian" href="#produit">
                        <i class="fa fa-folder-open text-purple-500"></i>
                        <span class="badge pull-right"><i class="fa fa-chevron-circle-down"></i></span>
                        Produit
                    </a>
                </h4>
            </div>
            <div id="produit" class="panel-collapse collapse">
                <div class="panel-body">
                    <ul>
                        <li class="mt-3"><a href="#"><i class="fa fa-plus"></i> Détail produit</a></li>
                        <li class="mt-3"><a href="#"> Nouveu produit </a></li>
                        <li class="mt-3"><a href="#"> Modifier</a></li>
                        <li class="mt-3"><a href="#"> Supprimer</a></li>
                    </ul>
                </div>
            </div>
        </div>
        @if (Auth::user()->isAdmin())
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#category">
                            <i class="fa fa-list-ul text-purple-500"></i>
                            <span class="badge pull-right"><i class="fa fa-chevron-circle-down"></i></span>
                            Cathegorie
                        </a>
                    </h4>
                </div>
                <div id="category" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li class="mt-3"><a href="#">Information</a></li>
                            <li class="mt-3"><a href="#">Nouveau</a></li>
                            <li class="mt-3"><a href="#">Modifier</a></li>
                            <li class="mt-3"><a href="#">Supprimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#sousCath">
                            <i class="fa fa-dedent text-purple-500"></i>
                            <span class="badge pull-right"><i class="fa fa-chevron-circle-down"></i></span>
                            Sous-cath
                        </a>
                    </h4>
                </div>
                <div id="sousCath" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li class="mt-3"><a href="#">Recap</a></li>
                            <li class="mt-3"><a href="#">Nouveau</a></li>
                            <li class="mt-3"><a href="#">Modifier</a></li>
                            <li class="mt-3"><a href="#">Supprimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#user">
                            <i class="fa fa-user text-purple-500"></i>
                            <span class="badge pull-right"><i class="fa fa-chevron-circle-down"></i></span>
                            Utilisateur
                        </a>
                    </h4>
                </div>
                <div id="user" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li class="mt-3"><a href="#">Information</a></li>
                            <li class="mt-3"><a href="#">Nouvel</a></li>
                            <li class="mt-3"><a href="#">Modifier</a></li>
                            <li class="mt-3"><a href="#">Supprimer un</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#fournisseur">
                            <i class="fa fa-th-large text-purple-500"></i>
                            <span class="badge pull-right"><i class="fa fa-chevron-circle-down"></i></span>
                            Fournisseur
                        </a>
                    </h4>
                </div>
                <div id="fournisseur" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li class="mt-3"><a href="#">Recap</a></li>
                            <li class="mt-3"><a href="#">Nouveau</a></li>
                            <li class="mt-3"><a href="#">Modifier</a></li>
                            <li class="mt-3"><a href="#">Supprimer</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#client">
                            <i class="fa fa-check-square text-purple-500"></i>
                            <span class="badge pull-right"><i class="fa fa-chevron-circle-down"></i></span>
                            Clients
                        </a>
                    </h4>
                </div>
                <div id="client" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li class="mt-3"><a href="#">Recap</a></li>
                            <li class="mt-3"><a href="#">Gerer</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" href="#journal">
                            <i class="fa fa-retweet text-purple-500" aria-hidden="true"></i>
                            <span class="badge pull-right"><i class="fa fa-chevron-circle-down"></i></span>
                            Journal
                        </a>
                    </h4>
                </div>
                <div id="journal" class="panel-collapse collapse">
                    <div class="panel-body">
                        <ul>
                            <li class="mt-3"><a href="#">Facture</a></li>
                            <li class="mt-3"><a href="#">Activité</a></li>
                            <li class="mt-3"><a href="#">Validation</a></li>
                            <li class="mt-3"><a href="#">Utilisateur</a></li>
                            <li class="mt-3"><a href="#">Vente</a></li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a href="#">Mes taches</a></h4>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">INVENTAIRES</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Stocks</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Entrée Stock</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Opérations</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Paiement</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Echanges</a></h4>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="#">Partenaire</a></h4>
                </div>
            </div>
        @endif
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title"><a href="#">Mon Compte</a></h4>
            </div>
        </div>
    </div>
@endauth