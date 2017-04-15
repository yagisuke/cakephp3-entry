<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>test ajax</title>
</head>
<body>
  <h1>Ajax</h1>
  <form>
    <label for="name">名前</label>
    <input id="name" type="text" name="name" size="15" />
    <input id="btn" type="button" name="submit" value="送信" />
  </form>
  <div id="result"></div>
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function(){
      document.getElementById('btn').addEventListener('click', function() {
        var result = document.getElementById('result');
        var xhr = new XMLHttpRequest();

        xhr.addEventListener('loadstart', function() {
          result.textContent = '通信中...';
        }, false);

        xhr.addEventListener('load', function() {
          result.textContent = xhr.responseText;
        }, false);

        xhr.addEventListener('error', function() {
          result.textContent = 'サーバーエラーが発生しました';
        }, false);

        xhr.open('POST', 'testApi/', true);
        xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
        xhr.send('name=' + encodeURIComponent(document.getElementById('name').value));
      }, false);
    }, false);
  </script>
</body>
</html>
