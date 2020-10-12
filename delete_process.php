<?php if($_POST['id'] == "궁금해할꺼"){?>
  <script>
    alert('공지는 삭제하실 수 없습니다.');
    location.href = "read.php?id=<?= $_GET['id'] ?>";
  </script>
<?php } ?>
<?php
unlink('data/'.$_POST['id']);
header('Location: /index.php');
?>
