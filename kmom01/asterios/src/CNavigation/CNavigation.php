 <?php

/**
 * Navbar menu - CNavigation::
 * more info http://dbwebb.se/kod-exempel/dynamic_php_menu/
 * 
 * GenerateMenu($menu, $class)
 * callback modifyNavbar
 * menyerna är lagrade i array i webroot/config.php
 */
function modifyNavbar($items) {
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
};