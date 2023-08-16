<?php

  $originalSlug = $_POST['originalSlug'];
  $slug = $_POST['slug'];
  $content = base64_decode($_POST['content']);

  require_once(__DIR__."/../vendor/autoload.php");
  require_once(__DIR__."/editor.php");

  session_start();

  require_once(__DIR__."/auth.php");

  try {
    if ($authorLogged !== NULL) {
      $regexArray = [];

      if (preg_match("/(\d+)-/", $originalSlug, $regexArray)) {
        $slug = $regexArray[0] . $slug;
      } else if ($originalSlug == '') {
        $slug = count(scandir(__DIR__ . "/../texts")) - 1  . "-" . $slug;
      } else {
        throw new \Exception("Nenašiel sa predošlý blog");
      }

      $editor = new \Editor($authorLogged, "", __DIR__ ."/..", "");
      $editor->loadBlogs();

      @unlink("{$editor->blogsDir}/texts/{$originalSlug}.txt");

      $blogs = $editor->saveBlog($slug, $content);
    }

    echo "Blog bol uložený.";
  } catch (\Exception $e) {
    echo $e->getMessage();
  }