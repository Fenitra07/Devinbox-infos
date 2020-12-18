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
                <a class="btn btn-primary" href="<?php echo site_url().'/main_controller/nouveau'; ?>">Nouvelle article</a>
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
                <?php foreach($data as $row){ ?>
                <tr>
                    <td><?php echo $row->i_titre?></td>
                    <td><?php echo $row->i_date_pub?></td>
                    <td>
                        <a class="btn btn-warning" href="<?php echo site_url().'/main_controller/modification/'.$row->i_id; ?>">Modifier</a>
                        <a class="btn btn-danger" href="<?php echo site_url().'/main_controller/suppression/'.$row->i_id; ?>">Supprimer</a>
                    </td>
                </tr>
                <?php
                }
                ?>
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