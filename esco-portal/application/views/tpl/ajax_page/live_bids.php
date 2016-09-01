<?php

?>

  <div style="width:70%;margin:0 auto;padding-top:5em;">
    <div class="panel panel-default">
      <div class="panel-heading">LIVE BIDDING<a href="#" class="close" onClick="ClosePanel()">x</a>
      </div>
      <div class="panel-body">
        TRANSACTION CODE: <?php echo $_POST['transcode']; ?>
        <div class="row">
          <div class="col-md-12">
              <table class="table table-hover">
                <thead>
                  <tr>
                      <td>Bidders</td>
                      <td>Accepted amount</td>
                      <td>Action</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $bidders = 1;
                  foreach($AcceptedBids as $row){ ?>
                  <tr>
                    <td><?php if($row['intUserID'] == $userid){
                      echo $bidders.' You';
                    }else{ echo $bidders; } ?></td>
                    <td><?php echo $price[] = $row['price_accepted']; ?></td>
                    <?php $encrypted = encryptIt($row['intBidsAcceptsID']); ?>
                    <td><?php if($row['intUserID'] == $userid){ ?>
                      <a href="#" onClick="editAmountBids('<?php echo $encrypted; ?>','<?php echo $_POST['transcode']; ?>','<?php echo $row['price_accepted']; ?>','<?php echo $row['intQuestionFormID']; ?>')">Edit Amount</a>
                       <?php } ?></td>
                  </tr>
                  <?php $bidders++; } ?>
                  <div id="bidders" class="hide"><?php echo array_sum($price); ?></div>
                </tbody>
              </table>
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
