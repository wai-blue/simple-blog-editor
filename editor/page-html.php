<?php

$html = [
  "loginForm" => "<!DOCTYPE html>
  <!-- beautify ignore:start -->
  <html lang='sk' class='light-style customizer-hide' dir='ltr' data-theme='theme-default' data-assets-path='assets/' data-template='vertical-menu-template-free'>
    <head>
      <meta charset='utf-8' />
      <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0' />

      <title>Login | Editor | Tribunal</title>

      <meta name='description' content='' />

      <!-- Favicon -->
      <link rel='icon' type='image/x-icon' href='assets/img/favicon/favicon.ico' />

      <!-- Fonts -->
      <link rel='preconnect' href='https://fonts.googleapis.com' />
      <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
      <link href='https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap' rel='stylesheet' />

      <!-- Icons. Uncomment required icon fonts -->
      <link rel='stylesheet' href='assets/vendor/fonts/boxicons.css' />

      <!-- Core CSS -->
      <link rel='stylesheet' href='assets/vendor/css/core.css' class='template-customizer-core-css' />
      <link rel='stylesheet' href='assets/vendor/css/theme-default.css' class='template-customizer-theme-css' />
      <link rel='stylesheet' href='assets/css/demo.css' />

      <!-- Vendors CSS -->
      <link rel='stylesheet' href='assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css' />

      <!-- Page CSS -->
      <!-- Page -->
      <link rel='stylesheet' href='assets/vendor/css/pages/page-auth.css' />
      <!-- Helpers -->
      <script src='assets/vendor/js/helpers.js'></script>

      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src='assets/js/config.js'></script>
    </head>

    <body>
      <!-- Content -->

      <div class='container-xxl'>
        <div class='authentication-wrapper authentication-basic container-p-y'>
          <div class='authentication-inner'>
            <!-- Register -->
            <div class='card'>
              <div class='card-body'>
                <!-- Logo -->
                <div class='app-brand justify-content-center'>
                  <span class='app-brand-text demo text-body fw-bolder'>Tribunal Blog Editor</span>
                </div>
                <!-- /Logo -->
                <h4 class='mb-2'>Vitajte v Tribunal Blog Editori! 👋</h4>
                <p class='mb-4'>Prosím prihláste sa</p>

                <form id='formAuthentication' class='mb-3' method='POST'>
                  <div class='mb-3'>
                    <label for='email' class='form-label'>Užívateľské meno</label>
                    <input type='text' class='form-control' id='email' name='user' placeholder='Zadajte užívateľské meno' autofocus />
                  </div>
                  <div class='mb-3 form-password-toggle'>
                    <div class='d-flex justify-content-between'>
                      <label class='form-label' for='password'>Heslo</label>
                    </div>
                    <div class='input-group input-group-merge'>
                      <input type='password' id='password' class='form-control' name='password' placeholder='&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;' aria-describedby='password' />
                      <span class='input-group-text cursor-pointer'><i class='bx bx-hide'></i></span>
                    </div>
                  </div>
                  <div class='mb-3'>
                    <button class='btn btn-primary d-grid w-100' type='submit'>Prihlásiť sa</button>
                  </div>
                </form>
              </div>
            </div>
            <!-- /Register -->
          </div>
        </div>
      </div>

      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src='assets/vendor/libs/jquery/jquery.js'></script>
      <script src='assets/vendor/libs/popper/popper.js'></script>
      <script src='assets/vendor/js/bootstrap.js'></script>
      <script src='assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'></script>

      <script src='assets/vendor/js/menu.js'></script>
      <!-- endbuild -->

      <!-- Vendors JS -->

      <!-- Main JS -->
      <script src='assets/js/main.js'></script>

      <!-- Page JS -->

      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src='https://buttons.github.io/buttons.js'></script>
    </body>
  </html>
",
  "showBlogs" => [
    "1" => "<!DOCTYPE html>
  <!-- beautify ignore:start -->
  <html lang='en' class='light-style layout-menu-fixed' dir='ltr' data-theme='theme-default' data-assets-path='assets/' data-template='vertical-menu-template-free'>
    <head>
      <meta charset='utf-8' />
      <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0' />

      <title>Zoznam blogov | Editor | Tribunal</title>

      <meta name='description' content='' />

      <!-- Favicon -->
      <link rel='icon' type='image/x-icon' href='assets/img/favicon/favicon.ico' />

      <!-- Fonts -->
      <link rel='preconnect' href='https://fonts.googleapis.com' />
      <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
      <link href='https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap' rel='stylesheet' />

      <!-- Icons. Uncomment required icon fonts -->
      <link rel='stylesheet' href='assets/vendor/fonts/boxicons.css' />

      <!-- Core CSS -->
      <link rel='stylesheet' href='assets/vendor/css/core.css' class='template-customizer-core-css' />
      <link rel='stylesheet' href='assets/vendor/css/theme-default.css' class='template-customizer-theme-css' />
      <link rel='stylesheet' href='assets/css/demo.css' />

      <!-- Vendors CSS -->
      <link rel='stylesheet' href='assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css' />

      <!-- Page CSS -->

      <!-- Helpers -->
      <script src='assets/vendor/js/helpers.js'></script>

      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src='assets/js/config.js'></script>
    </head>

    <body>
      <!-- Layout wrapper -->
      <div class='layout-wrapper layout-content-navbar'>
        <div class='layout-container'>
          <!-- Menu -->

          <aside id='layout-menu' class='layout-menu menu-vertical menu bg-menu-theme'>
            <div class='app-brand demo'>
              <a href='./?' class='app-brand-link'>
                <span class='app-brand-logo demo'>
                  <img src='../../www/loga/logo-tribunal_znak.png' width='50' viewBox='0 0 25 42' />
                </span>
                <span class='app-brand-text demo menu-text fw-bolder ms-2'>Editor</span>
              </a>

              <a href='javascript:void(0);' class='layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none'>
                <i class='bx bx-chevron-left bx-sm align-middle'></i>
              </a>
            </div>

            <div class='menu-inner-shadow'></div>

            <ul class='menu-inner py-1'>
              <!-- Dashboard -->
              <li class='menu-item active'>
                <a href='./?' class='menu-link'>
                  <i class='menu-icon tf-icons bx bx-home-circle'></i>
                  <div data-i18n='Analytics'>Zoznam blogov</div>
                </a>
              </li>
              <li class='menu-item'>
                <a href='?new-blog' class='menu-link'>
                  <i class='menu-icon tf-icons bx bx-layout'></i>
                  <div data-i18n='Layouts'>Nový blog / Blog</div>
                </a>
              </li>
              <li class='menu-item'>
                <a href='?galeria' class='menu-link'>
                  <i class='menu-icon tf-icons bx bx-image'></i>
                  <div data-i18n='Layouts'>Galéria</div>
                </a>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->

          <!-- Layout container -->
          <div class='layout-page'>
            <!-- Navbar -->

            <nav class='layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme' id='layout-navbar'>
              <div class='layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none'>
                <a class='nav-item nav-link px-0 me-xl-4' href='javascript:void(0)'>
                  <i class='bx bx-menu bx-sm'></i>
                </a>
              </div>

              <div class='navbar-nav-right d-flex align-items-center' id='navbar-collapse'>
                <ul class='navbar-nav flex-row align-items-center ms-auto'>
                  <!-- User -->
                  <li class='nav-item navbar-dropdown dropdown-user dropdown'>
                    <a class='nav-link dropdown-toggle hide-arrow' href='javascript:void(0);' data-bs-toggle='dropdown'>
                      <div class='avatar avatar-online'>
                        <img src='assets/img/avatars/1.png' alt class='w-px-40 h-auto rounded-circle' />
                      </div>
                    </a>
                    <ul class='dropdown-menu dropdown-menu-end'>
                      <li>
                        <a class='dropdown-item' href='#'>
                          <div class='d-flex'>
                            <div class='flex-shrink-0 me-3'>
                              <div class='avatar avatar-online'>
                                <img src='assets/img/avatars/1.png' alt class='w-px-40 h-auto rounded-circle' />
                              </div>
                            </div>
                            <div class='flex-grow-1'>
                              <span class='fw-semibold d-block'>{$authorLogged}</span>
                              <small class='text-muted'>Editor</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class='dropdown-divider'></div>
                      </li>
                      <li>
                        <a class='dropdown-item' href='?logout'>
                          <i class='bx bx-power-off me-2'></i>
                          <span class='align-middle'>Odhlásiť sa</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
                </ul>
              </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class='content-wrapper'>
              <!-- Content -->

              <div class='container-xxl flex-grow-1 container-p-y'>
                <h4 class='fw-bold py-3 mb-4'><span class='text-muted fw-light'>Editor /</span> Zoznam blogov</h4>

                <!-- Basic Bootstrap Table -->
                <div class='card'>
                  <h5 class='card-header'>Zoznam blogov</h5>
                  <div class='table-responsive text-nowrap'>
                    <table class='table'>
                      <thead>
                        <tr>
                          <th>Názov blogu</th>
                        </tr>
                      </thead>
                      <tbody class='table-border-bottom-0'>"
  ]
];

if (isset($galleryHtml)) {
  $html["showBlogs"]["2"] = "</tbody>
                    </table>
                  </div>
                </div>
                <!--/ Basic Bootstrap Table -->
              </div>
              <!-- / Content -->

              <!-- Footer -->
              <footer class='content-footer footer bg-footer-theme'></footer>
              <!-- / Footer -->

              <div class='content-backdrop fade'></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class='layout-overlay layout-menu-toggle'></div>
      </div>
      <!-- / Layout wrapper -->

      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src='assets/vendor/libs/jquery/jquery.js'></script>
      <script src='assets/vendor/libs/popper/popper.js'></script>
      <script src='assets/vendor/js/bootstrap.js'></script>
      <script src='assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'></script>

      <script src='assets/vendor/js/menu.js'></script>
      <!-- endbuild -->

      <!-- Vendors JS -->

      <!-- Main JS -->
      <script src='assets/js/main.js'></script>

      <!-- Page JS -->
      <script async defer src='https://buttons.github.io/buttons.js'></script>
    </body>
  </html>
";
}

if (isset($blog)) {
  $html["editor"] = "<!DOCTYPE html>
  <!-- beautify ignore:start -->
  <html
    lang='en'
    class='light-style layout-menu-fixed'
    dir='ltr'
    data-theme='theme-default'
    data-assets-path='assets/'
    data-template='vertical-menu-template-free'
  >
    <head>
      <meta charset='utf-8' />
      <meta
        name='viewport'
        content='width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0'
      />
  
      <title>Zoznam blogov | Editor | Tribunal</title>
  
      <meta name='description' content='' />
  
      <!-- Favicon -->
      <link rel='icon' type='image/x-icon' href='assets/img/favicon/favicon.ico' />
  
      <!-- Fonts -->
      <link rel='preconnect' href='https://fonts.googleapis.com' />
      <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
      <link
        href='https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap'
        rel='stylesheet'
      />
  
      <!-- Icons. Uncomment required icon fonts -->
      <link rel='stylesheet' href='assets/vendor/fonts/boxicons.css' />
  
      <!-- Core CSS -->
      <link rel='stylesheet' href='assets/vendor/css/core.css' class='template-customizer-core-css' />
      <link rel='stylesheet' href='assets/vendor/css/theme-default.css' class='template-customizer-theme-css' />
      <link rel='stylesheet' href='assets/css/demo.css' />
  
      <!-- Vendors CSS -->
      <link rel='stylesheet' href='assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css' />
  
      <!-- Page CSS -->
  
      <!-- Helpers -->
      <script src='assets/vendor/js/helpers.js'></script>
  
      <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
      <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
      <script src='assets/js/config.js'></script>
    </head>
  
    <body>
      <!-- Layout wrapper -->
      <div class='layout-wrapper layout-content-navbar'>
        <div class='layout-container'>
          <!-- Menu -->
  
          <aside id='layout-menu' class='layout-menu menu-vertical menu bg-menu-theme'>
            <div class='app-brand demo'>
              <a href='./?' class='app-brand-link'>
                <span class='app-brand-logo demo'>
                <img src='../../www/loga/logo-tribunal_znak.png' width='50' viewBox='0 0 25 42'>
                </span>
                <span class='app-brand-text demo menu-text fw-bolder ms-2'>Editor</span>
              </a>
  
              <a href='javascript:void(0);' class='layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none'>
                <i class='bx bx-chevron-left bx-sm align-middle'></i>
              </a>
            </div>
  
            <div class='menu-inner-shadow'></div>
  
            <ul class='menu-inner py-1'>
              <!-- Dashboard -->
              <li class='menu-item'>
                <a href='./?' class='menu-link'>
                  <i class='menu-icon tf-icons bx bx-home-circle'></i>
                  <div data-i18n='Analytics'>Zoznam blogov</div>
                </a>
              </li>
              
              <li class='menu-item active'>
                <a href='./?new-blog' class='menu-link'>
                  <i class='menu-icon tf-icons bx bx-layout'></i>
                  <div data-i18n='Layouts'>Nový blog / Blog</div>
                </a>
              </li>

              <li class='menu-item'>
                <a href='?galeria' class='menu-link'>
                  <i class='menu-icon tf-icons bx bx-image'></i>
                  <div data-i18n='Layouts'>Galéria</div>
                </a>
              </li>
            </ul>
          </aside>
          <!-- / Menu -->
  
          <!-- Layout container -->
          <div class='layout-page'>
            <!-- Navbar -->
  
            <nav
              class='layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme'
              id='layout-navbar'
            >
              <div class='layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none'>
                <a class='nav-item nav-link px-0 me-xl-4' href='javascript:void(0)'>
                  <i class='bx bx-menu bx-sm'></i>
                </a>
              </div>
  
              <div class='navbar-nav-right d-flex align-items-center' id='navbar-collapse'>
  
                <ul class='navbar-nav flex-row align-items-center ms-auto'>
  
                  <!-- User -->
                  <li class='nav-item navbar-dropdown dropdown-user dropdown'>
                    <a class='nav-link dropdown-toggle hide-arrow' href='javascript:void(0);' data-bs-toggle='dropdown'>
                      <div class='avatar avatar-online'>
                        <img src='assets/img/avatars/1.png' alt class='w-px-40 h-auto rounded-circle' />
                      </div>
                    </a>
                    <ul class='dropdown-menu dropdown-menu-end'>
                      <li>
                        <a class='dropdown-item' href='#'>
                          <div class='d-flex'>
                            <div class='flex-shrink-0 me-3'>
                              <div class='avatar avatar-online'>
                                <img src='assets/img/avatars/1.png' alt class='w-px-40 h-auto rounded-circle' />
                              </div>
                            </div>
                            <div class='flex-grow-1'>
                              <span class='fw-semibold d-block'>{$authorLogged}</span>
                              <small class='text-muted'>Editor</small>
                            </div>
                          </div>
                        </a>
                      </li>
                      <li>
                        <div class='dropdown-divider'></div>
                      </li>
                      <li>
                        <a class='dropdown-item' href='?logout'>
                          <i class='bx bx-power-off me-2'></i>
                          <span class='align-middle'>Odhlásiť sa</span>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <!--/ User -->
                </ul>
              </div>
            </nav>
  
            <!-- / Navbar -->
  
            <!-- Content wrapper -->
            <div class='content-wrapper'>
              <!-- Content -->
  
              <div class='container-xxl flex-grow-1 container-p-y'>
                <h4 class='fw-bold py-3 mb-4'><span class='text-muted fw-light'>Editor /</span> Blog</h4>
                <h2><strong>{$blog['title']}</strong></h2>

                <div style='margin-bottom:1em'>
                  <button onclick='saveBlog();' class='btn btn-primary'>Uložiť s náhľadom</button>
                </div>

                <div>
                  www.softvertribunal.sk/blog/
                  <input id='slug' placeholder='URL slug' value='" . addslashes(preg_replace('/(\d+)-/', '', $blog['urlSlug'])) . "' />
                </div>

                <div id='editormd'>
                  <textarea>{$blog['content']}</textarea>
                </div>

                <div class='gallery in-blog'>
                  <div class='content'>
                    {$galleryHtml}
                  </div>
                </div>

                <div class='snippet'>
                  <div class='content'>
                    <button type='button' class='btn btn-primary' style='float: right;'
                    href='javascript:void(0)' onclick='$(\".snippet\").fadeOut();'
                    >X</button></p>

                    Pre vloženie obrázku do blogu je potrebné do titulu vložiť nasledovný text:

                    <input value='' />
                    <button type='button' class='btn btn-primary'
                      href='javascript:void(0)'
                      onclick='
                        var input = $(\".snippet input\").get(0);
                        input.select();
                        input.setSelectionRange(0, 99999); /* For mobile devices */
                        navigator.clipboard.writeText(input.value);
                        $(\".snippet\").fadeOut();
                      '
                    >Skopírovať text do schránky a zavrieť toto okno</button>
                  </div>
                </div>
              </div>
              <!-- / Content -->
  
              <!-- Footer -->
              <footer class='content-footer footer bg-footer-theme'>
              </footer>
              <!-- / Footer -->
  
              <div class='content-backdrop fade'></div>
            </div>
            <!-- Content wrapper -->
          </div>
          <!-- / Layout page -->
        </div>
  
        <!-- Overlay -->
        <div class='layout-overlay layout-menu-toggle'></div>
      </div>
      <!-- / Layout wrapper -->
  
      <!-- Core JS -->
      <!-- build:js assets/vendor/js/core.js -->
      <script src='assets/vendor/libs/jquery/jquery.js'></script>
      <script src='assets/vendor/libs/popper/popper.js'></script>
      <script src='assets/vendor/js/bootstrap.js'></script>
      <script src='assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'></script>
  
      <script src='assets/vendor/js/menu.js'></script>
      <!-- endbuild -->
  
      <!-- Vendors JS -->
  
      <!-- Main JS -->
      <script src='assets/js/main.js'></script>
  
      <!-- Page JS -->
  
      <!-- Place this tag in your head or just before your close body tag. -->
      <script async defer src='https://buttons.github.io/buttons.js'></script>

      <script src='editormd/jquery.min.js'></script>
      <script src='editormd/editormd.js'></script>
      <script type='text/javascript'>
        editormd('editormd', {
          width: '100%',
          height: 'calc(100vh - 440px)',
          syncScrolling : 'single',
          path: 'editormd/',
          // imageUpload: false,
          // imageFormats: ['jpg', 'jpeg', 'gif', 'png', 'bmp', 'webp'],
          // imageUploadURL: './upload.php',
        });

        function utf8Tob64(str) {
          return window.btoa(unescape(encodeURIComponent( str )));
        }

        function b64ToUtf8(str) {
          return decodeURIComponent(escape(window.atob( str )));
        }

        function redirectToNewBlog(str){
          let slugToCheck = '" . addslashes($blogToEdit) . "';
          if (slugToCheck == ''){
            window.location.replace('../editor/?b=' + " . $slugNumber . " + '-' + $('#slug').val());
          } else {
            var extract = str.match(/^(\d+)-/)[0];
            console.log(extract);
            if (extract) {
              window.location.replace('../editor/?b='  + extract +  $('#slug').val());
            }
          }
        }

        function previewBlog() {
          window.open('../../blog/' + $('#slug').val());
        }

        function saveBlog() {
          let content = $('#editormd textarea').val();
          let slug = $('#slug').val();

          $.ajax({
            'type': 'POST',
            'url': 'save.php',
            'data': {'originalSlug': '" . addslashes($blogToEdit) . "', 'slug': slug, 'content': utf8Tob64(content)},
            'success': function(res) {
              alert(res);
              previewBlog();
              redirectToNewBlog('" . addslashes($blogToEdit) . "');
            }
          });
        }

        function showSnippetToAdd(string) {
          let snippet = $('.snippet');
          snippet.find('input').val(string);
          snippet.show();
        }
      </script>
      <link rel='stylesheet' href='editormd/editormd.css' />
      <style>
        .snippet {
          display: none;
          position: fixed;
          top: 0px;
          left: 0px;
          width: 100vw;
          height: 100vh;
          background: rgba(255,255,255,0.95);
          z-index: 9999;
        }

        .snippet .content {
          margin: 1em;
          padding: 3em;
          background: white;
          border: 2px solid #EEEEEE;
        }

        .snippet .content input {
          width: 100%;
          font-size: 2em;
          margin: 1em 0;
        }

        #slug {
          width: 100%;
          font-size: 2em;
          color: #722265;
          margin-bottom: 1em;
        }
      </style>
    </body>
  </html>
  ";
}

if ($gallery) {
  $html["gallery"] = "<!DOCTYPE html>
<!-- beautify ignore:start -->
<html lang='en' class='light-style layout-menu-fixed' dir='ltr' data-theme='theme-default' data-assets-path='assets/' data-template='vertical-menu-template-free'>
  <head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0' />

    <title>Galéria | Editor | Tribunal</title>

    <meta name='description' content='' />

    <!-- Favicon -->
    <link rel='icon' type='image/x-icon' href='assets/img/favicon/favicon.ico' />

    <!-- Fonts -->
    <link rel='preconnect' href='https://fonts.googleapis.com' />
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin />
    <link href='https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap' rel='stylesheet' />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel='stylesheet' href='assets/vendor/fonts/boxicons.css' />

    <!-- Core CSS -->
    <link rel='stylesheet' href='assets/vendor/css/core.css' class='template-customizer-core-css' />
    <link rel='stylesheet' href='assets/vendor/css/theme-default.css' class='template-customizer-theme-css' />
    <link rel='stylesheet' href='assets/css/demo.css' />

    <!-- Vendors CSS -->
    <link rel='stylesheet' href='assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css' />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src='assets/vendor/js/helpers.js'></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src='assets/js/config.js'></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class='layout-wrapper layout-content-navbar'>
      <div class='layout-container'>
        <!-- Menu -->

        <aside id='layout-menu' class='layout-menu menu-vertical menu bg-menu-theme'>
          <div class='app-brand demo'>
            <a href='./?' class='app-brand-link'>
              <span class='app-brand-logo demo'>
                <img src='../../www/loga/logo-tribunal_znak.png' width='50' viewBox='0 0 25 42' />
              </span>
              <span class='app-brand-text demo menu-text fw-bolder ms-2'>Editor</span>
            </a>

            <a href='javascript:void(0);' class='layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none'>
              <i class='bx bx-chevron-left bx-sm align-middle'></i>
            </a>
          </div>

          <div class='menu-inner-shadow'></div>

          <ul class='menu-inner py-1'>
            <!-- Dashboard -->
            <li class='menu-item'>
              <a href='./?' class='menu-link'>
                <i class='menu-icon tf-icons bx bx-home-circle'></i>
                <div data-i18n='Analytics'>Zoznam blogov</div>
              </a>
            </li>
            <li class='menu-item'>
              <a href='?new-blog' class='menu-link'>
                <i class='menu-icon tf-icons bx bx-layout'></i>
                <div data-i18n='Layouts'>Nový blog / Blog</div>
              </a>
            </li>
            <li class='menu-item active' >
              <a href='?galeria' class='menu-link'>
                <i class='menu-icon tf-icons bx bx-image'></i>
                <div data-i18n='Layouts'>Galéria</div>
              </a>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class='layout-page'>
          <!-- Navbar -->

          <nav class='layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme' id='layout-navbar'>
            <div class='layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none'>
              <a class='nav-item nav-link px-0 me-xl-4' href='javascript:void(0)'>
                <i class='bx bx-menu bx-sm'></i>
              </a>
            </div>

            <div class='navbar-nav-right d-flex align-items-center' id='navbar-collapse'>
              <ul class='navbar-nav flex-row align-items-center ms-auto'>
                <!-- User -->
                <li class='nav-item navbar-dropdown dropdown-user dropdown'>
                  <a class='nav-link dropdown-toggle hide-arrow' href='javascript:void(0);' data-bs-toggle='dropdown'>
                    <div class='avatar avatar-online'>
                      <img src='assets/img/avatars/1.png' alt class='w-px-40 h-auto rounded-circle' />
                    </div>
                  </a>
                  <ul class='dropdown-menu dropdown-menu-end'>
                    <li>
                      <a class='dropdown-item' href='#'>
                        <div class='d-flex'>
                          <div class='flex-shrink-0 me-3'>
                            <div class='avatar avatar-online'>
                              <img src='assets/img/avatars/1.png' alt class='w-px-40 h-auto rounded-circle' />
                            </div>
                          </div>
                          <div class='flex-grow-1'>
                            <span class='fw-semibold d-block'>{$authorLogged}</span>
                            <small class='text-muted'>Editor</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class='dropdown-divider'></div>
                    </li>
                    <li>
                      <a class='dropdown-item' href='?logout'>
                        <i class='bx bx-power-off me-2'></i>
                        <span class='align-middle'>Odhlásiť sa</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class='content-wrapper'>
            <!-- Content -->

            <div class='container-xxl flex-grow-1 container-p-y'>
              <h4 class='fw-bold py-3 mb-4'><span class='text-muted fw-light'>Editor /</span> Galéria</h4>
              <form action='' method='post' enctype='multipart/form-data'>
                <input type='hidden' name='gallery_upload_new_image' value='1' />
                <input type='file' name='gallery_new_image' />
                <input type='submit' value='Nahrať obrázok' class='btn btn-primary' />
              </form>
                  
              <div class='card'>
                <h5 class='card-header'>Galéria</h5>
                <div class='gallery'>
                  <div class='content'>
                    {$galleryHtml}
                  </div>
                </div>
              </div>
              <br />
              <br />
              <style>
                input::file-selector-button {
                  color: #fff;
                  background-color: #722265;
                  border-color: #722265;
                  box-shadow: 0 0.125rem 0.25rem 0 rgba(105, 108, 255, 0.4);
                  display: inline-block;
                  font-weight: 400;
                  line-height: 1.53;
                  text-align: center;
                  vertical-align: middle;
                  cursor: pointer;
                  -webkit-user-select: none;
                  -moz-user-select: none;
                  user-select: none;
                  border: 1px solid transparent;
                  padding: 0.4375rem 1.25rem;
                  font-size: 0.9375rem;
                  border-radius: 0.375rem;
                  transition: all 0.2s ease-in-out;
                }
                input::file-selector-button:hover {
                  color: #fff;
                  background-color: #a73393;
                  border-color: #a73393;
                  transform: translateY(-1px);
                }
              </style>
              
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class='content-footer footer bg-footer-theme'></footer>
            <!-- / Footer -->

            <div class='content-backdrop fade'></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class='layout-overlay layout-menu-toggle'></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src='assets/vendor/libs/jquery/jquery.js'></script>
    <script src='assets/vendor/libs/popper/popper.js'></script>
    <script src='assets/vendor/js/bootstrap.js'></script>
    <script src='assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'></script>

    <script src='assets/vendor/js/menu.js'></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src='assets/js/main.js'></script>

    <!-- Page JS -->
    <script async defer src='https://buttons.github.io/buttons.js'></script>
  </body>
</html>
";
}
