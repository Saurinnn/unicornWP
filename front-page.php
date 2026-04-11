<?php
/**
 * Cocoon WordPress Theme
 * @author: yhira
 * @link: https://wp-cocoon.com/
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later
 */
if (!defined('ABSPATH'))
  exit;
get_header();
?>


<?php get_header(); ?>
  <div class="my-content">
  <!--カバーセクション-->
  <section class="mycover-section">
    <div class="mycover-content">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ITengineer.png" alt="">
      <div class="mycover-text01">
        <div class="mycover-h2back"></div>
        <h2>次世代のゲームを創造する。</h2>
      </div>
      <p class="mycover-text02">ユニコーンジャパンは、福岡を拠点とするエンターテイメント系制作会社です。革新的なソリューションと最高水準の品質で、あなたのビジネスをサポートします。家庭用ゲーム機から映像制作、IT関連業務まで、幅広いニーズに柔軟に対応。一緒にビジネスの可能性を広げましょう。</p>
      <div class="inquire-cover">
        <a href="<?php echo home_url('/contact'); ?>"><h3>お問い合わせはこちら</h3></a>
        <p>お見積もり・ご相談等、お気軽にご連絡ください。</p>
      </div>
    </div>
  </section>
  <!--Newsセクション-->
  <section id="news">
  <div class="news-content">
    <!--見出し-->
    <div class="section-title">
      <div class="section-back-shadow"></div>
      <div class="section-back"></div>
      <h2>News</h2>
      <p class="news-title-p">お知らせ</p>
    </div>
    <!--見出しここまで-->
      <!-- お知らせ -->
    <div class="news-section">
    <ul class="blog-ul">
    <?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 6,
  'category_name' => 'お知らせ', // ★ ここを追加！
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()):
  while ($the_query->have_posts()):
    $the_query->the_post();
?>

<a href="<?php the_permalink(); ?>">
        <li class="blog-li">
        <div class="li-pic">
        <?php if (has_post_thumbnail()) {
      echo get_the_post_thumbnail(get_the_ID(), array(270, 180));
    }
    else {
      echo '<img src="' . get_stylesheet_directory_uri() . '/images/noimg.png" alt="No Image" width="270" height="180">';
    }
?>
            </div>
            <div class="li-text">
            <p><?php the_time('Y/n/j'); ?></p>
            <h3>
              <?php
    if (mb_strlen($post->post_title) > 20) {
      $title = mb_substr($post->post_title, 0, 50);
      echo $title . '...';
    }
    else {
      echo $post->post_title;
    }
?>
            </h3>
            <p class="excerpt">
  <?php
    $content = strip_tags(get_the_content()); // HTMLタグを削除
    $content = mb_substr($content, 0, 80); // 200文字を抜き出す
    echo $content . '...';
?>
</p>
            </div>
        </li>
        </a>

        <?php
  endwhile;
else:
?>
      <li>お探しの記事はありませんでした</li>
    <?php
endif; ?>
</ul>
      <a href="<?php echo home_url('/blog'); ?>"><button>VIEW MORE>>></button></a>
    </div>
  </div>
  </section>
  <!--About Usセクション-->
  <section id="about">
    <div class="background01"></div>
    <div class="about-container">
    <div class="section-title">
      <div class="section-back-shadow about-shadow"></div>
      <div class="section-back about-back"></div>
      <h2>About Us</h2>
      <p class="section-about-p">事業紹介</p>
    </div>
    <div class="about-wrapper">
      <div class="about-textbox">
        <p>ユニコーンジャパンは、アジアのリーダー都市・福岡を拠点に、クリエイティビティと最先端テクノロジーを高度に融合させるプロフェッショナル集団です。「福岡から世界へ、最高のエンターテイメントとソリューションを」を合言葉に、私たちは常にお客様の想像を超える価値を提供し続けています。
          当社の事業は、大きく分けて「家庭用ゲーム」「映像制作」「IT総合ソリューション」の3つの柱で構成されています。 ゲーム開発分野では、独自の企画力と確かな技術力で、プレイヤーの心を揺さぶる没入感のある体験を創出。映像分野においては、最新のCG技術や演出力を駆使し、視覚的なインパクトと共にメッセージを深く届けるハイクオリティなコンテンツを生み出します。さらに、これらエンターテイメントを支えるIT全般業務では、システム開発からインフラ構築、DX支援に至るまで、ビジネスの根幹を支える堅牢かつ柔軟なサービスを展開しています。
          私たちは単なる技術者集団ではありません。クライアントの課題に真摯に寄り添い、共に未来を描くパートナーです。目まぐるしく変化するデジタル時代において、トップクラスの品質と情熱をもって、未体験の感動と確かな成果をお約束します。それが、ユニコーンジャパンのミッションです。</p>
        </div>
    </div>
  </div>
  </section>
  <!--About Us02セクション-->
  <section id="about02">
    <div class="about-container">
      <div class="about02-content">
        <div class="about02-content-left">
          <h2>映像制作</h2>
          <p>感動を届ける映像コンテンツの創造に情熱を注ぎます。あなたのストーリーを形にし、視聴者の心を揺さぶる映像コンテンツを制作いたします。</p>
        </div>
        <div class="about02-content-right">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about01.jpg" alt="">
        </div>
      </div>
      <div class="about02-content">
        <div class="about02-content-left">
          <h2>ゲーム開発制作</h2>
          <p>業界トップの技術と情熱で、あなたのアイデアを現実に！未来を切り拓くゲーム、コンピュータソフト、スマホアプリの企画開発を、私たちと共に成し遂げましょう。</p>
        </div>
        <div class="about02-content-right">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about02.jpg" alt="">
        </div>
      </div>
      <div class="about02-content">
        <div class="about02-content-left">
          <h2>IT全般業務</h2>
          <p>お客様のビジネスをスムーズにサポートする総合的なITサービスを提供いたします。データ入力からCE業務/SE業務、各種機器の導入や入替え時の設置/動作確認作業、そして監視・保守の人員補充まで、幅広いニーズに柔軟にお応えします。</p>
        </div>
        <div class="about02-content-right">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/about03.jpg" alt="">
        </div>
      </div>
    </div>
  </section>
<!--Worksセクション-->
<section id="works">
  <div class="background02"></div>
  <div class="works-titlearea">
    <div class="section-title">
      <div class="section-back-shadow"></div>
      <div class="section-back"></div>
      <h2>Works</h2>
      <p class="works-title-p">実績</p>
    </div>
  </div>
  <div class="works-contentsarea">
    <div class="game-cover">
    <div class="game">
      <h2>ゲーム制作</h2>
      <div class="game-content">
      <div class="game-left">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/master-monster.jpg" alt="">
      </div>
      <div class="game-right">
        <div class="game-right-title">
          <h3>マスターオブモンスターズSSB</h3>
        </div>
        <table>
          <tr>
            <th>対応機種</th>
            <td>Switch、PS5、PS4、PC（Windows／Steam）</td>
          </tr>
          <tr>
            <th>ジャンル</th>
            <td>シミュレーションビデオゲーム、ロールプレイングゲーム</td>
          </tr>
          <tr>
            <th>発売日</th>
            <td>2025年6月26日</td>
          </tr>
          <tr>
            <th>配信元</th>
            <td>システムソフト・ベータ</td>
          </tr>
          <tr>
            <th>担当</th>
            <td>モーション制作</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="game-content">
      <div class="game-left">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/fantom.jpg" alt="">
      </div>
      <div class="game-right">
        <div class="game-right-title">
          <h3>ファントム・ブレイブ 幽霊船団と消えた英雄</h3>
        </div>
        <table>
          <tr>
            <th>対応機種</th>
            <td>Nintendo Switch; PlayStation 5; PlayStation 4; Microsoft Windows</td>
          </tr>
          <tr>
            <th>ジャンル</th>
            <td>コンピュータRPG、 Adventure、 Strategy</td>
          </tr>
          <tr>
            <th>発売日</th>
            <td>2025年1月30日</td>
          </tr>
          <tr>
            <th>配信元</th>
            <td>日本一ソフトウェア</td>
          </tr>
          <tr>
            <th>担当</th>
            <td>QAテスター</td>
          </tr>
        </table>
      </div>
    </div>
    <div class="game-content">
      <div class="game-left">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/zero.jpg" alt="">
      </div>
      <div class="game-right">
        <div class="game-right-title">
          <h3>Re:ゼロから始める異世界生活　Lost in Memories</h3>
        </div>
        <table>
          <tr>
            <th>対応機種</th>
            <td>iOS/Android端末</td>
          </tr>
          <tr>
            <th>ジャンル</th>
            <td>ADV-RPG</td>
          </tr>
          <tr>
            <th>発売日</th>
            <td>2020年9月9日</td>
          </tr>
          <tr>
            <th>配信元</th>
            <td>株式会社セガ</td>
          </tr>
          <tr>
            <th>担当</th>
            <td>Live2D制作</td>
          </tr>
        </table>
      </div>
    </div>
    </div>
    </div>
    <div class="servive-cover">
    <div class="service">
      <h2>IT関連サービス業務</h2>
      <div class="service-content">
        <div class="service-left">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ITengineer02_x.png" alt="">
        </div>
        <div class="setvice-right">
          <ul>
             <li>パソコンのキッティング/設置業務</li>
             <li>Cisco/etcのルーター設定設置業務</li>
             <li>百貨店電子マネー端末設置業務</li>
             <li>モニターのフィルタ貼り業務</li>
             <li>LAN配線工事業務</li>
             <li>防犯カメラ設定設置および保守業務</li>
             <li>NTTマイグレーションサポート業務</li>
             <li>コンピューターの修理・事務所のOA化業務</li>
             <li>カーナビゲーション/ドライブレコーダーの取付業務</li>
             <li>パソコンのHDD消去業務</li>
          </ul>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>
<!--Worksセクション-->
<section id="office">
  <div class="office-content">
<!--見出し-->
<div class="section-title">
  <div class="section-back-shadow office-title-back"></div>
  <div class="section-back office-title"></div>
  <h2>Office Info</h2>
  <p class="section-office-p">会社概要</p>
</div>
<!--見出しここまで-->
<h3 class="ceo-h3">取締役</h3>
<div class="ceo">
  <p class="ceo-name">大隈　幹夫</p>
  <p class="ceo-rubi">おおくま　みきお</p>
</div>
<div class="ceo-introduce">
  <div class="intro-photo">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/CEO.JPEG" alt="CEO">
  </div>
  <div class="intro-text">
    <p>私は学生時代に音楽サークルへ所属し、メンバーの交代や欠員により、パソコンやシンセサイザーを駆使して音楽を奏でる日々を送っておりました。その頃から、生演奏とPC音源を融合させたバンドを結成し、音楽とテクノロジーの融合に魅力を感じておりました。卒業後は、兄が経営するソフト制作会社に入社し、1996年には実在の戦闘機を題材にしたフライトシューティングゲームのプロデュースに携わりました。その後も、シリーズ作品の企画開発やファンタジーシミュレーションRPGの開発など、幅広いジャンルのゲーム制作に携わり、多くの作品で成功を収めることができました。
      <p>現在は、オンラインゲームの企画開発や営業活動に取り組む傍ら、IT関連サービス業務を手がける企業「エンタオール」を立ち上げ、パソコンなどの導入から監視保守までを一貫して提供しています。</p>
      <p>私は、お客様との信頼関係を築くことを最優先に考え、古き良き昭和の営業マンの精神を大切にしています。今後も、人とのつながりを重視し、お客様にとって最良のサービスを提供してまいります。</p>
  </div>
</div>
<div class="office-info">
  <dic class="office-info-left">
    <div class="office-detail">
      <h3>会社名</h3>
      <p>株式会社ユニコーンジャパン</p>
    </div>
    <div class="office-detail">
      <h3>資本金</h3>
      <p>300万</p>
    </div>
    <div class="office-detail">
      <h3>設立日</h3>
      <p>2003年9月2日</p>
    </div>
  </dic>
  <div class="office-info-right">
    <div class="office-detail office-detail02">
      <h3>所在地</h3>
      <p>〒８１２ー００２８<br>
        福岡県福岡市博多区須崎町<br>
        １３番２１号　中村ビル２F<br>
        </p>
    </div>
    <div class="office-detail office-detail02">
      <h3>連絡先</h3>

<div class="office-contact">
  <p class="office-icon">
    <span class="material-symbols-outlined">
      phone_enabled
    </span>
  </p>
  <p>
    <a href="tel:0922628661">092-262-8661</a>
  </p>
</div>

<div class="office-contact">
  <p class="office-icon">
    <span class="material-symbols-outlined">
      mail
    </span>
  </p>
  <p>  
    <a href="mailto:renraku@unicorn-japan.co.jp">
      renraku@unicorn-japan.co.jp
    </a>
  </p>
</div>
    </div>
  </dic>
  </div>
</div>
<!--office info ここまで-->
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3323.2701913547476!2d130.3996368761626!3d33.598293341563014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x354191ed0c314e3b%3A0xee027e3c2882fcd8!2z44CSODEyLTAwMjgg56aP5bKh55yM56aP5bKh5biC5Y2a5aSa5Yy66aCI5bSO55S677yR77yT4oiS77yS77yRIDJm!5e0!3m2!1sja!2sjp!4v1772173491210!5m2!1sja!2sjp" width="95%" height="308" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<div class="office-photo">
<div class="office-photo-left photo">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/suzakilab02.jpg" alt="">
</div>
<div class="office-photo-right photo">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/suzakilab01.jpg" alt="">
</div>
</div>
</div>
</section>
<!--Linkセクション-->
<section id="link">
  <div class="link-content">
   <!--見出し-->
   <div class="section-title section-title-link">
    <div class="section-back-shadow"></div>
    <div class="section-back"></div>
    <h2>Link</h2>
    <p class="link-p">リンク集</p>
  </div>
  <!--見出しここまで-->
  <div class="link-list">
    <a href="https://bexide.co.jp/" target="_blank"><div class="link-list-name">
      <p class="company-name">株式会社BeXibe</p>
      <p class="company-url">https://bexide.co.jp/</p>
    </div></a>
    <div class="link-list-detail">
    <div class="link-list-L">
      <a href="https://bexide.co.jp/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/bexibe.jpg" alt=""></a>
    </div>
    <div class="link-list-R">
      <p>弊社のクライアント企業様です。コンピュータエンタテインメントの企画・開発・販売、キャラクターデザイン制作、CGアニメーション制作などを手掛けています</p>
    </div>
  </div>
  </div>
  </div>
</section>
<!--Linkセクション-->
<section id="contact">
  <div class="background03"></div>
  <div class="contact-content">
    <h2 class="contact-h2">CONTACT</h2>
    <p class="contact-title-p">お問い合わせ</p>
    <p class="contact-p2">ご質問やお仕事のご依頼、お見積もりなどお気軽にお問い合わせください。</p>
      <a href="<?php echo home_url('/contact'); ?>"><button class="contact-button">お問い合わせはこちら</button></a>
    <div class="contact-detail">
      <p>電話でのお問い合わせ</p>
      <div class="contact-tel">
        <p class="office-icon">
          <span class="material-symbols-outlined">
            phone_enabled
          </span>
        </p>
        <p>
          <a href="tel:0922628661">　092-262-8661</a>
        </p>
      </div>
      <p>(平日10:00～17:00)</p>
    </div>
  </div>
</section>
</div>
<?php get_footer(); ?>
