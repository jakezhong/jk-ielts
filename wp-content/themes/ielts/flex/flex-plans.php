<section class="plans-module">
    <div class="wrap">
        <?php
            $plan_args = array(
                'post_type'         =>  'plan-item',
                'order'             =>  'ASC',
                'posts_per_page'    =>  -1,
            );
            $plans = new WP_Query($plan_args);
            if ( $plans -> have_posts() ) :
                while ( $plans -> have_posts() ) : $plans -> the_post();
        ?>
        <div class="plan-field main-content right-sidebar">
            <div class="content-main">
                <div class="header">
                    <h2>刷题小分队学习计划</h2>
                </div>
                <h5>💕刷题正经人课堂💕</h5>
                <p>
                    每天（除周天）9点此群汇合
                </p>
                <ol>
                    <li>每人尽量提出自己遇到的问题。</li>
                    <li>试想下次如何避免犯同样的错误。</li>
                    <li>大家开始精听或者细读，消化文本，相互交流。</li>
                    <li>试着整理长难句，根据实际需求抄长难句，把原句成分结构搞清楚。</li>
                    <li>争取下次回过头再做同样试图争取拿到满分</li>
                </ol>
                <p>刷题完后，大家可以一起集思广益雅思四项的干货 我有一定会发群里 有疑问@我 第一时间看到就会回复 我相信大家不会被八卦带跑 我就不在群里说类似的规定了 希望大家考完试也继续是朋友 预祝成功!!!</p>
            </div>
            <?php get_sidebar(); ?>
        </div>
        <?php
                endwhile; wp_reset_postdata();
            endif;
        ?>
    </div>
</section>