<?php 
require 'function.php';

//query view
$query="SELECT * FROM contact";
$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman admin</title>
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
    <h1>Daftar Client</h1>
    <table class="table table-bordered table-striped">
    <tr style="font-weight:bold;" class="info">
    <td>No.</td>
    <td>Aksi</td>
    <td>Nama</td>
    <td>Email</td>
    <td>phone</td>
    <td>Kategori Contact</td>
    <td>message</td>
    </tr>

    <?php $i = 1;?>
    <!-- buat looping untuk menampilkan data dari database -->
    <?php while ( $row= mysqli_fetch_assoc($result)) : ?>
    <tr >
    <td><?= $i; ?></td>
    <td>
    <a href="">ubah</a> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> |
    <a href="">hapus</a> <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
    </td>
    <td><?= $row["nama"]?></td>
    <td><?= $row["email"]?></td>
    <td><?= $row["phone"]?></td>
    <td><?= $row["kategori"]?></td>
    <td><?= $row["message"]?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>

    </table>
</body>
</html>