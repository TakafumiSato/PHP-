
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>input_lesson</title>
  </head>
  <body>
    入力フォームです。名前を入力してください。
    <!-- form actionでページ遷移先指定 method=postでurlとは別にデータを転送 -->
    <form action="input_lesson_result.php" method="post">
      <!-- table テーブルを作成 border属性で枠をつける -->
      <table border="1">
        <!-- tr テーブルの横一列 -->
        <tr>
          <!-- td 並ぶデータ -->
          <!-- th 並ぶヘッダ -->
          <td>名前</td>
          <td><input type="text" name="name"/></td>
          <td>
            <input type="submit" value="入力">
          </td>
        </tr>
      </table>
    </form>

  </body>
</html>
