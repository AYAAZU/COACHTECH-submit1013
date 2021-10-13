<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
  .kuku{
    border-collapse: collapse;
  }
  .kuku td{
    border: 1px solid #000;
    border-collapse: collapse;
  }
  </style>
  <title>問題1</title>
</head>

<body>
<table   class="kuku">
<?php
for($i=1;$i<10;$i++){
  echo "<tr>";
    for($j=1;$j<10;$j++){
      $mp = $i*$j;
      echo "<td>$mp</td>";
    };
  echo "</tr>";
};
?>
</table>
</body>
</html>