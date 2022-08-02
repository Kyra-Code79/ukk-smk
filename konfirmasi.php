<?php
function konfirmasi() {
  if(isset($_GET['hasil'])){
    $hasil = $_GET['hasil'];
    if($hasil==1){?>
<div class="alert alert-success">
    <i class="fas fa-check-circle"></i> <strong>Data Successfully</strong> saved!.
</div>
<?php
    }else if($hasil==2){?>
<div class="alert alert-success">
    <i class="fas fa-check-circle"></i> <strong>Data Successfully</strong> changed!.
</div>
<?php
    }else if($hasil==3){?>
<div class="alert alert-success">
    <i class="fas fa-check-circle"></i> <strong>Data Successfully</strong> deleted!.
</div>
<?php
    }else if($hasil==4){?>
<div class="alert alert-danger">
    <i class="fas fa-times-circle"></i> <strong>Data Failed</strong> to saved!.
</div>
<?php
    }else if($hasil==5){?>
<div class="alert alert-danger">
    <i class="fas fa-fa-times-circle"></i> <strong>Data Failed</strong> to changed!.
</div>
<?php
    }else if($hasil==6){?>
<div class="alert alert-danger">
    <i class="fas fa-times-circle"></i> <strong>Data Failed</strong> to changed!.
</div>
<?php
    } 
  }
}
  ?>