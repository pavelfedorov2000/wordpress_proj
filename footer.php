<footer class="footer">
       <div class="container">
            <a class="phone phone--footer" href="tel:<?php the_field('phone') ?>">
                <?php the_field('phone') ?>
            </a>
            <a href="mailto:<?php the_field('email') ?>" class="footer__email">
                <?php the_field('email') ?>
            </a>
       </div>
    </footer>

    <?php wp_footer(); ?>

</body>
</html>