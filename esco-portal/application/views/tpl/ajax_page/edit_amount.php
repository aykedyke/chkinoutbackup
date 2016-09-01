<?php

?>

  <div style="width:50%;margin:0 auto;padding-top:5em;">
    <div class="panel panel-default">
      <div class="panel-heading">Edit Amount<a href="#" class="close" onClick="ClosePanel()">x</a>
      </div>
      <div class="panel-body">
        TRANSACTION CODE: <?php echo $_POST['transcode']; ?>
        <div class="row">
          <div class="col-md-12">
          <form action="<?php echo $base_url; ?>serviceprovider/editAmountBids" method="POST" class="form-horizontal">
          <div class="form-group">
          <label class="col-sm-4 control-label">Current Amount</label>
          <div class="col-sm-8">
          <?php echo $_POST['currentAmount']; ?>
          </div>
          </div>
          <label class="col-sm-4 control-label">Amount</label>
          <div class="col-sm-8">
          <input type="text" class="form-control" id="amount">
          </div>
            <div class="col-md-12">
            <div class="btn-group pull-right">
            <input type="hidden" id="trans_id" value="<?php echo $_POST['id']; ?>">
            <input type="hidden" id="id2" value="<?php echo $_POST['id2']; ?>">
            <input type="hidden" id="transcode" value="<?php echo $_POST['transcode']; ?>">
              <a href="#" class="btn btn-primary" onClick="saveEditAmount()" >SAVE</a>
            </div>
          </div>
          </form>
        </div>
        </div>
      </div>

    </div>
  </div>
  <?php

  function encryptIt( $q ) {
      $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
      $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
      return( $qEncoded );
  }
  function decryptIt( $q ) {
      $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
      $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
      return( $qDecoded );
  }
  ?>
