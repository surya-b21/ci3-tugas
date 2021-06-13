<footer class="sticky-footer bg-white mt-5">
	<div class="container my-auto">
		<div class="copyright text-center my-auto">
			<span>Copyright &copy; Tugas e Surya</span>
		</div>
	</div>
</footer>
</div>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin logout?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Pilih "Logout" jika anda ingin logout.</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Kembali</button>
				<a class="btn btn-primary" href="<?= site_url('loginhotel/logout') ?>">Logout</a>
			</div>
		</div>
	</div>
</div>
</body>

<script src="<?= base_url('assets/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/jquery-easing/jquery.easing.min.js') ?> "></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>

<!-- Page level plugins -->
<script src="<?= base_url('assets/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/datatables/dataTables.bootstrap4.min.js') ?>"></script>

<!-- Page level custom scripts -->
<script src="<?= base_url('js/demo/datatables-demo.js') ?>"></script>

<script src="<?= base_url('js/script.js') ?>"></script>

</html>
