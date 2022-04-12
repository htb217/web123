<?php
    require "../connect.php";
    //Up load anh
    if(isset($_POST["them_sp"])) //kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
    {
        if($_FILES["file"]["name"]!=NULL)
        {

            if($_FILES["file"]["type"]=="image/jpeg"||$_FILES["file"]["type"]=="image/png"
            )
            {
                if($_FILES["file"]["size"]>1048576)
                {
                echo "file quá nang";
                }

                // kiem tra su ton tai cua file
                elseif (file_exists("../uploads/" . $_FILES["file"]["name"])) 
                {
                    echo $_FILES["file"]["name"]." file da ton tai. ";
                }

                else{

                $path = "../uploads/"; // file luu vào thu muc chua file upload
                $tmp_name = $_FILES['file']['tmp_name'];
                $name = $_FILES['file']['name'];
                $type = $_FILES['file']['type']; 
                $size = $_FILES['file']['size']; 
                // Upload file
                move_uploaded_file($tmp_name,$path.$name);
                $link = $path.$name;
                echo "link:" .$link;
                }
            }
            else {
                echo "file duoc chon khong hop le";
            }
        }else 
        {
            echo "vui long chon file";
        }
    }
    //xoá dữ liệu
    if(isset($_GET["task"]) && $_GET["task"]=="delete")
    {
        $ID_SP = $_GET["sanpham"];
        $sql_delete = "delete from sanpham where ID_SP = ".$ID_SP;
        if(mysqli_query($conn,$sql_delete))
        {
            echo "Xoá dữ liệu thành công";
        }
        else
        {
            echo "Xoá dữ liệu thất bại";
        }
    }

    //thêm mới
    if(isset($_POST["them_sp"]))
    {
        $ten_sp = $_POST["ten_sp"];
        $sql_insert = "INSERT INTO sanpham(Name_SP,IMG,TRANGTHAI) values(N'".$ten_sp."','$link',1)";
        if(mysqli_query($conn,$sql_insert))
        {
            echo "thêm mơí dữ liệu thành công";
            header("location:mana_sanpham.php");
        }
        else
        {
            echo "thêm mới dữ liệu thất bại";
        }
    }
    // Sửa dữ liệu
    if(isset($_POST["up_Name"])){
        $ten_sp = $_POST["up_Name"];
        $ma_sp = $_GET["sanpham"];
        $sql_insert = "UPDATE sanpham SET Name_SP = '$ten_sp' WHERE ID_SP = " .$ma_sp;
        if(mysqli_query($conn,$sql_insert))
        {
            echo "sửa dữ liệu thành công";
            header("location:mana_sanpham.php");
        }
        else
        {
            echo "sửa dữ liệu thất bại";
        }
    }
    
?>
<html>
    <head>
        <title>Trang quản trị sản phẩm</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
               <style>
            body{
                font-family:Arial (Body);
                font-size:17px;
            }
            .box{
                border:2px solid black;
				background-color: #99FFCC;
            }

            img 
			{
                display: block;
                max-height: 150px;
				float: left;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h2 style="text-align:center;background-color: #99FFCC;">Quản trị sản phẩm</h2>
            <form action="mana_sanpham.php" method=POST enctype="multipart/form-data">
                Nhập tên sản phẩm :
                <input type="text" name="ten_sp" class="box" />
                Upload ảnh : <input type="file" name="file" />
                <input type="submit" name="them_sp" value="Thêm mới SP" class="box">
                <button class="box" style="float: right;">
                    <a style="text-decoration:none;color: black;" href="../sachthieunhi.php"> Trang chủ </a>
                </button>
            </form>
            <table class="table" style="background:#99FFCC;">
                <tr>
                    <th>Tên SP</th>
                    <th>Trạng Thái</th>
                    <th>Ảnh</th>
                    <th>Hành Động</th>
                </tr>
                <?php
                    $sql_select = "select * from sanpham";
                    $result = mysqli_query($conn,$sql_select);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            if(isset($_GET["task"]) && $_GET["task"]=="update")
                            {
                                if(isset($_GET["id"]) && $_GET["id"]==$row["ID_SP"])
                                {
                                    echo "<form action='mana_sanpham.php?sanpham=".$row["ID_SP"]."' method='POST'><tr>";
                                    echo "<td><input type='text' value = '".$row["Name_SP"]." 'name='up_Name'></td>";
                                    echo "<td>".$row["TRANGTHAI"]."</td>";
                                    echo "<td> <img src='$row[IMG]' ></td>";
                                    echo "<td>";
                                    echo "<input type='submit' class='btn btn-warning' name='ud' value='Chỉnh sửa'>";
                                    echo "</td>";
                                    echo "</tr></form>";
                                }
                                else
                                {
                                    echo "<tr>";
                                    echo "<td>".$row["Name_SP"]."</td>";
                                    echo "<td>".$row["TRANGTHAI"]."</td>";
                                    echo  "<td><img src='$row[IMG]' ></td>";
                                    echo "<td>";
                                    echo "<a href='mana_sanpham.php?task=update&id=".$row["ID_SP"]."' class='btn btn-warning'>Sửa</a>";
                                    echo "<a href='mana_sanpham.php?sanpham=".$row["ID_SP"]."&task=delete' class='btn btn-danger'>Xoá</a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                            }
                            else
                            {
                                echo "<tr>";
                                echo "<td>".$row["Name_SP"]."</td>";
                                echo "<td>".$row["TRANGTHAI"]."</td>";
                                echo "<td><img src='$row[IMG]' ></td>";
                                echo "<td>";
                                echo "<a href='mana_sanpham.php?task=update&id=".$row["ID_SP"]."' class='btn btn-warning'>Sửa</a>";
                                echo "<a href='mana_sanpham.php?sanpham=".$row["ID_SP"]."&task=delete' class='btn btn-danger'>Xoá</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                           
                        }
                    }
                    else
                    {
                        echo "Bảng không chứa dữ liệu";
                    }
                ?>
            </table>
        </div>
        
    </body>
</html>