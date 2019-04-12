<?php
    the_title();
    the_content();
    if ( have_rows('item') ) :
?>
<section class="schedule-module">
    <?php while ( have_rows('item') ) : ?>          
                <?php

                ?>
<?php endwhile; ?>
</section>
<?php endif; ?>