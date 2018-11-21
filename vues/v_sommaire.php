
<div id="menuGauche">
    <ul id="menuList">
		<li >
			Bienvenue :<br>
			<?php echo $_SESSION['prenom']."  ".$_SESSION['nom']  ?>
			</li>
            <li class="smenu">
                   Comptes rendus
           </li>
           <li class="smenu">
		   <ul>
              <a href="index.php?uc=gererCR&action=saisirCR" title="Nouveaux comptes rendus">Nouveaux</a>

           </ul>
		   <ul>
              <a href="index.php?uc=gererCR&action=consulterCR" title="Consulter les comptes rendus">Consulter</a>
			  </ul>
           </li>

           <li class="smenu">
              <a href="index.php?uc=medicament&action=liste" title="Les médicaments">Médicaments</a>
           </li>
           </li>
      <li class="smenu">
                   Praticien
           </li>
           <li class="smenu">
		   <ul>
              <a href="index.php?uc=praticien&action=saisir" title="Nouveaux comptes rendus">Nouveaux</a>

           </ul>
		   <ul>
              <a href="index.php?uc=praticien&action=consulter" title="Consulter les comptes rendus">Consulter</a>
			  </ul>
           </li>
            <li class="smenu">Les activités complémentaires</li>
            <li class="smenu">
		<ul>
                    <a href="index.php?uc=activiteComplementaire&action=saisir" title="Nouvelle Activité">Nouvelle</a>
                </ul>
                <ul>
                    <a href="index.php?uc=activiteComplementaire&action=ajouterPraticienDansAC" title="Ajouter Praticien">Ajouter Praticien</a>
                </ul>
		<ul>
                    <a href="index.php?uc=activiteComplementaire&action=consulter" title="Consulter les activités complémentaires">Consulter</a>
                </ul>
            </li>
           <li class="smenu">
        <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
        </li>
    </ul>
</div>
