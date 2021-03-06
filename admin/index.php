<?php
include_once '../core/database.php';
include_once '../core/helpers.php';
include_once '../core/dates.php';
include_once '../core/paragraph.php';
include_once '../core/contacts.php';
?>
<?php 
include_once 'header.php'; 
if (isset($_GET['page']) and $_GET['page'] == 'password_recovery' ) {
  include_once 'password_recovery.php';
} 
elseif (!isset($_SESSION['user_id']) or $_SESSION['user_id']<1) {
 include_once 'login_form.php';
}  
elseif (isset($_GET['update_paragraph'])) {
  include_once 'update_paragraph.php';
} 
elseif (isset($_GET['delete_paragraph'])) {
  include_once 'delete_paragraph.php';
} 
elseif (isset($_GET['page']) and $_GET['page'] == 'contract' ) {
  include_once 'contract.php';
}
elseif (isset($_GET['page']) and $_GET['page'] == 'supplement_1' ) {
  include_once 'contract.php';
}
elseif (isset($_GET['page']) and $_GET['page'] == 'supplement_2' ) {
  include_once 'contract.php';
}
elseif (isset($_GET['page']) and $_GET['page'] == 'supplement_3' ) {
  include_once 'contract.php';
}
elseif (isset($_GET['page']) and $_GET['page'] == 'contacts' ) {
  include_once 'contacts.php';
}
elseif (isset($_GET['page']) and $_GET['page'] == 'contacts_pdf' ) {
  include_once 'contacts_pdf.php';
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