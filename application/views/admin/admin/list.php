<div class="acy-ad-content">
    <div class="acy-ad-admin">
        <div>管理员列表</div>
        <div>
            <a href="<?php echo site_url('admin/news/add_news') ?>">添加管理员</a>
        </div>

        <table border="1" width="80%">

                <tr>

                    <td>管理员ID</td>

                    <th>管理员用户名</th>

                    <th>管理员姓名</th>

                    <th>管理级别</th>


                    <td>操作</td>

                </tr>

            <?php foreach ($admin_list as $admin):?>
                <tr>

                    <td>
                        <?=$admin->id ?>
                    </td>

                    <td>
                        <?=$admin->login_name ?>
                    </td>
                    <td>
                        <?=$admin->user_name ?>
                    </td>
                    <td>
                        <?=$admin->grade ?>
                    </td>
                    <td>
                        <a>修改</a>&nbsp;|&nbsp;
                        <a href="<?php echo site_url('admin/admin/remove_admin').'/'.$admin->id ?>">删除</a></td>
                </tr>
            <?php endforeach;?>
        </table>

    </div>
</div>
