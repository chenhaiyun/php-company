<div class="acy-ad-content">
    <div class="acy-ad-news-category">
        <div>新闻类别</div>
        <div>
            <a href="<?php echo site_url('admin/news_category/add_news_category') ?>">添加新闻类别</a>
        </div>
        <ul>

        </ul>

        <table border="1" width="80%">

                <tr>

                    <td>新闻类别ID</td>

                    <th>新闻类别标题</th>

                    <th>新闻类别简介</th>


                    <td>操作</td>

                </tr>

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
        </table>

    </div>
</div>
