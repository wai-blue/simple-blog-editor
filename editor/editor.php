<?php

  class Editor {
    var $author = "";
    var $rootUrl = "";
    var $imagesUrl = "";
    var $blogsDir = "";
    var $blogs = [];

    function __construct($author, $rootUrl, $blogsDir, $imagesUrl) {
      $this->rootUrl = $rootUrl;
      $this->blogsDir = realpath($blogsDir);
      $this->author = $author;
      $this->imagesUrl = $imagesUrl;
    }

    function loadBlogs() {
      $blogs = [];
      foreach (scandir("{$this->blogsDir}/texts") as $filename) {
        if (substr($filename, -4) === ".txt") {
          $blogData = $this->parseBlog(substr($filename, 0, -4));
          // if (empty($this->author) || $blogData["author"] == $this->author) {
            $blogs[strtotime($blogData["datePublished"])] = $blogData;
          // }
        }
      }

      krsort($blogs);

      $this->blogs = $blogs;
    }

    function parseBlog($blogName) {
      $blogTitle = "";
      $blogSlug = "";
      $blogPerex = "";
      $blogDesc = "";
      $blogImage = "";
      $blogDatePublished = "";
      $blogAuthor = "";

      if (is_file("{$this->blogsDir}/texts/{$blogName}.txt")) {
        $lines = file("{$this->blogsDir}/texts/{$blogName}.txt");

        $blogDatePublished = trim(array_shift($lines));
        $blogTitle = trim(array_shift($lines));
        $blogDesc = trim(array_shift($lines));
        $blogPerex = trim(array_shift($lines));
        $blogImage = trim(array_shift($lines));
      }

      $md = join("\r\n", $lines);

      $blogHtmlContent = (new \Parsedown())->text($md);

      return [
        "title" => $blogTitle,
        "perex" => $blogPerex,
        "image" => $blogImage,
        "description" => $blogDesc,
        "datePublished" => $blogDatePublished,
        "author" => $blogAuthor,
        "content" => file_get_contents("{$this->blogsDir}/texts/{$blogName}.txt"),
        "htmlContent" => $blogHtmlContent,
        "urlSlug" => $blogName
      ];
    }

    function findBlogBySlug($slug) {
      $blog = NULL;
      
      foreach ($this->blogs as $tmpBlog) {
        if ($tmpBlog['urlSlug'] == $slug) {
          $blog = $tmpBlog;
        }
      }

      return $blog;
    }

    function saveBlog($urlSlug, $content) {
      if (
        strpos($urlSlug, ".") !== FALSE 
        || strpos($urlSlug, "/") !== FALSE 
        || strpos($urlSlug, "\\") !== FALSE
      ) {
        throw new \Exception("Neplatný slug.");
      } 

      $filename = "{$urlSlug}.txt";

      if (file_put_contents("{$this->blogsDir}/texts/{$filename}", $content) == false) {
        throw new \Exception("Nepodarilo sa zapísať blog do priečinka");
      }
    }

  }