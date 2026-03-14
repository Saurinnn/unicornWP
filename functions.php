<?php //子テーマ用関数
if (!defined('ABSPATH'))
  exit;

//子テーマ用のビジュアルエディタースタイルを適用
add_editor_style();

//以下に子テーマ用の関数を書く
function my_front_page_styles()
{
  if (is_front_page()) {
    wp_enqueue_style(
      'child-front-page', // ハンドル名
      get_stylesheet_directory_uri() . '/front-page.css',
      array(), // 親や子テーマのCSSを依存関係にするなら array('child-style')
      filemtime(get_stylesheet_directory() . '/front-page.css') // 更新日時をバージョンに
    );
  }
}
add_action('wp_enqueue_scripts', 'my_front_page_styles');

function my_recruit_page_styles()
{
  if (is_page('recruit') || is_page_template('page-recruit.php')) {
    wp_enqueue_style(
      'child-recruit-reset',
      get_stylesheet_directory_uri() . '/my-css/reset.css',
      array(),
      filemtime(get_stylesheet_directory() . '/my-css/reset.css')
    );
    wp_enqueue_style(
      'child-recruit-recruit',
      get_stylesheet_directory_uri() . '/my-css/recruit.css',
      array(),
      filemtime(get_stylesheet_directory() . '/my-css/recruit.css')
    );
    wp_enqueue_style(
      'child-recruit-responsive-540',
      get_stylesheet_directory_uri() . '/my-css/responsive-540.css',
      array(),
      filemtime(get_stylesheet_directory() . '/my-css/responsive-540.css')
    );
    wp_enqueue_style(
      'child-recruit-responsive-900',
      get_stylesheet_directory_uri() . '/my-css/responsive-900.css',
      array(),
      filemtime(get_stylesheet_directory() . '/my-css/responsive-900.css')
    );
  }
}
add_action('wp_enqueue_scripts', 'my_recruit_page_styles');