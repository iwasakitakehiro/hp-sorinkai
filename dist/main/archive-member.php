<?= get_header(); ?>
<main class="page__blog">
    <section>
        <div class="pt-[203px]">
            <div class="inner">
                <div class="flex items-center">
                    <span>
                        <img class="md:w-[56px] w-[28px]" src="<?= get_template_directory_uri(); ?>/img/global/key.png">
                    </span>
                    <span>
                        <h1 class="text-xl md:text-[48px] font-bold">活動ブログ</h1>
                    </span>
                </div>
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'blog', // ページの種類（例、page、post、カスタム投稿タイプ）
                    'paged' => $paged,
                    'posts_per_page' => 1, // 表示件数
                    'orderby' => 'date',
                    'order' => 'DESC',
                )); ?>
                <div class="pt-24">
                    <ul class="blog__list">
                        <?php
                        while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li class=" inline-block w-[277px] bg-white">
                                <a href="<?= the_permalink(); ?>">
                                    <div class=" h-[185px] overflow-hidden group">
                                        <?php if (get_the_post_thumbnail()) : ?>
                                            <img class="duration-700 group-hover:scale-125" loading="lazy" src="<?= the_post_thumbnail(); ?>">
                                        <?php else : ?>
                                            <img class=" duration-700 group-hover:scale-125" loading="lazy" src="<?= get_template_directory_uri(); ?>/img/global/no-image.png" alt="">
                                        <?php endif; ?>
                                    </div>
                                    <div class=" bg-white px-5 py-7">
                                        <p class=" leading-normal flex justify-between items-center">
                                            <span class="leading-none text-xs py-[10px] px-5 rounded-full bg-[#00489D] text-white">活動ブログ</span>
                                            <span class="text-[#999] text-xs font-semibold"><?= the_time('Y.m.d'); ?></span>
                                        </p>
                                        <p class="mt-4 text-sm font-semibold"><?= the_title(); ?></p>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
                <div>
                    <?php
                    if (function_exists('wp_pagenavi')) {
                        wp_pagenavi(array('query' => $the_query));
                    }
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>

</main>
<?= get_footer(); ?>