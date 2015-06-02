<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">产品分类管理</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo site_url('admin/category/add_category') ?>">添加类别</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>类别ID</th>
                                <th>类别名称</th>
                                <th>类别描述</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach((array) $category_list as $key => $c){?>
                                <tr>

                                    <td>
                                        <?= $c['id'] ?>
                                    </td>

                                    <td>
                                        <?php
                                            if( $c['rank'] > 0 )
                                            {
                                                for( $i=1;$i<=$c['rank'];$i++ )
                                                {
                                                    if($i > 0 AND $i < $c['rank']) {echo '---';}
                                                    //if($i >= $c['rank']) {echo '';}
                                                }
                                            }
                                            echo $c['category_name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $c['content'];?>
                                    </td>
                                    <td>
                                        <a>修改</a>&nbsp;|&nbsp;
                                        <a href="<?php echo site_url('admin/category/remove_category').'/'.$c['id'] ?>">删除</a>
                                    </td>
                                </tr>
                            <?php }unset ($c);?>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->

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
