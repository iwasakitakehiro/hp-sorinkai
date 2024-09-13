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
            <h1 class="text-xl md:text-[48px] font-bold">会員専用ページ</h1>
          </span>
        </div>
        <div class="pt-24">
          <div class="inner">
            <div class="member__image">
              <?php if (have_rows('images_member')) : ?>
                <?php while (have_rows('images_member')): the_row(); ?>
                  <img src="<?= the_sub_field('image_member'); ?>">
                <?php endwhile; ?>
              <?php endif ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>
<?= get_footer(); ?>