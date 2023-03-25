<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Navigation</li>

                <li>
                    <a href=" {{ url('/dashboard') }}">
                        <i class="mdi mdi-view-dashboard-outline"></i>
                        <span> Tableaux de bord </span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('pos') }}">
                        <span class="badge bg-pink float-end">P</span>
                        <i class="fa fa-duotone fa-inbox"></i>
                        <span> Caissier </span>
                    </a>
                </li>
            

                <li class="menu-title mt-2">Apps</li>


                <li>
                    <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                       <!-- <i class="mdi mdi-cart-outline"></i>  -->
                        <i class="mdi mdi-account-circle me-1"></i>
                        <span> Employés </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.employee') }}">Tous les employés</a>
                            </li>
                            <li>
                                <a href="{{ route('add.employee') }}">Ajouter un employé </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i class="mdi mdi-account-multiple-outline"></i>
                        <span> Clients   </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.customer') }}">Tous les clients</a>
                            </li>
                            <li>
                                <a href="{{ route('add.customer') }}">Ajouter un client</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarEmail" data-bs-toggle="collapse">
                        <i class="fa fa-duotone fa-person"></i>
                        <span> Fournisseurs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEmail">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.supplier') }}">Tous les fournisseurs</a>
                            </li>
                            <li>
                                <a href="{{ route('add.supplier') }}">Ajouter un fournisseur</a>
                            </li>

                        </ul>
                    </div>
                </li>


        <li>
            <a href="#category" data-bs-toggle="collapse">
                <i class="fa fa-thin fa-list"></i>
                <span> Catégories  </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="category">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.category') }}">Tous les catégories </a>
                    </li>

                </ul>
            </div>
        </li>

        <li>
            <a href="#product" data-bs-toggle="collapse">
                <i class="fa fa-thin fa-tag"></i>
                <span> Produits  </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="product">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.product') }}">Tous les produits </a>
                    </li>

                     <li>
                        <a href="{{ route('add.product') }}">Ajouter un produit</a>
                    </li>
                    <li>
                        <a href="{{ route('import.product') }}">Importer un produit </a>
                    </li>
                </ul>
            </div>
        </li>

        <li>
            <a href="#orders" data-bs-toggle="collapse">
                <i class="fa fa-duotone fa-bookmark"></i>
                <span> Commandes  </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="orders">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('pending.order') }}">Commandes en attente </a>
                    </li>

                     <li>
                        <a href="{{ route('complete.order') }}">Commandes complètes </a>
                    </li>

                </ul>
            </div>
        </li>


         <li>
            <a href="#stock" data-bs-toggle="collapse">
                <i class="fa fa-duotone fa-layer-group"></i>
                <span>Gestion des Stocks   </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="stock">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('stock.manage') }}">Stock </a>
                    </li>


                </ul>
            </div>
        </li>


         <li>
            <a href="#permission" data-bs-toggle="collapse">
                <i class="fa fa-solid fa-hand"></i>
                <span> Rôles et Autorisations   </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="permission">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.permission') }}">Autorisations </a>
                    </li>

                    <li>
                        <a href="{{ route('all.roles') }}">Rôles </a>
                    </li>

                    <li>
                        <a href="{{ route('add.roles.permission') }}">Rôle dans les autorisations </a>
                    </li>

                    <li>
                        <a href="{{ route('all.roles.permission') }}">Tous les rôles dans les autorisations</a>
                    </li>

                </ul>
            </div>
        </li>

        <li>
            <a href="#admin" data-bs-toggle="collapse">
                <i class="fa fa-duotone fa-gear"></i>
                <span> Paramètre Admin </span>
                <span class="menu-arrow"></span>
            </a>
            <div class="collapse" id="admin">
                <ul class="nav-second-level">
                    <li>
                        <a href="{{ route('all.admin') }}">Tous les administrateurs </a>
                    </li>

                    <li>
                        <a href="{{ route('add.admin') }}">Ajouter administrateur </a>
                    </li>

                </ul>
            </div>
        </li>



                <li class="menu-title mt-2">Custom</li>

                <li>
                    <a href="#sidebarAuth" data-bs-toggle="collapse">
                        <i class="fa fa-thin fa-ticket"></i>
                         <span>Frais </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarAuth">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.expense') }}">Ajouter un Frais</a>
                            </li>
                            <li>
                                <a href="{{ route('today.expense') }}">Frais d'aujourd'hui</a>
                            </li>
                            <li>
                                <a href="{{ route('month.expense') }}">Frais du Mois</a>
                            </li>
                            <li>
                                <a href="{{ route('year.expense') }}">Frais de l'année</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarExpages" data-bs-toggle="collapse">
                        <i class="mdi mdi-text-box-multiple-outline"></i>
                        <span> Extra Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarExpages">
                        <ul class="nav-second-level">
                            <li>
                                <a href="pages-starter.html">Starter</a>
                            </li>
                            <li>
                                <a href="pages-timeline.html">Timeline</a>
                            </li>
                            <li>
                                <a href="pages-sitemap.html">Sitemap</a>
                            </li>

                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        </li>
        </ul>

    </div>
    <!-- End Sidebar -->

    <div class="clearfix"></div>

</div>
<!-- Sidebar -left -->

</div>
