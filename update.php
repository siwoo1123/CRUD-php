<?php
function print_title(){
  if(isset($_GET['id'])){
    echo $_GET['id'];
  } else {
    header('Location: /index.php?id=');
  }
}
function print_description(){
  if(isset($_GET['id'])){
    echo file_get_contents("data/".$_GET['id']);
  } else {
    echo "Hello, PHP";
  }
}
function print_list(){
  $list = scandir('./data');
  $i = 0;
  while($i < count($list)){
    if($list[$i] != '.') {
      if($list[$i] != '..') {
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
      }
    }
    $i = $i + 1;
  }
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <?php if($_GET['id'] === "궁금해할꺼"){?>
      <script>
        alert('공지는 수정하실 수 없습니다.');
        location.href = "read.php?id=<?= $_GET['id'] ?>";
      </script>
    <?php } ?>
    <h1>글 수정</h1>
     <form action="update_process.php" method="post">
       <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
       <p>
         <input type="text" name="title" placeholder="Title" value="<?php print_title(); ?>">
       </p>
       <p>
         <textarea name="description" placeholder="Description" rows="4"><?php print_description(); ?></textarea>
       </p>
       <p>
         <input type="submit">
       </p>
     </form>
  </body>
</html>
