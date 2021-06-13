$(function() {
	$('.modalEdit').on('click', function() {
		const id = $(this).data('id');

		$.ajax({
			url: 'http://127.0.0.1/ci3-tugas/index.php/hotel/encodeData',
			data: {
				id: id
			},
			method: 'post',
			dataType: 'json',
			success: function(data) {
				$('#nama').val(data.nama);
				$('#lamainap').val(data.lamainap);
				$('#keterangan').val(data.keterangan);
				$('#id').val(data.id);
			}
		});
	});
});
