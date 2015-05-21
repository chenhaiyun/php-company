<div class="acy-ad-content">
    <div class="acy-ad-category">
        <div>类别列表</div>
        <div>
            <a href="<?php echo site_url('admin/category/add_category') ?>">添加类别</a>
        </div>
        <ul>

        </ul>

        <table border="1" width="80%">

                <tr>

                    <th>类别名称</th>
                    <th>类别描述</th>

                    <td>操作</td>

                </tr>

            <?php foreach((array) $category_list as $key => $c){?>
                <tr>
                    <td>
                        <?php
                        if( $c['rank'] > 0 )
                        {
                            for( $i=1;$i<=$c['rank'];$i++ )
                            {
                                if($i > 0 AND $i < $c['rank']) {echo '--';}
                                //if($i >= $c['rank']) {echo '';}
                            }
                        }
                        echo $c['category_name'];
                        ?>
                    </td>
                    <td><?php echo $c['content'];?></td>
                    <td><a>修改</a>&nbsp;|&nbsp;<a href="<?php echo site_url('admin/category/remove_category').'/'.$c['id'] ?>">删除</a></td>
                </tr>
            <?php }unset ($c);?>

        </table>

    </div>
</div>
