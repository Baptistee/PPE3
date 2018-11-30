<div class="container connexion-form">

    <div class="connexion-image">
        <img src="./images/pinguLogo.png" alt="rocket_contact"/>
    </div>

    <form method="post" action="index.php?uc=connexion&action=valideConnexion">

        <h3>Connexion</h3>
        <div class="row">
            <div class="col-md-6 mx-auto">

                <div class="form-group">
                    <input id="login" type="text" name="login" class="form-control" placeholder="Identifiant" value="" />
                </div>

                <div class="form-group">
                    <input id="mdp" type="password" name="mdp" class="form-control" placeholder="Mot de passe" value="" />
                </div>

                <div class="form-group">
                    <button type="submit" name="btnSubmit" class="btn btn-primary btn-block"> Connexion </button>
                </div>

            </div>
        </div>

    </form>

</div>
