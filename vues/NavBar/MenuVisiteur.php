<div class="navbar-header">
    <a class="navbar-brand" href="./vues/v_accueil.php">
        <img src="./images/logo-gsb.png" width="94" height="59" class="d-inline-block align-top" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>
    <li class="nav-item dropdown">
        <a class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comptes Rendus</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="index.php?uc=gererCR&action=saisirCR">Nouveaux</a>
            <a class="dropdown-item" href="index.php?uc=gererCR&action=consulterCR">Consulter</a>
        </div>
    </li>

    <li class="nav-item">
        <a class="text-white nav-link" href="index.php?uc=medicament&action=liste">Médicaments</a>
    </li>

    <li class="nav-item dropdown">
        <a class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Praticien</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="index.php?uc=praticien&action=saisir">Nouveaux</a>
            <a class="dropdown-item" href="index.php?uc=praticien&action=consulter&page=1">Consulter</a>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="text-white nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Activités complémentaires</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="index.php?uc=activiteComplementaire&action=saisir">Nouvelle</a>
            <a class="dropdown-item" href="index.php?uc=activiteComplementaire&action=ajouterPraticienDansAC">Ajouter Praticien</a>
            <a class="dropdown-item" href="index.php?uc=activiteComplementaire&action=particperAC">Participer</a>
            <a class="dropdown-item" href="index.php?uc=activiteComplementaire&action=consulter">Consulter</a>
        </div>
    </li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <a class="btn btn-secondary" href="index.php?uc=connexion&action=deconnexion">Déconnexion</a>
</ul>
