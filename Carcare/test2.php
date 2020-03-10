<!-- Delete -->
<div class="modal fade" id="del1<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">ลบ</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del1=mysqli_query($conn,"select * from Carcare where id='".$row['id']."'");
					$drow=mysqli_fetch_array($del1);
				?>
				<div class="container-fluid">
					<h5><center>NameCarcare: <strong><?php echo $drow['carename']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="deletecarcare.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit1<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal3" style="width: 1000px;">
                <div class="modal-header">
				<h4 class="modal-title h4" id="myModalLabel">แก้ไข</h4>
                    <button type="submit" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from Carcare where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="editcarcare.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ชื่อร้าน:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="namecarcare" class="form-control" value="<?php echo $erow['carename']; ?>">
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">จังหวัด:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="phone" class="form-control" value="<?php echo $erow['county']; ?>">
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">รูปร้าน:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="address" class="form-control" value="<?php echo $erow['photocare']; ?>">
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ที่อยู่ละติจูด:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="latitude" class="form-control" value="<?php echo $erow['latitude']; ?>">
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ที่อยู่ลองติจูด:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="longitude" class="form-control" value="<?php echo $erow['longitude']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->