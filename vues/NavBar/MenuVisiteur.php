
    <ul class="navbar-nav mr-auto">

        <li class="nav-item dropdown">
            <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comptes Rendus</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?uc=gererCR&action=saisirCR">Nouveau Rapport</a>
                <a class="dropdown-item" href="index.php?uc=gererCR&action=consulterCR">Consulter les Rapports</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?uc=gererCR&action=insererEchantillon">Ajouter un échantillon</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="text-white nav-link" href="index.php?uc=medicament&action=liste">Médicaments</a>
        </li>

        <li class="nav-item dropdown">
            <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Praticien</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?uc=praticien&action=saisir">Nouveaux</a>
                <a class="dropdown-item" href="index.php?uc=praticien&action=consulter&page=1">Consulter</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activités complémentaires</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php?uc=activiteComplementaire&action=saisir">Nouvelle</a>
                <a class="dropdown-item" href="index.php?uc=activiteComplementaire&action=ajouterPraticienDansAC">Ajouter</a>
                <a class="dropdown-item" href="index.php?uc=activiteComplementaire&action=particperAC">Participer</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?uc=activiteComplementaire&action=consulter">Consulter</a>
            </div>
        </li>

    </ul>

    <ul class="nav navbar-nav navbar-right">
        <a class="btn btn-secondary" href="index.php?uc=connexion&action=deconnexion">Déconnexion</a>
    </ul>
