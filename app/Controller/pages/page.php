<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page
{

  private static function getDefaultHeader() {
    return View::render('pages/header');    
  }

  private static function getDefaultFooter() {
    return View::render('pages/footer');    
  }

  public static function getPage($title, $content, $header = null, $footer = null)
  {
    return View::render('pages/page', [
      'title' => $title,
      'header' => is_null($header) ? self::getDefaultHeader() : $header,
      'content' => $content,
      'footer' =>  is_null($footer) ? self::getDefaultFooter() : $footer
    ]);
  }
}
