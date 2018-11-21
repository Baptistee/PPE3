
<br>

<div class="card mx-auto">
    <div class="card-header text-center">Tableau des activités complémentaires</div>
    <br>
    <div class="card-body">
        <table id="tableau" class="table text-center table-striped table-bordered" style="width: 100%">

            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Lieu</th>
                    <th scope="col">Theme</th>
                    <th scope="col">Motif</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($lesActivites as $uneActivite => $valeur):?>
                    <tr>
                        <td scope="row"> <?=$valeur["AC_DATE"]?> </td>
                        <td> <?=$valeur["AC_LIEU"]?> </td>
                        <td> <?=$valeur["AC_THEME"]?> </td>
                        <td> <?=$valeur["AC_MOTIF"]?> </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </div>
    <br>
</div>

<script>
    $(document).ready(function() {
        $('#tableau').DataTable();
    } );
</script>

<br>

<div class="card mx-auto">
    <div class="card-header text-center">Tableau des activités complémentaires</div>
    <div class="card-body">
        <div class="row">

            <?php foreach ($lesActivites as $uneActivite => $valeur):?>
                <div class="col-sm-4 py-2">

                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active"><?=$valeur["AC_LIEU"]?></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active"><?=$valeur["AC_DATE"]?></a>
                        </li>
                    </ul>

                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h3 class="card-title"><?=$valeur["AC_THEME"]?></h3>
                            <p class="card-text">à <?=$valeur["AC_LIEU"]?>, le <?=$valeur["AC_DATE"]?></p>
                            <a href="https://fr.wikipedia.org/wiki/<?=$valeur["AC_THEME"]?>" class="btn btn-outline-light">Accéder</a>
                        </div>
                        <div class="card-footer"><?=$valeur["AC_MOTIF"]?></div>
                    </div>

                </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>
