<div class="acy-ad-content">
    <div class="acy-ad-category">
        <div>产品列表</div>
        <div>
            <a href="<?php echo site_url('admin/product/add_product') ?>">添加产品</a>
        </div>
        <ul>

        </ul>

        <table border="1" width="80%">

                <tr>

                    <th>产品图片</th>

                    <th>产品类别</th>

                    <th>产品名称</th>

                    <th>产品描述</th>

                    <td>操作</td>

                </tr>

            <?php foreach ($product_list as $product):?>
                <tr>
                    <td>
                        <?=$product->product_image ?>
                    </td>
                    <td>
                        <?=$product->product_category ?>
                    </td>
                    <td>
                        <?=$product->product_name ?>
                    </td>
                    <td>
                        <?=$product->product_desc ?>
                    </td>
                    <td><a>修改</a>&nbsp;|&nbsp;<a href="<?php echo site_url('admin/product/remove_product').'/'.$product->id ?>">删除</a></td>
                </tr>
            <?php endforeach;?>
        </table>

    </div>
</div>
