<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?=base_url();?>assets/css/style_login.css">
</head>
<body>
<form class="box" action="<?=site_url('Login/aksi_login');?>" method="post">
<h2>Sistem Informasi Desa Sambangan</h2>
<img src="<?=base_url();?>assets/img/logo.jpg" class="logo">
 <h1>Selamat Datang di Sistem Informasi Desa Sambangan</h1>
 <input type="text" name="username" placeholder="Username" required>
 <input type="password" name="password" placeholder="Password" required>
 <input class="submit" type="submit" name="" value="Login">
 <a  class="cancel" type="submit" href="<?=site_url('Bookingtravel/Home')?>">Cancel</a>
 <div class="container signin">
<p>Belum punya akun? <a href="<?=site_url('Bookingtravel/form_register')?>">Register</a>.</p>
</div>
</form>

</body>
</html>