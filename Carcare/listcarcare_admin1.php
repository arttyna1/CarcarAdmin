<!DOCTYPE html>
<?php session_start();?>
<?php 
 
if (!$_SESSION["id"]){  //check session
 
	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
 
}else{?>
<html>

<head>
	<title>หน้าเพิ่มข้อมูลร้านคาร์แคร์</title>
	<?php include ('head.php'); ?>
	

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<?php
 
include('conn.php');
		

if(isset($_POST['filterstatus']))
	$status = $_POST['filterstatus'];
//echo $status;

?>
<!DOCTYPE HTML>
<html>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
	<link rel="stylesheet" href="CSS/bootstrap.min.CSS">
    <link rel="stylesheet" href="style.css">
	<style type="text/css">
@import url(https://fonts.googleapis.com/css?family=Itim);
      body{
        font-size: 19px;
		font-family: 'Itim', sans-serif;
		background: #F8F8F
		F;
      }
    </style>
<body>

<div class="container">
	<div style="height:20px;"></div>
	<div  style="margin:auto; padding:auto; width:auto;">
	<center>
	<span class="pull-left"><a href="#addcar" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> เพิ่มข้อมูลร้านคาร์แคร์</a> </span></center>
	<br><br>
	<table class="table table-striped table-bordered table-hover">
			<thead>
			<th>ลำดับเลขร้าน</th>
				<th>ชื่อร้านคาร์แคร์</th>
				<th>เบอร์โทร</th>
                <th>ที่อยู่</th>
				<th>ละติจูด</th>
				<th>ลองจิจูด</th>
				<th>ตั้งค่า</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				if (isset($id_car) && $id_car!= 9){
					$query=mysqli_query($conn,"select * from carcare where id_car='$id_car' order by namecarcare");
				}
				else{
					$query=mysqli_query($conn,"select * from carcare order by namecarcare");
				}
				while($row=mysqli_fetch_array($query)){
					?>
					<tr><td><?php echo $row['id_car']; ?></td>
                        <td><?php echo $row['namecarcare']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['address']; ?></td>
						<td><?php echo $row['latitude']; ?></td>
						<td><?php echo $row['longitude']; ?></td>
						<td>
							<a href="#edit1<?php echo $row['id_car']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>แก้ไข</a> || 
							<a href="#del1<?php echo $row['id_car']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>ลบ</a>
							<?php include('buttoncarcare.php'); ?>
						</td>
					</tr>
			     <?php
				}
            
			?>
			</tbody>
		</table>
		<?php include('addcarcare_model.php'); ?>
	</div>

</div>
</body>
</html>
<?php }?>