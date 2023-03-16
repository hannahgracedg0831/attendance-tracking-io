<!-- Modal -->
<div id="print_modal<?php echo $fetch['visitor_id']?>" class="modal fade" role="dialog">
    <<div class="modal-dialog modal-dialog-centered" role="document">

        <div class="modal-content">
        <form method="POST" action="" autocomplete="off">    
            <div class="modal-header" style="background-color: rgba(7, 4, 112, 1);">
                <h3 class="modal-title"><font color="white"><i class="fa fa-qrcode"></i>&nbsp;Print QR-Code</font></h3>
            </div>
            <div class="modal-body">
                <input type="hidden" name="visitor_id" value="<?php echo $fetch['visitor_id'];?>">
                <!-- <div class="card shadow"> -->
                    <center>
                    <img src="../assets/sampleQR.png" alt="" class="img-thumbnail" width="50%" height="50%">
                    </center>
                <!-- </div> -->
            </div>
            <div style="clear:both;"></div>
            <div class="modal-footer">
                <button name="generate" class="btn btn-warning">Print</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
            
        
    </form>
</div>
</div>
</div>


<!-- / Modal -->