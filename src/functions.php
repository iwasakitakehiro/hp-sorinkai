<?php
add_action('init', 'create_post_type');
function create_post_type()
{
  register_post_type(
    'news',
    array(
      'labels' => array('name' => '新着情報'),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 100,
      'supports' => array('title', 'editor')
    )
  );
  register_taxonomy(
    'news_category',
    'news',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true,
    )
  );
  register_post_type(
    'blog',
    array(
      'labels' => array('name' => '活動ブログ'),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 100,
      'supports' => array('title', 'editor', 'thumbnail')
    )
  );
  register_taxonomy(
    'blog_category',
    'blog',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true,
    )
  );

  register_post_type(
    'member',
    array(
      'labels' => array('name' => '会員専用ページ'),
      'public' => true,
      'has_archive' => true,
      'menu_position' => 100,
      'supports' => array('title', 'editor', 'thumbnail')
    )
  );
  register_taxonomy(
    'member_category',
    'member',
    array(
      'hierarchical' => true,
      'update_count_callback' => '_update_post_term_count',
      'label' => 'カテゴリー',
      'public' => true,
      'show_ui' => true,
    )
  );
}
add_theme_support('post-thumbnails');
//記事のURLを数字にする
function news_post_type_link($link, $post)
{
  if ($post->post_type === 'news') {
    return home_url('/news/' . $post->ID);
  } else {
    return $link;
  }
}
add_filter('post_type_link', 'news_post_type_link', 1, 2);

function news_rewrite_rules_array($rules)
{
  $new_rewrite_rules = array(
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter('rewrite_rules_array', 'news_rewrite_rules_array');

//記事のURLを数字にする
function blog_post_type_link($link, $post)
{
  if ($post->post_type === 'blog') {
    return home_url('/blog/' . $post->ID);
  } else {
    return $link;
  }
}
add_filter('post_type_link', 'blog_post_type_link', 1, 2);

function blog_rewrite_rules_array($rules)
{
  $new_rewrite_rules = array(
    'blog/([0-9]+)/?$' => 'index.php?post_type=blog&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter('rewrite_rules_array', 'blog_rewrite_rules_array');


//記事のURLを数字にする
function member_post_type_link($link, $post)
{
  if ($post->post_type === 'member') {
    return home_url('/member/' . $post->ID);
  } else {
    return $link;
  }
}
add_filter('post_type_link', 'member_post_type_link', 1, 2);

function member_rewrite_rules_array($rules)
{
  $new_rewrite_rules = array(
    'member/([0-9]+)/?$' => 'index.php?post_type=member&p=$matches[1]',
  );
  return $new_rewrite_rules + $rules;
}
add_filter('rewrite_rules_array', 'member_rewrite_rules_array');
