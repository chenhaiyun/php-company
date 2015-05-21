<div class="acy-ad-content">
    <div class="acy-ad-news-category">
        <div>添加新闻类别</div>

        <div>

            <form method="post" action="<?php site_url("admin/news_category/add_news_category")?>">


                <div>新闻类别名称：</div>
                <div><input name="category_name" type="text"></div>


                <div>新闻类别简介：</div>
                <div><textarea name="category_desc"></textarea></div>

                <div><input name="submit" type="submit" value="添加"></div>

            </form>
        </div>


    </div>
</div>