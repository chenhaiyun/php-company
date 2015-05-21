<div class="acy-ad-content">
    <div class="acy-ad-category">
        <div>新闻列表</div>
        <div>
            <a href="<?php echo site_url('admin/news/add_news') ?>">添加新闻</a>
        </div>
        <ul>

        </ul>

        <table border="1" width="80%">

                <tr>

                    <td>新闻ID</td>

                    <th>新闻类别</th>

                    <th>新闻标题</th>

                    <th>发布人</th>

                    <th>发布日期</th>

                    <td>操作</td>

                </tr>

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
        </table>

        <?=$page_link ?>

    </div>
</div>
