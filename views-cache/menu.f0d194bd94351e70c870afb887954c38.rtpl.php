<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- =============================================== -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Realizar pedido
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-bookmark"></i> Home</a></li>
      <li><a href="#">Cardápio</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div id="error"></div>
    <!-- Default box -->
    <div class="box box-dark">
      <div class="box-body">
        <div class="row">
          <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
              <ul class="nav nav-tabs" id="nav-tabs">
                <li class="active"><a href="#tabFruit" data-toggle="tab">Frutas</a></li>
                <li><a href="#tabSyrup" data-toggle="tab">Caldas</a></li>
              </ul>
              <div class="tab-content" id="tab-content">
                <!-- fruit tab -->
                <div class="tab-pane active" id="tabFruit">
                  <div class="box-header">
                    <a href="/menu/fruit/create" class="btn btn-success">Cadastrar Categoria</a>
                  </div>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Nome da Fruta</th>
                        <th style="width: 240px">&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $counter1=-1;  if( isset($categories) && ( is_array($categories) || $categories instanceof Traversable ) && sizeof($categories) ) foreach( $categories as $key1 => $value1 ){ $counter1++; ?>
                      <tr>
                        <td><?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td><?php echo htmlspecialchars( $value1["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                        <td>
                          <a href="/admin/categories/<?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/products" class="btn btn-default btn-xs"><i
                              class="fa fa-edit"></i> Produtos</a>
                          <a href="/admin/categories/<?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>
                            Editar</a>
                          <a href="/admin/categories/<?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')"
                            class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!--  /.fruit tab  -->

                <!-- syrup tab -->
                <div class="tab-pane" id="tabSyrup">
                    <div class="box-header">
                      <a href="/menu/syrup/create" class="btn btn-success">Cadastrar Categoria</a>
                    </div>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th style="width: 10px">#</th>
                          <th>Nome da Calda</th>
                          <th style="width: 240px">&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $counter1=-1;  if( isset($categories) && ( is_array($categories) || $categories instanceof Traversable ) && sizeof($categories) ) foreach( $categories as $key1 => $value1 ){ $counter1++; ?>
                        <tr>
                          <td><?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                          <td><?php echo htmlspecialchars( $value1["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                          <td>
                            <a href="/admin/categories/<?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/products" class="btn btn-default btn-xs"><i
                                class="fa fa-edit"></i> Produtos</a>
                            <a href="/admin/categories/<?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i>
                              Editar</a>
                            <a href="/admin/categories/<?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir este registro?')"
                              class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!--  /.syrup tab  -->

                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div>

            <!-- nav-tabs-custom -->
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-default pull-right">Enviar</button>
        </div>


        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->