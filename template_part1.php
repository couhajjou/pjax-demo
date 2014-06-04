<!DOCTYPE html>
<html>
<head>
  <script src="../bower_components/jquery/dist/jquery.js"></script>
  <script src="../bower_components/jquery-pjax/jquery.pjax.js"></script>
  <script>
    $(function(){
      $(document).pjax('a', '#main')
    })
  </script>
</head>
<body>
  <h1>My Site</h1>
  <p>Current time is <? echo date('Y-m-d H:i:s') ?> </p>
  <div id="main">
