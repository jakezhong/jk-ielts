<?php
    $post_object = get_sub_field('schedule');
    if( $post_object ) :
        $post = $post_object;
        setup_postdata( $post );
        $today = date('w');
        $week_title = array(
            'Monday'    =>  '0',
            'Tuesday'   =>  '1',
            'Wednesday' =>  '2',
            'Thursday'  =>  '3',
            'Friday'    =>  '4',
            'Saturday'  =>  '5',
            'Sunday'    =>  '6',
        );
        $week_programs = array(
            '0'     =>  array(),
            '1'     =>  array(),
            '2'     =>  array(),
            '3'     =>  array(),
            '4'     =>  array(),
            '5'     =>  array(),
            '6'     =>  array(),
        );
        if( have_rows('programs') ) {
            while( have_rows('programs') ) {
                the_row();
                $program_days = get_sub_field('day');
                foreach( $program_days as $day ) {
                    switch ($day) {
                        case '1':
                            $program = get_sub_field('program');
                            $title = $program -> post_title;
                            array_push($week_programs[0], array(
                                'time'      =>  get_sub_field('time', false, false),
                                'title'     =>  $title,
                                'note'      =>  get_sub_field('note'),
                            ));
                            break;
                        case '2':
                            $program = get_sub_field('program');
                            $title = $program -> post_title;
                            array_push($week_programs[1], array(
                                'time'      =>  get_sub_field('time', false, false),
                                'title'     =>  $title,
                                'note'      =>  get_sub_field('note'),
                            ));
                            break;
                        case '3':
                            $program = get_sub_field('program');
                            $title = $program -> post_title;
                            array_push($week_programs[2], array(
                                'time'      =>  get_sub_field('time', false, false),
                                'title'     =>  $title,
                                'note'      =>  get_sub_field('note'),
                            ));
                            break;
                        case '4':
                            $program = get_sub_field('program');
                            $title = $program -> post_title;
                            array_push($week_programs[3], array(
                                'time'      =>  get_sub_field('time', false, false),
                                'title'     =>  $title,
                                'note'      =>  get_sub_field('note'),
                            ));
                            break;
                        case '5':
                            $program = get_sub_field('program');
                            $title = $program -> post_title;
                            array_push($week_programs[4], array(
                                'time'      =>  get_sub_field('time', false, false),
                                'title'     =>  $title,
                                'note'      =>  get_sub_field('note'),
                            ));
                            break;
                        case '6':
                            $program = get_sub_field('program');
                            $title = $program -> post_title;
                            array_push($week_programs[5], array(
                                'time'      =>  get_sub_field('time', false, false),
                                'title'     =>  $title,
                                'note'      =>  get_sub_field('note'),
                            ));
                            break;
                        case '7':
                            $program = get_sub_field('program');
                            $title = $program -> post_title;
                            array_push($week_programs[6], array(
                                'time'      =>  get_sub_field('time', false, false),
                                'title'     =>  $title,
                                'note'      =>  get_sub_field('note'),
                            ));
                            break;
                    }
                }
            }
        }
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
                        foreach( $week_title as $key => $value ) {
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
                        for( $i = 0; $i < 7; $i++ ) {
                            $output = '<td';
                            if( (string)$i !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            if( $week_programs[$i] ) {
                                $output .= '<ul>';
                                foreach( $week_programs[$i] as $programs ) {
                                    $time = new DateTime($programs[time]);
                                    if( $time->format('a') == 'am' ) {
                                        $output .= '<li>';
                                        foreach( $programs as $key => $value ) {
                                            if( $key == 'time' ) {
                                                $time = new DateTime($value);
                                                $output .= "<time>{$time->format('g:i A')}</time>";
                                            } elseif( $key == 'title' ) {
                                                $output .= "<p>{$value}</p>";
                                            } elseif( $key == 'note' ) {
                                                $output .= "<small>{$value}</small>";
                                            }
                                        }
                                        $output .= '</li>';
                                    }
                                }
                                $output .= '</ul>';
                            }
                            $output .= '</ul></td>';
                            echo $output;
                        }
                    ?>
                </tr>
                <tr>
                    <td>Afternoon</td>
                    <?php
                        for( $i = 0; $i < 7; $i++ ) {
                            $output = '<td';
                            if( (string)$i !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            if( $week_programs[$i] ) {
                                $output .= '<ul>';
                                foreach( $week_programs[$i] as $programs ) {
                                    $time = new DateTime($programs[time]);
                                    if( $time->format('a') == 'pm' && $time->format('g')  < 6 ) {
                                        $output .= '<li>';
                                        foreach( $programs as $key => $value ) {
                                            if( $key == 'time' ) {
                                                $time = new DateTime($value);
                                                $output .= "<time>{$time->format('g:i A')}</time>";
                                            } elseif( $key == 'title' ) {
                                                $output .= "<p>{$value}</p>";
                                            } elseif( $key == 'note' ) {
                                                $output .= "<small>{$value}</small>";
                                            }
                                        }
                                        $output .= '</li>';
                                    }
                                }
                                $output .= '</ul>';
                            }
                            $output .= '</ul></td>';
                            echo $output;
                        }
                    ?>
                </tr>
                <tr>
                    <td>Evening</td>
                    <?php
                        for( $i = 0; $i < 7; $i++ ) {
                            $output = '<td';
                            if( (string)$i !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            if( $week_programs[$i] ) {
                                $output .= '<ul>';
                                foreach( $week_programs[$i] as $programs ) {
                                    $time = new DateTime($programs[time]);
                                    if( $time->format('a') == 'pm' && $time->format('g')  >= 6 ) {
                                        $output .= '<li>';
                                        foreach( $programs as $key => $value ) {
                                            if( $key == 'time' ) {
                                                $time = new DateTime($value);
                                                $output .= "<time>{$time->format('g:i A')}</time>";
                                            } elseif( $key == 'title' ) {
                                                $output .= "<p>{$value}</p>";
                                            } elseif( $key == 'note' ) {
                                                $output .= "<small>{$value}</small>";
                                            }
                                        }
                                        $output .= '</li>';
                                    }
                                }
                                $output .= '</ul>';
                            }
                            $output .= '</ul></td>';
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