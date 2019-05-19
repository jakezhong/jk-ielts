<?php
    $post_object = get_sub_field('schedule');
    if( $post_object ) :
        $post = $post_object;
        setup_postdata( $post );
        $today = date('w');
        // Define days in a week, from M - S
        $week_title = array(
            'Monday'    =>  '0',
            'Tuesday'   =>  '1',
            'Wednesday' =>  '2',
            'Thursday'  =>  '3',
            'Friday'    =>  '4',
            'Saturday'  =>  '5',
            'Sunday'    =>  '6',
        );
        // Programs in one day of a week, from M - S
        $week_programs = array(
            '0'     =>  array(),
            '1'     =>  array(),
            '2'     =>  array(),
            '3'     =>  array(),
            '4'     =>  array(),
            '5'     =>  array(),
            '6'     =>  array(),
        );
        // Save programs into each day of a week according to their frequence, from M - S
        if( have_rows('programs') ) {
            while( have_rows('programs') ) {
                the_row();
                $program_days = get_sub_field('day');
                foreach( $program_days as $day ) {
                    $program = get_sub_field('program');
                    // print_r($program);
                    $title = $program->post_title;
                    array_push($week_programs[((int)$day)-1], array(
                        'time'      =>  get_sub_field('time', false, false),
                        'title'     =>  $title,
                        'note'      =>  get_sub_field('note'),
                        'link'      =>  $program->guid,
                    ));
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
                        // Loop table week title from M - S
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
                        foreach( $week_programs as $index => $day_programs ) :
                            $output = '<td';
                            if( $index !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            if( $day_programs ) {
                                $output .= '<ul>';
                                foreach( $day_programs as $programs ) {
                                    $time = new DateTime($programs[time]);
                                    if( $time->format('a') == 'am' ) {
                                        foreach( $programs as $key => $value ) {
                                            if( $key == 'time' ) {
                                                $time = new DateTime($value);
                                            } elseif( $key == 'title' ) {
                                                $title = $value;
                                            } elseif( $key == 'note' ) {
                                                $note = $value;
                                            } elseif( $key == 'link' ) {
                                                $link = $value;
                                            }
                                        }
                                        $output .= '<li>';
                                        if( $time ) {
                                            $output .= "<time>{$time->format('g:i A')}</time>";
                                        }
                                        if( $title && $link ) {
                                            $output .= "<p><a href='{$link}'>{$title}</a></p>";
                                        } elseif( $title ) {
                                            $output .= "<p>{$title}</p>";
                                        }
                                        if( $note ) {
                                            $output .= "<small>{$note}</small>";
                                        }
                                        $output .= '</li>';
                                    }
                                }
                                $output .= '</ul>';
                            }
                            $output .= '</ul></td>';
                            echo $output;
                        endforeach;
                    ?>
                </tr>
                <tr>
                    <td>Afternoon</td>
                    <?php
                        foreach( $week_programs as $index => $day_programs ) :
                            $output = '<td';
                            if( $index !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            if( $day_programs ) {
                                $output .= '<ul>';
                                foreach( $day_programs as $programs ) {
                                    $time = new DateTime($programs[time]);
                                    if( $time->format('a') == 'pm' && $time->format('g')  < 6 ) {
                                        foreach( $programs as $key => $value ) {
                                            if( $key == 'time' ) {
                                                $time = new DateTime($value);
                                            } elseif( $key == 'title' ) {
                                                $title = $value;
                                            } elseif( $key == 'note' ) {
                                                $note = $value;
                                            } elseif( $key == 'link' ) {
                                                $link = $value;
                                            }
                                        }
                                        $output .= '<li>';
                                        if( $time ) {
                                            $output .= "<time>{$time->format('g:i A')}</time>";
                                        }
                                        if( $title && $link ) {
                                            $output .= "<p><a href='{$link}'>{$title}</a></p>";
                                        } elseif( $title ) {
                                            $output .= "<p>{$title}</p>";
                                        }
                                        if( $note ) {
                                            $output .= "<small>{$note}</small>";
                                        }
                                        $output .= '</li>';
                                    }
                                }
                                $output .= '</ul>';
                            }
                            $output .= '</ul></td>';
                            echo $output;
                        endforeach;
                    ?>
                </tr>
                <tr>
                    <td>Evening</td>
                    <?php
                        foreach( $week_programs as $index => $day_programs ) :
                            $output = '<td';
                            if( $index !== $today ) {
                                $output .= ' v-show="!todayTrigger"';
                            }
                            $output .= '>';
                            if( $day_programs ) {
                                $output .= '<ul>';
                                foreach( $day_programs as $programs ) {
                                    $time = new DateTime($programs[time]);
                                    if( $time->format('a') == 'pm' && $time->format('g')  >= 6 ) {
                                        foreach( $programs as $key => $value ) {
                                            if( $key == 'time' ) {
                                                $time = new DateTime($value);
                                            } elseif( $key == 'title' ) {
                                                $title = $value;
                                            } elseif( $key == 'note' ) {
                                                $note = $value;
                                            } elseif( $key == 'link' ) {
                                                $link = $value;
                                            }
                                        }
                                        $output .= '<li>';
                                        if( $time ) {
                                            $output .= "<time>{$time->format('g:i A')}</time>";
                                        }
                                        if( $title && $link ) {
                                            $output .= "<p><a href='{$link}'>{$title}</a></p>";
                                        } elseif( $title ) {
                                            $output .= "<p>{$title}</p>";
                                        }
                                        if( $note ) {
                                            $output .= "<small>{$note}</small>";
                                        }
                                        $output .= '</li>';
                                    }
                                }
                                $output .= '</ul>';
                            }
                            $output .= '</ul></td>';
                            echo $output;
                        endforeach;
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