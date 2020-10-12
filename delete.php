<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>삭제</title>
  </head>
  <body>
    <?php if($_POST['id'] === "궁금해할꺼"){?>
      <script>
        alert('공지는 삭제하실 수 없습니다.');
        location.href = "read.php?id=<?= $_POST['id'] ?>";
      </script>
    <?php } ?>
    <h1>삭제하시겠습니까?</h1>
    <a href="read.php?id=<?=$_POST['id']?>">아니요.</a>
    <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?=$_POST['id']?>">
        <input type="submit" value="네!(삭제)">
    </form>
  </body>
</html>
