<?php get_header(); the_post(); ?>
    <section class="banner image" style="background-image: url(https://picsum.photos/900/450);"></section>
    <section class="mission-detail">
        <div class="wrap">
            <div class="main-detail main-frame">
                <div class="main-content detail-upper">
                    <div class="header">
                        <?php echo tag_wrap(get_the_title(), 'h2'); ?>
                        <h4>资料介绍</h4>
                        <ul>
                            <li>类型: <span><a href="#">刷题</a></span></li>
                            <li>标签: <span><a href="#">#刷题</a><a href="#">#刷题</a><a href="#">#刷题</a></span></li>
                            <li>作者: <span>Cambridge IELTS</span></li>
                            <li>出版社: <span>Cambridge IELTS</span></li>
                            <li>出版时间: <span>2019.4.27</span></li>
                        </ul>
                    </div>
                </div>
                <div class="main-content right-sidebar detail-lower">
                    <div class="content-main">
                        <?php the_content(); ?>
                    </div>
                    <aside class="content-sub">
                        <div class="sidebar sidebar-list">
                            <h3>下载文件</h3>
                            <b-list-group class="links-list">
                                <b-list-group-item v-for="n in 5" href="#" class="link gray">剑桥雅思8 - 13</b-list-group-item>
                            </b-list-group>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <div class="spacer"></div>
<?php get_footer(); ?>