<div class="jumbotron text-center">
  <h1><strong>圖書館管理系統</strong></h1>
</div>

<br>

<div class="container">
  <h3>書籍:</h3><br>
  <div class="row">
    <div class="col-sm-12">
      <?php foreach($data as $k => $v):  ?>
          <p>
            <?= ($k=$k+1); ?>. <?= $v['book_name']; ?>
          </p>
      <?php endforeach ?>
    </div>
  </div>
</div>
