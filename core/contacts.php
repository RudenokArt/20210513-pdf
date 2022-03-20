<?php 

header('Content-type: text/html; charset=utf-8');
if (!isset($site_public_page)) {
include_once '../core/database.php';
include_once '../core/helpers.php';
}
Contacts::newLogo();
Contacts::setMainSiteUrl();
Contacts::getMainSiteUrl();
/**
 * 
 */
class Contacts {

	public static $main_site_url;

	public static function newLogo () {
		if (isset($_FILES['header-logo'])) {
			$file_type = explode('.', $_FILES['header-logo']['name'])[1];
			move_uploaded_file($_FILES['header-logo']['tmp_name'],'../img/header-logo.'.$file_type);
			Helpers::alertMessage('Логотип сохранен.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function setMainSiteUrl () {
		if (isset($_POST['main-site-url'])) {
			self::sqlQuery('UPDATE `camp_contacts` 
				SET `value`="'.$_POST['main-site-url'].'" WHERE `name`="main-site-url"');
			Helpers::alertMessage('Запись таблицы базы данных обновлена.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function getMainSiteUrl () {
		$sql = self::sqlQuery('SELECT `value` FROM `camp_contacts` WHERE `name`="main-site-url"');
		while ($row = mysqli_fetch_assoc($sql)) {
      self::$main_site_url = $row['value'];
    }
	}

	public static function sqlQuery ($sql_query) {
		$link = \Core\Database::db_connect();
		$sql = mysqli_query($link, $sql_query);
		return $sql;
	}


}



?>