<div class="separator"></div>

<div class="bg_dark bg_bottom">
    <!-- Contact -->
    <section class="container contact">
        <div class="grid-16">
            <h2 id="contact">
                Deixe-me saber se você deseja falar sobre uma potencial colaboração.
                Estou disponível para trabalhos freelance.
            </h2>
            <a href="https://www.linkedin.com/in/rodrigo-viegas-rodrigues-83315164/" target="_blank">
                <h3>Clique aqui e vamos crescer juntos</h3>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="container footer">
        <div class="line_separator grid-16"></div>
        <div class="network grid-8">
            <ul>
                <?php if (have_rows('social_network_list')) : while (have_rows('social_network_list')) : the_row(); ?>
                        <li>
                            <a href="<?php the_sub_field('link_social_network_list'); ?>" target="_blank">
                                <img src="<?php the_sub_field('icon_social_network_list') ?>" alt="<?php the_sub_field('name_social_network_list') ?>" title="<?php the_sub_field('name_social_network_list') ?>" />
                            </a>
                        </li>
                <?php endwhile;
                else : endif; ?>
            </ul>
        </div>
        <div class="email grid-8">
            <div class="email_text">
                <a href="mailto:<?php the_field('email'); ?>">
                    <p><?php the_field('email'); ?></p>
                </a>
            </div>
        </div>
    </footer>
</div>

<div class="copyright">
    <p><?php echo date('Y'); ?> &copy; ShinodaLabs. Todos direitos reservados.</p>
</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/simple-anime.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>
</body>

</html>