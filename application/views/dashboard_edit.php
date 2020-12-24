<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Datatable-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Dashboard - Modification</title>
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
            <?php echo form_open('main_controller/editInfo'); ?>
                <?php echo form_input(['name'=>'i_id','type'=>'hidden','class'=>'form-control','value'=>$posts['0']['i_id']]);?>   

                <label>Titre</label>
                <?php echo form_input(['name'=>'i_titre','type'=>'text','class'=>'form-control','value'=>$posts['0']['i_titre']]);?>
                <?php echo form_submit(['name'=>'submit','type'=>'submit','value'=>'Enregistrer','class'=>'btn btn-success mt-3'])?>
            <?php echo form_close(); ?>
            </div>
            <div class="col-lg-2"></div>
            
        </div>
    </div> <!--fin container-fluid-->


    <!--datatable-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
</body>
</html>