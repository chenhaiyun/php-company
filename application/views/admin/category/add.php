<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">添加产品分类</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?= site_url('admin/category/list_category') ?>">返回类别列表</a>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form role="form" method="post" action="<?php site_url("admin/category/add_category")?>">
                                <div class="form-group">
                                    <label>选择上级类别</label>
                                    <select name="parent_id">
                                        <option value="0">顶级类别</option>
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
                                    <p class="help-block">请选择上级类别.</p>
                                </div>
                                <div class="form-group">
                                    <label>类别名称</label>
                                    <input class="form-control" name="category_name" placeholder="请输入类别名称">
                                </div>

                                <div class="form-group">
                                    <label>类别简介</label>
                                    <textarea name="content" class="form-control" rows="3"></textarea>
                                </div>

                                <!--
                                <div class="form-group">
                                    <label>Static Control</label>
                                    <p class="form-control-static">email@example.com</p>
                                </div>
                                <div class="form-group">
                                    <label>File input</label>
                                    <input type="file">
                                </div>
                                <div class="form-group">
                                    <label>Text area</label>
                                    <textarea class="form-control" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Checkboxes</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Checkbox 1
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Checkbox 2
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="">Checkbox 3
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Inline Checkboxes</label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox">1
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox">2
                                    </label>
                                    <label class="checkbox-inline">
                                        <input type="checkbox">3
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Radio Buttons</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Inline Radio Buttons</label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Selects</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Multiple Selects</label>
                                    <select multiple class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                                -->
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