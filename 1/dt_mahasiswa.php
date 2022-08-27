				<thead>
					<tr>
						<th>NIM</th>
						<th>Mahasiswa</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Telpon</th>
						<th>Prodi</th>
						<th>Topik Pelatihan</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymhs = mysqli_query ($konek, "SELECT NIM, namamahasiswa, tanggallahir, jeniskelamin, nomortelp, prodi, topikpelatihan FROM mahasiswa");
						if($querymhs == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($mhs = mysqli_fetch_array ($querymhs)){
							
							echo "
								<tr>
									<td>$mhs[NIM]</td>
									<td>$mhs[namamahasiswa]</td>
									<td>$mhs[tanggallahir]</td>
									<td>
								";
									if($mhs["jeniskelamin"] == "L"){
										echo "Laki - laki";
									}
									else{
										echo "Perempuan";
									}
							echo "
									</td>
									<td>$mhs[nomortelp]</td>
									<td>$mhs[prodi]</td>
									<td>$mhs[topikpelatihan]</td>
									<td>
										<a href='#' class='open_modal' id='$mhs[NIM]'>Edit</a> |
										<a href='#' onClick='confirm_delete(\"mahasiswa_delete.php?NIM=$mhs[NIM]\")'>Delete</a>
									</td>
								</tr>";
						}
					?>
				</tbody>