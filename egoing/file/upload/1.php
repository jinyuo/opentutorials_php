<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      var_dump($_FILES);
      //exit;
      ini_set("display_errors", "1");//php 설정을 런타임으로 지정
      //임시 디렉토리에서 파일을 이동시킬 디렉토리 지정
      $uploaddir = '/Users/user/Documents/php/file/upload/';
      //userfile = 파일컨트롤에 저장된 값, name = 파일의 원래 이름
      //basename : 파일의 이름이 정확하게 해당 파일을 의미하도록 함. 경로 정보 포함하지 않음. 즉, 파일로서의 의미만 가지도록 함.
      $uploadfile = $uploaddir. basename($_FILES['userfile']['name']);
      echo "<pre>";

      //tmp_nane : 업로드 된 파일이 최초로 위치하고 있는 임시 디렉토리
      //move_uploaded_file 내에 보안 상 문제가 없는지 체크하는 로직 포함
      //true | false 리턴
      if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $uploadfile)) {
        echo "파일이 유효하고, 성공적으로 업로드되었습니다.\n";
      }else {
        print "파일 업로드 공격의 가능성이 있습니다.\n";
      }

      echo "자세한 디버깅 정보입니다:";
      print_r($_FILES);//var_dump와 유사
      print "</pre>";
     ?>

     //url 사용. 앞에 도메인을 정하지 않았으므로 상대경로 지정됨.
     <img src="<?=$_FILES['userfile']['name']?>"/>
  </body>
</html>
