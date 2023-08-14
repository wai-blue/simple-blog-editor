<?php

  $user = $_POST['user'] ?? "";
  $password = $_POST['password'] ?? "";
  $logout = isset($_GET['logout']);

  if ($logout) {
    unset($_SESSION['authorLogged']);
    header("Location: ?");
    exit;
  }

  $authorLogged = $_SESSION['authorLogged'] ?? NULL;

  if (!empty($user) && !empty($password)) {
    switch ($user . "-" . $password) {
      case "admin-admin":
        $authorLogged = "Admin";
      break;
    }
  }

  $_SESSION['authorLogged'] = $authorLogged;
