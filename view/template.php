<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://bootswatch.com/3/darkly/bootstrap.css">

      <style>
          body {
              margin: 0;
              font-family: Arial, Helvetica, sans-serif;
          }
          .topnav {
          overflow: hidden;
          }
          label.xrequired:after {
          content: '*(此欄位為必填) ';
          color: red;
          }
          .topnav-right {
          float: right;
          }
          .topnav a {
          float: left;
          color: #f2f2f2;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          font-size: 17px;
          }
      </style>
  </head>
  <body>
  <nav class="navbar navbar-default">
      <div class="topnav">
        <a class="active" href="#home">通訊錄</a>
          <div class="topnav-right">
              <a>PHP-MVC-CRUD</a>
          </div>
      </div>
    </nav>

    <div class="container">
        <?= $isi ?>
    </div>
    <!-- <script src="http://localhost/pdomvc/asset/js/jquery.min.js"></script>
    <script src="http://localhost/pdomvc/asset/css/js/bootstrap.min.js"></script> -->
  </body>
</html>