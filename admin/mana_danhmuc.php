<?php
    require "../connect.php";
    //xoá dữ liệu
    if(isset($_GET["task"]) && $_GET["task"]=="delete")
    {
        $ma_dm = $_GET["id_dm"];
        $sql_delete = "delete from danhmuc where ID_DanhMuc = ".$ma_dm;
        if(mysqli_query($conn,$sql_delete))
        {
            echo "Xoá dữ liệu thành công";
        }
        else
        {
            echo "Xoá dữ liệu thất bại";
        }
    }
    //thêm mới danh mục
    if(isset($_POST["tao_dm"]))
    {
        $ten_dm = $_POST["ten_dm"];
        $sql_insert = "insert into danhmuc(Name_DanhMuc,Trang_Thai) values(N'".$ten_dm."',1)";
        if(mysqli_query($conn,$sql_insert))
        {
            echo "thêm mơí dữ liệu thành công";
            header("location:mana_danhmuc.php");
        }
        else
        {
            echo "thêm mới dữ liệu thất bại";
        }
	//cập nhập danh mục
    }
	if(isset($_POST["up_Name"])){
        $ten_dm = $_POST["up_Name"];
        $ma_dm = $_GET["id_dm"];
        $sql_insert = "UPDATE danhmuc SET Name_DanhMuc = '$ten_dm' WHERE ID_DanhMuc = " .$ma_dm;
        if(mysqli_query($conn,$sql_insert))
        {
            echo "sửa dữ liệu thành công";
            header("location:mana_danhmuc.php");
        }
        else
        {
            echo "sửa dữ liệu thất bại";
        }
    }
    
	
?>
<html>
    <head>
        <title>Trang quản trị danh mục</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2 style="text-align:center; background-color: #99FFCC;font-size:40px; font-size:40px">Trang quản trị danh mục</h2>
            <!--tạo form insert data-->
            <form action="mana_danhmuc.php" method="post" style="text-align:center; background-color: #99FFCC; font-size:20px; margin-top:20px;">
                Nhập tên danh mục:
                <input type="text" name="ten_dm"/>
                <input type="submit" name="tao_dm" value="Thêm mới DM">
            </form>
            <!--tạo bảng để hiển thị dữ liệu-->

            <table class="table" style="background-color: #99FFCC">
                <!--tạo tiêu đề của bảng-->
                <tr>
                    <th>Ma DM</th>
                    <th>Tên DM</th>
                    <th>Trạng Thái</th>
                    <th>Hành Động</th>
                </tr>
                <!--hiển thị dữ liệu của bảng-->
                <?php 
                    $sql_select = "select * from danhmuc";
                    $result = mysqli_query($conn,$sql_select);
                    if(mysqli_num_rows($result)>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            if(isset($_GET["task"]) && $_GET["task"]=="update")
                            {
                                if(isset($_GET["id"]) && $_GET["id"]==$row["ID_DanhMuc"])
                                {
                                    echo "<form action='mana_danhmuc.php?id_dm=".$row["ID_DanhMuc"]."' method='POST'><tr>";
                                    
                                    echo "<td >".$row["ID_DanhMuc"]."</td>";
                                    
                                    echo "<td><input type='text' value = '".$row["Name_DanhMuc"]."' name='up_Name'></td>";

                                    echo "<td>".$row["Trang_Thai"]."</td>";
                                    
                                    
                                    echo "<td>";
                                    
                                    echo "<input type='submit' class='btn btn-warning' name='".$row["ID_DanhMuc"]."' value='Chỉnh sửa'>";
                                    
                                    echo "</td>";
                                    
                                    echo "</tr></form>";
                                }
                                else
                                {
                                    echo "<tr>";
                                    
                                    echo "<td>".$row["ID_DanhMuc"]."</td>";
                                    
                                    echo "<td>".$row["Name_DanhMuc"]."</td>";
                                    
                                    
                                    echo "<td>".$row["Trang_Thai"]."</td>";
                                    
                                    echo "<td>";
                                    
                                    echo "<a href='mana_danhmuc.php?task=update&id=".$row["ID_DanhMuc"]."' class='btn btn-warning'>Sửa</a>";
                                    
                                    echo "<a href='mana_danhmuc.php?id_dm=".$row["ID_DanhMuc"]."&task=delete' class='btn btn-danger'>Xoá</a>";
                                    
                                    echo "</td>";
                                    
                                    echo "</tr>";
                                }

                            }
                            else
                            {
                                echo "<tr>";
                                
                                echo "<td>".$row["ID_DanhMuc"]."</td>";
                                
                                echo "<td>".$row["Name_DanhMuc"]."</td>";
                                
                                echo "<td>".$row["Trang_Thai"]."</td>";
                                
                                
                                echo "<td>";
                                
                                echo "<a href='mana_danhmuc.php?task=update&id=".$row["ID_DanhMuc"]."' class='btn btn-warning'>Sửa</a>";
                                
                                echo "<a href='mana_danhmuc.php?id_dm=".$row["ID_DanhMuc"]."&task=delete' class='btn btn-danger'>Xoá</a>";
                                
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