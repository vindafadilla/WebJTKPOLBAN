<?php
/********************************************************** 
** Nama File....: fungsi.php *** 
** Penulis......: Rio Astamal *** 
** Tanggal......: 12-10-2005 *** 
** Penjelasan...: Kumpulan fungsi untuk forum *** 
***********************************************************/ 
// cegah pengaksesan langsung dari browser 
/*if(eregi('fungsi.php', $_SERVER['PHP_SELF'])) 
exit('Error: Akses ditolak.'); */
// fungsi untuk mengkoneksikan dengan MySQL server 

class User{



	function konek_db() 
	{ 

		global $mysqli;
		$mysqli = new mysqli("localhost","root","","ppl_dbv1");

		//mengecek jika terjadi gagal koneksi
		if(mysqli_connect_errno()) {
		    echo "Error: Could not connect to database. ";
		    exit;
		}
	} 
 


	// fungsi untuk mengecek session 
	function cek_session($nama_ses) 
	{ 
		// jika session kosong 
		if(!isset($_SESSION[$nama_ses])) 
		return false; // kembalikan nilai false 
		else
		// jika tidak kosong 
		return true;// kemblikan nilai true 
	} 

	// fungsi untuk login 
	function login($username, $password, $tabel, $db) 
	{ 
		
		$sql="SELECT * FROM $tabel WHERE USERNAME='$username' AND PASSWORD='$password'";
		$result = $db->query($sql);
		// cek baris yang dikembalikan 
		if(mysqli_num_rows($result) == 0) 
		return false; // data tidak cocok 
		else
		return true; // kembalikan nilai true 
	} 

	// fungsi untuk membuat password secara acak 
	// digunakan untuk mengirim password pada form lupa password 


	// fungsi untuk logout (menghapus session) 
	function logout($nama_ses) 
	{ 
		// jika session kosong 
		if(!isset($_SESSION[$nama_ses])) 
		return false; // kembalikan false 
		else
		{ 
			// jika tidak kosong hancurkan session tersebut 
			unset($_SESSION[$nama_ses]); 
			session_destroy(); 
			return true;// kembalikan nilai true 
		} 
	} 




	function form_login($action) 
	{ 
		echo 	'<form method="post" action='.$action.' enctype="multipart/form-data">
	                <div class="col-md-2"><h6>Username</h6></div>
	                <div class="col-md-10"> <input type="text" class="form-control" size="45" placeholder="masukkan text" name="username" ><br><br>
	                </div>
	                <div class="col-md-2"><h6>Password</h6></div>
	                <div class="col-md-10"> <input type="password" class="form-control" size="45" placeholder="masukkan text" name="password" ><br><br>
	                </div>
	                <div class="col-md-2"></div>
	                <div class="col-md-10"><button type="submit" class="btn btn-warning">Login</button></div>
	                <div class="col-md-12">
	                </div>
                </form>';
        
	}
	

	function view_berita($user,$db)
	{
		      	 $start=0;
                        $limit=2;
                        $id= isset($_GET['id']) ? $_GET['id'] : null;
                        // echo date('Y-m-d H:i');

                        if(isset($_GET['id']))
                        {
                            $id=$_GET['id'];
                            $start=($id-1)*$limit;
                        }
		                $sql="SELECT * FROM berita ORDER BY berita.TANGGAL DESC LIMIT $start, $limit";//SELECT * FROM `info` ORDER BY `info`.`tanggal` DESC
                    	$result = $db->query($sql);
                                                
                    	$i =1;
						while ($row=$result->fetch_assoc())
	                        {       

	                            echo "<div class=row>";
	                            echo "<div class=col-md-12>";

	                            $imgpath=$row['IMAGE_PATH'];
	                            echo "<div class='ix webdesign col-md-3'>";
	                            echo "<img class='img-berita' src='$imgpath' alt=''>";
	                            echo "</div>";
	                            echo "<div class='col-md-9'";
	                            echo "<p><i>".$row['TANGGAL']."</i></p>";
	                            echo "<p><i>".$row['JUDUL']."</i></p>";
	                            $format = substr($row['ISI'], 0, 750); 
	                            echo "".$format.". . .</p>";
	                            echo "<a align='right' class='btn btn-warning md-warn' href='mhs.php?a=detail_berita&id=$row[ID_BERITA]' role='button'>View Detail</a>";
	                            echo "<br><br>";
	                            echo "</div>";
	                            echo "</div>";
	                            echo "</div>";

	                            echo "<br><br>";
	                            $i++;
	                        }


                        //buat ngitung ada berapa data di tabel 
                                $sql = "SELECT * FROM berita";
                                 $result = $db->query($sql);
                                $rows = mysqli_num_rows($result);
                                $total=ceil($rows/$limit);
                                ?>
                                </table><br>
                                <?php
                                   
                                    echo "<ul class='pagination'>";
                                    for($i=1;$i<=$total;$i++) //ngelooping banyaknya page
                                    {


                                         echo "<li><a href='".$user.".php?a=view_berita&id=".$i."'>".$i."</a></li>"; 
                                    }
                                    echo "</ul>";
	} 


	function view_prestasi($user,$db)
	{
		      	 $start=0;
                        $limit=2;
                        $id= isset($_GET['id']) ? $_GET['id'] : null;
                        // echo date('Y-m-d H:i');

                        if(isset($_GET['id']))
                        {
                            $id=$_GET['id'];
                            $start=($id-1)*$limit;
                        }
		                $sql="SELECT * FROM prestasi ORDER BY `ID_PRETASI` DESC LIMIT $start, $limit";//SELECT * FROM `info` ORDER BY `info`.`tanggal` DESC
                    	// $result = $db->query($sql);
                    	$result = mysqli_query($db, $sql);
                                                
                    	$i =1;
                    	
						while ($row = mysqli_fetch_assoc($result))
	                        {       

	                            echo "<div class=row>";
	                            echo "<div class=col-md-12>";

	                            $imgpath=$row['PHOTO'];
	                            echo "<div class='ix webdesign col-md-3'>";
	                            echo "<img class='img-berita' src='../image/berita/$imgpath' alt=''>";
	                            echo "</div>";
	                            echo "<div class='col-md-9'";
	                            echo "<p><i>".$row['JUDUL_PRESTASI']."</i></p>";
	                            $format = substr($row['PRESTASI'], 0, 750); 
	                            echo "".$format.". . .</p>";
	                            echo "<a align='right' class='btn btn-warning md-warn' href='view_detail.php?id=$row[ID_PRETASI]' role='button'>View Detail</a>";
	                            echo "<br><br>";
	                            echo "</div>";
	                            echo "</div>";
	                            echo "</div>";

	                            echo "<br><br>";
	                            $i++;
	                        }


                        //buat ngitung ada berapa data di tabel 
                                $sql = "SELECT * FROM prestasi";
                                 $result = $db->query($sql);
                                $rows = mysqli_num_rows($result);
                                $total=ceil($rows/$limit);
                                ?>
                                </table><br>
                                <?php
                                   
                                    echo "<ul class='pagination'>";
                                    for($i=1;$i<=$total;$i++) //ngelooping banyaknya page
                                    {


                                         echo "<li><a href='".$user.".php?a=view_prestasi&id=".$i."'>".$i."</a></li>"; 
                                    }
                                    echo "</ul>";
	} 

	


	function view_detail_berita($id, $db) {

		$sql="SELECT * FROM berita WHERE ID_BERITA = $id";//SELECT * FROM `info` ORDER BY `info`.`tanggal` DESC
        $result = $db->query($sql);
        while ($row=$result->fetch_assoc())
	                        {       

	                            echo "<div class=row>";
	                            echo "<div class=col-md-12>";

	                            $imgpath=$row['IMAGE_PATH'];
	                            echo "<div class='ix webdesign col-md-3'>";
	                            echo "<img class='img-berita' src='$imgpath' alt=''>";
	                            echo "</div>";
	                            
	                            echo "<p><i>".$row['TANGGAL']."</i></p>";
	                            echo "<p><i>".$row['JUDUL']."</i></p>";
	                            echo "<p>".$row['ISI']."</p>";
	                         
	                            echo "<br><br>";
	                            
	                            echo "</div>";
	                            echo "</div>";

	                            echo "<br><br>";
	                           
	                        }

	}


}

?> 
