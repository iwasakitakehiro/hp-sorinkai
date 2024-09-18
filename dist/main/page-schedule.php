<?= get_header(); ?>
<main class="page__schedule">
  <section>
    <div class="pt-[203px]">
      <div class="inner">
        <div class="flex items-center gap-5">
          <span>
            <img class="md:w-[56px] w-[28px]" src="<?= get_template_directory_uri(); ?>/img/global/culender.png">
          </span>
          <span>
            <h1 class="text-xl md:text-[48px] font-bold">スケジュール</h1>
          </span>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="pt-24">
      <div class="inner">
        <?= do_shortcode("[eo_fullcalendar]"); ?>
      </div>
    </div>
  </section>
</main>
<?php wp_footer(); ?>
<?= get_footer(); ?>