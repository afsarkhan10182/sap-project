<!-- Content Wrapper. Contains page content -->
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
      		<h2><?php echo lang('dashboard'); ?></h2>
    	</div>
	  		<div class="row clearfix">
		    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			          	<div class="info-box bg-pink hover-expand-effect EditDeshbord" data-deshbid_id=30  data-deshbid_type=info_box style="background-color: #4e59b5 !important;">
			            	<div class="icon">
				                <span class="glyphicon glyphicon-align-center"></span>
				            </div>
			            	<div class="content">
			            		<div class="text">TOTAL USERS</div>
			            		<div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo isset($TOTAL_USERS_data[0]->mka)?$TOTAL_USERS_data[0]->mka:'0'; ?></div>
			            	</div>
			            <!-- /.info-box-content -->
			          	</div>
			          <!-- /.info-box -->
			        </div>
		    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			          	<div class="info-box bg-pink hover-expand-effect EditDeshbord" data-deshbid_id=31  data-deshbid_type=info_box style="background-color: #661e1e !important;">
			            	<div class="icon">
				                <span class="glyphicon glyphicon-bell"></span>
				            </div>
			            	<div class="content">
			            		<div class="text">ACTIVE USERS</div>
			            		<div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo isset($ACTIVE_USERS_data[0]->mka)?$ACTIVE_USERS_data[0]->mka:'0'; ?></div>
			            	</div>
			            <!-- /.info-box-content -->
			          	</div>
			          <!-- /.info-box -->
			        </div>
		    		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			          	<div class="info-box bg-pink hover-expand-effect EditDeshbord" data-deshbid_id=32  data-deshbid_type=info_box style="background-color: #241d1d !important;">
			            	<div class="icon">
				                <span class="glyphicon glyphicon-asterisk"></span>
				            </div>
			            	<div class="content">
			            		<div class="text"> TODAY REGISTERED</div>
			            		<div class="number count-to" data-from="0" data-to="125" data-speed="15" data-fresh-interval="20"><?php echo isset($_TODAY_REGISTERED_data[0]->mka)?$_TODAY_REGISTERED_data[0]->mka:'0'; ?></div>
			            	</div>
			            <!-- /.info-box-content -->
			          	</div>
			          <!-- /.info-box -->
			        </div></div><div class="row  clearfix"><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
  <div class="card mka-das-table EditDeshbord" data-deshbid_type="list_box" data-deshbid_id="33">
      <div class="header">
          <h2>Last 10 Registration</h2>
      </div>
      <!-- /.box-header -->
      <div class="body" style="display: block;">
          <div class="table-responsive">
            <table class="table table-hover dashboard-task-infos">
                <thead>
                  <tr>
                    <th>Status</th>
						<th>Name</th>
						<th>Email</th>

                  </tr>
                </thead>
                <tbody>
                  <?php
	              	if(is_array($last_10_registration_list) && !empty($last_10_registration_list)) {
	              		foreach ($last_10_registration_list as $key => $value) {
	              	?>
		              <tr><td><?php echo $value->status; ?></td>
							<td><?php echo $value->name; ?></td>
							<td><?php echo $value->email; ?></td>
							</tr>
		            <?php } } else { ?>
		            	<tr>
							<td colspan="<?php echo count($last_10_registration_list); ?>"> <span>No Result Found.</span> </td>
						</tr>
					<?php } ?>

                </tbody>
            </table>
          </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.box-body -->
     <!--  <div class="box-footer clearfix" style="display: block;">
       <a href="javascript:void(0)" class="btn btn-sm btn-info btn-flat pull-left">Place New Order</a>
       <a href="javascript:void(0)" class="btn btn-sm btn-default btn-flat pull-right">View All Orders</a>
     </div> -->
      <!-- /.box-footer -->
  </div>
</div><div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <!-- BAR CHART -->
    <div class="card mka-das-table EditDeshbord" data-deshbid_type="bar_chart" data-deshbid_id="34">
      <div class="header">
        <h2>Monthly Registration</h2>
      </div>
      <div class="body">
        <div class="chart">
          <canvas class="bar_chart" style="height:230px"></canvas>
        </div>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>


<script>
  $(function () {
    for (var i = 0; i < $('.bar_chart').length; i++) {
      new Chart(document.getElementsByClassName("bar_chart")[i].getContext("2d"), getChartJs('bar'));
    }
  });

  function getChartJs(type) {
    var config = {
            type: 'bar',
            data: {
                labels: ["<?php echo lang('january'); ?>", "<?php echo lang('february'); ?>", "<?php echo lang('march'); ?>", "<?php echo lang('april'); ?>", "<?php echo lang('may'); ?>", "<?php echo lang('june'); ?>", "<?php echo lang('july'); ?>", "<?php echo lang('august'); ?>", "<?php echo lang('september'); ?>", "<?php echo lang('october'); ?>", "<?php echo lang('november'); ?>", "<?php echo lang('december'); ?>"],
                datasets: [
							{
								label : "Registraion in months",
								data : [<?php echo $Registraion_in_months ?>],
								backgroundColor : '#039ae4'
							},
							]
            },
            options: {
                responsive: true,
                legend: false
            }
        }
    return config;
  }
</script></div></div>
</section>
