<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$omenu=$db->prepare("SELECT * from omenu order by omenu_sira ASC");
$omenu->execute(array(0));

$omenua=$db->prepare("SELECT * from omenu where omenu_ust=0 order by omenu_sira ASC");
$omenua->execute(array(0));

$omenuab=$db->prepare("SELECT * from omenu order by omenu_sira ASC");
$omenuab->execute(array(0));

$omenuabc=$db->prepare("SELECT * from omenu order by omenu_sira ASC");
$omenuabc->execute(array(0));

$smenu=$db->prepare("SELECT * from smenu");
$smenu->execute(array(0));
?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Header Menü İşlemleri</h2>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-heading card-default">
					Üst Özel Menü Düzenle
				</div>

				<div class="card-block">
					<h5 style="color: green;">Yeni Özel Menü Ekle</h5>
					<form method="POST" action="controller/function.php" class="form-horizontal">
						<div class="form-group">
							<div class="row">
								<div class="col-md-3">
									<label>Menü Adı</label>
									<input type="text" name="omenu_ad" placeholder="Menü adı giriniz." class="form-control">
								</div>
								<div class="col-md-4">
									<label>Menü Link</label>
									<input type="text" name="omenu_link" placeholder="Menü linki giriniz." class="form-control">
								</div><div class="col-md-3">
									<label>Menü Sıra</label>
									<input type="text" name="omenu_sira" placeholder="Menü sıra giriniz." class="form-control">
								</div>
								<div class="col-md-2">
									<label>*İşlem</label><div>
										<button style="cursor: pointer;" type="submit" name="omenuekle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Ekle</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<br />
					<hr>
					<br />
					<h5 style="color: green;">Var Olan Menüler</h5>
					<?php 
					while ($smenuprint=$smenu->fetch(PDO::FETCH_ASSOC)) {
						?>
						<form method="POST" action="controller/function.php" class="form-horizontal">
							<div class="form-group">
								<div class="row">

									<input type="hidden" name="smenu_id" value="<?php echo $smenuprint['smenu_id']; ?>"  class="form-control">
									<div class="col-md-6">
										<label>Menü Adı</label>
										<input type="text" name="smenu_ad" value="<?php echo $smenuprint['smenu_ad']; ?>" class="form-control">
									</div>
									<div class="col-md-4">
										<label>Menü Durum</label>
										<select name="smenu_durum" class="form-control m-b">
											<?php if ($smenuprint['smenu_durum']==1) { ?>
											<option value="1">Aktif</option>
											<option value="0">Pasif</option>
											<?php
										} else {?>
										<option value="0">Pasif</option>
										<option value="1">Aktif</option>
										<?php }?>
									</select>
								</div>
								<div class="col-md-2">
									<label>*Kaydet</label><div>
										<button style="cursor: pointer;" type="submit" name="smenuduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button></div>
									</div>
								</div>
							</div>
						</form>
						<?php } ?>
						<?php 
						while ($omenuprint=$omenu->fetch(PDO::FETCH_ASSOC)) {
							?>
							<form method="POST" action="controller/function.php" class="form-horizontal">
								<div class="form-group">
									<div class="row">

										<input type="hidden" name="omenu_id" value="<?php echo $omenuprint['omenu_id']; ?>"  class="form-control">
										<div class="col-md-3">
											<label>Menü Adı</label>
											<input type="text" name="omenu_ad" value="<?php echo $omenuprint['omenu_ad']; ?>" class="form-control">
										</div>
										<div class="col-md-3">
											<label>Menü Link</label>
											<input type="text" name="omenu_link" value="<?php echo $omenuprint['omenu_link']; ?>" class="form-control">
										</div><div class="col-md-2">
											<label>Menü Sıra</label>
											<input type="text" name="omenu_sira" value="<?php echo $omenuprint['omenu_sira']; ?>" class="form-control">
										</div>
										<div class="col-md-2">
											<label>Menü Durum</label>
											<select name="omenu_durum" class="form-control m-b">
												<?php if ($omenuprint['omenu_durum']==1) { ?>
												<option value="1">Aktif</option>
												<option value="0">Pasif</option>
												<?php
											} else {?>
											<option value="0">Pasif</option>
											<option value="1">Aktif</option>
											<?php }?>
										</select>
									</div>
									<div class="col-md-2">
										<label>*İşlem</label><div>
											<button style="cursor: pointer;" type="submit" name="omenuduzenle" class="btn btn-success btn-icon"><i class="fa fa-floppy-o "></i>Kaydet</button>
											<a href="controller/function.php?omenusil=ok&omenu_id=<?php echo $omenuprint['omenu_id']; ?>" style="cursor: pointer;" type="submit" name="omenusil" class="btn btn-danger btn-icon"><i class="fa fa-trash-o"></i>Sil</a>
										</div>
									</div>
								</div>
							</div>
						</form>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footer.php'; ?>