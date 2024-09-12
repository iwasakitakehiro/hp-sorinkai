<section>
    <div class="mt-12 contact-bg pt-[210px] pb-[100px]">
        <div class="inner">
            <div class="contact p-12">
                <div class="text-white">
                    <div class="text-center">
                        <p class="text-2xl md:text-[48px] font-semibold">
                            無料体験・見学随時募集
                        </p>
                    </div>
                    <div class="text-center md:my-[50px] py-5">
                        <p class="text-white leading-loose md:text-base text-sm">
                            道場での稽古を体験、見学してみませんか？<br>
                            お気軽にお問い合わせください。
                        </p>
                    </div>
                    <div>
                        <a class="link-button mx-auto" href="<?= get_template_directory_uri(); ?>/contact">
                            <span>お問い合わせはこちら</span>
                            <span>
                                <svg class="w-[17px] h-[16px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 16" fill="none">
                                    <path d="M8.5 0C4.08169 0 0.5 3.58166 0.5 8C0.5 12.4183 4.08169 16 8.5 16C12.9183 16 16.5 12.4183 16.5 8C16.5 3.58166 12.9183 0 8.5 0ZM12.5091 8.10612L8.69681 11.7331C8.32838 12.0839 7.74572 12.0696 7.39516 11.7009C7.04459 11.3324 7.05922 10.7492 7.42741 10.3992L8.98134 8.92091H5.30016C4.79134 8.92091 4.37931 8.50884 4.37931 8.00003C4.37931 7.49122 4.79137 7.07941 5.30016 7.07941H8.98137L7.42744 5.60084C7.05925 5.25106 7.04462 4.66762 7.39519 4.29947C7.74575 3.93078 8.32841 3.91612 8.69684 4.26722L12.5091 7.89391C12.5381 7.92162 12.5544 7.95994 12.5544 8C12.5544 8.04006 12.5381 8.07837 12.5091 8.10612Z" fill="#00489D" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="flex justify-center flex-wrap gap-5 md:gap-20 py-12">
        <div>
            <img src="<?= get_template_directory_uri(); ?>/img/global/instagram.png" alt="蒼凛会インスタグラム">
        </div>
        <div>
            <img src="<?= get_template_directory_uri(); ?>/img/global/youtube.png" alt="蒼凛会youtube">
        </div>
    </div>
</section>
<footer class="py-20 md:py-28 bg-[#00489D]">
    <div class="inner">
        <div class="xl:flex gap-24">
            <div>
                <img class="w-[180px] md:w-[246px] mx-auto" src="<?= get_template_directory_uri(); ?>/img/global/footer-logo.png" alt="剛柔流空手道　蒼凛会ロゴ">
            </div>
            <div>
                <ul class="xl:flex gap-[30px] justify-center text-sm text-white hidden">
                    <li>
                        <a href="<?= get_home_url(); ?>/">トップ</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url(); ?>/about">蒼凜会とは</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url(); ?>/schedule">スケジュール</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url(); ?>/blog">活動ブログ</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url(); ?>/news">お知らせ</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url(); ?>/news">会員専用ページ</a>
                    </li>
                    <li>
                        <a href="<?= get_home_url(); ?>/news">お問い合せ</a>
                    </li>
                </ul>
                <div class="week">
                    <div class="week__day">
                        <div class="week__on">
                            <p>日曜日</p>
                        </div>
                        <div class="week__at">
                            <p>稽古場所：染井野小学校</p>
                            <p>練習時間：17:00 ～ 20:00</p>
                        </div>
                    </div>
                    <div class="week__day">
                        <div class="week__on">
                            <p>火曜日</p>
                        </div>
                        <div class="week__at">
                            <p>稽古場所：染井野小学校</p>
                            <p>練習時間：19:00 ～ 21:00</p>
                        </div>
                    </div>
                    <div class="week__day">
                        <div class="week__on">
                            <p>水曜日</p>
                        </div>
                        <div class="week__at">
                            <p>稽古場所：染井野小学校、根郷小学校</p>
                            <p>練習時間：17:00 ～ 20:00</p>
                        </div>
                        <div class="text-center mt-6">
                            <p class="text-xs text-white">※ 水曜日の稽古場所はお好きな方にお越しください</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<div>
    <p class="text-[#003A7E] py-[20px] text-center font-semibold leading-none md:text-base text-sm">
        Ⓒ 2024 sourinkai-karate.com
    </p>
</div>
</body>
<script src="<?php echo get_template_directory_uri() ?>/js/bundle.js"></script>

</html>