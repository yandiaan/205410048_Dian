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
      <div class="main-content">
        <div id="content" class="center container column">
          <h1>Apa itu React Native?</h1>
          <p>
            React Native adalah kerangka kerja perangkat lunak UI open-source
            yang dibuat oleh Meta Platforms, Inc. Ini digunakan untuk
            mengembangkan aplikasi untuk Android, Android TV, iOS, macOS, tvOS,
            Web, Windows, dan UWP dengan memungkinkan pengembang menggunakan
            kerangka kerja React bersama dengan kemampuan platform asli.
          </p>
          <h1 style="margin-top: 100px">Kenapa React Native?</h1>
          <div id="content-item">
            <article class="card">
              <h2>Mudah</h2>
              <img src="aset/1.png" />
              <p>
                React dirender ke UI platform asli, artinya aplikasi Anda
                menggunakan API platform asli yang sama dengan yang dilakukan
                aplikasi lain.
              </p>
            </article>
            <article class="card default">
              <h2>Banyak platform</h2>
              <img src="aset/2.png" />
              <p>
                Buat versi komponen khusus platform sehingga satu basis kode
                dapat berbagi kode di seluruh platform. Dengan React Native,
                satu tim dapat memelihara dua platform dan berbagi teknologi
                yang sama—React.
              </p>
            </article>
            <article class="card">
              <h2>Cepat</h2>
              <img src="aset/3.png" />
              <p>
                Komponen React membungkus kode asli yang ada dan berinteraksi
                dengan API asli melalui paradigma UI deklaratif dan JavaScript
                React. Ini memungkinkan pengembangan aplikasi asli untuk tim
                pengembang yang sama sekali baru, dan memungkinkan tim asli yang
                ada bekerja lebih cepat.
              </p>
            </article>
          </div>
        </div>

        <aside class="card center" id="founder">
          <h2>Penulis Artikel</h2>
          <img src="aset/dian.jpg" id="profile" />
          <p>Dian Setiawan</p>
          <blockquote>Kita adalah apa yang kita percayai</blockquote>
          <p>
            Saya seorang mahasiswa Informatika semester 3 yang senang
            mempelajari hal-hal baru serta suka bekerja sama dalam sebuat tim.
          </p>
          <ul class="socmed">
            <li>
              <a href="https://instagram.com/yandian.s"
                ><img src="aset/instagram.png"
              /></a>
            </li>
            <li>
              <a href="facebook.com">
                <img src="aset/facebook.png" />
              </a>
            </li>
            <li>
              <a href="wa.me/6282252974009"> <img src="aset/wa.png" /></a>
            </li>
          </ul>
        </aside>
      </div>
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
