<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">管理员列表</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    DataTables Advanced Tables
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>管理员ID</th>
                                <th>用户名</th>
                                <th>姓名</th>
                                <th>级别</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($admin_list as $admin):?>
                                <tr>

                                    <td>
                                        <?=$admin->id ?>
                                    </td>

                                    <td>
                                        <?=$admin->login_name ?>
                                    </td>
                                    <td>
                                        <?=$admin->user_name ?>
                                    </td>
                                    <td>
                                        <?=$admin->grade ?>
                                    </td>
                                    <td>
                                        <a>修改</a>&nbsp;|&nbsp;
                                        <a href="<?= site_url('admin/admin/remove_admin').'/'.$admin->id ?>">删除</a></td>
                                </tr>
                            <?php endforeach;?>

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


