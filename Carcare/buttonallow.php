<!-- Delete -->
<div class="modal fade" id="del<?php echo $row['id_care']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">ลบ</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from usercare where id_care='".$row['id_care']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>NameCarcare: <strong><?php echo $drow['namecarecare']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['id_care']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id_care']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="submit" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">แก้ไข</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from usercare where id_care='".$row['id_care']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id_care']; ?>">
                <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">ID_Carcare:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="id_carcare" class="form-control" value="<?php echo $erow['id_carcare']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;" class="control-label">Status:</label>
						</div>
						<div class="col-lg-10">
                        <select name="status" id="status">
                            <option value ="0" <?php if($erow['status']==0){ echo "selected='selected'";} ?>>รออนุมัติ</option>
                            <option value ="1" <?php if($erow['status']==1){ echo "selected='selected'";}?>>อนุมัติ</option>
                            <option value ="2" <?php if($erow['status']==2){ echo "selected='selected'";} ?>>ไม่อนุมัติ</option>
                        </select>
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