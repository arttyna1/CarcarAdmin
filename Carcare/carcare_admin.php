<!DOCTYPE html>
<?php session_start();?>
<?php 
 
if (!$_SESSION["id"]){  //check session
 
	  Header("Location: login.php"); //ไม่พบผู้ใช้กระโดดกลับไปหน้า login form 
 
}else{?>
<html>
<head><?php include ('head.php'); ?>
	<title></title>

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
	<span style="font-size:40px; color:blue; height:50px;"><center><strong>เลือกสถานะ
   <form method="POST" action="allow_admin.php">
   <select name="filterstatus" class="form-control" id="filterstatus" style="font-size:20px; color:blue; height:50px;">
		  <option value="9">ทั้งหมด</option>
	      <option value="0">รออนุมัติ</option>
 		  <option value="1">อนุมัติ</option>
		  <option value="2">ไม่อนุมัติ</option>
	</select> </strong></center></span>	
         <center><button type="submit" class="btn btn-primary" style="font-size:20px; height:40px;">ค้นหา</button>
          
	</form><br><br></center> 
	<center>
    <span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> เพิ่มข้อมูล</a></center> </span>
	<div style="height:50px;"></div>
	<table class="table table-striped table-bordered table-hover">
			<thead>
			<th>เลขที่คำขอ</th>
				<th>ชื่อจริง</th>
				<th>นามสกุล</th>
				<th>อีเมล</th>
				<th>รหัสผ่าน</th>
				<th>เบอร์โทร</th>
                <th>ชื่อร้าน</th>
                <th>ที่อยู่</th>
				<th>จังหวัด</th>
				<th>ละติจูด</th>
				<th>ลองจิจูด</th>
                <th>สถานะ</th>
				<th>ตั้งค่า</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');

				if (isset($status) && $status!= 9){
					$query=mysqli_query($conn,"select * from usercare where status='$status' order by namecarecare");
				}
				else{
					$query=mysqli_query($conn,"select * from usercare order by namecarecare");
				}
				while($row=mysqli_fetch_array($query)){
					?>
					<tr><td><?php echo $row['id_care']; ?></td>
						<td><?php echo $row['fname']; ?></td>
						<td><?php echo $row['lname']; ?></td>
						<td><?php echo $row['careemail']; ?></td>
                        <td><?php echo $row['carepassword']; ?></td>
                        <td><?php echo $row['carephone']; ?></td>
                        <td><?php echo $row['namecarecare']; ?></td>
                        <td><?php echo $row['careaddress']; ?></td>
						<td><?php echo $row['carecity']; ?></td>
						<td><?php echo $row['latitude']; ?></td>
						<td><?php echo $row['longitude']; ?></td>
						<td><?php 
						     if ($row['status'] == '1')
					         { echo "อนุมัติ";} 
					         else if ($row['status'] == '2')
					         { echo "ไม่อนุมัติ"; }
                             else 
					         { echo "รออนุมัติ" ; }
							 ?>
						</td>
						<td>
							<a href="#edit<?php echo $row['id_care']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>แก้ไข</a> || 
							<a href="#del<?php echo $row['id_care']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>ลบ</a>
							<?php include('buttonallow.php'); ?>
						</td>
					</tr>
			     <?php
				}
            
			?>
			</tbody>
		</table>
		<?php include('add_modal.php'); ?>
	</div>

</div>
</body>
</html>
<?php }?>