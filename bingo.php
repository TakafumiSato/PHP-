

<?php

class BingoSheet{
  // public $sheet = array(
  //                 array(0,0,0,0,0),
  //                 array(0,0,0,0,0),
  //                 array(0,0,0,0,0),
  //                 array(0,0,0,0,0),
  //                 array(0,0,0,0,0));
  private $sheet;

  public function setSheet ($sheet) {
    $this->sheet = $sheet;
  }
  public function getSheet () {
    return $this->sheet;
  }

  public function __construct (){
    $this->initSheet();
  }

  private function initSheet () {
    // 横ループ
    for ($x = 0; $x < 5; $x++) {
      $numbers = range($x*15+1,$x*15+15);
      shuffle($numbers);
      $this->sheet[$x] = array_slice($numbers,0,5);
    }

    // 真ん中をFREEに
    $this->sheet[2][2] = "FREE";
  }
}

 ?>

<!DOCTYPE html>
<html lang="ja" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BINGO</title>
    <link rel="stylesheet" type="text/css" href="bingoStyle.css"/>
  </head>
  <body>
    <?php $bingoSheet = new BingoSheet(); ?>
    <div id="container">
      <table width = 400 height = 460 style="table-layout:fixed;">
        <tr class="title">
          <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
        </tr>

        <?php for ($i = 0; $i < 5; $i++): ?>
          <tr align = center>
            <?php for ($j = 0; $j < 5; $j++): ?>
              <?php $sheet = $bingoSheet->getSheet(); ?>
              <td><?php echo $sheet[$j][$i] ?></td>
            <?php endfor; ?>
          </tr>
        <?php endfor; ?>
      </table>
    </div>
  </body>
</html>
