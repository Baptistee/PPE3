<div class="container contact-form">

    <div class="contact-image">
        <img src="./images/MedicamentLogo.png" alt="rocket_contact"/>
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
                    <input type="submit" name="btnSubmit" class="btn btn-primary btn-lg" value="Connexion" />
                </div>

            </div>
        </div>
    </form>
</div>
