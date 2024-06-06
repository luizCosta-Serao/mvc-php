<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo INCLUDE_PATH_FULL; ?>/css/style.css">
  <title><?php echo self::titulo; ?></title>
</head>
<body>
  <header class="header">
    <div class="logo">
      <h2>ProjectMVC</h2>
    </div>
    <nav class="menu">
      <ul>
        <?php
          foreach ($this->menuItems as $key => $value) {
            echo '<li><a href="'.INCLUDE_PATH.'/'.strtolower($value).'">'.$value.'</a></li>';
          }
        ?>
      </ul>
    </nav>
  </header>
  