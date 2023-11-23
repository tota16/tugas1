<?php

if(isset($_GET['page'])){

$page = $_GET['page'];
    switch($page){
    case'mahasiswa' :
        include 'mahasiswa.php';
        break;

        case'dosen' :
            include 'dosen.php';
            break;

}


}else{
    include 'mahasiswa.php';
}







?>