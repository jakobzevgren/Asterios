
 <?php

function modifyNavbar($items) {
  $ref = isset($_GET['p']) && isset($items[$_GET['p']]) ? $_GET['p'] : null;
  if($ref) {
    $items[$ref]['class'] .= 'selected'; 
  }
  return $items;
}

$menu = array(
  'callback' => 'modifyNavbar',
  'items' => array(
    'home'  => array('text'=>'Home',  'url'=>'?p=home', 'class'=>null),
    'away'  => array('text'=>'Away',  'url'=>'?p=away', 'class'=>null),
    'about' => array('text'=>'About', 'url'=>'?p=about', 'class'=>null),
  ),
);
$class = 'navbar'; // param $class
class CNavigation {
  public static function GenerateMenu($menu, $class) {
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
echo "<link rel='stylesheet' type='text/css' href='stylesheet.css' />\n";
echo CNavigation::GenerateMenu($menu, $class); 

 
 
 
/* The simple solution
// array-variabel for navbar - config.php
$menu = array(
  'home'  => array('text'=>'Home',  'url'=>'?p=home'),
  'away'  => array('text'=>'Away',  'url'=>'?p=away'),
  'about' => array('text'=>'About', 'url'=>'?p=about'),
);
// all style in the class navbar so it must be put together with the nav element. To make this happen we add a extra argument, $class
$navclass = 'navbar';
// class for navbar - asterios/src
class CNavigation {
  public static function GenerateMenu($items, $class) {
    $html = "<nav class='$class'>\n"; //"<nav class='navbar'>\n";
    foreach($items as $item) {
      $html .= "<a href='{$item['url']}'>{$item['text']}</a>\n";
    }
    $html .= "</nav>\n";
	return $html;
  }
};
echo "<link rel='stylesheet' type='text/css' href='stylesheet.css' />\n";
echo CNavigation::GenerateMenu($menu, $navclass);
*/
