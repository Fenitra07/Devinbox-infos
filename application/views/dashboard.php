<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Datatable-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10"></div>
            <div class="col-lg-2">
                <a href="">Nouvelle article</a>
                <a href="">Deconnexion</a>
            </div>
        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <table class="table table-striped" id="mytable">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>Date de publication</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Précision sur les échéances des obligations fiscales</td>
                    <td>10/02/15</td>
                    <td>
                        <a class="btn btn-warning" href="">Modifier</a>
                        <a class="btn btn-danger" href="">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>Reprise progressive des activités usuelles d'intervention de l'administration fiscale</td>
                    <td>21/01/20</td>
                    <td>
                        <a class="btn btn-warning" href="">Modifier</a>
                        <a class="btn btn-danger" href="">Supprimer</a>
                    </td>
                </tr>
                <tr>
                    <td>Utilisation de la nouvelle plateforme E-HETRA pour les contribuables de la DGE</td>
                    <td>08/03/16</td>
                    <td>
                        <a class="btn btn-warning" href="">Modifier</a>
                        <a class="btn btn-danger" href="">Supprimer</a>
                    </td>
                </tr>
                </tbody>
            </table>
            </div>
            <div class="col-lg-2"></div>
            
        </div>
    </div> <!--fin container-fluid-->
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable();
        } );
    </script>

    <!--datatable-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>