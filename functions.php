<?php 
  $conn = mysqli_connect("localhost", "root", "", "webpm");

  function query($query){
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ){
      $rows[] = $row;
    }
    return $rows;
  }

  function add($data){
    global $conn;

    $nama = $data["nama"];
    $kelamin = $data["kelamin"];
    $instagram = $data["instagram"];
    $whatsapp = $data["whatsapp"];

    $query = "INSERT INTO webpm_table VALUES ('', '$nama', '$kelamin', '$instagram', '$whatsapp' )";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
  }
?>