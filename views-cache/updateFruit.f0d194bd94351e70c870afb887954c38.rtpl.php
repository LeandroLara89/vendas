<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Adicionar nova <b>FRUTA</b>
        </h1>
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-bookmark"></i> Home</a></li>
            <li><a href="/menu"><i class="fa fa-bookmark"></i> Cardápio</a></li>
            <li><a href="/menu/fruit/create"> Adicionar Fruta</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div id="error"></div>
        <!-- Default box -->
        <form id="addFruitForm" action="/menu/fruit/update/<?php echo htmlspecialchars( $fruit["cd_fruta"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="POST">
            <div class="box">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="newFruitName">Nome</label>
                                            <input type="text" class="form-control" name="nm_fruta" id="newFruitName" placeholder="Nome da fruta" value="<?php echo htmlspecialchars( $fruit["nm_fruta"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" required>
                                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-success pull-right">Alterar</button>
                    </div>
        </form>


        <!-- /.box-footer-->
</div>
<!-- /.box -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->