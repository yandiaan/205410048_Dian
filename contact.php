<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Tag Meta untuk kebutuhan Responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Title Bar dan Favicon -->
    <link rel="shortcut icon" href="aset/favicon.png" />
    <title>React Native Indonesia</title>

    <!-- CSS File -->
    <link rel="stylesheet" href="aset/style.css" />
  </head>
  <body>
    <header>
      <div class="landing">
        <div class="card welcome">
          <h1>Hai, Selamat Datang</h1>
          <p>Mau tau lebih tentang react native?</p>
          <a href="#navbar" class="btn1"> Ayo Mulai!</a>
        </div>
      </div>
      <div class="navbar" id="navbar">
        <nav class="container">
          <h1 class="title">React Native</h1>
          <ul class="none">
            <li><a href="index.php" class="nav-btn">Home</a></li>
            <li><a href="user.php" class="nav-btn">User</a></li>
            <li><a href="contact.php" class="nav-btn">Contact Us</a></li>
          </ul>
          <a class="navbtn-toggle">&#9776;</a>
        </nav>
      </div>
    </header>
    <main>
      <div class="container card" id="contact">
        <img src="aset/contact.png" class="img-contact" />
        <form action="#" class="form-contact">
          <h1 class="center title-contact">Contact Me</h1>
          <input
            type="text"
            class="form nama"
            name="firstName"
            placeholder="Nama Depan"
            required
          />
          <input
            type="text"
            class="form nama"
            name="lastName"
            placeholder="Nama Belakang"
            required
          />
          <input type="email" name="email" placeholder="Email" class="form" />
          <textarea
            name="pesan"
            class="form"
            cols="30"
            rows="10"
            placeholder="Pesan Anda......."
          ></textarea>
          <input type="submit" class="btn2 btn-submit" value="Send" />
        </form>
      </div>
    </main>
    <footer class="center">
      <p>&copy; Dian Setiawan - 2021</p>
    </footer>
    <script src="aset/func.js"></script>
  </body>
</html>
