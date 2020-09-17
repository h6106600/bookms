<div class="jumbotron text-center">
  <h1><strong>圖書館管理系統</strong></h1>
</div>

<br>

<div class="container">
  <h2>sign up</h2>
  <form action="<?= base_url(); ?>home/sign_up" method="post">
    <div class="form-group">
      <label for="name"">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>