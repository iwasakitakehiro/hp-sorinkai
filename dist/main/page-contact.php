<?php
session_start();

/* 初期設定
==================================================================================== */

$text  = array();
$error = array();
$blank = true;
$sent = false;
$items = isset($_SESSION["items"]) ? $_SESSION["items"] : "";

$client_name    = '税理士法人ドットプロ';
$client_address = "t.iwasaki@humansyscom.jp";
// $client_address = "info@iorisoba.com";


/* 連続送信対策
==================================================================================== */
if (isset($_POST['check']) || isset($_POST['send'])) {
    if (!$_SERVER['HTTP_REFERER']) die();
    if (!strpos($_SERVER['HTTP_REFERER'], $_SERVER['HTTP_HOST'])) die();
}
if (isset($_POST['send'])) {
    $file = 'contactlog.txt';
    if (!file_exists($file)) touch($file);
    if (intval(date('Ymd')) - intval(date('Ymd', filemtime($file))) > 1)
        file_put_contents($file, '');
    $log = file_get_contents($file);

    $ip = $_SERVER["REMOTE_ADDR"];
    file_put_contents($file, $log . "," . $ip);

    $overlap = array_count_values(explode(',', $log));

    if ($overlap[$ip] > 3)
        die('<!DOCTYPE html><meta charset="utf-8">お手数ですが時間を空けて再度送信ください');
}


/* 必須項目が入力されているかのチェック
==================================================================================== */
if (isset($_POST['check'])) {

    $items = $_POST['items'];
    $blank = false;
    if (!$items['type']) $blank = $error['type'] = 'ご相談内容を選択してください';
    if (!$items['name']) $blank = $error['name'] = '氏名を入力してください';
    if (!$items['ruby']) $blank = $error['ruby'] = '氏名（カタカナ）を入力してください';
    if (!preg_match("/^[^@]+@[^@]+$/", $items['mail'])) $blank = $error['mail'] = 'メールアドレスを入力してください';
    if (!$items['mail']) $blank = $error['mail'] = 'メールアドレスを入力してください';
    if (!preg_match("/^[0-9]+$/", $items['tel'])) $blank = $error['tel'] = '電話番号を入力してください';
    if (!($items['tel'])) $blank = $error['tel'] = '※電話番号が入力されていません';
    if (!$items['comment']) $blank = $error['comment'] = 'ご相談内容を入力してください';
    if (!$items['poricy']) $blank = $error['poricy'] = 'プライバシーポリシーに同意してください';

    $_SESSION["items"] = $items;
}

/* メールを送信
==================================================================================== */
if (isset($_POST['send'])) {

    setcookie(session_name(), '', time() - 42000, '/');
    session_destroy();
    $_SESSION['send_num'] = $send_num;


    $message = <<<EOT

■ ご相談内容
  $items[type]
  
■ 氏名
  $items[name]

■ 氏名（フリガナ）
  $items[ruby]

■ 会社名
  $items[company]

■ 部署／役職名
  $items[div]

■ メールアドレス
  $items[mail01]

■ 電話番号
  $items[tel]


■ ご相談内容
  $items[comment]


EOT;
    $client_message = <<<EOT

ホームページからお問い合わせがありました。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

$message

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
$home_url
EOT;
    $user_message = <<<EOT

$items[name] 様

このたびは、 $client_name にお問い合わせいただき、ありがとうございます。
近日担当者よりご連絡を差し上げますので、しばらくお待ちくださいませ。


◆お客さま情報◆
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

$message

◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆

$client_name

〒211-0012
神奈川県川崎市中原区中丸子13-2 フロンティア武蔵小杉ビルN棟11階11B号室


◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆◇◆
EOT;

    mb_language("japanese");
    mb_internal_encoding("UTF-8");
    mb_convert_encoding($client_address, "UTF-8");
    mb_convert_encoding($client_message, "UTF-8");
    $user_message = mb_convert_encoding($user_message, "UTF-8");

    if (!mb_send_mail($client_address, "ホームページよりお問い合わせがありました", $client_message, "From: " . $client_address)) {
        exit("e");
    }
    if (!mb_send_mail($items['mail'], "お問い合わせありがとうございました", $user_message, "From:" . mb_encode_mimeheader($client_name) . "<" . $client_address . ">")) {
        exit("e");
    }

    $sent = true;
    $blank = false;
}
?>
<?php get_header(); ?>

<main class="page__contact">
    <section>
        <div class="pt-[203px]">
            <div class="inner">
                <div class="flex items-center">
                    <span>
                        <img class="md:w-[56px] w-[28px]" src="<?= get_template_directory_uri(); ?>/img/contact/mail.png">
                    </span>
                    <span>
                        <h1 class="text-xl md:text-[48px] font-bold">お問い合わせ</h1>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-20">
            <div class="inner">
                <div class="contact-wrap">
                    <div class="shadow py-24 px-20">
                        <?php if ($blank): ?>
                            <div class="text-center">
                                <h2 class="text-xl md:text-2xl font-semibold text-[#00489D]">
                                    無料体験・見学随時募集しています
                                </h2>
                                <p class="text-[#333] mt-5 leading-loose md:text-base text-sm">
                                    道場での稽古を体験、見学してみませんか？<br>
                                    お気軽にお問い合わせください。
                                </p>
                            </div>
                        <?php elseif (!$blank && !$sent) : ?>
                            <div class="text-center">
                                <h2 class="text-xl md:text-2xl font-semibold text-[#00489D]">
                                    以下の内容で送信してよろしいですか？
                                </h2>
                            </div>
                        <?php endif; ?>
                        <form method="post">
                            <?php if ($blank): ?>
                                <table class="contact__table">
                                    <tbody>
                                        <tr>
                                            <th><span>お名前</span><span class="require">必須</span></th>
                                            <td>
                                                <?php if (isset($error['name'])) echo '<p class="error">' . $error['name'] . '</p>' ?>
                                                <input class="<?php if (isset($error['name'])) echo "border-red" ?>" type="text" name="items[name]" value="<?php if (isset($items['name'])) echo $items['name']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span>フリガナ</span><span class="require">必須</span></th>
                                            <td>
                                                <?php if (isset($error['ruby'])) echo '<p class="error">' . $error['ruby'] . '</p>' ?>
                                                <input class="<?php if (isset($error['ruby'])) echo "border-red" ?>" type="text" name="items[ruby]" value="<?php if (isset($items['ruby'])) echo $items['ruby']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span>メールアドレス</span><span class="require">必須</span></th>
                                            <td>
                                                <?php if (isset($error['mail01'])) echo '<p class="error">' . $error['mail01'] . '</p>' ?>
                                                <input class="<?php if (isset($error['mail01'])) echo "border-red" ?>" type="text" name="items[mail01]" value="<?php if (isset($items['mail01'])) echo $items['mail01']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span>メールアドレス (確認)</span><span class="require">必須</span></th>
                                            <td>
                                                <?php if (isset($error['mail02'])) echo '<p class="error">' . $error['mail02'] . '</p>' ?>
                                                <input class="<?php if (isset($error['mail02'])) echo "border-red" ?>" type="text" name="items[mail02]" value="<?php if (isset($items['mail02'])) echo $items['mail02']; ?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span>お問い合わせ内容</span><span class="require">必須</span></th>
                                            <td>
                                                <?php if (isset($error['comment'])) echo '<p class="error">' . $error['comment'] . '</p>' ?>
                                                <textarea rows="10" name="items[comment]" class="<?php if (isset($error['comment'])) echo "border-red" ?>"><?php if (isset($items['comment'])) echo $items['comment']; ?></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-12 flex justify-center">
                                    <button class="link-button mx-auto" name="check">
                                        <span>送信内容を確認する</span>
                                        <span>
                                            <svg class="w-[17px] h-[16px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 16" fill="none">
                                                <path d="M8.5 0C4.08169 0 0.5 3.58166 0.5 8C0.5 12.4183 4.08169 16 8.5 16C12.9183 16 16.5 12.4183 16.5 8C16.5 3.58166 12.9183 0 8.5 0ZM12.5091 8.10612L8.69681 11.7331C8.32838 12.0839 7.74572 12.0696 7.39516 11.7009C7.04459 11.3324 7.05922 10.7492 7.42741 10.3992L8.98134 8.92091H5.30016C4.79134 8.92091 4.37931 8.50884 4.37931 8.00003C4.37931 7.49122 4.79137 7.07941 5.30016 7.07941H8.98137L7.42744 5.60084C7.05925 5.25106 7.04462 4.66762 7.39519 4.29947C7.74575 3.93078 8.32841 3.91612 8.69684 4.26722L12.5091 7.89391C12.5381 7.92162 12.5544 7.95994 12.5544 8C12.5544 8.04006 12.5381 8.07837 12.5091 8.10612Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            <?php elseif (!$blank && !$sent) : ?>
                                <table class="contact">
                                    <tbody>
                                        <tr>
                                            <th><span>お名前</span><span class="require">必須</span></th>
                                            <td>
                                                <?= $items['name'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span>フリガナ</span><span class="require">必須</span></th>
                                            <td>
                                                <?= $items['ruby'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span>メールアドレス</span><span class="require">必須</span></th>
                                            <td>
                                                <?= $items['mail01'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th><span>お問合せ内容</span><span class="require">必須</span></th>
                                            <td>
                                                <?= $items['comment'] ?>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="mt-12 flex justify-center gap-12">
                                    <button class="link-button mx-auto" name="back">
                                        <span>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewBox="0 0 17 16" fill="none">
                                                    <path d="M8.5 16C12.9183 16 16.5 12.4183 16.5 8C16.5 3.58166 12.9183 0 8.5 0C4.08166 0 0.5 3.58166 0.5 8C0.5 12.4183 4.08166 16 8.5 16ZM4.49094 7.89388L8.30319 4.26688C8.67162 3.91606 9.25428 3.93041 9.60484 4.29912C9.95541 4.66756 9.94078 5.25075 9.57259 5.60078L8.01866 7.07909L11.6998 7.07909C12.2087 7.07909 12.6207 7.49116 12.6207 7.99997C12.6207 8.50878 12.2086 8.92059 11.6998 8.92059H8.01863L9.57256 10.3992C9.94075 10.7489 9.95538 11.3324 9.60481 11.7005C9.25425 12.0692 8.67159 12.0839 8.30316 11.7328L4.49094 8.10609C4.46194 8.07838 4.44556 8.04006 4.44556 8C4.44556 7.95994 4.46194 7.92163 4.49094 7.89388Z" fill="#00489D" />
                                                </svg>
                                            </span>
                                        </span>
                                        <span>修正する</span>
                                    </button>
                                    <button class="link-button mx-auto" name="send">
                                        <span>送信する</span>
                                        <span>
                                            <svg class="w-[17px] h-[16px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 16" fill="none">
                                                <path d="M8.5 0C4.08169 0 0.5 3.58166 0.5 8C0.5 12.4183 4.08169 16 8.5 16C12.9183 16 16.5 12.4183 16.5 8C16.5 3.58166 12.9183 0 8.5 0ZM12.5091 8.10612L8.69681 11.7331C8.32838 12.0839 7.74572 12.0696 7.39516 11.7009C7.04459 11.3324 7.05922 10.7492 7.42741 10.3992L8.98134 8.92091H5.30016C4.79134 8.92091 4.37931 8.50884 4.37931 8.00003C4.37931 7.49122 4.79137 7.07941 5.30016 7.07941H8.98137L7.42744 5.60084C7.05925 5.25106 7.04462 4.66762 7.39519 4.29947C7.74575 3.93078 8.32841 3.91612 8.69684 4.26722L12.5091 7.89391C12.5381 7.92162 12.5544 7.95994 12.5544 8C12.5544 8.04006 12.5381 8.07837 12.5091 8.10612Z" fill="#00489D" />
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            <?php elseif ($sent) : ?>
                                <div class="text-center">
                                    <h2 class="text-xl md:text-2xl font-semibold text-[#00489D]">
                                        お問い合わせ内容を送信しました
                                    </h2>
                                    <p class="text-[#333] mt-5 leading-loose md:text-base text-sm">
                                        ご入力いただきましたメールアドレス宛に、問い合わせ完了メールをお送りさせていただきました。<br>
                                        後日、担当よりご連絡を差し上げます。
                                    </p>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>