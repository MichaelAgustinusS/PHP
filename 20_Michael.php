<?php 
$nama = array(
            array('Nama' => 'Satria', 'Kelas' => 'rpl 1'),
            array('Nama' => 'Arsyi', 'Kelas' => 'rpl 2'),
            array('Nama' => 'Dhika', 'Kelas' => 'rpl 3'),
            array('Nama' => 'Evan', 'Kelas' => 'rpl 4'),
            array('Nama' => 'Fabian', 'Kelas' => 'rpl 5'),
            array('Nama' => 'Irfan', 'Kelas' => 'rpl 6')
        );
foreach ($nama as $name) {
		echo " Nama : <b>".$name["Nama"],"</b>";
		echo " Kelas: <b>".$name["Kelas"], "</b><br>";}
?>