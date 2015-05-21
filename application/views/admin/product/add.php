<div class="acy-ad-content">
    <div class="acy-ad-product">
        <div>添加产品</div>

        <div>
            <form method="post" action="<?php site_url("admin/product/add_product")?>">


                <div>产品名称：</div>
                <div><input name="product_name" type="text"></div>

                <div>产品类别：</div>
                <div>

                    <select name="product_category">
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

                </div>

                <div>产品图片：</div>
                <div><input name="product_image" type="file"></div>

                <div>产品简介：</div>
                <div><textarea name="product_desc"></textarea></div>

                <div><input name="submit" type="submit" value="添加"></div>

            </form>
        </div>


    </div>
</div>