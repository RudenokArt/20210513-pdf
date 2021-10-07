<?php 

include_once '../core/database.php';
include_once '../core/dates.php';
?>
<?php include_once 'header.php'; ?>

<?php 
if (isset($_GET['page']) and $_GET['page'] == 'contract' ) {
  include_once 'contract.php';
} 
elseif (isset($_GET['dates_update'])) {
  include_once 'dates_update.php';
}
else  {
  include_once 'dates.php';
}

?>
<script src="../js/admin.js?<?php echo time() ?>"></script>
<?php include_once 'footer.php'; ?>