<?php
    if ( have_rows('flexible_content') ) :
        while ( have_rows('flexible_content') ) : the_row();
            if ( get_row_layout() == 'schedules' ) :
                get_template_part('flex/flex', 'schedules');
            elseif ( get_row_layout() == 'missions') :
                get_template_part('flex/flex', 'missions');
            elseif ( get_row_layout() == 'plans' ) :
                get_template_part('flex/flex', 'plans');
                elseif ( get_row_layout() == 'daily_missions' ) :
                    get_template_part('flex/flex', 'daily-missions');
            elseif ( get_row_layout() == 'divider' ) :
                get_template_part('flex/flex', 'divider');
            endif;
        endwhile;
    endif;
?>