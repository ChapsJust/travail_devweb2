
<footer>
        <div class="container">
            <div class="row">
                <div class="col text-center">© 2023 Tous droits réservés.</div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col text-center"> Créé en WordPress : <span class="auteur"><a href="https://justinchaput.ca" target="_blank">Justin Chaput</a></span><p>Un programmeur redoutable qui doit faire un à propos pour avoir les points !</p></div>
            </div>
        </div>
</footer>


    <div id="formulaireauthentification" class="popupchristiane">
    <span id="messageauthentification"></span>
    <form method="post" action="https://apical.xyz/usagers/authentifier" class='form-horizontal'>
        <input type="hidden" name="_token" value="G6xmCSR94GJtvEz6U3vqnT8rQunO3Z2buSyW4TNT">

        <div class="form-group row">
            
            <label for="login" class="control-label col-sm-5 requis">Usager: </label>
            <div class=col-sm-6>
                <input type="text" class="form-control" name="login" id="login" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="motdepasse" class="control-label col-sm-5 requis">Mot de passe: </label>
            <div class=col-sm-6>
                <input type="password" class="form-control" name="motdepasse" id="motdepasse">
            </div>
        </div>
        <div class="form-group row">
            <div class="control-label col-sm-5"></div>
            <div class="col-sm-6">
                <div class="form-check">
                    <label for="resterconnecte" class="form-check-label" checked>
                        <input class="form-check-input" type="checkbox" id="resterconnecte" name="resterconnecte">
                        Rester connecté
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="control-label col-sm-5"></div>
            <div class="col-sm-6">
                <a id="soumettreauthentification" class="btn btn-secondary" href="#">Soumettre</a>
            </div>
        </div>
        <div class="form-group row">
            <div class="control-label col-sm-5"></div>
            <div class="col-sm-6">
                <a href="404.php">Nouvel usager</a>
            </div>
        </div>
    </form>

</div>
<?php wp_footer(); ?>
</body>
</html>