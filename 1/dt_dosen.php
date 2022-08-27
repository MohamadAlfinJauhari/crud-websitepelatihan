				<thead>
					<tr>
						<th>NIP</th>
						<th>Pengajar</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Nomor Telp</th>
						<th>Topik Pelatihan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querydosen = mysqli_query ($konek, "SELECT NIP, namadosen, tanggallahir, jeniskelamin, nomortelp, topikpelatihan FROM dosen");
						if($querydosen == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($dosen = mysqli_fetch_array ($querydosen)){
							
							echo "
								<tr>
									<td>$dosen[NIP]</td>
									<td>$dosen[namadosen]</td>
									<td>$dosen[tanggallahir]</td>
									<td>
								";
									if($dosen["jeniskelamin"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$dosen[nomortelp]</td>
									<td>$dosen[topikpelatihan]</td>
									<td>
										<a href='#' class='open_modal' id='$dosen[NIP]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"dosen_delete.php?NIP=$dosen[NIP]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>