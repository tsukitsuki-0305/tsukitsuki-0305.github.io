<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <link rel=”icon” href=“favicon.ico”>
    <link rel="icon" href="favicon/favicon.ico" sizes="32x32"><!-- 32×32 -->
    <link rel="icon" href="favicon/safari-pinned-tab.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="favicon/apple-touch-icon.png"><!-- 180×180 -->
    <link rel="manifest" href="favicon/site.webmanifest">
    <title>hazuki's Portfolio</title>
</head>

<body class="body">
    <h1 class="titile">HAZUKI's PORTFOLIO</h1>

    <div class="container">

        <details class="content about">

            <summary class="content__sectionTitle">ABOUT</summary>

            <div class="about__content">
                <ruby class="about__nameRuby">岡村 葉月</ruby>
                <h3 class="about__contentTitle">OKAMURA HAZUKI</h3>
                <p class="about__text">
                    1998年、静岡県生まれ。
                </p>
                <p class="about__text">
                    大学時代に情報学部で学び、大学2年以降はコンテンツのデザインを行うコースで「デザイン」を学ぶ。
                    2021年に就職した企業ではWebに関わる部署に所属し、自社サイトの微修正や企画立案、他社サイトのディレクションなどを行う。
                    その後2022年からエンジニアとして自社製品の微修正やお客様向けカスタマイズを行う。
                </p>
            </div>

            <div class="about__content">
                <h3 class="about__contentTitle">SKILL</h3>
                <ul class="about__skillLists">
                    <li class="about__skillArea">
                        <?php
                        $skillTitle = "Vue.js";
                        $skillText = "エンジニアとして業務に当たる中で多く使用しておりました。研修では0から掲示板アプリの作成に取り組んでおりますが、実務では0から作成した経験はなく、すでにある製品の修正や機能追加といった業務を担当いたしました。";
                        include(dirname(__FILE__) . "/component/skillList.php");
                        ?>
                    </li>
                    <li class="about__skillArea">
                        <?php
                        $skillTitle = "Node.js";
                        $skillText = "エンジニアとして業務に当たる中で使用しておりました。研修時以外では多くは使用しておりませんが、何度か使用した形です。";
                        include(dirname(__FILE__) . "/component/skillList.php");
                        ?>
                    </li>
                    <li class="about__skillArea">
                        <?php
                        $skillTitle = "PostgreSQL";
                        $skillText = "エンジニアとして業務に当たる中で多く使用しておりました。研修時の使用の他、正しくデータを取得できているかなどを確認するために使用しておりました。";
                        include(dirname(__FILE__) . "/component/skillList.php");
                        ?>
                    </li>
                    <li class="about__skillArea">
                        <?php
                        $skillTitle = "HTML";
                        $skillText = "実務での経験はあまり多くありませんが、大学時代に自分たちのプロジェクト（ゼミのようなもの）のサイトを作成したり、授業内の課題として作成した経験があります。また、Vue.jsでの開発に当たり、HTMLの知識使用も行いました。";
                        include(dirname(__FILE__) . "/component/skillList.php");
                        ?>
                    </li>
                    <li class="about__skillArea">
                        <?php
                        $skillTitle = "CSS";
                        $skillText = "上記のHTML同様、学生時代に多く使用しておりました。また、実務ではVue.jsで作成したアプリケーションの装飾にCSSやSCSSを使用しておりました。";
                        include(dirname(__FILE__) . "/component/skillList.php");
                        ?>
                    </li>
                    <li class="about__skillArea">
                        <?php
                        $skillTitle = "illustrator";
                        $skillText = "実務では使用しておりませんが、大学自体にロゴや画像の作成を行った経験があります。簡単な操作であれば行うことが可能です。";
                        include(dirname(__FILE__) . "/component/skillList.php");
                        ?>
                    </li>
                    <li class="about__skillArea">
                        <?php
                        $skillTitle = "Photoshop";
                        $skillText = "実務では使用しておりませんが、大学自体に画像の編集を行った経験があります。簡単な操作であれば行うことが可能です。";
                        include(dirname(__FILE__) . "/component/skillList.php");
                        ?>
                    </li>
                </ul>
            </div>

        </details>

        <details open class="content works">
            <summary class="content__sectionTitle">WORKS</summary>

            <details open class="works__details">
                <summary class="works__detailsTitle">大学卒業以降の作品</summary>
                <ul class="works__lists">
                    <!-- imitation_x -->
                    <li class="works__list">
                        <?php
                        $worksTitle = "imitation_x";
                        $url = "https://tsukitsuki-0305.github.io/imitation_x";
                        $image = "imitation_x.png";
                        $alt = "imitation_x";
                        $workExplanation = "新規投稿、投稿に対するコメント、いいね、検索ができる、X（旧Twitter）のようなページを作成しました。今回は「yamada hanako」ユーザーでログインした状態になっています。";
                        $workSkill = "Next.js（JavaScript）、JSON（データベースの代わり）";
                        $workRange = "すべて";
                        include(dirname(__FILE__) . "/component/workList.php");
                        ?>
                    </li>
                </ul>
            </details>

            <details class="works__details">
                <summary class="works__detailsTitle">大学時代の課題での作品</summary>
                <ul class="works__lists">
                    <!-- projectのサイト -->
                    <li class="works__list">
                        <?php
                        $worksTitle = "所属プロジェクトのサイト";
                        $url = "https://tsukitsuki-0305.github.io/project_y";
                        $image = "project_y.png";
                        $alt = "project_y";
                        $workExplanation = "プロジェクト（ゼミのようなもので、1年をかけて1プロジェクトに所属し、研究を行う授業のこと）にて制作したサイトです。<br>
                        内容としてはプロジェクトの内容やメンバーを掲載しております。<br>
                        メンバーに関して当時はそれぞれの顔のイラストと名前を掲載しておりましたが、現在は代わりに仮画像と英文字1文字だけの表記としています。";
                        $workSkill = "HTML、CSS、JavaScript";
                        $workRange = "すべて";
                        include(dirname(__FILE__) . "/component/workList.php");
                        ?>
                    </li>
                    <!-- cd おもちゃ作成 -->
                    <li class="works__list">
                        <?php
                        $worksTitle = "おもちゃのパンフレット";
                        $url = "images/toyBook.pdf";
                        $image = "toyBookPic.png";
                        $alt = "toyBook";
                        $workExplanation = "授業の一環で科学おもちゃを作成した際のパンフレットです。<br>
                        「理科を習っていない子どもたちに理科を体験してもらうためのおもちゃのデザイン」という課題のもと、磁石を体験してもらうための魚釣りゲームを作成しました。<br>
                        その導入として「磁石とは」という説明を記載したパンフレットを配布しました。";
                        $workSkill = "illustrator";
                        $workRange = "背景や文字、チームメンバーが描いたイラストの配置といった全体の作成";
                        include(dirname(__FILE__) . "/component/workList.php");
                        ?>
                    </li>
                    <!-- マニュアルライティングの授業 -->
                    <li class="works__list">
                        <?php
                        $worksTitle = "マニュアルの作成";
                        $url = "images/manualWriting.pdf";
                        $image = "manualWritingPic.png";
                        $alt = "manualWriting";
                        $workExplanation = "マニュアルを作成する際の文章作成方法を学ぶ授業があり、その一環でこちらを作成しました。<br>
                        句読点の位置や漢字の使い方などといった文章作成における注意点だけでなく、ユーザーに寄り添った情報や理解しやすい情報構成といったことを学ぶ中で、課題として「小学3・4年生にカレーの作り方を教えるマニュアルを作成する」という内容に挑戦しました。";
                        $workSkill = "illustrator";
                        $workRange = "イラストも含むすべて";
                        include(dirname(__FILE__) . "/component/workList.php");
                        ?>
                    </li>
                    <!-- 情報デザイン -->
                    <li class="works__list">
                        <?php
                        $worksTitle = "情報デザインの作品";
                        $url = "images/informationDesign.pdf";
                        $image = "informationDesignPic.png";
                        $alt = "informationDesign";
                        $workExplanation = "情報をデザインするための知識を学ぶ授業で、課題としてテーマに沿って情報を整理した作品を製作しました。<br>
                        PDF内には作成したものだけでなく、目次とその課題に対する説明を追加しています。";
                        $workSkill = "illustrator、Photoshop";
                        $workRange = "すべて";
                        include(dirname(__FILE__) . "/component/workList.php");
                        ?>
                    </li>
                    <!-- IXD　島田市（街）のWEBパンフレット作成 -->
                    <li class="works__list">
                        <?php
                        $worksTitle = "地元の紹介ページ";
                        $url = "https://tsukitsuki-0305.github.io/shimadaCity";
                        $image = "shimadaCity.png";
                        $alt = "shimadaCity";
                        $workExplanation = "「街のWEBパンフレットを作成しよう」という課題のもと、地元である静岡県島田市の紹介を掲載したサイトを作成しました。";
                        $workSkill = "HTML、CSS";
                        $workRange = "すべて";
                        include(dirname(__FILE__) . "/component/workList.php");
                        ?>
                    </li>
                    <!-- CD　サバイバルのためのデザイン -->
                    <li class="works__list">
                        <?php
                        $worksTitle = "災害サイト";
                        $url = "https://tsukitsuki-0305.github.io/survival";
                        $image = "survival.png";
                        $alt = "survival";
                        $workExplanation = "「サバイバルのためのデザイン」という課題のもと、災害のための情報を掲載したサイトを製作しました。";
                        $workSkill = "HTML、CSS、jQuery、illustrator（画像作成）";
                        $workRange = "すべて";
                        include(dirname(__FILE__) . "/component/workList.php");
                        ?>
                    </li>
                </ul>
            </details>

        </details>
    </div>
</body>

</html>