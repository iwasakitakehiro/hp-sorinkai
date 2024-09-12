<?php get_header(); ?>
<!-- ページとコンテンツを取得 -->
<?php
$paged = get_query_var('paged') ? get_query_var('paged') : 1;
$the_query = new WP_Query(array(
  'post_status' => 'publish',
  'post_type' => 'news', // ページの種類（例、page、post、カスタム投稿タイプ）
  'paged' => $paged,
  'posts_per_page' => 1, // 表示件数
  'orderby' => 'date',
  'order' => 'DESC',
)); ?>
<main>
  <main class="page__blog">
    <section>
      <div class="pt-[203px]">
        <div class="inner">
          <div class="flex items-center">
            <span>
              <img class="md:w-[56px] w-[28px]" src="<?= get_template_directory_uri(); ?>/img/top/megaphone.png">
            </span>
            <span>
              <h1 class="text-xl md:text-[48px] font-bold">お知らせ</h1>
            </span>
          </div>
          <div>
            <ul class="flex xl:flex-now gap-7">
              <?php
              while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <li class="inline-block border-b border-[#E5E5E5] w-full max-w-[1000px]">
                  <a href="<?= the_permalink(); ?>">
                    <div class="mt-7 px-5 py-7 flex items-center gap-5">
                      <p class=" leading-normal flex justify-between items-center gap-[10px]">
                        <span class="leading-none text-xs py-[10px] px-5 rounded-full bg-[#00489D] text-white">お知らせ</span>
                        <span class="text-[#999] text-xs font-semibold"><?= the_time('Y.m.d'); ?></span>
                      </p>
                      <p class="text-sm font-semibold"><?= the_title(); ?></p>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="py-24">
        <?php
        if (function_exists('wp_pagenavi')) {
          // wp_pagenavi(array('query' => $the_query));
        }
        wp_reset_postdata();
        ?>
      </div>
  </main>
  <?php get_footer(); ?>