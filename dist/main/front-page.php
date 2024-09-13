<?php get_header(); ?>
<main>
    <section class="mt-[70px] xl:mt-[90px]">
        <div class="relative md:h-auto h-[310px] overflow-hidden">
            <div class="slider">
                <div class="slide">
                    <img src="<?= get_template_directory_uri(); ?>/img/top/mv01.png" alt="メインビジュアル1">
                </div>
                <div class="slide">
                    <img src="<?= get_template_directory_uri(); ?>/img/top/mv02.png" alt="メインビジュアル2">
                </div>
                <div class="slide">
                    <img src="<?= get_template_directory_uri(); ?>/img/top/mv03.png" alt="メインビジュアル3">
                </div>
            </div>
            <div>
                <h1>
                    <img class="w-[262px] md:w-[45.5rem] absolute m-auto top-0 bottom-0 left-0 right-0 md:right-auto md:left-[9.375rem]" src="<?= get_template_directory_uri(); ?>/img/top/mv-text.png" alt="礼節、勇気、自信をはぐくむ">
                </h1>
            </div>
        </div>
    </section>
    <section>
        <div class="mt-[60px] md:mt-28 pb-20">
            <div class="inner">
                <div class="flex justify-between items-center">
                    <div class="flex items-center">
                        <span>
                            <img class="md:w-[42px] w-[28px]" src="<?= get_template_directory_uri(); ?>/img/top/karate.png">
                        </span>
                        <span>
                            <p class="text-xl md:text-2base font-bold">活動ブログ</p>
                        </span>
                    </div>
                    <div>
                        <a class="flex gap-[8px]" href="<?= get_home_url(); ?>/blog">
                            <span class="md:text-base text-[10px] font-semibold">活動ブログをもっと見る</span>
                            <span class="flex items-center">
                                <svg class="w-[16px] h-[16px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 0C3.58169 0 0 3.58166 0 8C0 12.4183 3.58169 16 8 16C12.4183 16 16 12.4183 16 8C16 3.58166 12.4183 0 8 0ZM12.0091 8.10612L8.19681 11.7331C7.82838 12.0839 7.24572 12.0696 6.89516 11.7009C6.54459 11.3324 6.55922 10.7492 6.92741 10.3992L8.48134 8.92091H4.80016C4.29134 8.92091 3.87931 8.50884 3.87931 8.00003C3.87931 7.49122 4.29137 7.07941 4.80016 7.07941H8.48137L6.92744 5.60084C6.55925 5.25106 6.54462 4.66762 6.89519 4.29947C7.24575 3.93078 7.82841 3.91612 8.19684 4.26722L12.0091 7.89391C12.0381 7.92162 12.0544 7.95994 12.0544 8C12.0544 8.04006 12.0381 8.07837 12.0091 8.10612Z" fill="#00489D" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="mt-14">
                    <ul class="flex xl:flex-now gap-7 slider-blog">
                        <?php
                        $posts = get_posts("post_type=blog&posts_per_page=4");
                        if ($posts) : ?>
                            <?php
                            foreach ($posts as $post) {
                                setup_postdata($post);
                                $terms = get_the_terms($post->ID, 'blog_category');
                            ?>
                                <li class="inline-block w-[277px]">
                                    <a href="<?= the_permalink(); ?>">
                                        <div class="h-[185px] overflow-hidden group">
                                            <?php if (get_the_post_thumbnail()) : ?>
                                                <img class="duration-700 group-hover:scale-125" loading="lazy" src="<?= the_post_thumbnail_url(); ?>">
                                            <?php else : ?>
                                                <img class=" duration-700 group-hover:scale-125" loading="lazy" src="<?= get_template_directory_uri(); ?>/img/global/no-image.png" alt="">
                                            <?php endif; ?>
                                        </div>
                                        <div class="bg-white px-5 py-7">
                                            <p class="leading-normal flex justify-between items-center">
                                                <span class="leading-none text-xs py-[10px] px-5 rounded-full bg-[#00489D] text-white">活動ブログ</span>
                                                <span class="text-[#999] text-xs font-semibold"><?= the_time('Y.m.d'); ?></span>
                                            </p>
                                            <p class="mt-4 text-sm font-semibold"><?= the_title(); ?></p>
                                        </div>
                                    </a>
                                </li>
                            <?php
                            }
                            wp_reset_postdata();
                            ?>
                        <?php else : ?>
                            <div class="news__empty">
                                <p>ブログはまだありません</p>
                            </div>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-24 about-bg">
            <div class="inner">
                <div>
                    <img class="md:w-[346px] mx-auto" src="<?= get_template_directory_uri(); ?>/img/top/about-logo.png" alt="剛柔流空手道　蒼凛会">
                </div>
                <div class="my-12 md:my-20">
                    <p class="text-sm md:text-base2 text-center font-semibold leading-loose">
                        千葉県佐倉市に根ざす蒼凜会は、<br class="md:hidden block">剛柔流空手道の技術と心得を伝える道場です。<br>
                        当道場では、礼儀正しさと集中力を育み、勇気と自信に満ちた若き空手家を支援します。
                    </p>
                </div>
                <div>
                    <a class="link-button mx-auto" href="<?= get_template_directory_uri(); ?>/about">
                        <span>詳しくはこちら</span>
                        <span>
                            <svg class="w-[17px] h-[16px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 16" fill="none">
                                <path d="M8.5 0C4.08169 0 0.5 3.58166 0.5 8C0.5 12.4183 4.08169 16 8.5 16C12.9183 16 16.5 12.4183 16.5 8C16.5 3.58166 12.9183 0 8.5 0ZM12.5091 8.10612L8.69681 11.7331C8.32838 12.0839 7.74572 12.0696 7.39516 11.7009C7.04459 11.3324 7.05922 10.7492 7.42741 10.3992L8.98134 8.92091H5.30016C4.79134 8.92091 4.37931 8.50884 4.37931 8.00003C4.37931 7.49122 4.79137 7.07941 5.30016 7.07941H8.98137L7.42744 5.60084C7.05925 5.25106 7.04462 4.66762 7.39519 4.29947C7.74575 3.93078 8.32841 3.91612 8.69684 4.26722L12.5091 7.89391C12.5381 7.92162 12.5544 7.95994 12.5544 8C12.5544 8.04006 12.5381 8.07837 12.5091 8.10612Z" fill="#00489D" />
                            </svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="parallax">

        </div>
    </section>
    <div class="tracking-area">
        <section>
            <div class="qa pt-24 pb-[140px] tb:pb-[19.4375rem] mb-20">
                <div class="inner">
                    <div class="tracking__girl">
                        <img src="<?= get_template_directory_uri(); ?>/img/top/girl.png">
                    </div>
                    <div class="tracking__man">
                        <img src=" <?= get_template_directory_uri(); ?>/img/top/man.png">
                    </div>
                    <div class="flex items-center">
                        <span>
                            <img class="md:w-[35px] w-[23px]" src="<?= get_template_directory_uri(); ?>/img/top/question.png">
                        </span>
                        <span>
                            <p class="text-2xl md:text-2base font-bold">よくあるご質問</p>
                        </span>
                    </div>
                    <div class="mt-[3.75rem]">
                        <ul>
                            <li class="question-wrap">
                                <div class="question">
                                    <p class="flex gap-5 items-center">
                                        <span>
                                            <svg class="w-[37px] h-[33px]" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M26.648 26.1567L29.24 29.2527C27.584 31.2687 25.208 32.3487 22.436 32.3487C18.692 32.3487 16.064 30.9807 12.176 26.8767C5.264 26.0127 0.404 20.7927 0.404 13.9527C0.404 6.46473 6.236 0.920734 14.192 0.920734C22.112 0.920734 27.98 6.42873 27.98 13.9527C27.98 19.8567 24.344 24.5367 18.98 26.2647C20.204 27.5607 21.284 28.0287 22.544 28.0287C24.092 28.0287 25.46 27.4167 26.648 26.1567ZM6.308 13.9527C6.308 18.7407 9.692 22.0167 14.192 22.0167C18.692 22.0167 22.076 18.7407 22.076 13.9527C22.076 9.16473 18.692 5.88873 14.192 5.88873C9.692 5.88873 6.308 9.16473 6.308 13.9527ZM33.3879 26.8407C31.4439 26.8407 29.8959 25.3647 29.8959 23.3127C29.8959 21.2247 31.4439 19.8567 33.3879 19.8567C35.3319 19.8567 36.8799 21.2247 36.8799 23.3127C36.8799 25.3647 35.3319 26.8407 33.3879 26.8407Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                        <span>
                                            空手教室はどの年齢から参加できますか？
                                        </span>
                                    </p>
                                    <p>
                                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
                                            <path d="M1.68652 24.1802L13.0002 12.8665L1.68652 1.55276" stroke="#E5E5E5" stroke-width="2" />
                                        </svg>
                                    </p>
                                </div>
                                <div class="answer">
                                    <span class="border-t border-[#E5E5E5] h-[1px] w-full absolute top-0 m-auto left-0 right-0"></span>
                                    <p class="flex gap-5 items-center">
                                        <span>
                                            <svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.816 26.0001L20.584 20.6001H8.884L6.652 26.0001H0.676L11.908 0.800105H17.668L28.936 26.0001H22.816ZM10.756 16.1721H18.748L14.752 6.52411L10.756 16.1721ZM34.4387 26.2881C32.4947 26.2881 30.9467 24.8121 30.9467 22.7601C30.9467 20.6721 32.4947 19.3041 34.4387 19.3041C36.3827 19.3041 37.9307 20.6721 37.9307 22.7601C37.9307 24.8121 36.3827 26.2881 34.4387 26.2881Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                        <span>
                                            当道場は3歳から受け入れております。 一人ひとりが無理なく学べるよう配慮しております。初歩から段階を追って指導することで、
                                            子供たちの基本的な運動能力とともに空手の基礎をしっかりと身に付けていただけます。
                                        </span>
                                    </p>
                                </div>
                            </li>
                            <li class="question-wrap">
                                <div class="question">
                                    <p class="flex gap-5 items-center">
                                        <span>
                                            <svg class="w-[37px] h-[33px]" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M26.648 26.1567L29.24 29.2527C27.584 31.2687 25.208 32.3487 22.436 32.3487C18.692 32.3487 16.064 30.9807 12.176 26.8767C5.264 26.0127 0.404 20.7927 0.404 13.9527C0.404 6.46473 6.236 0.920734 14.192 0.920734C22.112 0.920734 27.98 6.42873 27.98 13.9527C27.98 19.8567 24.344 24.5367 18.98 26.2647C20.204 27.5607 21.284 28.0287 22.544 28.0287C24.092 28.0287 25.46 27.4167 26.648 26.1567ZM6.308 13.9527C6.308 18.7407 9.692 22.0167 14.192 22.0167C18.692 22.0167 22.076 18.7407 22.076 13.9527C22.076 9.16473 18.692 5.88873 14.192 5.88873C9.692 5.88873 6.308 9.16473 6.308 13.9527ZM33.3879 26.8407C31.4439 26.8407 29.8959 25.3647 29.8959 23.3127C29.8959 21.2247 31.4439 19.8567 33.3879 19.8567C35.3319 19.8567 36.8799 21.2247 36.8799 23.3127C36.8799 25.3647 35.3319 26.8407 33.3879 26.8407Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                        <span>
                                            レッスンスケジュールはどのようになっていますか？
                                        </span>
                                    </p>
                                    <p>
                                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
                                            <path d="M1.68652 24.1802L13.0002 12.8665L1.68652 1.55276" stroke="#E5E5E5" stroke-width="2" />
                                        </svg>
                                    </p>
                                </div>
                                <div class="answer">
                                    <span class="border-t border-[#E5E5E5] h-[1px] w-full absolute top-0 m-auto left-0 right-0"></span>
                                    <p class="flex gap-5 items-center">
                                        <span>
                                            <svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.816 26.0001L20.584 20.6001H8.884L6.652 26.0001H0.676L11.908 0.800105H17.668L28.936 26.0001H22.816ZM10.756 16.1721H18.748L14.752 6.52411L10.756 16.1721ZM34.4387 26.2881C32.4947 26.2881 30.9467 24.8121 30.9467 22.7601C30.9467 20.6721 32.4947 19.3041 34.4387 19.3041C36.3827 19.3041 37.9307 20.6721 37.9307 22.7601C37.9307 24.8121 36.3827 26.2881 34.4387 26.2881Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                        <span>
                                            レッスンは週に数回、年齢と経験に応じたクラス分けを行っています。詳しいスケジュールはウェブサイトでご確認ください。
                                        </span>
                                    </p>
                                </div>
                            </li>
                            <li class="question-wrap">
                                <div class="question">
                                    <p class="flex gap-5 items-center">
                                        <span>
                                            <svg class="w-[37px] h-[33px]" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M26.648 26.1567L29.24 29.2527C27.584 31.2687 25.208 32.3487 22.436 32.3487C18.692 32.3487 16.064 30.9807 12.176 26.8767C5.264 26.0127 0.404 20.7927 0.404 13.9527C0.404 6.46473 6.236 0.920734 14.192 0.920734C22.112 0.920734 27.98 6.42873 27.98 13.9527C27.98 19.8567 24.344 24.5367 18.98 26.2647C20.204 27.5607 21.284 28.0287 22.544 28.0287C24.092 28.0287 25.46 27.4167 26.648 26.1567ZM6.308 13.9527C6.308 18.7407 9.692 22.0167 14.192 22.0167C18.692 22.0167 22.076 18.7407 22.076 13.9527C22.076 9.16473 18.692 5.88873 14.192 5.88873C9.692 5.88873 6.308 9.16473 6.308 13.9527ZM33.3879 26.8407C31.4439 26.8407 29.8959 25.3647 29.8959 23.3127C29.8959 21.2247 31.4439 19.8567 33.3879 19.8567C35.3319 19.8567 36.8799 21.2247 36.8799 23.3127C36.8799 25.3647 35.3319 26.8407 33.3879 26.8407Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                        <span>
                                            道場での服装はどのようにすれば良いですか？
                                        </span>
                                    </p>
                                    <p>
                                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
                                            <path d="M1.68652 24.1802L13.0002 12.8665L1.68652 1.55276" stroke="#E5E5E5" stroke-width="2" />
                                        </svg>
                                    </p>
                                </div>
                                <div class="answer">
                                    <span class="border-t border-[#E5E5E5] h-[1px] w-full absolute top-0 m-auto left-0 right-0"></span>
                                    <p class="flex gap-5 items-center">
                                        <span>
                                            <svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.816 26.0001L20.584 20.6001H8.884L6.652 26.0001H0.676L11.908 0.800105H17.668L28.936 26.0001H22.816ZM10.756 16.1721H18.748L14.752 6.52411L10.756 16.1721ZM34.4387 26.2881C32.4947 26.2881 30.9467 24.8121 30.9467 22.7601C30.9467 20.6721 32.4947 19.3041 34.4387 19.3041C36.3827 19.3041 37.9307 20.6721 37.9307 22.7601C37.9307 24.8121 36.3827 26.2881 34.4387 26.2881Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                        <span>
                                            初回は動きやすい服装で構いませんが、入会後は指定の空手着を着用していただきます。
                                        </span>
                                    </p>
                                </div>
                            </li>
                            <li class="question-wrap">
                                <div class="question">
                                    <p class="flex gap-5 items-center">
                                        <span>
                                            <svg class="w-[37px] h-[33px]" viewBox="0 0 37 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M26.648 26.1567L29.24 29.2527C27.584 31.2687 25.208 32.3487 22.436 32.3487C18.692 32.3487 16.064 30.9807 12.176 26.8767C5.264 26.0127 0.404 20.7927 0.404 13.9527C0.404 6.46473 6.236 0.920734 14.192 0.920734C22.112 0.920734 27.98 6.42873 27.98 13.9527C27.98 19.8567 24.344 24.5367 18.98 26.2647C20.204 27.5607 21.284 28.0287 22.544 28.0287C24.092 28.0287 25.46 27.4167 26.648 26.1567ZM6.308 13.9527C6.308 18.7407 9.692 22.0167 14.192 22.0167C18.692 22.0167 22.076 18.7407 22.076 13.9527C22.076 9.16473 18.692 5.88873 14.192 5.88873C9.692 5.88873 6.308 9.16473 6.308 13.9527ZM33.3879 26.8407C31.4439 26.8407 29.8959 25.3647 29.8959 23.3127C29.8959 21.2247 31.4439 19.8567 33.3879 19.8567C35.3319 19.8567 36.8799 21.2247 36.8799 23.3127C36.8799 25.3647 35.3319 26.8407 33.3879 26.8407Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                        <span>
                                            大会への参加は必須ですか？
                                        </span>
                                    </p>
                                    <p>
                                        <svg class="arrow" xmlns="http://www.w3.org/2000/svg" width="15" height="25" viewBox="0 0 15 25" fill="none">
                                            <path d="M1.68652 24.1802L13.0002 12.8665L1.68652 1.55276" stroke="#E5E5E5" stroke-width="2" />
                                        </svg>
                                    </p>
                                </div>
                                <div class="answer">
                                    <span class="border-t border-[#E5E5E5] h-[1px] w-full absolute top-0 m-auto left-0 right-0"></span>
                                    <p class="flex gap-5 items-center">
                                        <span>
                                            <svg width="38" height="27" viewBox="0 0 38 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22.816 26.0001L20.584 20.6001H8.884L6.652 26.0001H0.676L11.908 0.800105H17.668L28.936 26.0001H22.816ZM10.756 16.1721H18.748L14.752 6.52411L10.756 16.1721ZM34.4387 26.2881C32.4947 26.2881 30.9467 24.8121 30.9467 22.7601C30.9467 20.6721 32.4947 19.3041 34.4387 19.3041C36.3827 19.3041 37.9307 20.6721 37.9307 22.7601C37.9307 24.8121 36.3827 26.2881 34.4387 26.2881Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                        <span>
                                            大会参加は任意です。自己成長と経験を深めたい方は積極的に参加をお勧めしますが、強制ではありません。
                                        </span>
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div>
                <div class="inner">
                    <div class="flex items-end justify-between">
                        <div class="flex items-center gap-5">
                            <span>
                                <img class="w-[35px]" src="<?= get_template_directory_uri(); ?>/img/top/megaphone.png">
                            </span>
                            <span>
                                <p class="text-xl md:text-2base font-bold">お知らせ</p>
                            </span>
                        </div>
                        <a class="md:hidden flex gap-[8px]" href="<?= get_home_url(); ?>/news">
                            <span class="md:text-base text-[10px] font-semibold">お知らせをもっと見る</span>
                            <span class="flex items-center">
                                <svg class="w-[16px] h-[16px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                    <path d="M8 0C3.58169 0 0 3.58166 0 8C0 12.4183 3.58169 16 8 16C12.4183 16 16 12.4183 16 8C16 3.58166 12.4183 0 8 0ZM12.0091 8.10612L8.19681 11.7331C7.82838 12.0839 7.24572 12.0696 6.89516 11.7009C6.54459 11.3324 6.55922 10.7492 6.92741 10.3992L8.48134 8.92091H4.80016C4.29134 8.92091 3.87931 8.50884 3.87931 8.00003C3.87931 7.49122 4.29137 7.07941 4.80016 7.07941H8.48137L6.92744 5.60084C6.55925 5.25106 6.54462 4.66762 6.89519 4.29947C7.24575 3.93078 7.82841 3.91612 8.19684 4.26722L12.0091 7.89391C12.0381 7.92162 12.0544 7.95994 12.0544 8C12.0544 8.04006 12.0381 8.07837 12.0091 8.10612Z" fill="#00489D" />
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div>
                        <ul class="flex xl:flex-now gap-7">
                            <?php
                            $posts = get_posts("post_type=news&posts_per_page=4");
                            if ($posts) : ?>
                                <?php
                                foreach ($posts as $post) {
                                    setup_postdata($post);
                                    $terms = get_the_terms($post->ID, 'news_category');
                                ?>
                                    <li class="inline-block border-b border-[#E5E5E5] w-full max-w-[1000px]">
                                        <a href="<?= the_permalink(); ?>">
                                            <div class="mt-7 bg-white px-5 py-5 md:py-7 md:flex items-center gap-5">
                                                <p class=" leading-normal flex justify-start md:justify-between items-center gap-[10px]">
                                                    <span class="leading-none text-xs py-[10px] px-5 rounded-full bg-[#00489D] text-white">お知らせ</span>
                                                    <span class="text-[#999] text-xs font-semibold"><?= the_time('Y.m.d'); ?></span>
                                                </p>
                                                <p class="text-sm font-semibold md:mt-0 mt-5"><?= the_title(); ?></p>
                                            </div>
                                        </a>
                                    </li>
                                <?php
                                }
                                wp_reset_postdata();
                                ?>
                            <?php else : ?>
                                <div class="news__empty">
                                    <p>新着情報はまだありません</p>
                                </div>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <div class="flex justify-end mt-[50px]">
                        <div>
                            <a class="md:flex gap-[8px] hidden" href="<?= get_home_url(); ?>/news">
                                <span class="md:text-base text-[10px] font-semibold">お知らせをもっと見る</span>
                                <span class="flex items-center">
                                    <svg class="w-[16px] h-[16px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                        <path d="M8 0C3.58169 0 0 3.58166 0 8C0 12.4183 3.58169 16 8 16C12.4183 16 16 12.4183 16 8C16 3.58166 12.4183 0 8 0ZM12.0091 8.10612L8.19681 11.7331C7.82838 12.0839 7.24572 12.0696 6.89516 11.7009C6.54459 11.3324 6.55922 10.7492 6.92741 10.3992L8.48134 8.92091H4.80016C4.29134 8.92091 3.87931 8.50884 3.87931 8.00003C3.87931 7.49122 4.29137 7.07941 4.80016 7.07941H8.48137L6.92744 5.60084C6.55925 5.25106 6.54462 4.66762 6.89519 4.29947C7.24575 3.93078 7.82841 3.91612 8.19684 4.26722L12.0091 7.89391C12.0381 7.92162 12.0544 7.95994 12.0544 8C12.0544 8.04006 12.0381 8.07837 12.0091 8.10612Z" fill="#00489D" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?>