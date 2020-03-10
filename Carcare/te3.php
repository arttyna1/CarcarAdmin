
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
							<label class="control-label" style="position:relative; top:7px;">จังหวัด:</label><br>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="county">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">รูปร้าน:</label><br>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="photocare">
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

