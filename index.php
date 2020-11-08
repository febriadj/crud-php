<?php 
  require 'functions.php';
  $data = query("SELECT * FROM webpm_table");
  
  if ( isset( $_POST["submit"]) ){

    if ( add($_POST) > 0 ){
      echo "<script>
              alert('Data Berhasil Dibuat');
              document.location.href = 'index.php';
            </script>";
    } else {
      echo "<script>alert('Data Gagal Dibuat')</script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <link rel="stylesheet" href="style.css">
  <title>Whitecrow App</title>
</head>
<body>

  <div id="tambah-icon">
    <i id="tambah-icon-open" class="fas fa-plus"></i>
  </div>

  <nav>
    <div id="nav-wrap">
      <div class="nav-logo">
        <a href>Whitecrow</a>
      </div>
    </div>
  </nav>

  <div id="add">
    <div id="add-wrap">
      <p>Enter your details</p>
      <form action="" method="post">
        <input type="text" name="nama" placeholder="Nama">
        <span>
          <label for="pria">Pria</label>
          <input type="radio" name="kelamin" id="pria" value="pria">
          <label for="wanita">Wanita</label>
          <input type="radio" name="kelamin" id="wanita" value="wanita">
        </span>
        <input type="text" name="instagram" placeholder="Instagram not use @">
        <input type="number" name="whatsapp" placeholder="No.Whatsapp" patern="[0-9]">
        <button type="submit" name="submit" class="submit">Submit</button>
      </form>
    </div>
  </div>
  <div id="room">
    <div id="room-wrap">

    <?php foreach($data as $d): ?>
      <div class="chat">
        <div class="chat-head">
          <p><?php echo $d["nama"]; ?></p>
          <p><?php echo $d["kelamin"]; ?></p>
        </div>
        <div class="chat-media">
          <a href="https://instagram.com/<?php echo $d["instagram"] ?>"><i class="fab fa-instagram"></i></a>
          <a href="https://api.whatsapp.com/send?phone=0<?php echo $d["whatsapp"] ?>"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
    <?php endforeach; ?>
    
    </div>
  </div>

<script src="script.js"></script>
</body>
</html>