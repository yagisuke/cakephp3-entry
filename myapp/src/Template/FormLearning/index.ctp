<h1>Form Learning!</h1>
<h2>getで送信</h2>
<form method="get" action="/formLearning/sendGetForm">
  <input type="text" name="text1" />
  <br />
  <lable for="c1">
    <input type="checkbox" name="check1" id="c1" />
    チェックボックス
  </lable>
  <br />
  <lable for="r1">
    <input type="radio" name="radio1" id="r1" value="No.1" />
    ラジオ1
  </lable>
  <br />
  <lable for="r2">
    <input type="radio" name="radio1" id="r2" value="No.2" />
    ラジオ2
  </lable>
  <br />
  <select name="select1">
    <option value="Windows">Windows</option>
    <option value="Linux">Linux</option>
    <option value="MacOSX">MacOSX</option>
  </select>
  <input type="submit" />
</form>
<h2>postで送信</h2>
<form method="post" action="/formLearning/sendPostForm">
  <input type="text" name="text2" />
  <br />
  <lable for="c2">
    <input type="checkbox" name="check2" id="c2" />
    チェックボックス
  </lable>
  <br />
  <lable for="r3">
    <input type="radio" name="radio2" id="r3" value="No.1" />
    ラジオ1
  </lable>
  <br />
  <lable for="r4">
    <input type="radio" name="radio2" id="r4" value="No.2" />
    ラジオ2
  </lable>
  <br />
  <select name="select2">
    <option value="Windows">Windows</option>
    <option value="Linux">Linux</option>
    <option value="MacOSX">MacOSX</option>
  </select>
  <input type="submit" />
</form>
