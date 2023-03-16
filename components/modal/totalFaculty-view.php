 <div id="viewFaculty" class="modal fade" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">

        <form method="POST" action="#" autocomplete="off">    
            <div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
                <h3 class="modal-title"><font color="white"><i class="fa fa-users"></i>&nbsp;Staff</font></h3>
            </div>
            <div class="modal-body">
                <table id = "table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Name</th>
                            <th class="text-center">Time IN</th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php
					date_default_timezone_set("Singapore");
					$date = date('Y-m-d');
					$data = file_get_contents('../jsonLogs/'.$date.'.json');
					$Logs = json_decode($data, true);

					foreach ($Logs as $key => $value) {
						foreach ($value as $k => $v) {

					if($v['type']=='Staff'){
						if(empty($v['TimeOut'])){
						$sql ="SELECT * FROM tbl_staff WHERE staff_id='$k'";
						$query = $con->query($sql);
						$fetch = $query->fetch_assoc();
						$name= $fetch['lname'].', '.$fetch['fname'].' '.$fetch['mname'];
				?>
				
				<tr >
				
					<td class="text-center"><?php echo $name;?></td>
					<td class="text-center"><?php echo $v['TimeIn'];?></td>
				</tr>
					<?php  }
						}
					}
				}?>
                    </tbody>
                </table>

            <div style="clear:both;"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            </div>
        </form>

    </div>
  </div>
</div>
