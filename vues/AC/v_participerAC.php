
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="stylesheet" href="././css/button-slide.css" />

<br>

<div class="card mx-auto w-50" style="max-width: 750px;">
    <div class="card-header text-center"><h4 class="card-title mt-3 text-center">Participer à une activité complémentaire</h4></div>
    <div class="card-body">
        <article class="card-body mx-auto" style="max-width: 700px;">
            <form method="POST" action="index.php?uc=activiteComplementaire&action=particperAC">

                <div class="form-group">

                    <table id="tableau" class="table text-center table table-hover table-bordered" style="width: 100%">

                        <thead>
                            <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Lieu</th>
                                <th scope="col">Theme</th>
                                <th scope="col">Motif</th>
                                <th scope="col">Choisir</th>

                                <?php // Si une AC est selectione
                                    if(isset($_POST['activite'])) {
                                ?>

                                    <th scope="col">Frais</th>

                                <?php
                                    }
                                ?>

                            </tr>
                        </thead>

                        <tbody>
                            <?php foreach ($lesAC as $uneActivite => $valeur):?>
                                <tr>
                                    <td scope="row"> <?=$valeur["AC_DATE"]?> </td>
                                    <td> <?=$valeur["AC_LIEU"]?> </td>
                                    <td> <?=$valeur["AC_THEME"]?> </td>
                                    <td> <?=$valeur["AC_MOTIF"]?> </td>

                                    <td>
                                        <div class="form-group">
                                            <button class="btn-slide btn-5 btn-5a icon-arrow-right btn-block" name="activite"><span> Participer </span></button>
                                        </div>
                                    </td>

                                </tr>
                            <?php endforeach; ?>
                        </tbody>

                    </table>

                </div>
            </form>
        </article>
    </div>
</div>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#tableau').DataTable();
    } );
</script>
