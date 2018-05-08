<script type="text/javascript">
	$(function(){

		$('#formAddPelanggan').hide();
		$('#listEditPelanggan').hide();
		$('#listDeletePelanggan').hide();
		$('#dataPelanggan').DataTable();
		$('#dataPelangganEdit').DataTable();
		$('#dataPelangganDelete').DataTable();

		$('#addPelanggan').click(function(){
			$('#listDeletePelanggan').slideUp();
			$('#listEditPelanggan').slideUp();
			$('#listPelanggan').slideUp();
			$('#formAddPelanggan').slideDown();
		});


		$('#showPelanggan').click(function(){
			$('#listPelanggan').slideDown();
			$('#formAddPelanggan').slideUp();
			$('#listEditPelanggan').slideUp();
			$('#listDeletePelanggan').slideUp();
		});

		$('#editPelanggan').click(function(){
			$('#listDeletePelanggan').slideUp();
			$('#listPelanggan').slideUp();
			$('#formAddPelanggan').slideUp();
			$('#listEditPelanggan').slideDown();
		});

		$('#deletePelanggan').click(function() {
			$('#listDeletePelanggan').slideDown();
			$('#listPelanggan').slideUp();
			$('#formAddPelanggan').slideUp();
			$('#listEditPelanggan').slideUp();
		});

		$('#munculKanHasil').on('click','.hapusBaris',function(e){
			e.preventDefault();
			$(this).closest('tr').remove();
		});

		$('#listDataToBeDeleted').on('change','.ceklis',function(e){
			e.preventDefault();
			if($(this).is(':checked')){
				var kd = $(this).closest('tr').find('td:eq(2)').text();
				$(this).closest('tr').find('.showResultHere').html('<input type="hidden" name="id_pelanggan[]" value="'+kd+'">');
			}else{
				$(this).closest('tr').find('.showResultHere').html('');
			}

		});

		$('#tambahKeTablePelanggan').click(function(e){
			e.preventDefault();
			if($('#nm_pelanggan').val() == '' || $('#alm_pelanggan').val() == '' || $('#tlp_pelanggan').val() == '' || $('#ema_pelanggan').val() == '' || $('#ket').val() == ''){

			}else{
				var nama = $('#nm_pelanggan').val();
				var alamat = $('#alm_pelanggan').val();
				var telp = $('#tlp_pelanggan').val();
				var email = $('#ema_pelanggan').val();
				var status = $('#st_pelanggan').val();
				var ket = $('#ket').val();

					var isi = '<tr>'+
							'<td>'+nama+'<input type="hidden" name="nama[]" value="'+nama+'"></td>'+
							'<td>'+alamat+'<input type="hidden" name="alamat[]" value="'+alamat+'"></td>'+
							'<td>'+telp+'<input type="hidden" name="telp[]" value="'+telp+'"></td>'+
							'<td>'+email+'<input type="hidden" name="email[]" value="'+email+'"></td>'+
							'<td>'+status+'<input type="hidden" name="status[]" value="'+status+'"></td>'+
							'<td>'+ket+'<input type="hidden" name="ket[]" value="'+ket+'"></td>'+
							'<td><button type="button" class="form-control btn btn-danger hapusBaris">X</button></td>'+
						  '</tr>';

				$('#munculKanHasil').append(isi);

				nama = $('#nm_pelanggan').val('');
				alamat = $('#alm_pelanggan').val('');
				telp = $('#tlp_pelanggan').val('');
				email = $('#ema_pelanggan').val('');
				ket = $('#ket').val('');

			}

		});


		$('#listDataProdusen').DataTable();
		$('#listDataProdusenEdit').DataTable();
		$('#listDataProdusenDelete').DataTable();

		$('#tambahKeTableProdusen').click(function(e){
			e.preventDefault();
			if($('#nm_produsen').val() == '' || $('#alm_produsen').val() == '' || $('#ema_produsen').val() == '' || $('#ket').val() == ''){

			}else{
				var nama = $('#nm_produsen').val();
				var alamat = $('#alm_produsen').val();
				var email = $('#ema_produsen').val();
				var status = $('#st_produsen').val();
				var ket = $('#ket').val();

					var isi = '<tr>'+
							'<td>'+nama+'<input type="hidden" name="nama[]" value="'+nama+'"></td>'+
							'<td>'+alamat+'<input type="hidden" name="alamat[]" value="'+alamat+'"></td>'+
							'<td>'+email+'<input type="hidden" name="email[]" value="'+email+'"></td>'+
							'<td>'+status+'<input type="hidden" name="status[]" value="'+status+'"></td>'+
							'<td>'+ket+'<input type="hidden" name="ket[]" value="'+ket+'"></td>'+
							'<td><button type="button" class="form-control btn btn-danger hapusBaris">X</button></td>'+
						  '</tr>';

				$('#munculKanHasilProdusen').append(isi);

				nama = $('#nm_produsen').val('');
				alamat = $('#alm_produsen').val('');
				email = $('#ema_produsen').val('');
				ket = $('#ket').val('');

			}

		});

		$('#munculKanHasilProdusen').on('click','.hapusBaris',function(e){
			e.preventDefault();
			$(this).closest('tr').remove();
		});

		$('#listDataProdusenToBeDelete').on('change','.ceklis',function(e){
			e.preventDefault();
			if($(this).is(':checked')){
				var kd = $(this).closest('tr').find('td:eq(2)').text();
				$(this).closest('tr').find('.showResultHereKodeprodusen').html('<input type="hidden" name="kode[]" value="'+kd+'">');
			}else{
				$(this).closest('tr').find('.showResultHereKodeprodusen').html('');
			}

		});


		$('#formAddProduk').hide();
		$('#listEditProduk').hide();
		$('#listDeleteProduk').hide();
		$('#listDataProduk').DataTable();
		$('#listEditDataProduk').DataTable();
		$('#listDeleteDataProduk').DataTable();


		$('#addProduk').click(function(){
			$('#listDeleteProduk').slideUp();
			$('#listEditProduk').slideUp();
			$('#listProduk').slideUp();
			$('#formAddProduk').slideDown();
		});


		$('#showProduk').click(function(){
			$('#listProduk').slideDown();
			$('#formAddProduk').slideUp();
			$('#listEditProduk').slideUp();
			$('#listDeleteProduk').slideUp();
		});

		$('#editProduk').click(function(){
			$('#listDeleteProduk').slideUp();
			$('#listProduk').slideUp();
			$('#formAddProduk').slideUp();
			$('#listEditProduk').slideDown();
		});

		$('#deleteProduk').click(function() {
			$('#listDeleteProduk').slideDown();
			$('#listProduk').slideUp();
			$('#formAddProduk').slideUp();
			$('#listEditProduk').slideUp();
		});


		$('#tambahKeTableProduk').click(function(e){
			e.preventDefault();
			if($('#nm_produk').val() == '' || $('#hg_pokok').val() == '' || $('#hg_jual').val() == '' || $('#stok').val() == '' || $('#ket').val() == ''){

			}else{
				var nama = $('#nm_produk').val();
				var jenis = $('#jns_produk').val();
				var harga_pokok = $('#hg_pokok').val();
				var harga_jual = $('#hg_jual').val();
				var stok = $('#stok').val();
				var status = $('#st_produk').val();
				var ket = $('#ket').val();

					var isi = '<tr>'+
							'<td>'+nama+'<input type="hidden" name="nama[]" value="'+nama+'"></td>'+
							'<td>'+jenis+'<input type="hidden" name="jenis[]" value="'+jenis+'"></td>'+
							'<td>'+harga_pokok+'<input type="hidden" name="harga_pokok[]" value="'+harga_pokok+'"></td>'+
							'<td>'+harga_jual+'<input type="hidden" name="harga_jual[]" value="'+harga_jual+'"></td>'+
							'<td>'+stok+'<input type="hidden" name="stok[]" value="'+stok+'"></td>'+
							'<td>'+status+'<input type="hidden" name="status[]" value="'+status+'"></td>'+
							'<td>'+ket+'<input type="hidden" name="ket[]" value="'+ket+'"></td>'+
							'<td><button type="button" class="form-control btn btn-danger hapusBaris">X</button></td>'+
						  '</tr>';

				$('#munculKanHasilProduk').append(isi);

				$('#nm_produk').val('');
				$('#hg_pokok').val('');
				$('#hg_jual').val('');
				$('#stok').val('');
				$('#ket').val('');

			}

		});

		$('#munculKanHasilProduk').on('click','.hapusBaris',function(e){
			e.preventDefault();
			$(this).closest('tr').remove();
		});

		$('#selectHere').sortable({
			items :'> tr',
			appendTo : 'parent',
			helper :'clone'
		});

		$('#droppedProduk tbody').droppable({
			hoverClass: "drophover",
		    tolerance: "pointer",
		    drop: function(e, ui) {
		    	var table = '#droppedProduk';
		    	var trash = '<td width="1%"><button type="button" class="btn btn-danger btn-sm deleteBaris">X</button></td>';

		        var kode = '<input type="hidden" name="kode[]" class="form-control" value="'+ui.draggable.closest('tr').find('td:eq(0)').text()+'">';

		        var jenisProduk = '';

		        if(ui.draggable.closest('tr').find('td:eq(3)').text() == 'Food'){
		        	jenisProduk = '<select name="jenis[]" class="form-control selectJenis"><option value="Food" selected="true">Food</option><option value="Non-Food">Non-Food</option></select>';
		        }else if(ui.draggable.closest('tr').find('td:eq(3)').text() == 'Non-Food'){
		        	jenisProduk = '<select name="jenis[]" class="form-control selectJenis"><option value="Food">Food</option><option value="Non-Food" selected="true">Non-Food</option></select>';
		        }
		      

		        var tgl = ui.draggable.closest('tr').find('td:eq(1)').text();

		        var namaProduk = '<input type="text" name="namaProduk[]" class="form-control" value="'+ui.draggable.closest('tr').find('td:eq(2)').text()+'">';

		        var harga_pokok = '<input type="text" name="harga_pokok[]" class="form-control" value="'+ui.draggable.closest('tr').find('td:eq(4)').text()+'">';

		        var harga_jual = '<input type="text" name="harga_jual[]" class="form-control" value="'+ui.draggable.closest('tr').find('td:eq(5)').text()+'">';

		        var stok = '<input type="text" name="stok[]" class="form-control" value="'+ui.draggable.closest('tr').find('td:eq(6)').text()+'">';

		        var status = '';

		        if(ui.draggable.closest('tr').find('td:eq(7)').text() == 'Aktif'){
		        	status = '<select name="status[]" class="form-control statusProd"><option value="Aktif" selected="true">Aktif</option><option value="Non-Aktif">Non-Aktif</option></select>';
		        }else if(ui.draggable.closest('tr').find('td:eq(7)').text() == 'Non-Aktif'){
		        	status = '<select name="status[]" class="form-control statusProd"><option value="Aktif">Aktif</option><option value="Non-Aktif" selected="true">Non-Aktif</option></select>';
		        }

		        var keterangan = '<input type="text" name="ket[]" class="form-control" value="'+ui.draggable.closest('tr').find('td:eq(8)').text()+'">';
		        
		        $(table+' tbody .kosong').remove();

		        $(table+" tbody").append("<tr>"
		        	+"<td hidden='true'>"+kode+"</td>"
		        	+trash
		        	+"<td hidden='true'>"+tgl+"</td>"
		        	+"<td>"+namaProduk+"</td>"
		        	+"<td>"+jenisProduk+"</td>"
		        	+"<td>"+harga_pokok+"</td>"
		        	+"<td>"+harga_jual+"</td>"
		        	+"<td>"+stok+"</td>"
		        	+"<td>"+status+"</td>"
		        	+"<td>"+keterangan+"</td>"
		        	+"</tr>");

		        ui.draggable.remove();
		        $(table+' tbody .kosong').remove();
		    }
		});

		$('#selectHere').on('click','.selectRecordProduk',function(e){
			var table = '#droppedProduk';
		    	var trash = '<td width="1%"><button type="button" class="btn btn-danger btn-sm deleteBaris">X</button></td>';

		        var kode = '<input type="hidden" name="kode[]" class="form-control" value="'+$(this).closest('tr').find('td:eq(0)').text()+'">';

		        var jenisProduk = '';

		        if($(this).closest('tr').find('td:eq(3)').text() == 'Food'){
		        	jenisProduk = '<select name="jenis[]" class="form-control selectJenis"><option value="Food" selected="true">Food</option><option value="Non-Food">Non-Food</option></select>';
		        }else if($(this).closest('tr').find('td:eq(3)').text() == 'Non-Food'){
		        	jenisProduk = '<select name="jenis[]" class="form-control selectJenis"><option value="Food">Food</option><option value="Non-Food" selected="true">Non-Food</option></select>';
		        }

		        var tgl = $(this).closest('tr').find('td:eq(1)').text();

		        var namaProduk = '<input type="text" name="namaProduk[]" class="form-control" value="'+$(this).closest('tr').find('td:eq(2)').text()+'">';

		        var harga_pokok = '<input type="text" name="harga_pokok[]" class="form-control" value="'+$(this).closest('tr').find('td:eq(4)').text()+'">';

		        var harga_jual = '<input type="text" name="harga_jual[]" class="form-control" value="'+$(this).closest('tr').find('td:eq(5)').text()+'">';

		        var stok = '<input type="text" name="stok[]" class="form-control" value="'+$(this).closest('tr').find('td:eq(6)').text()+'">';

		        var status = '';

		        if($(this).closest('tr').find('td:eq(7)').text() == 'Aktif'){
		        	status = '<select name="status[]" class="form-control statusProd"><option value="Aktif" selected="true">Aktif</option><option value="Non-Aktif">Non-Aktif</option></select>';
		        }else if($(this).closest('tr').find('td:eq(7)').text() == 'Non-Aktif'){
		        	status = '<select name="status[]" class="form-control statusProd"><option value="Aktif">Aktif</option><option value="Non-Aktif" selected="true">Non-Aktif</option></select>';
		        }

		        var keterangan = '<input type="text" name="ket[]" class="form-control" value="'+$(this).closest('tr').find('td:eq(8)').text()+'">';

		        $(table+" tbody").append("<tr>"
		        	+"<td hidden='true'>"+kode+"</td>"
		        	+trash
		        	+"<td hidden='true'>"+tgl+"</td>"
		        	+"<td>"+namaProduk+"</td>"
		        	+"<td>"+jenisProduk+"</td>"
		        	+"<td>"+harga_pokok+"</td>"
		        	+"<td>"+harga_jual+"</td>"
		        	+"<td>"+stok+"</td>"
		        	+"<td>"+status+"</td>"
		        	+"<td>"+keterangan+"</td>"
		        	+"</tr>");

		        $(this).closest('tr').remove();
		});

		$('#droppedProduk tbody').on('click','.deleteBaris', function(e){
			var kode = $(this).closest('tr').find('td:eq(0)').find('input[type="hidden"]').val();
			var tgl = $(this).closest('tr').find('td:eq(2)').text();
			var jenis = $(this).closest('tr').find('td:eq(4)').find('.selectJenis').val();
			var nama = $(this).closest('tr').find('td:eq(3)').find('input[type="text"]').val();
			var hg_pokok = $(this).closest('tr').find('td:eq(5)').find('input[type="text"]').val();
			var hg_jual = $(this).closest('tr').find('td:eq(6)').find('input[type="text"]').val();
			var stok = $(this).closest('tr').find('td:eq(7)').find('input[type="text"]').val();
			var status = $(this).closest('tr').find('td:eq(8)').find('.statusProd').val();
			var ket = $(this).closest('tr').find('td:eq(9)').find('input[type="text"]').val();


			$(this).closest('tr').remove();
			
			var pushTR = "<tr>";
			pushTR += "<td>"+kode+"</td>";
			pushTR += "<td>"+tgl+"</td>";
			pushTR += "<td>"+nama+"</td>";
			pushTR += "<td>"+jenis+"</td>";
			pushTR += "<td>"+hg_pokok+"</td>";
			pushTR += "<td>"+hg_jual+"</td>";
			pushTR += "<td>"+stok+"</td>";
			pushTR += "<td>"+status+"</td>";
			pushTR += "<td>"+ket+"</td>";
			pushTR += '<td><button type="button" class="btn btn-primary selectRecordProduk">PILIH</button></td></tr>';
			$('#listEditDataProduk tbody').append(pushTR);
			
		});

		$('#listDataToBeDeletedS').on('change','.cekliss',function(e){
			e.preventDefault();
			if($(this).is(':checked')){
				var kd = $(this).closest('tr').find('td:eq(2)').text();
				$(this).closest('tr').find('.showResultHereDelete').html('<input type="hidden" name="kode[]" value="'+kd+'">');
			}else{
				$(this).closest('tr').find('.showResultHereDelete').html('');
			}

		});

		$('#modalDataBarang').DataTable();

		// DIALOG CREATE
		$("#dialogListProdukPembelian").dialog({  //create dialog, but keep it closed
		   autoOpen: false,
		   height: 500,
		   width: 800,
		   modal: true,
		   title: 'List Data Barang'
		});

		$('#takeProduk').click(function(){   //bind handlers
		   $("#dialogListProdukPembelian").dialog('open');
		});

		function dataRefresh(){
			var url = '{{ url("getDataPembelian") }}';
			$.get(url,function(show){
				$('#dataRecordPembelian').html(show);
				$('#dataRecordPembelian').find('#listRecordPembelian').DataTable();
			});	
		}

		$('.takeProduk').click(function(){
			dataRefresh();
		});

		$('#bodyModalDataBarang').on('click','.pilihProduk',function(){
			var kode = $(this).closest('tr').find('td:eq(0)').text();
			var nama = $(this).closest('tr').find('td:eq(1)').text();
			var jenis = $(this).closest('tr').find('td:eq(2)').text();
			var inputHIDE = '<input type="hidden" name="kode[]" value="'+kode+'">';
			var deleteButton = '<button type="button" class="btn btn-danger hapusBaris">X</button>'
			var inputQTY = '<input type="number" min="0" name="qty[]" value="1" class="form-control inputted">';

			if($('#'+kode).length == 0){
				var appended = '<tr id="'+kode+'">'
				+'<td>'+deleteButton+'</td>'
				+'<td>'+kode+'</td>'
				+'<td hidden="true">'+inputHIDE+'</td>'
				+'<td>'+nama+'</td>'
				+'<td>'+jenis+'</td>'
				+'<td>'+inputQTY+'</td>'
				+'</tr>';

				$('#appendProdukHere').append(appended);

				$('#dialogListProdukPembelian').dialog('close');
			}else{
				var inputQTY = $('#'+kode).closest('tr').find('.inputted').val();
				$('#'+kode).closest('tr').find('.inputted').val(parseFloat($('#'+kode).closest('tr').find('.inputted').val()) + 1);
				$('#dialogListProdukPembelian').dialog('close');
			}

		});	

		$('#appendProdukHere').on('click','.hapusBaris',function(e){
			e.preventDefault();
			$(this).closest('tr').remove();
		});	

		$('#simpanPembelian').click(function(e){
			e.preventDefault();
			var url = $('#f-pembelian').attr('action');
			var data = $('#f-pembelian').serializeArray();

			$.post(url,data,function(result){
				$('#showFeedback').html(result);
				$('#appendProdukHere').html('');
				dataRefresh();
			});
		});


		// NEXT STEP TRANSACTION

		$('#listProdukPenjualan').DataTable();
		$('#listDataPelangganPenjualan').DataTable();

		$('#modalListPelangganPenjualan').dialog({
			autoOpen: false,
			modal: true,
			width: 800,
			height: 500,
			title:'List data pelanggan'
		});

		$("#takeCustomer").click(function(){
			$('#modalListPelangganPenjualan').dialog('open');
		});

		$('#showListedCustomer').on('click','.pilihPelanggan',function(){
			var kode = $(this).closest('tr').find('td:eq(0)').text();
			var nama = $(this).closest('tr').find('td:eq(1)').text();
			$('#kode_pelanggan').val(kode);
			$('#nama_pelanggan').val(nama);
			$('#modalListPelangganPenjualan').dialog('close');
		});

		$('#listProdukTobeSelled').on('click','.pilihBarang',function(){
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var nama = $(this).closest('tr').find('td:eq(2)').text();
			var harga = $(this).closest('tr').find('td:eq(4)').text();
			var stok = $(this).closest('tr').find('td:eq(5)').text();
			var inputQTY = '<input type="number" max="'+stok+'" min="0" name="qty[]" value="0" class="form-control inputQTY">';
			var inputSUB = '<input type="text" value="0" class="form-control subtotalItem" name="subTotal2[]" readonly="true"';
			var deleteButton = '<button type="button" class="btn btn-danger hapusBaris">X</button>';

			if($('#'+kode).length == 0){

				if($(this).closest('tr').find('td:eq(5)').text() == 0){

					$('#showFeedback').html('<div class="alert alert-danger"><button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Stok Habis</div>');

				}else{

					var appendedProduk = '<tr id="'+kode+'">'
					+ '<td>'+deleteButton+'</td>'
					+ '<td><input type="hidden" name="kode[]" value="'+kode+'">'+kode+'</td>'
					+ '<td><input type="hidden" name="nama[]" value="'+nama+'">'+nama+'</td>'
					+ '<td><input type="hidden" name="harga[]" class="harga" value="'+harga+'">'+harga+'</td>'
					+ '<td>'+inputQTY+'</td>'
					+ '<td>'+inputSUB+'</td>'
					+'</tr>';

					$('#listProdukKeranjang').append(appendedProduk);

					$('#showFeedback').html('');
				}

			}else{
				$('#showFeedback').html('<div class="alert alert-danger"><button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Produk sudah di tambahkan.</div>');
			}

		});

		$('#listProdukTobeSelled').sortable({
			items :'> tr',
			appendTo : 'parent',
			helper :'clone'
		});

		$('#listProdukKeranjang').droppable({
			hoverClass: "drophover",
		    tolerance: "pointer",
		    drop: function(e, ui) {
		    	var kode = ui.draggable.closest('tr').find('td:eq(1)').text();
				var nama = ui.draggable.closest('tr').find('td:eq(2)').text();
				var harga = ui.draggable.closest('tr').find('td:eq(4)').text();
				var stok = ui.draggable.closest('tr').find('td:eq(5)').text();
				var inputQTY = '<input type="number" max="'+stok+'" min="0" name="qty[]" value="0" class="form-control inputQTY">';
				var inputSUB = '<input type="text" value="0" class="form-control subtotalItem" name="subTotal2[]" readonly="true"';
				var deleteButton = '<button type="button" class="btn btn-danger hapusBaris">X</button>';

				if($('#'+kode).length == 0){

				if(ui.draggable.closest('tr').find('td:eq(5)').text() == 0){

					$('#showFeedback').html('<div class="alert alert-danger"><button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Stok Habis</div>');

				}else{

					var appendedProduk = '<tr id="'+kode+'">'
					+ '<td>'+deleteButton+'</td>'
					+ '<td><input type="hidden" name="kode[]" value="'+kode+'">'+kode+'</td>'
					+ '<td><input type="hidden" name="nama[]" value="'+nama+'">'+nama+'</td>'
					+ '<td><input type="hidden" name="harga[]" class="harga" value="'+harga+'">'+harga+'</td>'
					+ '<td>'+inputQTY+'</td>'
					+ '<td>'+inputSUB+'</td>'
					+'</tr>';

					$('#listProdukKeranjang').append(appendedProduk);

					$('#showFeedback').html('');
				}

			}else{
				$('#showFeedback').html('<div class="alert alert-danger"><button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>Produk sudah di tambahkan.</div>');
			}
		    }
		});


		$('#listProdukKeranjang').on('click','.hapusBaris',function(e){
			e.preventDefault();
			$(this).closest('tr').remove();
		});

		$('#listProdukKeranjang').on('keydown','.inputQTY',function(e){
			e.preventDefault();
			return false;
		});

		$('#listProdukKeranjang').on('change','.inputQTY',function(e){
			e.preventDefault();
			var harga_jual = $(this).closest('tr').find('td:eq(3)').text();
			var qty = $(this).val();
			var subTotalItem = harga_jual * qty;
			$(this).closest('tr').find('.subtotalItem').val(subTotalItem);

			var sum = 0;

			$('#listProdukKeranjang').find('.subtotalItem').each(function(){
				sum += Number($(this).val());
			});

			$('#subTotal').val(sum);

			if(sum > 20000){
				var summedAndDiscounted = (sum * 3) /100;
				$('#diskon').val(summedAndDiscounted);
			}else{
				$('#diskon').val('0');
			}

			var hitungPajak = (sum * 2)/100;
			$('#pajak').val(hitungPajak);

			var totalBayar = parseFloat($('#subTotal').val()) - parseFloat($('#diskon').val()) + parseFloat($('#pajak').val());

			$('#totBayar').val(totalBayar);

			$('#highlightTotalBayar').html('Rp. '+totalBayar);
		});

		$('#resetCounter').click(function(){
			$('#subTotal').val('');
			$('#diskon').val('');
			$('#pajak').val('');
			$('#totBayar').val('');
			$('#highlightTotalBayar').html('TOTAL BAYAR MUNCUL DI SINI');
		});



		// NEXT GEN STEP TRANSACTION ON DEMAND

		$('#listDataPenjualan').DataTable();

		$('#modalListPenjualan').dialog({
			autoOpen: false,
			modal: true,
			width: 1000,
			height: 500,
			title: 'List Data Penjualan'
		});

		$('#takeSales').click(function(){
			$('#modalListPenjualan').dialog('open');
		});

		$('#echoedDataPenjualan').on('click','.pilihPenjualan',function(){
			var kode = $(this).closest('tr').find('td:eq(1)').text();
			var kode_pelanggan = $(this).closest('tr').find('td:eq(2)').text();
			var nama_pelanggan = $(this).closest('tr').find('td:eq(3)').text();
			var tipe = $(this).closest('tr').find('td:eq(4)').text();
			var diskon = $(this).closest('tr').find('td:eq(5)').text();
			var pajak = $(this).closest('tr').find('td:eq(6)').text();
			var totalBayar = $(this).closest('tr').find('td:eq(7)').text();
			var status = $(this).closest('tr').find('td:eq(8)').text();

			$('#kode_penjualan').val(kode);
			$('#kode_pelanggan').val(kode_pelanggan);
			$('#nama_pelanggan').val(nama_pelanggan);
			$('#tipe').val(tipe);

			$("#diskon").val(diskon);
			$('#pajak').val(pajak);
			$('#totBayar').val(totalBayar);
			$('#highlightStatusBayar').html(status);
			$('#statusPembayaran').val(status);

			var urlCekBayaran = '{{ url("cekbayar") }}/'+kode;

			$.get(urlCekBayaran,function(showed){

				if(showed == ''){
					$('#sudahBayar').val('0');
					var jumlah = parseFloat(totalBayar) - parseFloat($('#sudahBayar').val());
					var sudahBayarOnBox = '<input type="hidden" name="sudahBayarOnBOX" value="'+jumlah+'">';

					$('#highlightTotalBayar').html('Rp. '+jumlah+'<br>'+sudahBayarOnBox);

					if(jumlah == '0' || jumlah < 0){
						$('#diBayar').attr('disabled',true);
						$('#buttonBayar').attr('disabled',true);
						$('#munculTombolNOTA').html('<br><a href="{{ url("cetakNOTALunas") }}/'+kode+'" target="_blank" class="btn btn-info form-control">CETAK</a>');
					}else{
						$('#diBayar').attr('disabled',false);
						$('#buttonBayar').attr('disabled',false);
						$('#munculTombolNOTA').html('<br><a href="{{ url("cetakNOTALunas") }}/'+kode+'" target="_blank" class="btn btn-info form-control">CETAK</a>');
					}

				}else{
					$('#sudahBayar').val(showed);
					var jumlah = parseFloat(totalBayar) - parseFloat($('#sudahBayar').val());
					var sudahBayarOnBox = '<input type="hidden" name="sudahBayarOnBOX" value="'+jumlah+'">';

					$('#highlightTotalBayar').html('Rp. '+jumlah+'<br>'+sudahBayarOnBox);

					if(jumlah == '0' || jumlah < 0){
						$('#diBayar').attr('disabled',true);
						$('#buttonBayar').attr('disabled',true);
						$('#munculTombolNOTA').html('<br><a href="{{ url("cetakNOTALunas") }}/'+kode+'" target="_blank" class="btn btn-info form-control">CETAK</a>');
					}else{
						$('#diBayar').attr('disabled',false);
						$('#buttonBayar').attr('disabled',false);
						$('#munculTombolNOTA').html('<br><a href="{{ url("cetakNOTALunas") }}/'+kode+'" target="_blank" class="btn btn-info form-control">CETAK</a>');
					}
				}
			});

			var url = '{{ url("showedDetailHere") }}/'+kode;

			$.get(url,function(show){
				$('#showedDetailHere').html(show);
				$('#dTable').DataTable();
			});

			$('#modalListPenjualan').dialog('close');
		});

		// NEXT GEN LAPORAN

		$('#listLaporanPembelian').DataTable();

		$('#exportMethod').hide();

		$('#methodExport').change(function(){
			if($(this).val() == ''){
				$('#exportMethod').hide();
				$('#exportMethod').attr('href','#');
			}else{
				$('#exportMethod').fadeIn();
				var href = $(this).val();
				var url = '{{ url("exportPembelianALL") }}/'+href;
				$('#exportMethod').attr('href',url);
			}
		});

		$('#listLaporanPenjualan').DataTable();

		$('#exportMethod2').hide();

		$('#methodExport2').change(function(){
			if($(this).val() == ''){
				$('#exportMethod2').hide();
				$('#exportMethod2').attr('href','#');
			}else{
				$('#exportMethod2').fadeIn();
				var href = $(this).val();
				var url = '{{ url("exportPenjualanALL") }}/'+href;
				$('#exportMethod2').attr('href',url);
			}
		});

		// GLOBAL VARIABLE
		var awal = '';
		var akhir = '';
		var urlCek1 = '';

		$('#percetakan').hide();
		$('#tanggal_akhir').hide();
		$('#huruf_tanggal_akhir').hide();

		$('#tanggal_awal').change(function(){
			awal = $(this).val();
			$('#huruf_tanggal_akhir').show();
			$('#tanggal_akhir').show();
		});

		$('#tanggal_akhir').change(function(){
			akhir = $(this).val();
			urlCek1 = '{{ url("cetakPenjualanALL2") }}/'+awal+'/'+akhir;
			$('#cetakButton').attr('href',urlCek1);
			$('#percetakan').show();
		});

		$('.methodExport23').change(function(){
			var type = $(this).val();
			var urlTambahan = '{{ url("exportExcelPenjualan") }}/'+awal+'/'+akhir + '/' + type; 
			$('.exportMethod23').attr('href',urlTambahan);
		});


		$('#percetakan2').hide();
		$('#tanggal_akhirPembelian').hide();
		$('#huruf_tanggal_akhirPembelian').hide();

		$('#tanggal_awalPembelian').change(function(){
			awal = $(this).val();
			$('#huruf_tanggal_akhirPembelian').show();
			$('#tanggal_akhirPembelian').show();
		});

		$('#tanggal_akhirPembelian').change(function(){
			akhir = $(this).val();
			urlCek1 = '{{ url("cetakPembelianALL2") }}/'+awal+'/'+akhir;
			$('#cetakButtonPembelian').attr('href',urlCek1);
			$('#percetakan2').show();
		});

		$('.methodExport233').change(function(){
			var type = $(this).val();
			var urlTambahan = '{{ url("exportExcelPembelian") }}/'+awal+'/'+akhir + '/' + type; 
			$('.exportMethod233').attr('href',urlTambahan);
		});

		$('#listDataUser').DataTable();

		$('#listUser').on('click','.deleteUser',function(){
			var kode = $(this).closest('tr').find('td:eq(0)').text();
			var urlDelete = '{{ url("deleteUser") }}/'+kode;
			$(this).closest('tr').find('.konfirmasiDelete').html(
				 '<form action="?" method="POST">'
				+'{{ csrf_field() }}'
				+'<i>DELETE USER INI ?</i>'
				+'<a href="'+urlDelete+'" class="btn btn-danger btn-sm">Ya</a> &nbsp;'
				+'<button type="button" class="btn btn-danger btn-sm tidakDelete">Tidak</button>'
				+'</form>'
				);
		});

		$('#listUser').on('click','.tidakDelete',function(){
			$(this).closest('tr').find('.konfirmasiDelete').html('');
		});

	});
</script>




<script type="text/javascript">
	$(function(){

		var h, m, s;


		 function checkTime() {
		  var today = new Date();
		  h = today.getHours();
		  m = today.getMinutes();
		  s = today.getSeconds();
		  if(h < 10)
		   h = '0' + h;
		  if(m < 10)
		   m = '0' + m;
		  if(s < 10)
		   s = '0' + s;
		  return h, m, s;
		 }

		 function getTwentyFourHrs() {

		 	checkTime();
		 	$('#liveClock').html(
				h + ":" + m + ":" + s
				);

		 	var t = setTimeout(function(){
		 		getTwentyFourHrs();

		 			if($('#liveClock').text() >= '03:00:00' && $('#liveClock').text() < '11:00:00'){
						$('#keteranganWaktu').html('Pagi');
						$('#greet').html('Selamat Pagi ☺');

					}else if($('#liveClock').text() >= '11:00:00' && $('#liveClock').text() < '14:00:00'){
						$('#keteranganWaktu').html('Siang');
						$('#greet').html('Selamat Siang ☻');

					}else if($('#liveClock').text() >= '14:00:00' && $('#liveClock').text() < '18:00:00'){
						$('#keteranganWaktu').html('Sore');
						$('#greet').html('Selamat Sore ☺');

					}else if($('#liveClock').text() >= '18:00:00' && $('#liveClock').text() < '19:00:00'){
						$('#keteranganWaktu').html('Petang');
						$('#greet').html('Selamat Petang :v');

					}else if($('#liveClock').text() >= '19:00:00' && $('#liveClock').text() < '23:00:00'){
						$('#keteranganWaktu').html('Malam');
						$('#greet').html('Selamat Malam ♥');

					}else if($('#liveClock').text() >= '00:00:00' && $('#liveClock').text() < '02:00:00'){
						$('#keteranganWaktu').html('Tengah Malam');
						$('#greet').html('Selamat Tengah Malam ♥♥');

					}else if($('#liveClock').text() >= '01:00:00' && $('#liveClock').text() < '03:00:00'){
						$('#keteranganWaktu').html('Dini Hari');
						$('#greet').html('Tidur lah • • •');

					}

		 	},1000);

		 }

		 function jmlPelanggan(){
		 	var hasilBagi = (parseFloat($('#jmlPel').text()) * parseFloat($('#jmlPel').text())) / 100;
		 	$('#progressPelanggan').css('width',hasilBagi+'%');
		 }

		 function jmlProdusen(){
		 	var hasilBagi = (parseFloat($('#jmlProd').text()) * parseFloat($('#jmlProd').text())) / 100;
		 	$('#progressProdusen').css('width',hasilBagi+'%');
		 }

		 function jmlProduk(){
		 	var hasilBagi = (parseFloat($('#jmlProduk').text()) * parseFloat($('#jmlProduk').text())) / 100;
		 	$('#progressProduk').css('width',hasilBagi+'%');
		 }

		 function jmlLogin(){
		 	var hasilBagi = (parseFloat($('#jmlLogin').text()) * parseFloat($('#jmlLogin').text())) / 100;
		 	$('#progressBarLogin').css('width',hasilBagi+'%');
		 }

		 function refreshToDo(){
		 	var url = '{{ url("getTodo") }}';
		 	$.get(url,function(x){
		 		$('#todoShowed').html(x);
		 	});
		 }

		 
		 <?php if(empty(Request::segment(1))){

		 	?>

		 	 getTwentyFourHrs();
			 jmlPelanggan();
			 jmlProdusen();
			 jmlProduk();
			 jmlLogin();
			 refreshToDo();

		 	setInterval(function(){
		 	var url = '{{ url("cekUsage") }}';
		 	$.get(url,function(e){
		 		$('#memoryUsage').html(e);
		 	});
		 	}, 3000);

		 	<?php
		 } ?>

		 
		 

		 $('#simpanTodo').click(function(){
		 	var url = '{{ url("simpanToDo") }}';
		 	var data = $('#addToDo').serializeArray();

		 	$.post(url,data,function(x){
		 		$('#showFeedback').html(x);
		 		$('.toDoNew').val('');
		 		$('.toDoNew').text('');
		 		refreshToDo();
		 	});


		 });

		 $('.toDoNew').keypress(function(event) {
		 	if(event.keyCode == 13){
		 		event.preventDefault();
		 		return false;
		 	}
		 });

		 $('#todoShowed').on('click','.ceklis',function(){
		 	if($(this).is(':checked')){
		 			var kode = $(this).closest('tr').find('.id').val();
		 			var url = '{{ url("toDoSelesai") }}/'+kode;

		 			$.get(url,function(){
		 				refreshToDo();
		 			});
			 			
		 	}else{

		 			var kode = $(this).closest('tr').find('.id').val();
		 			var url = '{{ url("toDoBelum") }}/'+kode;

		 			$.get(url,function(){
		 				refreshToDo();
		 			});

		 	}
		 });

		 $('#todoShowed').on('click','.hapusBaris',function(){
		 		var kode = $(this).closest('tr').find('.id').val();
		 			var url = '{{ url("deleteTodo") }}/'+kode;

		 			$.get(url,function(x){
		 				$('#showFeedback').html(x);
		 				refreshToDo();
		 			});
		 });

	});
</script>


<script type="text/javascript">

  <?php
    if(!empty(Request::Segment(1))){

    }else{
  ?>

  new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'lineCahrt',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
                      data: [
                            <?php
                            foreach($rekordPendapatan as $row): ?>
                                { y: '<?php echo $row->tgl_bayar; ?>', a: '<?php echo $row->recordPerHari ?>'},
                            <?php endforeach?>
                        ],
                        xkey: 'y',
                        ykeys: ['a'],
                        labels: ['Besar Pembayaran Per Hari'],
                        resize: true,
                        hideHover: true,
                        xLabels: 'day',
                        gridTextSize: '10px',
                        lineColors: ['#1caf9a','#33414E'],
                        gridLineColor: '#E5E5E5'
});

  <?php } ?>
</script>