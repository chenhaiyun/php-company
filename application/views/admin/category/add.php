<div class="acy-ad-content">
    <div class="acy-ad-category">
        <div>添加类别</div>

        <div>
            <form method="post" action="<?php site_url("admin/category/add_category")?>">

                <div>选择上级类别：</div>
                <div>

                    <select name="parent_id">
                        <option value="0">顶级类别</option>
                        <?php foreach((array) $category_list as $key => $c){?>
                            <option value="<?php echo $c['parent_id'] ?>">
                                    <?php echo '┣';
                                    if( $c['rank'] > 0 )
                                    {
                                        for( $i=1;$i<=$c['rank'];$i++ )
                                        {
                                            if($i > 0 AND $i < $c['rank']) {
                                                echo '━';
                                            }
                                            if($i >= $c['rank']) {
                                                echo '━';
                                            }
                                        }
                                    }
                                    echo $c['category_name'];
                                    ?>
                            </option>
                        <?php }unset ($c);?>
                    </select>

                </div>

                <div>类别名称：</div>
                <div><input name="category_name" type="text"></div>

                <div>类别简介：</div>
                <div><textarea name="content"></textarea></div>

                <div><input name="submit" type="submit" value="添加"></div>

            </form>
        </div>


    </div>
</div>