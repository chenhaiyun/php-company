<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">添加产品</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?= site_url('admin/product/list_product') ?>">返回产品列表</a>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form role="form" method="post" action="<?php site_url("admin/category/add_category")?>">

                                <div class="form-group">
                                    <label>产品名称</label>
                                    <input class="form-control" name="category_name" placeholder="请输入产品名称">
                                </div>

                                <div class="form-group">
                                    <label>产品类别</label>
                                    <select name="parent_id">
                                        <?php foreach((array) $category_list as $key => $c){?>
                                            <option value="<?php echo $c['id'] ?>">
                                                <?php
                                                if( $c['rank'] > 0 )
                                                {
                                                    for( $i=1;$i<=$c['rank'];$i++ )
                                                    {
                                                        if($i > 0 AND $i < $c['rank']) {
                                                            echo '--';
                                                        }
                                                        //if($i >= $c['rank']) { echo '━'; }
                                                    }
                                                }
                                                echo $c['category_name'];
                                                ?>
                                            </option>
                                        <?php }unset ($c);?>
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>产品图片</label>
                                    <input name="product_image" type="file">
                                </div>

                                <div class="form-group">
                                    <label>产品简介</label>
                                    <textarea name="product_desc" class="form-control" rows="3"></textarea>
                                </div>

                                <input name="submit" type="submit" class="btn btn-default" value="添加">
                                <button type="reset" class="btn btn-default">重置</button>
                            </form>
                        </div>

                    </div>
                    <!-- /.row (nested) -->
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
