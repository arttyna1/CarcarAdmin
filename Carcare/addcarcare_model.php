
	<div class="modal fade" id="addcar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" class="modal.large">
            <div class="modal-content modal3" style="width: 1000px;" >
				<div class="modal-header">
				<h4 class="modal-title h4" id="myModalLabel">เพิ่มร้านคาร์แคร์</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div><br>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addcarcare.php">
				<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">ชื่อร้านคาร์แคร์:</label><br>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="carename">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">จังหวัด:</label>
						</div>
						<div class="col-lg-10">
						<select name=county>
				      <option value="">--------- เลือกจังหวัด ---------</option>
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
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">รูปร้าน:</label><br>
						</div>
						<div class="col-lg-10">
						<input type="text" name="photocare"><br>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">ที่อยู่ละติจูด:</label><br>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="latitude">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">ที่อยู่ลองจิจูด:</label><br>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="longitude">
						</div>
					</div>
					<div style="height:10px;"></div>
				</div> 
				
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary" name="Submit"><span class="glyphicon glyphicon-floppy-disk"></span> Save</button>
				</form>
                </div>
				
            </div>
        </div>
    </div>

