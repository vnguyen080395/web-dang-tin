<?php
if(isset($_GET["idkhuvuc"]) && isset($_GET["iddanhmuc"]) && isset($_GET["idhinhthuc"]))
{
    $a=$_GET["idkhuvuc"];
    $b=$_GET["iddanhmuc"];
    $c=$_GET["idhinhthuc"];
}   
else{
    if (isset($_GET["idkhuvuc"])) {
        $a=$_GET["idkhuvuc"];
        $b="";
        $c="";
    }
    if (isset($_GET["iddanhmuc"])) {
        $a="";
        $b=$_GET["iddanhmuc"];
        $c="";
    }
    if (isset($_GET["idhinhthuc"])) {
        $a="";
        $b="";
        $c=$_GET["idhinhthuc"];
    }
}
if(!isset($_GET["idkhuvuc"]) && !isset($_GET["iddanhmuc"]) && !isset($_GET["idhinhthuc"]))
{
    $a="";
    $b="";
    $c="";
}   
?>
<?php 
$sql="SELECT * FROM tb_danhmuc";
$result=mysql_query($sql);
$sql1="SELECT * FROM tb_khuvuc";
$result1=mysql_query($sql1);
$sql2="SELECT * FROM tb_hinhthuc";
$result2=mysql_query($sql2);

$dem=0;
$danhmuc="";
$khuvuc="";
$hinhthuc="";

if (isset($_GET["iddanhmuc"]) && isset($_GET["idkhuvuc"]) && isset($_GET["idhinhthuc"]) ) {
    $danhmuc=$_GET["iddanhmuc"];
    $khuvuc=$_GET["idkhuvuc"];
    $hinhthuc=$_GET["idhinhthuc"];
    $sql3="SELECT * FROM tb_danhmuc WHERE Ma_danh_muc=$danhmuc";
    $result3=mysql_query($sql3);
    if ($result3) {
        $row3=mysql_fetch_array($result3);
        $x=$row3["Ten_danh_muc"];
    }
    else
    {
        $x="Tất cả";
    }
    $sql4="SELECT * FROM tb_khuvuc WHERE Ma_khu_vuc=$khuvuc";
    $result4=mysql_query($sql4);
    if ($result4) {
        $row4=mysql_fetch_array($result4);
        $y=$row4["Ten_khu_vuc"];
    }
    else
    {
        $y="Tất cả";
    }
    $sql5="SELECT * FROM tb_hinhthuc WHERE Ma_hinh_thuc=$hinhthuc";
    $result5=mysql_query($sql5);
    if ($result5) {
        $row5=mysql_fetch_array($result5);
        $z=$row5["Ten_hinh_thuc"];
    }
    else
    {
        $z="Tất cả";
    }
    if($danhmuc=="" && $khuvuc !="" && $hinhthuc !="")
    {
        $sql6="SELECT * FROM tb_tintuc WHERE Ma_khu_vuc=$khuvuc and Ma_hinh_thuc =$hinhthuc and Phe_duyet=0 Order by Ngay_dang DESC";
    }
    if ($khuvuc=="" && $danhmuc!="" && $hinhthuc !="") {
        $sql6="SELECT * FROM tb_tintuc WHERE Ma_danh_muc=$danhmuc and Ma_hinh_thuc =$hinhthuc and Phe_duyet=0 Order by Ngay_dang DESC";
    }
    if ($hinhthuc=="" && $khuvuc !="" && $danhmuc !="") {
        $sql6="SELECT * FROM tb_tintuc WHERE Ma_khu_vuc=$khuvuc and Ma_danh_muc=$danhmuc and Phe_duyet=0 Order by Ngay_dang DESC";

    }
    if ($khuvuc=="" && $danhmuc=="" & $hinhthuc !="") {
        $sql6="SELECT * FROM tb_tintuc  WHERE Ma_hinh_thuc =$hinhthuc and Phe_duyet=0 Order by Ngay_dang DESC";


    }
    if ($khuvuc=="" && $hinhthuc=="" && $danhmuc!="") {
        $sql6="SELECT * FROM tb_tintuc  WHERE Ma_danh_muc=$danhmuc  and Phe_duyet=0 Order by Ngay_dang DESC";

    }
    if ($danhmuc=="" && $hinhthuc=="" && $khuvuc !="") {
        $sql6="SELECT * FROM tb_tintuc WHERE Ma_khu_vuc=$khuvuc and Phe_duyet=0 Order by Ngay_dang DESC";

    }
    if ($khuvuc=="" && $danhmuc=="" && $hinhthuc==""){
        $sql6="SELECT * FROM tb_tintuc  WHERE Phe_duyet=0 Order by Ngay_dang DESC";

    }
    if ($khuvuc!="" && $danhmuc!="" && $hinhthuc!="")
    {
        $sql6="SELECT * FROM tb_tintuc  WHERE Ma_khu_vuc=$khuvuc and Ma_danh_muc=$danhmuc and Ma_hinh_thuc =$hinhthuc and Phe_duyet=0 Order by Ngay_dang DESC";     
    }

}
if(!isset($_GET["iddanhmuc"]) && !isset($_GET["idkhuvuc"]) && !isset($_GET["idhinhthuc"]))
{
    $sql6="SELECT * FROM tb_tintuc  WHERE  Phe_duyet=0 Order by Ngay_dang DESC";  
    $x=$y=$z="Tất cả";      
}
$result6=mysql_query($sql6);
if($result6)
{
    $dem=mysql_num_rows($result6);
}

$total_records = $dem;
    // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 10;
    // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
    // tổng số trang
$total_page = ceil($total_records / $limit);

    // Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}

    // Tìm Start
$start = ($current_page - 1) * $limit;

$sqlall=$sql6." "."LIMIT"." ".$start.",".$limit;
$resultall=mysql_query($sqlall);
?>

<script type="text/javascript">
 function xoa_comfirm()
 {
    var comfirmBox;
    comfirmBox = confirm("Bạn muốn thực sự muốn xóa tin này?");
    if(comfirmBox == true){
     return true;
    }
    else
    {
        return false;
    }
}
</script>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quản lý tin tức</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <label><i>Danh muc: <?php echo $x ?></i></label>
    <label>|</label>
    <label><i>Khu vực: <?php echo $y ?></i></label>
    <label>|</label>
    <label> <i>Hình thức: <?php echo $z ?></i></label>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <label> Tin chưa được phê duyệt (<?php echo $dem ?>)</label>
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                            data-toggle="dropdown">
                            Danh mục
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="tintucchuapheduyet.php?idkhuvuc=<?php echo $a ?>&iddanhmuc=&idhinhthuc=<?php echo $c ?>" title="">Tất cả</a></li>
                            <?php while ($row=mysql_fetch_array($result)) { 
                               ?>
                               <li><a href="tintucchuapheduyet.php?idkhuvuc=<?php echo $a ?>&iddanhmuc=<?php echo $row["Ma_danh_muc"] ?>&idhinhthuc=<?php echo $c ?>"><?php echo $row["Ten_danh_muc"] ?></a></li>
                               <?php } ?>
                           </ul>
                       </div>
                       <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                        data-toggle="dropdown">
                        Khu vực
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu pull-right" role="menu">
                     <li><a href="tintucchuapheduyet.php?idkhuvuc=&iddanhmuc=<?php echo $b ?>&idhinhthuc=<?php echo $c ?>" title="">Tất cả</a></li>
                     <?php while ($row1=mysql_fetch_array($result1)) {
                       ?>
                       <li><a href="tintucchuapheduyet.php?idkhuvuc=<?php echo $row1["Ma_khu_vuc"] ?>&iddanhmuc=<?php echo $b ?>&idhinhthuc=<?php echo $c ?>"><?php echo $row1["Ten_khu_vuc"] ?></a></li>
                       <?php } ?>
                   </ul>
               </div>
               <div class="btn-group">
                <button type="button" class="btn btn-default btn-xs dropdown-toggle"
                data-toggle="dropdown">
                Hình thức
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
             <li><a href="tintucchuapheduyet.php?idkhuvuc=<?php echo $a ?>&iddanhmuc=<?php echo $b ?>&idhinhthuc=" title="">Tất cả</a></li>
             <?php while ($row2=mysql_fetch_array($result2)) {
               ?>
               <li><a href="tintucchuapheduyet.php?idkhuvuc=<?php echo $a ?>&iddanhmuc=<?php echo $b ?>&idhinhthuc=<?php echo $row2["Ma_hinh_thuc"] ?>"><?php echo $row2["Ten_hinh_thuc"] ?></a> </li>
               <?php } ?>
           </ul>
       </div>
   </div>
</div>
<!-- /.panel-heading -->
<div class="panel-body">
    <div class="dataTable_wrapper"> 
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th style="text-align: center;">Mã tin tức</th>
                    <th style="text-align: center;">Ảnh minh họa</th>
                    <th style="text-align: center;">Tiêu đề</th>
                    <th style="text-align: center;">Mô tả</th>
                    <th style="text-align: center;">Ngày đăng</th>
                    <th style="text-align: center;">Phê duyệt</th>
                    <th style="text-align: center;">Thao tác</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($dem!=0)
                {
                    $a=$resultall;
                }
                else
                {
                    $a=$result6;
                }
                ?>

                <?php while ($row6=mysql_fetch_array($a)) {
                    ?>
                    <tr >
                        <td style="text-align: center;"><?php echo $row6["Ma_tin_tuc"] ?></td>
                        <td style="text-align: center;"> <img src="../User/<?php echo $row6["Anh_dai_dien"] ?>" alt="" style="width: 200px; height: 130px;"></td>
                        <td style="text-align: center;"><?php echo $row6["Tieu_de"] ?></td>
                        <td class="center" style="text-align: center;"> <?php echo $row6["Mo_ta"] ?></td>
                        <td class="center" style="text-align: center;"><?php  $t= date_create($row6["Ngay_dang"]);  echo date_format($t,"d-m-Y");?></td>
                        <td class="center" style="text-align: center;"><input type="checkbox" name="pheduyet" value="1"></td>
                        <td class="center" style="text-align: center;">  <a href="modules_tintucchuapheduyet/update.php?id=<?php echo $row6["Ma_tin_tuc"] ?>"><i class="glyphicon glyphicon-ok"></i> Duyệt</a> | <a onclick="return xoa_comfirm()" href="modules_tintucchuapheduyet/xoatin.php?id=<?php echo $row6["Ma_tin_tuc"] ?>"  > <i class="fa fa-trash"></i> Xóa</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="row">
                <div class="col-sm-12" >
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination">
                              <!--  <li class="paginate_button previous " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="#">Previous</a></li>
                                <li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="#">1</a></li>
                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">2</a></li>
                                <li class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="#">3</a></li>
                                <li class="paginate_button next disabled" aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="#">Next</a></li> <-->

                                <?php 

                                if ($current_page > 1 && $total_page > 1)
                                {
                                    echo '<li class="paginate_button previous " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_previous"><a href="tintucchuapheduyet.php?idkhuvuc='.$khuvuc.'&iddanhmuc='.$danhmuc.'&idhinhthuc='.$hinhthuc.'&page='.($current_page-1).'">&laquo;</a></li> ';
                                }

                    if($total_page >= 2) // trang lớn hơn hai mới hiện
                    {

                        for ($i = 1; $i <= $total_page; $i++)
                        {
                            // Nếu là trang hiện tại thì hiển thị thẻ span
                            // ngược lại hiển thị thẻ a
                            if ($i == $current_page)
                            {
                                echo '<li class="paginate_button active" aria-controls="dataTables-example" tabindex="0"><a href="">'.$i.'</a></li>';
                            }
                            else
                            {
                                echo '<li  class="paginate_button " aria-controls="dataTables-example" tabindex="0"><a href="tintucchuapheduyet.php?idkhuvuc='.$khuvuc.'&iddanhmuc='.$danhmuc.'&idhinhthuc='.$hinhthuc.'&page='.$i.'">'.$i.'</a></li>';
                            }
                        }
                    }
                    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
                    if ($current_page < $total_page && $total_page > 1)
                    {
                        echo '<li class="paginate_button next " aria-controls="dataTables-example" tabindex="0" id="dataTables-example_next"><a href="tintucchuapheduyet.php?idkhuvuc='.$khuvuc.'&iddanhmuc='.$danhmuc.'&idhinhthuc='.$hinhthuc.'&page='.($current_page+1).'">&raquo;</a></li> ';
                    }
                    ?>

                </ul>
                <div class="col-sm-2">
                    <div class="dataTables_paginate paging_simple_numbers" id="dataTables-example_paginate">
                        <ul class="pagination" >
                            <li class="paginate_button previous"><a href="modules_tintucchuapheduyet/update.php" title="">Phê duyệt tất cả</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>      
    </div>
</div>
<!-- /.table-responsive -->

</div>
<!-- /.panel-body -->
</div>