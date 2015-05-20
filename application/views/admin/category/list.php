<div class="acy-ad-content">
    <div class="acy-ad-category">
        <div>类别列表</div>
        <div>
            <a href="#">添加类别</a>
        </div>
        <ul>
            <?php foreach ($category_list as $cat):?>

                <li><?php echo $cat->category_name; ?></li>

            <?php endforeach;?>
        </ul>


    </div>
</div>
