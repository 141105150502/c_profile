
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<h4 class="page-title"><?php echo $tittle ?></h4>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"><?php echo $tittle ?></h4>
								</div>
								<div class="card-body">

									<button onclick="tambahmodal()" class="btn btn-primary mb-3">Tambah Menu</button>
									<button onclick="reload_table()" class="btn btn-default mb-3">Reload table</button>

									<div class="table-responsive">

										<table id="table" class="display table border table-striped table-hover" cellspacing="0" width="100%">
								            <thead>
								                <tr>
								                    <th width="1%">No</th>
								                    <th>Gambar Berita</th>
								                    <th>judul Berita</th>
                                                    <th>Ulasan Singkat</th>
								                    <th>Tanggal Berita</th>
								                    <th width="40%">Isi Berita</th>
								                    <th>Aksi</th>
								                </tr>
								            </thead>
								            <tbody>
								            </tbody>
								 
								            <tfoot>
								                <tr>
								                    <th>No</th>
								                    <th>Gambar Berita</th>
								                    <th>judul Berita</th>
                                                    <th>Ulasan singkat</th>
								                    <th>Tanggal Berita</th>
								                    <th>Isi berita</th>
								                    <th>Aksi</th>
								                </tr>
								            </tfoot>
								        </table>
										
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

				
				
			</div>





<!-- Modal -->
<div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	 <div id="wrapadd"></div>
    </div>
  </div>
</div>

<!-- modal edit -->
<div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	 <div id="wrapedit"></div>
    </div>
  </div>
</div>


	<script type="text/javascript">
    var isiberita1;
    var isiberita2;

    var table;
    $(document).ready(function() {
 
        //datatables
        table = $('#table').DataTable({ 
 
            "processing": true, 
            "serverSide": true, 
            "order": [], 
             
            "ajax": {
                "url": "<?php echo base_url()?><?php echo $this->uri->segment(1) ?>/get_data",
                "type": "POST"
            },
 
             
            "columnDefs": [
            { 
                "targets": [ 0 ], 
                "orderable": false, 
            },
            ],
 
        });
 
    });

     function reload_table(){
	    table.ajax.reload(null,false); //reload datatable ajax 
    	
    }




    function tambahmodal(){
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/viewmodaladd',
    		type:'get',
    		success: function(respon){
    			$('#modaltambah').modal('show');
    			$('#wrapadd').html(respon)
    		}
    	})
    }

    function simpanberita(){
    	// alert('ok') 
        // console.log(isiberita1.getData())

    	var formdata = new FormData($('#formadd')[0]);
        formdata.append('isi_berita1',isiberita1.getData());  
        // console.log(formdata);

    	// alert(formdata);
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/saveberita',
    		type:'post',
    		dataType:'json',
    		data:formdata,
            processData:false,
            contentType:false,
            cache:false,
            async:false,
    		success: function(respon){
    			if (respon.status == false) {
    				Swal.fire( 'Informasi',respon.pesan);
    			}else{
    				Swal.fire('Informasi', respon.pesan);
	    			$('#modaltambah').modal('hide');
	    			reload_table();

    			}
    		}
    	})

    }


	  function editmodal(id_berita){
    	$.ajax({
    		url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/viewmodaledit/'+id_berita,
    		type:'get',
    		success: function(respon){
    			$('#modaledit').modal('show');
    			$('#wrapedit').html(respon)
    		}
    	})
    }

     function editmenu(){
    	
        var formdata = new FormData($('#formedit')[0]);
        formdata.append('isi_berita2',isiberita2.getData());  
        // console.log(formdata);

        // alert(formdata);
        $.ajax({
            url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/editdata',
            type:'post',
            dataType:'json',
            data:formdata,
            processData:false,
            contentType:false,
            cache:false,
            async:false,
            success: function(respon){
                if (respon.status == false) {
                    Swal.fire( 'Informasi',respon.pesan);
                }else{
                    Swal.fire('Informasi', respon.pesan);
                    $('#modaledit').modal('hide');
                    reload_table();

                }
            }
        })
    }

    function hapusdata(id){
    Swal.fire({
	  title: 'Yakin menghapus data ini?',
	  text: "Dat yang di hapus tidak bisa di kembalikan kembali",
	  icon: 'warning',
	  showCancelButton: true,
	  confirmButtonColor: '#3085d6',
	  cancelButtonColor: '#d33',
	  confirmButtonText: 'Ya, Hapus!'
		}).then((result) => {
		  if (result.value) {
		  		$.ajax({
				url:'<?php echo base_url() ?><?php echo $this->uri->segment(1) ?>/hapus/'+id,
				data:'menu_id ='+id,
				type:'post',
				dataType:'json',
				success:function(respon){
					if (respon.status == true) {
						 Swal.fire(
					      'Deleted!',
					      'Data Berhasil di Delete.',
					      'success'
					    )
		    			reload_table();
					}else{
						 Swal.fire({
						  icon: 'error',
						  title: 'Oops...',
						  text: 'Maaf Terjadi Kesalahan',
						})

					}
				}
			})
		  }

	})
    }
 
</script>