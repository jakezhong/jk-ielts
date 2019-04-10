<?php
    if ( have_rows('flexible_content') ) :
        while ( have_rows('flexible_content') ) : the_row();
            if ( get_row_layout() == 'missions' ) :
                
            elseif ( get_row_layout() == 'plans') :

            elseif ( get_row_layout() == 'schedules' ) :

            endif;
        endwhile;
    endif;
?>