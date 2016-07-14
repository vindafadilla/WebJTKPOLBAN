<?php
include('../../inc/class-general.php');
$berita= new UserData();
$berita->konek_db();

    
                 $start=0;
                        $limit=2;
                        $id= isset($_GET['id']) ? $_GET['id'] : null;
                        // echo date('Y-m-d H:i');

                        if(isset($_GET['id']))
                        {
                            $id=$_GET['id'];
                            $start=($id-1)*$limit;
                        }
                        $sql="SELECT * FROM prestasi ORDER BY `ID_PRESTASI` DESC LIMIT $start, $limit";
                        //SELECT * FROM `info` ORDER BY `info`.`tanggal` DESC
                        $result = $mysqli->query($sql);
                        // $result = mysqli_query($db, $sql);
                                                
                        $i =1;
                        
                        while ($row = $result->fetch_assoc())
                            {       

                                echo "<div class=row>";
                                echo "<div class=col-md-12>";

                                $imgpath=$row['PHOTO'];
                                echo "<div class='ix webdesign col-md-3'>";
                                echo "<img class='img-berita' src='../../image/prestasi/$imgpath' alt='' width='250px' height='240px'>";
                                echo "</div>";
                                echo "<div class='col-md-9'";
                                echo "<p><i>".$row['JUDUL_PRESTASI']."</i></p>";
                                $format = substr($row['PRESTASI'], 0, 750); 
                                echo "".$format.". . .</p>";
                                echo "<a align='right' class='btn btn-success md-warn' href='admin.php?content=detailPrestasi.php&id=$row[ID_PRESTASI]' role='button'>Read More</a>&nbsp<a align='right' class='btn btn-warning md-warn' href='admin.php?content=editPrestasi.php&id=$row[ID_PRESTASI]' role='button'>Edit</a>&nbsp<a align='right' class='btn btn-danger md-warn' href='inc/adminModel.php?a=deletePrestasi&id=$row[ID_PRESTASI]' role='button'>Delete</a>";
                                echo "<br><br>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";

                                echo "<br><br>";
                                $i++;
                            }


                        //buat ngitung ada berapa data di tabel 
                                $sql = "SELECT * FROM prestasi";
                                 $result = $mysqli->query($sql);
                                $rows = mysqli_num_rows($result);
                                $total=ceil($rows/$limit);
                                ?>
                                </table><br>
                                <?php
                                   
                                    echo "<ul class='pagination'>";
                                    for($i=1;$i<=$total;$i++) //ngelooping banyaknya page
                                    {


                                         echo "<li><a href='admin/admin.php?a=view_prestasi&id=".$i."'>".$i."</a></li>"; 
                                    }
                                    echo "</ul>";

?>