<?php
    $post_object = get_sub_field('schedule');
    if( $post_object ):
        $post = $post_object;
        setup_postdata( $post );
        $morning = get_field('morning');
        $afternoon = get_field('afternoon');
        $evening = get_field('evening');
?>
<section class="schedule-module">
    <div class="wrap">
        <div class="header">
            <?php the_content(); ?>
        </div>
        <div class="main-sheet">
            <table>
                <tr>
                    <th>Time</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                </tr>
                <?php
                    if( $morning ) :
                ?>
                <tr>
                    <td class="morning">Morning</td>
                    <?php
                        $monday = $morning['monday'];
                        $tuesday = $morning['tuesday'];
                        $wednesday = $morning['wednesday'];
                        $thursday = $morning['thursday'];
                        $friday = $morning['friday'];
                        $saturday = $morning['saturday'];
                        $sunday = $morning['sunday'];
                        $index = 0;
                        foreach( $morning as $day ) :
                            if( $index == 0 ) :
                                $items = $monday['items'];
                            elseif( $index == 1 ) :
                                $items = $tuesday['items'];
                            elseif( $index == 2 ) :
                                $items = $wednesday['items'];
                            elseif( $index == 3 ) :
                                $items = $thursday['items'];
                            elseif( $index == 4 ) :
                                $items = $friday['items'];
                            elseif( $index == 5 ) :
                                $items = $saturday['items'];
                            elseif( $index == 6 ) :
                                $items = $sunday['items'];
                            endif;
                    ?>
                    <td>
                        <?php
                            if( $items ):
                        ?>
                        <ul>
                            <?php
                                foreach( $items as $item ) :
                                    $time = $item['time'];
                                    $post_object = $item['item'];
                                    if( $post_object ):
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $name = get_the_title();
                                        $note = get_field('note');
                                        wp_reset_postdata();
                                    endif;
                                    $item = '<li>';
                                    $item .= '<time>'.$time.'</time>';
                                    $item .= '<p>'.$name.'</p>';
                                    $item .= '<small>'.$note.'</small>';
                                    echo $item;
                                endforeach;
                            ?>
                        </ul>
                <?php
                            endif;
                            $index ++;
                        endforeach;
                ?>
                    </td>
                </tr>
                <?php
                    endif;
                    if( $afternoon ) :
                ?>
                <tr>
                    <td class="afternoon">Afternoon</td>
                <?php
                        $monday = $afternoon['monday'];
                        $tuesday = $afternoon['tuesday'];
                        $wednesday = $afternoon['wednesday'];
                        $thursday = $afternoon['thursday'];
                        $friday = $afternoon['friday'];
                        $saturday = $afternoon['saturday'];
                        $sunday = $afternoon['sunday'];
                        $index = 0;
                        foreach( $afternoon as $day ) :
                            if( $index == 0 ) :
                                $items = $monday['items'];
                            elseif( $index == 1 ) :
                                $items = $tuesday['items'];
                            elseif( $index == 2 ) :
                                $items = $wednesday['items'];
                            elseif( $index == 3 ) :
                                $items = $thursday['items'];
                            elseif( $index == 4 ) :
                                $items = $friday['items'];
                            elseif( $index == 5 ) :
                                $items = $saturday['items'];
                            elseif( $index == 6 ) :
                                $items = $sunday['items'];
                            endif;
                ?>
                    <td>
                        <?php
                            if( $items ):
                        ?>
                        <ul>
                            <?php
                                foreach( $items as $item ) :
                                    $time = $item['time'];
                                    $post_object = $item['item'];
                                    if( $post_object ):
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $name = get_the_title();
                                        $note = get_field('note');
                                        wp_reset_postdata();
                                    endif;
                                    $item = '<li>';
                                    $item .= '<time>'.$time.'</time>';
                                    $item .= '<p>'.$name.'</p>';
                                    $item .= '<small>'.$note.'</small>';
                                    echo $item;
                                endforeach;
                            ?>
                        </ul>
                <?php
                            endif;
                            $index ++;
                        endforeach;
                ?>
                    </td>
                </tr>
                <?php
                    endif;
                    if( $evening ) :
                ?>
                <tr>
                    <td class="evening">Evening</td>
                <?php
                        $monday = $evening['monday'];
                        $tuesday = $evening['tuesday'];
                        $wednesday = $evening['wednesday'];
                        $thursday = $evening['thursday'];
                        $friday = $evening['friday'];
                        $saturday = $evening['saturday'];
                        $sunday = $evening['sunday'];
                        $index = 0;
                        foreach( $evening as $day ) :
                            if( $index == 0 ) :
                                $items = $monday['items'];
                            elseif( $index == 1 ) :
                                $items = $tuesday['items'];
                            elseif( $index == 2 ) :
                                $items = $wednesday['items'];
                            elseif( $index == 3 ) :
                                $items = $thursday['items'];
                            elseif( $index == 4 ) :
                                $items = $friday['items'];
                            elseif( $index == 5 ) :
                                $items = $saturday['items'];
                            elseif( $index == 6 ) :
                                $items = $sunday['items'];
                            endif;
                ?>
                    <td>
                        <?php
                            if( $items ):
                        ?>
                        <ul>
                            <?php
                                foreach( $items as $item ) :
                                    $time = $item['time'];
                                    $post_object = $item['item'];
                                    if( $post_object ):
                                        $post = $post_object;
                                        setup_postdata( $post );
                                        $name = get_the_title();
                                        $note = get_field('note');
                                        wp_reset_postdata();
                                    endif;
                                    $item = '<li>';
                                    $item .= '<time>'.$time.'</time>';
                                    $item .= '<p>'.$name.'</p>';
                                    $item .= '<small>'.$note.'</small>';
                                    echo $item;
                                endforeach;
                            ?>
                        </ul>
                <?php
                            endif;
                            $index ++;
                        endforeach;
                ?>
                    </td>
                </tr>
                <?php
                    endif;
                ?>
            </table>
        </div>
    </div>
</section>
<?php
        wp_reset_postdata();
    endif;
?>