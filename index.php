<?php

  session_start();
  require 'config/database.php';
  require 'config/session.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body style="background-color: #d9d9d9;">
    <?php
      # menampilkan header
      require 'partials/header.php';
      # mendapatkan path berdasarkan role
      require 'partials/pathByRole.php'
    ?>

    <div style="background-color: #ffffff; padding:0px 24px 0px 24px; margin:24px">
      <table width="100%">
        <tr>
          <td align="left" style="border-bottom: 6px solid #d9d9d9;">
            <h1>Portofolio Performance</h1>
          </td>
        </tr>
        <tr>
          <td>
            <img src="<?= $portofolioPerformancePath ?>" alt="" width="100%">
          </td>
        </tr>
      </table>
    </div>

    <div style="background-color: #ffffff;  margin:24px">
      <table width="100%" cellspacing="0" cellpadding="0" style="border:none">
        <tr>
          <td width="40%" style="border-bottom: 6px solid #d9d9d9; border-right:24px solid #d9d9d9;"><h1>Onsite Survey</h1></td>
          <td width="30%" style="border-bottom: 6px solid #d9d9d9;"><h1>Timeline</h1></td>
          <td width="30%" style="border-bottom: 6px solid #d9d9d9; border-left:24px solid #d9d9d9;"><h1>Messages</h1></td>
        </tr>
        <tr>
          <td style="border-right:24px solid #d9d9d9;"><img src="<?= $onsiteSurveyPath ?>" alt="" width="100%"></td>
          <td><img src="<?= $timelinePath ?>" alt="" width="100%"></td>
          <td style="border-left:24px solid #d9d9d9;"><img src="<?= $messagesPath ?>" alt="" width="100%"></td>
        </tr>
      </table>
    </div>
  </body>
</html>
