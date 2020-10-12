<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SiUber - 게시판</title>
    <link rel="stylesheet" href="https:stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https:code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https:cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https:stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </head>
  <style>
    h1 {
      font-size: 71px;
    }
    h1 span:nth-child(1) {
      color: #4385f3;
    }

    h1 span:nth-child(2) {
      color: #ea4435;
    }
    h1 span:nth-child(3) {
      color: #fbbc04;
    }
    h1 span:nth-child(4) {
      color: #4385f3;
    }
    h1 span:nth-child(5) {
      color: #33a952;
    }
    h1 span:nth-child(6) {
      color: #ea4435;
    }

    .center {
      text-align: center;
    }
    a {
      text-decoration: none;
      color: black;
    }
    a:hover {
      text-decoration: underline;
      color: blue;
    }
    .gon {
      border:3px solid black;
      width: 325px;
    }
  </style>
  <body>
    <h1 class="center"><span>S</span><span>i</span><span>U</span><span>b</span><span>e</span><span>r</span> 게시판</h1>
    <center>
      <p>
        <div class="gon">
          <h3>공지</h3>
          <p><a href="read.php?id=궁금해할꺼">1.궁금해할꺼</a></p>
        </div>
        <a href="create.php">글 생성</a>
      </p>
    </center>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">번호</th>
          <th scope="col">제목</th>
          <th scope="col">수정</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $list = scandir('./data');
          $i = 0;
          $a = 0;
          while($i < count($list)){
            if($list[$i] != '.') {
              if($list[$i] != '..') {
                $a = $a + 1;
                echo "<tr><th scope=\"col\"><a href=\"read.php?id=$list[$i]\">$a</a></th><td><a href=\"read.php?id=$list[$i]\">$list[$i]</a></td><td><a href=\"update.php?id=$list[$i]\">수정</a></td>";
              }
            }
            $i = $i + 1;
          }
         ?>
      </tbody>
    </table>
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
