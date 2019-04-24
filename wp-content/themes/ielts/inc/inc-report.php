<?php
    global $type;
    $completion = $_GET['completion'];
    $s1 = $_GET['s1'];
    $s2 = $_GET['s2'];
    $s3 = $_GET['s3'];
    $s4 = $_GET['s4'];
    $satisfaction = $_GET['satisfaction'];
    $review = $_GET['review'];
    $problems = $_GET['problems'];
    $questions = $_GET['questions'];
    // $new_report = array(
    //     'post_title'	=> 'My post',
    //     'post_type'		=> 'post',
    //     'post_status'	=> 'publish'
    // );
    
    
    // // insert the post into the database
    // $post_id = wp_insert_post( $my_post );
?>
<?php
    // Same handler function...
    add_action( 'wp_ajax_my_action', 'my_action' );
    add_action( 'wp_ajax_nopriv_my_action', 'my_action' );

    function my_action() {
        global $wpdb; // this is how you get access to the database

        $username = $_POST['username'];
        echo '<h1>'.$username.'</h1>';

        wp_die(); // this is required to terminate immediately and return a proper response
    }
?>
<section class="report-module">
    <div class="wrap">
        <div class="header">
            <h3>历史打卡</h3>
            <h4>打卡项目：<?php the_title(); ?></h4>
        </div>
        <?php
            $report_args = array(
                'post_type'         =>  'report',
                'posts_per_page'    =>  '-1',
                'meta_key'          =>  'mission',
                'meta_value'        =>  $mission_ID,
            );
            $reports = new WP_Query($report_args);
            if( $reports -> have_posts() ) :
        ?>
        <div class="main-report">
            <table>
                <?php
                    if( $type[0]->slug == 'listening' ) :
                    // Display the Listening form
                ?>
                <tr>
                    <th>名字</th>
                    <th>第几遍做</th>
                    <th>完成度</th>
                    <th>S1 (10)</th>
                    <th>S2 (10)</th>
                    <th>S3 (10)</th>
                    <th>S4 (10)</th>
                    <th>对题数 (40)</th>
                    <th>分数</th>
                    <th>错题</th>
                    <th>满意度</th>
                    <th>精听/解析</th>
                    <th>不懂题目</th>
                    <th>提问问题</th>
                </tr>
                <?php
                        while( $reports -> have_posts() ) : $reports -> the_post() ;
                            $listening = get_field('listening_test');
                ?>
                <tr>
                    <td><?php the_field('name'); ?></td>
                    <td><?php echo $listening['amount']; ?></td>
                    <td class="<?php the_field('completion'); ?>"></td>
                    <td><?php echo $listening['section1']; ?></td>
                    <td><?php echo $listening['section2']; ?></td>
                    <td><?php echo $listening['section3']; ?></td>
                    <td><?php echo $listening['section4']; ?></td>
                    <td><?php echo $listening['right']; ?></td>
                    <td><?php echo $listening['overall']; ?></td>
                    <td><?php echo $listening['review']; ?></td>
                    <td class="<?php the_field('satisfaction'); ?>"></td>
                    <td class="<?php echo $listening['review']; ?>"></td>
                    <td><?php echo $listening['problems']; ?></td>
                    <td class="content-main">
                        <?php echo $listening['questions']; ?>
                    </td>
                </tr>
                <?php
                        endwhile;
                    elseif( $type[0]->slug == 'reading' ) :
                    // Display the Reading form
                ?>
                <tr>
                    <th>名字</th>
                    <th>第几遍做</th>
                    <th>完成度</th>
                    <th>P1 (13)</th>
                    <th>P2 (13)</th>
                    <th>P3 (14)</th>
                    <th>对题数 (40)</th>
                    <th>分数</th>
                    <th>错题</th>
                    <th>满意度</th>
                    <th>细读/解析</th>
                    <th>不懂题目</th>
                    <th>提问问题</th>
                </tr>
                <?php
                        while( $reports -> have_posts() ) : $reports -> the_post() ;
                            $reading = get_field('reading_test');
                ?>
                <tr>
                    <td><?php the_field('name'); ?></td>
                    <td><?php echo $reading['amount']; ?></td>
                    <td class="<?php the_field('completion'); ?>"></td>
                    <td><?php echo $reading['section1']; ?></td>
                    <td><?php echo $lisreadingtening['section2']; ?></td>
                    <td><?php echo $reading['section3']; ?></td>
                    <td><?php echo $reading['right']; ?></td>
                    <td><?php echo $reading['overall']; ?></td>
                    <td><?php echo $reading['review']; ?></td>
                    <td class="<?php the_field('satisfaction'); ?>"></td>
                    <td class="<?php echo $reading['review']; ?>"></td>
                    <td><?php echo $reading['problems']; ?></td>
                    <td class="content-main">
                        <?php echo $reading['questions']; ?>
                    </td>
                </tr>
                <?php
                        endwhile;
                    endif;
                ?>
            </table>
        </div>
        <?php
            endif;
        ?>
    </div>
</section>