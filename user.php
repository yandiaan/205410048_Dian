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
      <div class="table-content" id="data-pengguna">
        <table class="center">
          <thead>
            <tr>
              <th colspan="2">Data Pengguna React Native</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Tahun 2016</td>
              <td>2569 Orang</td>
            </tr>
            <tr>
              <td>Tahun 2017</td>
              <td>5869 Orang</td>
            </tr>
            <tr>
              <td>Tahun 2018</td>
              <td>7665 Orang</td>
            </tr>
            <tr>
              <td>Tahun 2019</td>
              <td>8897 Orang</td>
            </tr>
            <tr>
              <td>Tahun 2020</td>
              <td>9865 Orang</td>
            </tr>
            <tr>
              <td>Tahun 2021</td>
              <td>10.869 Orang</td>
            </tr>
          </tbody>
        </table>
      </div>
    </main>
    <footer class="center">
      <p>&copy; Dian Setiawan - 2021</p>
    </footer>
    <script src="aset/func.js"></script>
  </body>
</html>
