<?php

  require_once(__DIR__."/../vendor/autoload.php");
  require_once(__DIR__."/editor.php");

  session_start();
  
  require_once(__DIR__."/auth.php");
  
  $newBlog = isset($_GET['new-blog']);
  $gallery = isset($_GET['galeria']);
  $blogToEdit = $_GET['b'] ?? "";
  $slugNumber = count(scandir(__DIR__ . "/../texts")) - 1;
  
  if ($authorLogged === NULL) {
    include("page-html.php");

    echo $html["loginForm"];

    exit;
  }

  if (isset($_POST["gallery_upload_new_image"])) {
    if (getimagesize($_FILES["gallery_new_image"]["tmp_name"]) !== FALSE) {
      if (!move_uploaded_file(
        $_FILES["gallery_new_image"]["tmp_name"],
        __DIR__."/../images/".basename($_FILES["gallery_new_image"]["name"])
      )) {
        exit("Nastala chyba pri nahrávani obrázku");
      }
    }

    header("Refresh:0");
    exit;
  }

  $editor = new \Editor(
    $authorLogged,
    "",
    __DIR__."/..",
    "../images"
  );

  $editor->loadBlogs();

  echo "
    <style>
      .gallery {
        background: rgba(255,255,255,0.95);
      }

      .gallery .content {
        background: white;
        border: none;
        padding: 10px 20px;
      }

      .gallery.in-blog .content {
        overflow: scroll;
        display: flex;
      }

      .gallery .content img {
        cursor: pointer;
        opacity: 0.8;
        height: 100px;
      }

      .gallery .content img:hover {
        opacity: 1;
      }
    </style>
  ";

  $galleryHtml = "";

  foreach (scandir("{$editor->blogsDir}/images") as $image) {
    if (is_file("{$editor->blogsDir}/images/{$image}")) {
      $galleryHtml .= "
        <img
          src='{$editor->imagesUrl}/{$image}'
          onclick='showSnippetToAdd(\"{$image}\");'
        />
      ";
    }
  }

  if (empty($blogToEdit) && !$newBlog && !$gallery) {
    include("page-html.php");

    echo $html["showBlogs"]["1"];

    foreach ($editor->blogs as $blog) {
      echo "
      <tr>
        <td>
          <i class='fab fa-angular fa-lg text-danger me-3'></i> 
          <strong>
            <a href='?b={$blog['urlSlug']}'>{$blog['title']}</a>
            <br/>
          </strong>
        </td>
      </tr>        
      ";
    }

    echo $html["showBlogs"]["2"];
    
  } else if ($gallery){
    include("page-html.php");
    echo $html["gallery"];

  } else {
    if ($newBlog) {
      $blog = [
        "title" => "Nový blog",
        "urlSlug" => "novy-blog",
        "content" => trim("
Dátum publikovania (vo formáte RRRR-MM-DD)
Názov blogu
Meta Description
Hlavný obrázok - (názov súboru)
PEREX
Začiatok textu sem...

## Nadpis H2

Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis porttitor tincidunt.

Proin ultrices turpis diam, vitae sodales erat placerat non. Maecenas maximus tortor at diam imperdiet blandit ac nec libero.

Donec dictum odio risus, ac dapibus sem blandit sed. Nunc neque libero, gravida non egestas non, maximus eu lacus.

### Nadpis H3
  * Nečíslovaná odrážka
  * Nečíslovaná odrážka
  * Nečíslovaná odrážka

  1. Číslovaná odrážka
  2. Číslovaná odrážka
  3. Číslovaná odrážka

*Kurzíva*
**Tučné písmo**
        "),
      ];
    } else {
      $blog = $editor->findBlogBySlug($blogToEdit);
    }

    if ($blog === NULL) {
      echo "Neznámy blog.";
      exit;
    }

    include("page-html.php");

    echo $html["editor"];
  }

