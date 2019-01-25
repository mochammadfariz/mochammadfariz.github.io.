
<?php
require 'function.php';
//cek apakah tombol sudah ditekan apa belom
if(isset($_POST["submit"])){
  //ambil data dari tiap form
  $name=$_POST["nama"];
  $email=$_POST["email"];
  $phone=$_POST["phone"];
  $category=$_POST["kategori"];
  $message=$_POST["message"];

  //query insert
  $query = "INSERT INTO contact VALUES ('$name','$email','$phone','$category','$message')";
  mysqli_query($conn,$query);

  // cek apakah data berhasil ditambah / tidak
  if(mysqli_affected_rows($conn)>0){
    echo"<script>alert('data berhasil ditambahkan');
    document.location.href='index.php';
    </script>";
  }else{
    echo"
    <script>
    alert('data gagal ditambahkan');
    document.location.href='index.php';
    </script>";
  }

}
?>

<!DOCTYPE html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portfolio</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

          <a href="#home" class="navbar-brand page-scroll">Mochammad Fariz</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about" class="page-scroll">About</a></li>
            <li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
            <li><a href="#contact" class="page-scroll">Contact</a></li>
            <li><a href="view.php" class="page-scroll">View</a></li>
          </ul>
        </div>

      </div>
    </nav>
    <!-- akhir navbar -->

  <!-- Jumbotron -->
<div class="jumbotron text-center" >
  <img src="img/fariz.jpg"  class="img-circle">
  <h1 >Mochammad Fariz</h1>
  <p>Web Developer | Photographer</p>
</div>

<!-- akhir jumbotron -->



<!-- about -->
<section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h2 class="text-center " id= "tabout">About</h2>
        <hr>
      </div>
    </div>

    <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <h3 class="solid text-center">Web Developer</h3>
          <p>Dalam pembuatan aplikasi berbasis web dibutuhkan suatu bahasa pemrograman yang harus benar-benar dipahami oleh Web Developer, seperti JavaScript, PHP, ASP, Phyton, Java, MySQL, dan lain-lain</p>
        </div>
        <div class="col-sm-5">
            <h3 class="solid text-center">Web Designer</h3>
          <p>Web Designer adalah seseorang yang bekerja dengan unsur-unsur visual pada suatu website. Merekalah yang bertugas untuk memercantik penampilan halaman web.</p>
        </div>
      </div>
  </div>
</section>
<!-- akhir about -->

<div id="greeting"></div>

<div id="clock">
  <div id="hour">
    <div id="hour1">
      <div id="hour1-1" class="hour1">0</div>
			<div id="hour1-2" class="hour1">0</div>
			<div id="hour1-3" class="hour1">0</div>
			<div id="hour1-4" class="hour1">0</div>
    </div>
		<div id="hour2">
			<div id="hour2-1" class="hour2">0</div>
			<div id="hour2-2" class="hour2">0</div>
			<div id="hour2-3" class="hour2">0</div>
			<div id="hour2-4" class="hour2">0</div>
		</div>
	</div>
	<div class="doubleDot">:</div>
	<div id="minute">
		<div id="minute1">
			<div id="minute1-1" class="minute1">0</div>
			<div id="minute1-2" class="minute1">0</div>
			<div id="minute1-3" class="minute1">0</div>
			<div id="minute1-4" class="minute1">0</div>
		</div>
		<div id="minute2">
			<div id="minute2-1" class="minute2">0</div>
			<div id="minute2-2" class="minute2">0</div>
			<div id="minute2-3" class="minute2">0</div>
			<div id="minute2-4" class="minute2">0</div>
		</div>
	</div>
	<div class="doubleDot">:</div>
	<div id="second">
		<div id="second1">
			<div id="second1-1" class="second1">0</div>
			<div id="second1-2" class="second1">0</div>
			<div id="second1-3" class="second1">0</div>
			<div id="second1-4" class="second1">0</div>
		</div>
		<div id="second2">
      <div id="second2-1" class="second2">0</div>
			<div id="second2-2" class="second2">0</div>
			<div id="second2-3" class="second2">0</div>
			<div id="second2-4" class="second2">0</div>
		</div>
	</div>
</div>

<!-- date -->
<p id="date"></p>



<!-- portofolio -->
<section class="portfolio" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
      <h2>Portfolio</h2>
      <hr>
      </div>
    </div>

    <div class="row">
        <div class="col-sm-4">
          <a href="" class="thumbnail"><img src="img/portfolio/1.jpg" alt=""></a>
          </div>
         <div class="col-sm-4">
            <a href="" class="thumbnail"><img src="img/portfolio/3.jpg" alt=""></a>
           </div>
         <div class="col-sm-4">
           <a href="" class="thumbnail"><img src="img/portfolio/2.jpg" alt=""></a>
         </div>
        <div class="col-sm-4">
          <a href="" class="thumbnail"><img src="img/portfolio/4.jpg" alt=""></a>
        </div>
        <div class="col-sm-4">
         <a href="" class="thumbnail"><img src="img/portfolio/5.jpg" alt=""></a>
        </div>
        <div class="col-sm-4">
         <a href="" class="thumbnail"><img src="img/portfolio/6.jpg" alt=""></a>
        </div>
      </div>
  </div>
</section>
<!-- akhir portofolio -->

<!-- contact -->
<section class="contact" id="contact">
   <div class="container">
      <div class="row ">
          <div class="col-sm-12 text-center">
            <h2>Contact</h2>
            <hr>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form action="" method="POST">
              <div class="form-group">
                <label for="nama">Name</label>
                <input type="text" name ="nama" id="nama" class="form-control" placeholder="masukkan nama">
              </div>
              <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name = "email" id="email" class="form-control" placeholder="masukkan email">
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" id="phone" name="phone" class="form-control" placeholder="masukkan nomor telepon">
                </div>
                <div>
                 <select class="form-control" id="kategori" name="kategori">
                  <option>-- Choose Category --</option>
                  <option>WebDesign</option>
                  <option >Photographer</option>
                  <option >WebDeveloper</option>
                </select>
                
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea id="message" name="message" class="form-control" rows="3" placeholder="write your message here.."></textarea>
                </div>

                <button name = "submit" id="submit" type="submit" class="btn btn-success">Send Message</button>
                

            </form>
          </div>
        </div>
        </div>
  </section>

    <!-- awal footer -->
    <footer>
      <div class="container text-center">
        <div class="row">
          <div class="col-sm-12">
            <p>copy right &copy 2019. | built by. <a href="https://www.instagram.com/skyalker_/">Mochammad Fariz Syah Lazuardy</a>.</p>
          </div>
        </div>
       
      </div>
    </footer>
    <!-- akhir footer -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">
    </script>
    
    <script src="js/script.js"></script>  

  </body>
</html>