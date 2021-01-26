<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Datatable-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--glypicons-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row border-bottom mb-5 shadow">
            <div class="col-lg-10"></div>
            <div class="col-lg-2">
                <a class="btn btn-outline-secondary my-5" href="<?php echo site_url().'/main_controller/nouveau'; ?>">Nouvelle article</a>
                <?php echo anchor('Main_controller/logout', 'Logout'); ?>
            </div>
        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-12 d-flex justify-content-center text-info my-5">
                <h2>Gestion des actualités</h2>
            </div>
        </div>

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
                        <a class="btn btn-warning" href="<?php echo site_url().'/main_controller/modification/'.$row->i_id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-id="<?php echo $row->i_id; ?>"><span class="glyphicon glyphicon-trash"></span></a>
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


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">Attention</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body">
          <p>Voulez-vous vraiment supprimer l'enregistrement?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Oui</button>
        </div>
      </div>
      
    </div>
  </div>
    

    <!--datatable-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#mytable').DataTable();
        } );
    </script>
</body>
</html>