<!DOCTYPE html>
<html lang="ko" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>게시판 - 글 생성</title>
  </head>
  <body>
    <h1>글생성</h1>
    <form action="create_process.php" method="post">
      <p>
        <input type="text" name="title" placeholder="제목">
      </p>
      <p>
        <textarea name="description" placeholder="내용" rows="4"></textarea>
      </p>
      <p>
        <input type="submit">
      </p>
    </form>
  </body>
</html>
