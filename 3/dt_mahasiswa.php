				<thead>
					<tr>
						<th>Nama Mahasiswa</th>
						<th>Tanggal Lahir</th>
						<th>Jenis Kelamin</th>
						<th>Nomor Telp</th>
						<th>Prodi</th>
						<th>Topik Pelatihan</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querymhs = mysqli_query($konek, "SELECT namamahasiswa, tanggallahir, jeniskelamin, nomortelp, prodi, topikpelatihan FROM mahasiswa WHERE NIM='$_SESSION[Username]'");
						if($querymhs == false){
							die("Terdapat Kesalahan : ". mysqli_error($konek));
						}
						while ($mhs = mysqli_fetch_array($querymhs)){
							
								echo "
									<tr>
										<td>$mhs[namamahasiswa]</td>
										<td>$mhs[tanggallahir]</td>
										<td>$mhs[jeniskelamin]</td>
										<td>$mhs[nomortelp]</td>
										<td>$mhs[prodi]</td>
										<td>$mhs[topikpelatihan]</td>
									</tr>";
							}
					?>
				</tbody>