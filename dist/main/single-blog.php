<?= get_header(); ?>
<main class="page__blog">
    <section>
        <div class="pt-[203px]">
            <div class="inner">
                <div class="flex items-center">
                    <span>
                        <img class="md:w-[56px] w-[28px]" src="<?= get_template_directory_uri(); ?>/img/top/karate.png">
                    </span>
                    <span>
                        <h1 class="text-xl md:text-[48px] font-bold">活動ブログ</h1>
                    </span>
                </div>
                <div class="pt-24">
                    <div class="border-b border-[#E5E5E5]">
                        <p class=" leading-normal flex justify-between items-center">
                            <span class="leading-none text-xs py-[10px] px-5 rounded-full bg-[#00489D] text-white">活動ブログ</span>
                            <span class="text-[#999] text-xs font-semibold"><?= the_time('Y.m.d'); ?></span>
                        </p>
                        <h2 class="text-2base font-semibold pt-5 pb-7">
                            <?= the_title() ?>
                        </h2>
                    </div>
                    <div>
                        <div class="blog__image"></div>
                        <div class="blog__table">

                        </div>
                    </div>
                    <div class="mt-[100px]">
                        <a class="link-button mx-auto" href="<?= get_template_directory_uri(); ?>/blog">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                    <path d="M8.5 16C12.9183 16 16.5 12.4183 16.5 8C16.5 3.58166 12.9183 0 8.5 0C4.08166 0 0.5 3.58166 0.5 8C0.5 12.4183 4.08166 16 8.5 16ZM4.49094 7.89388L8.30319 4.26688C8.67162 3.91606 9.25428 3.93041 9.60484 4.29912C9.95541 4.66756 9.94078 5.25075 9.57259 5.60078L8.01866 7.07909L11.6998 7.07909C12.2087 7.07909 12.6207 7.49116 12.6207 7.99997C12.6207 8.50878 12.2086 8.92059 11.6998 8.92059H8.01863L9.57256 10.3992C9.94075 10.7489 9.95538 11.3324 9.60481 11.7005C9.25425 12.0692 8.67159 12.0839 8.30316 11.7328L4.49094 8.10609C4.46194 8.07838 4.44556 8.04006 4.44556 8C4.44556 7.95994 4.46194 7.92163 4.49094 7.89388Z" fill="#00489D" />
                                </svg>
                            </span>
                            <span>一覧にもどる</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?= get_footer(); ?>