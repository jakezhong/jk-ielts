<?php
    $post_object = get_sub_field('schedule');
    if( $post_object ):
        $post = $post_object;
        setup_postdata( $post );
        $today = date('w');
        $days = array(
            'Monday'    =>  '1',
            'Tuesday'   =>  '2',
            'Wednesday' =>  '3',
            'Thursday'  =>  '4',
            'Friday'    =>  '5',
            'Saturday'  =>  '6',
            'Sunday'    =>  '7',
        );
?>
<section class="schedule-module">
    <div class="wrap">
        <h2>本周目标</h2>
        <?php
            if( have_rows('missions') ) :
        ?>
        <div class="header">
            <ol>
            <?php
                while( have_rows('missions') ) : the_row();
                    echo '<li>'.get_sub_field('content').'<span>x '.get_sub_field('times').'</span></li>';
                endwhile;
            ?>
            </ol>
        </div>
        <?php
            endif;
        ?>
        <div class="spacer"></div>
        <h2>时间表</h2>
        <div class="spacer"></div>
        <b-form-checkbox v-model="todayTrigger" name="check-button" switch>
            只看今天
        </b-form-checkbox>
        <div class="spacer"></div>
        <div class="main-sheet">
            <table v-bind:class="{ active: todayTrigger }">
                <tr>
                    <th>Time</th>
                    <?php
                        foreach( $days as $key => $value ) {
                            $output  = '<th';
                            if( $value !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            $output .= $key;
                            $output .= '</th>';
                            echo $output;
                        }
                    ?>
                </tr>
                <tr>
                    <td class="morning">Morning</td>
                    <?php
                        for( $i = 0; $i <7; $i++ ) {
                            $output = '<td';
                            if( (string)$i !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            $output .= get_the_title();
                            $output .= '</td>';
                            echo $output;
                        }
                    ?>
                </tr>
                <tr>
                    <td>Afternoon</td>
                    <?php
                        for( $i = 0; $i <7; $i++ ) {
                            $output = '<td';
                            if( (string)$i !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            $output .= get_the_title();
                            $output .= '</td>';
                            echo $output;
                        }
                    ?>
                </tr>
                <tr>
                    <td>Evening</td>
                    <?php
                        for( $i = 0; $i <7; $i++ ) {
                            $output = '<td';
                            if( (string)$i !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            $output .= get_the_title();
                            $output .= '</td>';
                            echo $output;
                        }
                    ?>
                </tr>
            </table>
        </div>
    </div>
</section>
<?php
        wp_reset_postdata();
    endif;
?>