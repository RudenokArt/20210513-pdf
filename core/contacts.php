<?php 

header('Content-type: text/html; charset=utf-8');
if (!isset($site_public_page)) {
include_once '../core/database.php';
include_once '../core/helpers.php';
}
Contacts::newLogo();
Contacts::setMainSiteUrl();
Contacts::getMainSiteUrl();
Contacts::getSitePhone();
Contacts::setSitePhone();
Contacts::saveIcon();
Contacts::getIconsList();
Contacts::deleteSocialIcon();
Contacts::updeteSocialIcon();
/**
 * 
 */
class Contacts {

	public static $main_site_url;
	public static $site_phone;
	public static $social_icons_list;
	public static $social_icons = [
		'vk',
		'facebook-square',
		'facebook',
		'facebook-official',
		'twitter-square',
		'twitter',
		'telegram',
		'skype',
		'instagram',
		'odnoklassniki',
		'odnoklassniki-square',
		'whatsapp',
		'youtube',
		'youtube-play',
		'envelope-o',
		'envelope',
		'envelope-square',
	];

	public static function newLogo () {
		if (isset($_FILES['header-logo'])) {
			$file_type = explode('.', $_FILES['header-logo']['name'])[1];
			move_uploaded_file($_FILES['header-logo']['tmp_name'],'../img/header-logo.'.$file_type);
			Helpers::alertMessage('Логотип сохранен.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function saveIcon () {
		if (isset($_POST['add-social-icon'])) {
			self::sqlQuery('INSERT INTO `camp_contacts`(`name`, `value`, `icon`)
				VALUES ("social", "'.$_POST['link'].'", "'.$_POST['icon'].'")');
			Helpers::alertMessage('Запись таблицы базы данных обновлена.');
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

	public static function updeteSocialIcon () {
		if (isset($_POST['update-social-icon'])) {
			self::sqlQuery('UPDATE `camp_contacts` 
				SET `value`="'.$_POST['link'].'",`icon`="'.$_POST['icon'].'" 
				WHERE `id`='.$_POST['update-social-icon']);
			Helpers::alertMessage('Запись таблицы базы данных обновлена.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>'; 
		}
	}

	public static function deleteSocialIcon () {
		if (isset($_POST['delete-social-icon'])) {
			self::sqlQuery('DELETE from `camp_contacts`
				WHERE `id`="'.$_POST['delete-social-icon'].'"');
			Helpers::alertMessage('Запись таблицы базы данных удалена.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function getIconsList () {
		$sql = self::sqlQuery('SELECT * FROM `camp_contacts` WHERE `name`="social"');
		$arr = [];
		while ($row = mysqli_fetch_assoc($sql)) {
			array_push($arr, $row);
		}
		self::$social_icons_list = $arr;
	}
	public static function getMainSiteUrl () {
		$sql = self::sqlQuery('SELECT `value` FROM `camp_contacts` WHERE `name`="main-site-url"');
		while ($row = mysqli_fetch_assoc($sql)) {
      self::$main_site_url = $row['value'];
    }
	}

	public static function setSitePhone () {
		if (isset($_POST['site-phone'])) {
			self::sqlQuery('UPDATE `camp_contacts` 
				SET `value`="'.$_POST['site-phone'].'" WHERE `name`="phone"');
			Helpers::alertMessage('Запись таблицы базы данных обновлена.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function getSitePhone () {
		$sql = self::sqlQuery('SELECT `value` FROM `camp_contacts` WHERE `name`="phone"');
		while ($row = mysqli_fetch_assoc($sql)) {
      self::$site_phone = $row['value'];
    }
	}

	public static function sqlQuery ($sql_query) {
		$link = \Core\Database::db_connect();
		$sql = mysqli_query($link, $sql_query);
		return $sql;
	}


}



?>