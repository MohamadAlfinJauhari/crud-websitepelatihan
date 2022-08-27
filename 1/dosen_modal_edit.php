<?php

include "../koneksi.php";

$NIP	= $_GET["NIP"];

$querydosen = mysqli_query($konek, "SELECT * FROM dosen WHERE NIP='$NIP'");
if($querydosen == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($dosen = mysqli_fetch_array($querydosen)){
?>

	<!-- page script -->
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Pengajar</h4>
					</div>
					<div class="modal-body">
						<form action="dosen_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIP" type="text" class="form-control" value="<?php echo $dosen["NIP"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Pengajar</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="namadosen" type="text" class="form-control" value="<?php echo $dosen["namadosen"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="tanggallahir" name="tanggallahir" type="text" class="form-control" value="<?php echo $dosen["tanggallahir"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jenis Kelamin</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
										<select name="jeniskelamin" class="form-control">
											<option value="<?php echo $dosen["jeniskelamin"]; ?>" selected>
											<?php
												if ($dosen["jeniskelamin"]=="L"){
													echo "Laki - laki";
												}
												else{
													echo "Perempuan";
												}
											?>
											</option>
											<?php
												if ($dosen["jeniskelamin"]=="L"){
													echo "<option value='P'>Perempuan</option>";
												}
												else{
													echo "<option value='L'>Laki - laki</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="nomortelp" type="text" class="form-control" value="<?php echo $dosen["nomortelp"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Topik Pelatihan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="topikpelatihan" type="text" class="form-control" value="<?php echo $dosen["topikpelatihan"]; ?>"/>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Simpan
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Keluar
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>