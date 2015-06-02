<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">新闻分类</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo site_url('admin/news_category/add_news_category') ?>">添加新闻类别</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>新闻类别ID</th>
                                <th>新闻类别标题</th>
                                <th>新闻类别简介</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($news_category_list as $news_category):?>
                                <tr>

                                    <td>
                                        <?=$news_category->id ?>
                                    </td>

                                    <td>
                                        <?=$news_category->category_name ?>
                                    </td>

                                    <td>
                                        <?=$news_category->category_desc ?>
                                    </td>

                                    <td>
                                        <a>修改</a>&nbsp;|&nbsp;
                                        <a href="<?php echo site_url('admin/news_category/remove_news_category').'/'.$news_category->id ?>">删除</a>
                                    </td>
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
