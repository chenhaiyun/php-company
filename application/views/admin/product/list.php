<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">产品列表</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo site_url('admin/product/add_product') ?>">添加产品</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>产品ID</th>
                                <th>产品图片</th>
                                <th>产品类别</th>
                                <th>产品名称</th>
                                <th>产品描述</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($product_list as $product):?>
                                <tr>

                                    <td>
                                        <?=$product->id ?>
                                    </td>

                                    <td>
                                        <img width="50" src="<?php echo base_url().'uploads/products/'.$product->product_image ?>">
                                    </td>
                                    <td>
                                        <?=$product->category_name ?>
                                    </td>
                                    <td>
                                        <?=$product->product_name ?>
                                    </td>
                                    <td>
                                        <?=$product->product_desc ?>
                                    </td>
                                    <td>
                                        <a>修改</a>&nbsp;|&nbsp;
                                        <a href="<?php echo site_url('admin/product/remove_product').'/'.$product->id ?>">删除</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

                    <?=$page_link ?>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
<!-- /#page-wrapper -->
