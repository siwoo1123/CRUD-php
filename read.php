<?php
  if(isset($_GET['id'])) {
    $title = $_GET['id'];
  } else {
    header('Location: /index.php');
  }
?>
<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
  </head>
  <style>
    body{
      margin: 0;
    }
    a {
      text-decoration: none;
      color: black;
    }
    a:hover {
      text-decoration: underline;
      color: blue;
    }
    h1 {
      text-align: center;
      border-bottom:3px solid gray;
      margin: 0;
      padding-bottom: 22px;
      padding-top: 22px;
      font-size:51px;
    }
    div {
      margin-top: 17px;
      padding-left: 10px;
    }
  </style>
  <body>
    <h1><?php echo $title; ?></h1>
    <center>
      <a href="/index.php">돌아가기</a><br>
      <a href="update.php?id=<?= $_GET['id']; ?>">글 수정하기</a>
      <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?=$_GET['id']?>">
        <input type="submit" value="삭제">
      </form>
    </center>
    <div>
      <?php
        echo file_get_contents("data/".$_GET['id']);
      ?>
    </div>
    <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://read-3.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                            <script id="dsq-count-scr" src="//read-3.disqus.com/count.js" async></script>
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f827dfc4704467e89f664e0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
  </body>
</html>
