<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Hizmet İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="hizmetler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
					</div>
					Hizmet Ekle
				</div>
				<div class="card-block">

					<form method="POST" action="controller/function.php" enctype="multipart/form-data" class="form-horizontal">						
						<div class="form-group">
							<label>Hizmet Adı</label>
							<input type="text" name="hizmet_baslik" placeholder="Hizmet adı giriniz." class="form-control">
						</div>

						<div class="form-group">
							<label>İçerik</label>
							<textarea class="summernote" name="hizmet_icerik">İçerik giriniz</textarea>
						</div>
						<div class="form-group">
							<label>Hizmet Resim</label>
							<div class="fileinput fileinput-new input-group col-md-3" data-provides="fileinput">
								<div class="form-control" data-trigger="fileinput"><span class="fileinput-filename"></span></div>
								<span class="input-group-addon btn btn-primary btn-file ">
									<span class="fileinput-new">Yükle</span>
									<span class="fileinput-exists">Değiştir</span>
									<input type="file" name="hizmet_resim">
								</span>
								<a href="#" class="input-group-addon btn btn-danger  hover fileinput-exists" data-dismiss="fileinput">Sil</a>
							</div>
						</div>
						<div class="form-group">
							<label>Vitrinde Göster</label>
							<select name="hizmet_vitrin" class="form-control m-b">
								<?php if ($hizmetwrite['hizmet_vitrin']==1) { ?>
								<option value="1">Göster</option>
								<option value="0">Gizle</option>
								<?php
							} else {?>
							<option value="0">Gizle</option>
							<option value="1">Göster</option>
							<?php }?>
						</select>
						<small class="text-muted">Hizmetler ana sayfada gösterilecektir</small>
					</div>

					<hr>
					<div class="">
						<b style="color: red;">*SEO Meta Ayarları</b>
						<p class="text-muted">Google başta olmak üzere tüm arama motorları sizi buraya girdiğiniz bilgiler doğrultusunda üst sıralara taşıyacaktır.</p>
					</div>
					<div class="form-group">
						<label>Title</label>
						<input type="text" name="hizmet_title" placeholder="Title belirtiniz" class="form-control form-control-rounded">
					</div>

					<div class="form-group">
						<label>Description</label>
						<input name="hizmet_descr" type="text" placeholder="Description belirtiniz" class="form-control form-control-rounded">
					</div>

					<div class="form-group">
						<label>Keywords</label>
						<input type="text" name="hizmet_keyword" placeholder="Keywords belirtiniz" class="form-control form-control-rounded">
						<small class="text-muted">Örnek : <code>elma, armut, muz, karpuz</code></small>
					</div>
					<button style="cursor: pointer;" type="submit" name="hizmetekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
					<a href="hizmetler.php" class="btn btn-warning btn-icon"><i class="fa fa-reply"></i>Geri Dön</a>
				</form>
			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>