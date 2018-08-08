<!DOCTYPE html>
<html>
  <body>
    <?php
      echo "1 == '1' : ";
      //==는 값만 같으면 true
      var_dump(1 == "1"); //bool(true)
      echo "<br/>1 === '1' : ";
      //===는 형식까지 같아야 true
      var_dump(1 === "1"); //bool(false)
    ?>
  </body>
</html>
