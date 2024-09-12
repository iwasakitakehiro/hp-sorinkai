<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta property="og:title" content="剛柔流空手道　蒼凛会">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="<?= get_home_url(); ?>">
    <meta property="og:type" content="website">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/output.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <title>剛柔流空手道　蒼凛会</title>
</head>

<body class="text-base">
    <header class="bg-white fixed top-0 z-10 w-full">
        <div class="flex justify-between">
            <div class="flex items-center ml-4 md:ml-12 py-[16px] xl:py-0">
                <img class="w-[220px]" src="<?= get_template_directory_uri(); ?>/img/global/logo.png" alt="剛柔流空手道　蒼凛会">
            </div>
            <div class="xl:flex items-center gap-12 hidden">
                <nav>
                    <ul class="flex gap-[30px] font-semibold">
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
                    </ul>
                </nav>
                <div class="flex">
                    <a class="bg-black text-white flex items-center justify-center w-[200px] h-[90px] gap-[8px]" href="<?php get_home_url(); ?>/login">
                        <span class="">
                            <svg class="w-[13px] h-[16px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 13 16" fill="none">
                                <path d="M10.9995 6.40269V4.73566C11 3.43184 10.4673 2.24081 9.61228 1.38713C8.75909 0.532125 7.56806 -0.000499648 6.26388 3.51722e-07C4.95956 -0.000499648 3.76856 0.532125 2.91534 1.38713C2.05972 2.24081 1.52772 3.43184 1.52772 4.73566V6.40269H0V12.9692C0 14.6433 1.35741 16 3.03131 16H9.49688C11.1708 16 12.5277 14.6433 12.5277 12.9692V6.40269H10.9995ZM3.82684 4.73566C3.82684 4.39606 3.89491 4.07831 4.01772 3.78747C4.20175 3.35134 4.51216 2.97694 4.90128 2.71406C5.29231 2.45066 5.75459 2.29925 6.26388 2.29875C6.60338 2.29875 6.92112 2.36656 7.21194 2.4895C7.64806 2.67366 8.02238 2.98456 8.28525 3.37369C8.54812 3.76384 8.70016 4.22638 8.70081 4.73566V6.40269H3.82684V4.73566ZM6.26388 12.2618C5.39913 12.2618 4.69781 11.5605 4.69781 10.6959C4.69781 9.831 5.39913 9.12994 6.26388 9.12994C7.1285 9.12994 7.82981 9.831 7.82981 10.6959C7.82981 11.5605 7.1285 12.2618 6.26388 12.2618Z" fill="white" />
                            </svg>
                        </span>
                        <span>会員専用ページ</span>
                    </a>
                    <a class="bg-[#00489D] text-white flex items-center justify-center w-[200px] h-[90px] gap-[8px]" href="<?php get_home_url(); ?>/contact">
                        <span>
                            <svg class="w-[21px] h-[16px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 21 16" fill="none">
                                <path d="M20.3318 2.27784C20.2399 1.81497 20.0346 1.39139 19.748 1.04148C19.6876 0.965233 19.6244 0.896953 19.556 0.828673C19.0482 0.318347 18.3354 0 17.5568 0H2.82758C2.04895 0 1.33876 0.318347 0.828554 0.828673C0.760274 0.896953 0.69713 0.965233 0.636535 1.04148C0.34976 1.39135 0.144522 1.81497 0.0551812 2.27784C0.0184734 2.45648 0 2.64109 0 2.82774V13.1725C0 13.5694 0.0841653 13.9509 0.234261 14.2954C0.373488 14.6243 0.578766 14.9218 0.828514 15.1713C0.891817 15.2345 0.954683 15.2925 1.02328 15.3502C1.51243 15.7553 2.14383 16 2.82758 16H17.5568C18.2408 16 18.875 15.7553 19.3613 15.3477C19.4297 15.2925 19.4929 15.2345 19.556 15.1713C19.8056 14.9218 20.0109 14.6243 20.153 14.2954V14.2928C20.303 13.9483 20.3844 13.5694 20.3844 13.1726V2.82774C20.3844 2.64109 20.3662 2.45648 20.3318 2.27784ZM1.85168 1.85168C2.10429 1.59934 2.44354 1.44658 2.82758 1.44658H17.5568C17.9409 1.44658 18.2831 1.59934 18.5327 1.85168C18.5774 1.89662 18.6195 1.94671 18.6566 1.99648L10.9365 8.72472C10.7236 8.91133 10.4606 9.00349 10.1922 9.00349C9.92649 9.00349 9.66364 8.91133 9.44789 8.72472L1.73076 1.99361C1.76492 1.94384 1.80701 1.89662 1.85168 1.85168ZM1.44658 13.1725V3.49055L7.03333 8.36429L1.4494 13.2329C1.44658 13.2144 1.44658 13.1936 1.44658 13.1725ZM17.5568 14.5531H2.82758C2.57751 14.5531 2.34353 14.4874 2.14383 14.3719L8.03531 9.23764L8.58533 9.71611C9.04562 10.1161 9.62159 10.3186 10.1922 10.3186C10.7657 10.3186 11.3417 10.1161 11.8019 9.71611L12.3517 9.23764L18.2409 14.3719C18.0409 14.4874 17.8069 14.5531 17.5568 14.5531ZM18.9378 13.1725C18.9378 13.1936 18.9378 13.2144 18.9351 13.2329L13.3512 8.36712L18.9378 3.49314V13.1725Z" fill="white" />
                            </svg>
                        </span>
                        <span>お問い合わせ</span>
                    </a>
                </div>
            </div>
        </div>
    </header>