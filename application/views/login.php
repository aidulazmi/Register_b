<!DOCTYPE html>
<html>
<head>
	<title>Login Multi Level Menggunakan Framework Codeneigter</title>
</head>
<body>

			<center>
				<label style="font-size: 50px;">Form Login Sederhana</label>
				
				<form action="<?php echo site_url('c_login/index')?>" method="post">

					<p>
						<label>Username</label>
						<input type="text" name="username" placeholder="Please Input Username" required>
					</p>
					
					<p>
						<label>Password</label>
						<input type="Password" name="password" placeholder="Please Input Password" required>
					</p>

					<p>
						<button type="submit" value="Simpan">Simpan</button>
						<button type="reset" value="reset">Reset</button>
					</p>
				</form>

				<a href="<?php echo site_url('c_register')?>"><label>Register</label></a>
			</center>

</body>
</html>