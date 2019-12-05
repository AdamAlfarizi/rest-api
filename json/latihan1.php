<?php

// $mahasiswa = [
// 	[
// 	"nama" => "Adam Alfarizi",
// 	"nrp" => "173040023",
// 	"email"=>"adamalfal18@mail.unpas.ac.id"
// ],
// 	[
// 	"nama" => "Ridwan ",
// 	"nrp" => "173040001",
// 	"email"=>"ridwan18@mail.unpas.ac.id"
// ],
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar','root','');
$db = $dbh->prepare('SELECT* FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchall(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;

 ?>