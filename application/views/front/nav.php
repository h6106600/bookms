<nav class="navbar navbar-expand-sm bg-dark navbar-dark justify-content-center">
  <a class="navbar-brand" href="#">
    <?php if(!empty($_SESSION['user'])) echo $_SESSION['user']; ?>
  </a>
  <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>">首頁</a>
    </li>
    <?php if(empty($_SESSION['user'])): ?>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url(); ?>home/login">用戶登入</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url(); ?>home/sign_up">用戶註冊</a>
    </li>
    <?php else: ?>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url(); ?>home/logout">用戶登出</a>
    </li>
    <?php endif; ?>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url(); ?>home/admin">管理者登入</a>
    </li>
  </ul>
</nav>