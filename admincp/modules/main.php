<div class="clear">
<p>main</p>
</div>
<div class="main">
<?php
if(isset($_GET['action']) && isset($_GET['query'])){
    $tam=$_GET['action'];
    $query=$_GET['query'];
    }
    else{
        $tam="";
        $query="";
    }
    if($tam=='quanlydmsp' && $query=='them'){
        include("./quanlydanhmucsp/them.php");
        include("./quanlydanhmucsp/lietke.php");
    }
    elseif($tam=='quanlydmsp' && $query=='sua'){
        include("./quanlydanhmucsp/sua.php");
    }
    elseif($tam=='quanlysp' && $query=='them'){
        include("./quanlysp/them.php");
        include("./quanlysp/lietke.php");
    }
    elseif($tam=='quanlysp' && $query=='sua'){
        include("./quanlysp/sua.php");
    }
    else{
      include("./dashboard.php");
    }
?>
</div>