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
					$del1=mysqli_query($conn,"select * from carcare where id='".$row['id']."'");
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
					$edit=mysqli_query($conn,"select * from carcare where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="editcarcare.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">NameCarcare:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="carename" class="form-control" value="<?php echo $erow['carename']; ?>">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">County:</label>
						</div>
						<div class="col-lg-10">
						<select name="county"  >
				      <option value="<?php echo $erow['county']; ?>"/>
				      <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
				      <option value="กระบี่">กระบี่ </option>
				      <option value="กาญจนบุรี">กาญจนบุรี </option>
				      <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
				      <option value="กำแพงเพชร">กำแพงเพชร </option>
				      <option value="ขอนแก่น">ขอนแก่น</option>
				      <option value="จันทบุรี">จันทบุรี</option>
				      <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
				      <option value="ชัยนาท">ชัยนาท </option>
				      <option value="ชัยภูมิ">ชัยภูมิ </option>
				      <option value="ชุมพร">ชุมพร </option>
				      <option value="ชลบุรี">ชลบุรี </option>
				      <option value="เชียงใหม่">เชียงใหม่ </option>
				      <option value="เชียงราย">เชียงราย </option>
				      <option value="ตรัง">ตรัง </option>
				      <option value="ตราด">ตราด </option>
				      <option value="ตาก">ตาก </option>
				      <option value="นครนายก">นครนายก </option>
				      <option value="นครปฐม">นครปฐม </option>
				      <option value="นครพนม">นครพนม </option>
				      <option value="นครราชสีมา">นครราชสีมา </option>
				      <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
				      <option value="นครสวรรค์">นครสวรรค์ </option>
				      <option value="นราธิวาส">นราธิวาส </option>
				      <option value="น่าน">น่าน </option>
				      <option value="นนทบุรี">นนทบุรี </option>
				      <option value="บึงกาฬ">บึงกาฬ</option>
				      <option value="บุรีรัมย์">บุรีรัมย์</option>
				      <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
				      <option value="ปทุมธานี">ปทุมธานี </option>
				      <option value="ปราจีนบุรี">ปราจีนบุรี </option>
				      <option value="ปัตตานี">ปัตตานี </option>
				      <option value="พะเยา">พะเยา </option>
				      <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
				      <option value="พังงา">พังงา </option>
				      <option value="พิจิตร">พิจิตร </option>
				      <option value="พิษณุโลก">พิษณุโลก </option>
				      <option value="เพชรบุรี">เพชรบุรี </option>
				      <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
				      <option value="แพร่">แพร่ </option>
				      <option value="พัทลุง">พัทลุง </option>
				      <option value="ภูเก็ต">ภูเก็ต </option>
				      <option value="มหาสารคาม">มหาสารคาม </option>
				      <option value="มุกดาหาร">มุกดาหาร </option>
				      <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
				      <option value="ยโสธร">ยโสธร </option>
				      <option value="ยะลา">ยะลา </option>
				      <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
				      <option value="ระนอง">ระนอง </option>
				      <option value="ระยอง">ระยอง </option>
				      <option value="ราชบุรี">ราชบุรี</option>
				      <option value="ลพบุรี">ลพบุรี </option>
				      <option value="ลำปาง">ลำปาง </option>
				      <option value="ลำพูน">ลำพูน </option>
				      <option value="เลย">เลย </option>
				      <option value="ศรีสะเกษ">ศรีสะเกษ</option>
				      <option value="สกลนคร">สกลนคร</option>
				      <option value="สงขลา">สงขลา </option>
				      <option value="สมุทรสาคร">สมุทรสาคร </option>
				      <option value="สมุทรปราการ">สมุทรปราการ </option>
				      <option value="สมุทรสงคราม">สมุทรสงคราม </option>
				      <option value="สระแก้ว">สระแก้ว </option>
				      <option value="สระบุรี">สระบุรี </option>
				      <option value="สิงห์บุรี">สิงห์บุรี </option>
				      <option value="สุโขทัย">สุโขทัย </option>
				      <option value="สุพรรณบุรี">สุพรรณบุรี </option>
				      <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
				      <option value="สุรินทร์">สุรินทร์ </option>
				      <option value="สตูล">สตูล </option>
				      <option value="หนองคาย">หนองคาย </option>
				      <option value="หนองบัวลำภู">หนองบัวลำภู </option>
				      <option value="อำนาจเจริญ">อำนาจเจริญ </option>
				      <option value="อุดรธานี">อุดรธานี </option>
				      <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
				      <option value="อุทัยธานี">อุทัยธานี </option>
				      <option value="อุบลราชธานี">อุบลราชธานี</option>
				      <option value="อ่างทอง">อ่างทอง </option>
				      <option value="อื่นๆ">อื่นๆ</option>
					</select>
					</div>
					</div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Image:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="photocare" class="form-control" ><img src="<?php echo $row['photocare']; ?>" height="100" width="100">
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Latitude:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="latitude" class="form-control" value="<?php echo $erow['latitude']; ?>">
						</div>
					</div>
                    <div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Longitude:</label>
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