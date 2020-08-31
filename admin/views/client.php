        <div class="my-3 my-md-5">
        	<div class="container">
            	<div class="page-header">
              		<h1 class="page-title">
                	Data Client &nbsp;
                	<a href="./index.php?page=add_client" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Add Data Client"><i class="fe fe-user"></i></a>
              	</h1>
            </div>
            <div class="row row-cards row-deck">
            	<div class="col-12">
	                <div class="card">
	                  <div class="table-responsive">
	                    <table class="table card-table table-vcenter text-nowrap datatable">
	                      <thead>
	                        <tr>
	                          <th class="w-1">No</th>
	                          <th>ID Client</th>
	                          <th>Nama Client</th>
	                          <th>Tanggal Pernikahan</th>
	                          <th>Actions</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                      	<?php 
	                      	$query = "SELECT *, DATE_FORMAT(tgl_nikah,'%d %M %Y') AS tgl_nikah FROM tb_client";
	                      	$result = mysql_query($query) or die(mysql_error());
	                      	$no = 1;
                                            
                            while($data = mysql_fetch_array($result))
                            {
	                            ?>
		                        <tr>
		                        	<td>
		                        		<span class="text-muted"><?php echo $no; ?></span>
		                        	</td>
		                          	<td><?php echo $data['id_client']; ?></td>
		                          	<td><?php echo $data['nama_pria']; ?> & <?php echo $data['nama_wanita']; ?></td>
		                          	<td><?php echo $data['tgl_nikah']; ?></td>
		                          	<td class="text-center">
		                              	<button class="btn btn-secondary btn-sm" data-toggle="tooltip" title="Data Tamu">
		                              		<i class="fe fe-users"></i>
		                              	</button>
		                              	<button class="btn btn-warning btn-sm" data-toggle="tooltip" title="Update Client">
		                              		<i class="fe fe-edit"></i>
		                              	</button>
		                              	<button class="btn btn-info btn-sm" data-toggle="tooltip" title="Detail Client">
		                              		<i class="fe fe-eye"></i>
		                              	</button>
		                              	<button class="btn btn-danger btn-sm" data-toggle="tooltip" title="Hapus Client">
		                              		<i class="fe fe-trash"></i>
		                              	</button>
		                          	</td>
		                        </tr>
		                        <?php 
	                        	$no++;
	                    	}
	                        ?>
	                      </tbody>
	                    </table>
	                    <script>
	                      require(['datatables', 'jquery'], function(datatable, $) {
	                      	    $('.datatable').DataTable();
	                      	  });
	                    </script>
	                  </div>
	                </div>
	            </div> 	
            </div>
          </div>
        </div>