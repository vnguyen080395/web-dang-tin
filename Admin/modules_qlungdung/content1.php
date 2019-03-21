
<?php 
$sqllogo="SELECT * FROM tb_aloalo123 ";
$result=mysql_query($sqllogo);
$row=mysql_fetch_array($result); 

$sqlqc="SELECT * FROM tb_quangcao";
$result1=mysql_query($sqlqc);

if(isset($_POST["submit1"]))
{
//kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
  $path = '../User/images/Logo/'; // vào thu mục images
  if(isset($_FILES['logo']["name"]))
  {
    if($_FILES['logo']["name"]!=NULL)
    {

      if($_FILES['logo']["type"]=="image/jpeg"||$_FILES['logo']["type"]=="image/png"||$_FILES['logo']["type"]=="image/gif")
      {
        if($_FILES['logo']["size"]>1048576890)
        {
          $Thongbao="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
        }

        else{
          $tmp_name = $_FILES['logo']['tmp_name'];
          $name = $_FILES['logo']['name'];
          $type = $_FILES['logo']['type']; 
          $size = $_FILES['logo']['size']; 
// Upload file
          move_uploaded_file($tmp_name,$path.$name);
          $logo=$path.$name;
          $sql="UPDATE `db_doancoso`.`tb_aloalo123` SET `Logo` = '$logo' WHERE `tb_aloalo123`.`Ma_aloalo123` = 123";
          if(mysql_query($sql))
          {
           $Thongbao1="Sửa thành công.";
         }
         else
         {
          $Thongbao="Sửa thất bại.";
        }
      }
    }
    else {
      $Thongbao="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
    }
  }
  else 
  {
    $Thongbao="Bạn chưa chọn file.";
  }


}

}



if(isset($_POST["submit2"]))
{
//kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
  $path = '../User/images/home/'; // vào thu mục images
  if(isset($_FILES['hinhnen']["name"]))
  {
    if($_FILES['hinhnen']["name"]!=NULL)
    {

      if($_FILES['hinhnen']["type"]=="image/jpeg"||$_FILES['hinhnen']["type"]=="image/png"||$_FILES['hinhnen']["type"]=="image/gif")
      {
        if($_FILES['hinhnen']["size"]>1048576890)
        {
          $Thongbao2="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
        }

        else{
          $tmp_name = $_FILES['hinhnen']['tmp_name'];
          $name = $_FILES['hinhnen']['name'];
          $type = $_FILES['hinhnen']['type']; 
          $size = $_FILES['hinhnen']['size']; 
// Upload file
          move_uploaded_file($tmp_name,$path.$name);
          $hinhnen=$path.$name;
          $sql="UPDATE `db_doancoso`.`tb_aloalo123` SET `Hinh_nen` = '$hinhnen' WHERE `tb_aloalo123`.`Ma_aloalo123` = 123";
          if(mysql_query($sql))
          {
           $Thongbao3="Sửa thành công.";
         }
         else
         {
          $Thongbao2="Sửa thất bại.";
        }
      }
    }
    else {
      $Thongbao2="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
    }
  }
  else 
  {
    $Thongbao2="Bạn chưa chọn file.";
  }


}

}

if(isset($_POST["submit3"]))
{
  if (isset($_POST["lienhe"])) {
    $lienhe=$_POST["lienhe"];
    if($lienhe!="")
    {
      $sql="UPDATE `db_doancoso`.`tb_aloalo123` SET `Lien_he` = '$lienhe' WHERE `tb_aloalo123`.`Ma_aloalo123` = 123";
      if(mysql_query($sql))
      {
        $Thongbao4="Sửa thành công.";
      }
      else
      {
        $Thongbao5="Sửa thất bại.";
      }
    }
    else
    {
     $Thongbao5="Chưa nhập thông tin liên hệ.";
   }

 }
 else
 {
  $Thongbao5="Chưa nhập thông tin liên hệ.";
}

}


if(isset($_POST["submitquangcao"]))
{
//kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
  $path = '../User/images/quangcao/'; // vào thu mục images
  if(isset($_FILES['quangcao']["name"]))
  {
    if($_FILES['quangcao']["name"]!=NULL)
    {

      if($_FILES['quangcao']["type"]=="image/jpeg"||$_FILES['quangcao']["type"]=="image/png"||$_FILES['quangcao']["type"]=="image/gif")
      {
        if($_FILES['quangcao']["size"]>1048576890)
        {
          $Thongbao7="File của bạn quá nặng!Vui lòng chọn lại file ảnh.";
        }

        else{
          $tmp_name = $_FILES['quangcao']['tmp_name'];
          $name = $_FILES['quangcao']['name'];
          $type = $_FILES['quangcao']['type']; 
          $size = $_FILES['quangcao']['size']; 
// Upload file
          move_uploaded_file($tmp_name,$path.$name);
          $quangcao=$path.$name;
          if(isset($_POST["link"]) && isset($_POST["id"]))
          {
            $link=$_POST["link"];
            $id=$_POST["id"];
            $sql="UPDATE `db_doancoso`.`tb_quangcao` SET `Hinh_quang_cao` = '$quangcao',`Link`='$link' WHERE `tb_quangcao`.`Ma_quang_cao` = $id";
            if(mysql_query($sql))
            {
             $Thongbao8="Sửa thành công.";
           }
           else
           {
            $Thongbao7="Sửa thất bại.";
          }
        }
      }
    }
    else {
      $Thongbao7="File bạn chọn không hợp lệ! Vui lòng chọn lại file.";
    }
  }
  else 
  {
    $Thongbao7="Bạn chưa chọn file.";
  }


}

}
?>
<div id="page-wrapper">
 <div class="row">
  <div class="col-lg-12">
   <h1 class="page-header">Quản lý ứng dụng</h1>
 </div>
 <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
  <div class="col-lg-12">
   <div class="panel panel-default">
    <div class="panel-heading">
     Logo & Hình nền & Thông tin liên hệ
   </div>
   <!-- /.panel-heading -->
   <div class="panel-body">
     <!-- Nav tabs -->
     <ul class="nav nav-tabs">
      <li class="active"><a href="#logo" data-toggle="tab">Logo</a>
      </li>
      <li><a href="#hinhnen" data-toggle="tab">Hình nền</a>
      </li>
      <li><a href="#ttlienhe" data-toggle="tab">Thông tin liên hệ</a>
      </li>
      <li><a href="#quangcao" data-toggle="tab">Quảng cáo</a>
      </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade in active" id="logo">
       <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
         <tr>
          <th style="text-align: center;">Hình</th>
          <th style="text-align: center;">Sửa</th>
        </tr>
      </thead>
      <tbody>
       <tr >
        <td style="text-align: center;"><img style="width: 200px" src="<?php echo $row["Logo"]; ?>" alt=""></td>
        <form action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
          <td class="center" style="text-align: center;">
            <input type="file" name="logo" >
            <input type="submit" name="submit1" value="Sửa"><br>
            <span style="color: #FF0000"><?php if(isset($Thongbao)) echo $Thongbao; ?></span>
            <span style="color:  #00CC00"><?php if(isset($Thongbao1)) echo $Thongbao1; ?></span>
          </td>
        </form>
      </tr>
    </tbody>
  </table>
</div>
<div class="tab-pane fade in" id="hinhnen">
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
  <thead>
   <tr>
    <th style="text-align: center;">Hình</th>
    <th style="text-align: center;">Sửa</th>
  </tr>
</thead>
<tbody>
 <tr >
  <td style="text-align: center;"><img style="width: 350px" src="<?php echo $row["Hinh_nen"] ?>" alt=""></td>
  <form action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">
    <td class="center" style="text-align: center;">
      <input type="file" name="hinhnen">
      <input type="submit" name="submit2" value="Sửa"><br>
      <span style="color: #FF0000"><?php if(isset($Thongbao2)) echo $Thongbao2; ?></span>
      <span style="color:  #00CC00"><?php if(isset($Thongbao3)) echo $Thongbao3; ?></span>
    </form>
  </tr>
</tbody>
</table>
</div>
<div class="tab-pane fade in" id="ttlienhe">
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
  <thead>
   <tr>
    <th style="text-align: center;">Thông tin</th>
    <th style="text-align: center;">Sửa</th>
  </tr>
</thead>
<tbody>
 <tr >
  <td style="text-align: center;"><?php echo $row["Lien_he"] ?></td>
  <form action="" method="POST" accept-charset="utf-8">
    <td class="center" style="text-align: center;">
      <textarea  name="lienhe" rows="16" id="cknoidung" style="font-size: 18px" maxlength="500"  title="Không vượt quá 500 kí tự!"></textarea><br>
      <script type="text/javascript" >
        CKEDITOR.replace("cknoidung");
      </script>
      <input type="submit" name="submit3" value="Sửa"><br>
      <span style="color: #FF0000"><?php if(isset($Thongbao5)) echo $Thongbao5; ?></span>
      <span style="color:  #00CC00"><?php if(isset($Thongbao4)) echo $Thongbao4; ?></span>
    </form>
  </td>
</tr>
</tbody>
</table>
</div>


<div class="tab-pane fade in" id="quangcao">
 <table class="table table-striped table-bordered table-hover" id="dataTables-example">
  <thead>
   <tr>
    <th style="text-align: center;">Mã hình</th>
    <th style="text-align: center;">Hình quảng cáo</th>
    <th style="text-align: center;">Link liên hệ</th>
    <th style="text-align: center;">Sửa</th>
  </tr>
</thead>
<tbody>
  <?php while ($row1=mysql_fetch_array($result1)) {
   ?>
   <tr >
    <form action="" method="POST" accept-charset="utf-8" enctype="multipart/form-data">

      <td style="text-align: center;"><?php echo $row1["Ma_quang_cao"] ?></td>
      <td style="text-align: center;"><img style="width: 350px" src="<?php echo $row1["Hinh_quang_cao"] ?>" alt="" style="width:150px;height: 200px" ></td>
      <td style="text-align: center;"><input type="text" name="link" value="<?php echo $row1["Link"] ?>"></td>
      <td class="center" style="text-align: center;">
        <input type="file" name="quangcao">
        <input type="text" name="id"  value="<?php echo $row1["Ma_quang_cao"] ?>" style="width: 0px;height: 0px" readonly> 
        <input type="submit" name="submitquangcao" value="Sửa" class="btn btn-success " ><br></td>
      </form>
    </tr>
    <?php } ?>
  </tbody>
</table>
<span style="color: #00CC00"><?php echo (isset($Thongbao8)) ? $Thongbao8 : "" ?></span>
<span style="color: #FF0000"><?php echo (isset($Thongbao7)) ? $Thongbao7 : "" ?></span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>