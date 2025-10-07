<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <?php $this->load->view($head);?>
</head>

  <body class="<?=(!empty($class))?$class:""?>">
    <div class="bodywrapper">

        <?php $this->load->view($header); ?>

        <!-- top navigation -->

        <!-- /top navigation -->

        <!-- page content -->
      <?php $this->load->view($middle); ?>
          <!-- /top tiles -->

        </div>
        <!-- /page content -->

        <!-- footer content -->
      <?php $this->load->view($footer);?>
    </div>
      <?php $this->load->view($script);?>
        <!-- /footer content -->


    <!-- Jquery Core Js -->


  </body>
</html>
