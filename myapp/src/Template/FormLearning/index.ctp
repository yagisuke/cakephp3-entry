<h1>Form Learning!</h1>
<h2>文字列入力</h2>
<form method="get" action="/formLearning/sendGetForm">
  <input type="text" name="text1" />
  <br />
  <input type="checkbox" name="check1" id="c1" />
  <lable for="c1">チェックボックス</lable>
  <br />
  <input type="radio" name="radio1" id="r1" value="No.1" />
  <lable for="r1">ラジオ1</lable>
  <br />
  <input type="radio" name="radio1" id="r2" value="No.2" />
  <lable for="r2">ラジオ2</lable>
  <br />
  <select name="select1">
    <option value="Windows">Windows</option>
    <option value="Linux">Linux</option>
    <option value="MacOSX">MacOSX</option>
  </select>
  <input type="submit" />
</form>
