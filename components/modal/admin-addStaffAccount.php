<!-- Modal -->
<div id="newStaffAccount" class="modal fade" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

        <div class="modal-content">
            <form method="POST" action="../process/add-facultystaffAccount.php" autocomplete="off">    
                <div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
                    <h3 class="modal-title"><font color="white"><i class="fa fa-user-plus"></i>&nbsp;New Staff Account</font></h3>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                            <?php
                                $host = "localhost";
                                $user = "root";
                                $pass = "";
                                $db = "attendancetrackingdb";

                                $connect = new PDO("mysql:host=$host; dbname=$db",$user,$pass);
                                $sql = "SELECT staff_id,fname,lname FROM tbl_staff";

                                try{
                                    $stmt = $connect->prepare($sql);
                                    $stmt->execute();
                                    $results = $stmt->fetchAll();
                                }
                                catch(Exception $ex){
                                    echo($ex->getMessage());
                                }
                            ?>
                                        <div class="form-group">
                                            <label>Staff ID</label>
                                            <input list="browsers"  class="form-control" name="id" id="browser" required>
                                                <datalist id="browsers" >
                                                    <?php foreach($results as $output) {?>
                                                        <option value="<?php echo $output["staff_id"]; ?>"><?php echo $output["fname"]." ".$output["lname"]; ?></option>
                                                        <?php } ?>
        										</datalist>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Username</label>
                                                <input type="text" name="username"  class="form-control" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                                <input type="password" minlength="8" name="password"  class="form-control" required/>
                                        </div>
                                    </div>
                                </div>
                                    
                                <br />
                            </div>
                        </div>
                        <div style="clear:both;"></div>
                        <div class="modal-footer">
                            <button type='submit' name="saveStaff" class="btn btn-warning">Save</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

                      </div>
                    </div>
                    </div>
					</div>
                </div>
            </div>
                    <!-- / Modal -->