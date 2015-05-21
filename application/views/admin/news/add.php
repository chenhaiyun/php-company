<div class="acy-ad-content">
    <div class="acy-ad-news">
        <div>添加新闻</div>

        <div>

            <form method="post" action="<?php site_url("admin/product/add_product")?>" enctype="multipart/form-data">


                <div>新闻类别：</div>
                <div>

                    <select name="news_category">
                        <?php foreach($news_category_list as $news_category) :?>
                            <option value="<?=$news_category->id ?>">
                                <?=$news_category->category_name ?>
                            </option>
                        <?php endforeach ;?>
                    </select>

                </div>

                <div>新闻标题：</div>
                <div><input name="news_title" type="text"></div>

                <div>新闻内容：</div>
                <div><textarea name="news_content"></textarea></div>

                <div>发布人：</div>
                <div><input name="news_poster" type="text" value="<?= $_SESSION['admin_name'] ?>"></div>

                <div><input name="submit" type="submit" value="添加"></div>

            </form>
        </div>


    </div>
</div>