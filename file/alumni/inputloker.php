<div class="content">
	<br />
<br />
<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Input Lowongan Pekerjaan</h2>
					

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="center">
            <div class="boxed-grey">
                <form name="myForm" action="profile.php?content=<?php echo 'insert.php'; ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">


        <div class="panel panel-default">


            <div class="panel-heading"><p class="text-center">Masukkan Lowongan Pekerjaan</p></div>
            <div class="panel-body">

                <div class="form-group">
                    <label for="id" class="col-sm-4 control-label">Kode Lowongan Pekerjaan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="id" maxlength="5" required/>
                    </div>
              </div>
              
               <div class="form-group">
                    <label for="judulinfo" class="col-sm-4 control-label">Jenis Lowongan Pekerjaan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="judulinfo" maxlength="60" required/>
                    </div>
              </div>

              <div class="form-group">
                    <label for="judulinfo" class="col-sm-4 control-label">Judul Lowongan Pekerjaan</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="judulinfo" maxlength="60" required/>
                    </div>
              </div>

              <div class="form-group">
                    <label for="info" class="col-sm-4 control-label">Isi Lowongan Pekerjaan</label>
                    <div class="col-sm-5">
                        <!--<input type="text" class="form-control" name="info" required/>-->
                        <textarea class="form-control" name="info"></textarea>
                    </div>
              </div>

              <div class="form-group">
                    <label for="tgl" class="col-sm-4 control-label">Tanggal</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="tgl" maxlength="10" required/>
                    </div>
              </div>

              <div class="form-group">
                    <label for="tgl" class="col-sm-4 control-label">Deadline Pendaftaran</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="tgl" maxlength="10" required/>
                    </div>
              </div>     

              <div class="form-group">
                    <label for="namafilefoto" class="col-sm-4 control-label">Photo</label>
                    <div class="col-sm-5">
                        <input type="file" name="namafilefoto" id="foto" required />
                    </div>
              </div>
              <!--<fieldset class="name"><input placeholder="Name..." type="text"></fieldset>-->
              <br>
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>  

              </div>
            </div>
        </div>
      </form>  
            </div>
        </div>
		
		
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->
  <br />
<br />
<br />
<br />
</div>