<?php
/**
 * Theme related functions. 
 *
 */

/**
 * Get title for the webpage by concatenating page specific title with site-wide title.
 *
 * @param string $title for this page.
 * @return string/null wether the favicon is defined or not.
 */
function get_title($title) {
  global $asterios;
  return $title . (isset($asterios['title_append']) ? $asterios['title_append'] : null);
}


/**
 * Create a navigation bar / menu for the site.
 *
 * @param string $menu for the navigation bar.
 * @return string as the html for the menu.
 */
function get_navbar($menu) {
  $html = "<nav>\n<ul class='{$menu['class']}'>\n"; //  
  foreach($menu['items'] as $item) {
    $selected = $menu['callback_selected']($item['url']) ? " class='selected' " : null;
    $html .= "<li{$selected}><a href='{$item['url']}' title='{$item['title']}'>{$item['text']}</a></li>\n"; // 
  }
  $html .= "</ul>\n</nav>\n"; // 
  return $html;
}

/*function generateMenu($items) { // generateMenu($menu)
  $html = "<nav>\n";
  foreach($items as $item) {
    $html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
  }
  $html .= "</nav>\n";
  return $html;
}*/

/*function modifyNavbar($items) {
  $ref = isset($_GET['p']) && isset($items[$_GET['p']]) ? $_GET['p'] : null;
  if($ref) {
    $items[$ref]['class'] .= 'selected'; 
  }
  return $items;
}

$class = 'navbar'; // param $class
class CNavigation {
  public static function GenerateMenu($menu, $class) { // CNavigation::GenerateMenu($menu, $class)
    if(isset($menu['callback'])) {
      $items = call_user_func($menu['callback'], $menu['items']); // ??? wtf call_user_func()
    }
    $html = "<nav class='$class'>\n";
    foreach($items as $item) {
      $html .= "<a href='{$item['url']}' class='{$item['class']}'>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
    return $html;
  }
};*/


