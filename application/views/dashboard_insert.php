<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--Datatable-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <title>Dashboard - Insertion</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row border-bottom mb-5 shadow">
            <div class="col-lg-10"></div>
            <div class="col-lg-2">
                <!-- <a href="<?php echo site_url(); ?>" class="btn btn-outline-primary rounded-pill my-5">Deconnexion</a> -->
                <?php echo anchor('Main_controller/logout', 'Logout'); ?>
            </div>
        </div><!--fin row-->

        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
            <?php echo form_open('main_controller/insertInfo'); ?>
                <label>Titre</label>
                <?php echo form_input(['name'=>'i_titre','type'=>'text','class'=>'form-control']);?>
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