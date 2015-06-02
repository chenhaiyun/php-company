<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">新闻列表</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo site_url('admin/news/add_news') ?>">添加新闻</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>新闻ID</th>
                                <th>新闻类别</th>
                                <th>新闻标题</th>
                                <th>发布人</th>
                                <th>发布日期</th>
                                <th>操作</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($news_list as $news):?>
                                <tr>

                                    <td>
                                        <?=$news->id ?>
                                    </td>

                                    <td>
                                        <?=$news->category_name ?>
                                    </td>
                                    <td>
                                        <?=$news->news_title ?>
                                    </td>
                                    <td>
                                        <?=$news->news_poster ?>
                                    </td>
                                    <td>
                                        <?=$news->news_date ?>
                                    </td>
                                    <td>
                                        <a>修改</a>&nbsp;|&nbsp;
                                        <a href="<?php echo site_url('admin/news/remove_news').'/'.$news->id ?>">删除</a></td>
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
