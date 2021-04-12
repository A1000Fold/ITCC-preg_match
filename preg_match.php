<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php
    $userinfo = "<b>https://</b> domain: <b>stackoverflow.com/</b> <br> webpage: <b>questions</b>";
    preg_match_all ("/<b>(.*)<\/b>/U", $userinfo, $pat_array);
    print $pat_array[0][0]."".$pat_array[0][1];
    echo "<br>the domain is: ";
    print $pat_array[0][1];
    ?>
  </body>
</html>