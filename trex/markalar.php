<?php 
include 'header.php';
include 'topbar.php';
include 'sidebar.php';
$hizmetsor=$db->prepare("SELECT * from markalar order by marka_id DESC");
$hizmetsor->execute(array(0));
?>		
<!-- ============================================================== -->
<!-- 						Content Start	 						-->
<!-- ============================================================== -->
<section class="main-content container">
	<div class="page-header">
		<h2>Marka İşlemleri</h2>
	</div>
	<div class="row">
		<!-- İLETİŞİM MESAJLARI -->
		<div class="col-md-12">
			<div class="card">
				<div class="card-heading card-default">
					<div class="pull-right mt-10">
						<a href="marka-ekle.php" class="btn btn-primary btn-icon"><i class="fa fa-plus"></i> Marka Ekle</a>
					</div>
					Markalar
				</div>
				<div class="card-block">
					<table id="datatable1" class="table table-striped dt-responsive nowrap table-hover">
						<thead>
							<tr>
								<th class="text-left">
									<strong>Marka id</strong>
								</th>
								<th class="text-left">
									<strong>Marka Resim</strong>
								</th>
								<th class="text-left">
									<strong>Marka Adı</strong>
								</th>
								<th class="text-left">
									<strong>Marka İçerik</strong>
								</th>
								<th class="text-center">
									<strong>İşlemler</strong>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php 
							while ($hizmetcek=$hizmetsor->fetch(PDO::FETCH_ASSOC)) {
								$hizmeticerik=mb_substr(strip_tags($hizmetcek['marka_icerik']), 0, 40, 'UTF-8')."...";
								?>
								<tr>
									<td>#<?php echo $hizmetcek['marka_id']; ?></td>
									<td><img style="max-height: 40px;max-width: 40px;" src="<?php echo $hizmetcek['marka_resim']; ?>"></td>
									<td><?php echo $hizmetcek['marka_baslik']; ?></td>
									<td><?php echo $hizmeticerik; ?></td>
									<td class="text-center">
										<a href="marka-duzenle.php?marka_id=<?php echo $hizmetcek['marka_id']; ?>" title="Düzenle" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
										<a href="controller/function.php?markasil=ok&marka_id=<?php echo $hizmetcek['marka_id']; ?>" title="Sil" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- İLETİŞİM MESAJLARI -->
		</div>

		<?php include 'footer.php'; ?>