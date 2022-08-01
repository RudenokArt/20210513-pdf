<?php session_start();

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
Contacts::setTagTitle();
Contacts::getTagTitle();
Contacts::newFavicon();
Contacts::getAdminMail();
Contacts::setAdminMail();
Contacts::newStamp();
Contacts::newSignature();
Contacts::setContactsPDF();
Contacts::getContactsPDF();
Contacts::getSupplementStatus();
Contacts::setSupplementStatus();
Contacts::userLogin();
Contacts::userLogout();
Contacts::newPassword();
/**
 * 
 */
class Contacts {

	public static $supplement_status = [];
	public static $main_site_url;
	public static $site_phone;
	public static $admin_mail;
	public static $contacts_pdf;
	public static $social_icons_list;
	public static $tag_title;
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

	public static function newPassword () {
		if (isset($_POST['new-password'])) {
			if (
				$_POST['new-password'] == '' or 
				$_POST['new-password'] != $_POST['confirm-password']
			) {
				Helpers::alertMessage('Пароли несовпадают.');
			} else {
				self::sqlQuery('UPDATE `camp_contacts` 
					SET `value`="'.$_POST['new-password'].'" WHERE `name`="password"');
				Helpers::alertMessage('Запись таблицы базы данных обновлена.');
			}			
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function userLogout () {
		if (isset($_POST['log_out'])) {
			$_SESSION['user_id'] = 0;
			echo '<meta http-equiv="refresh" content="0; url=../admin/index.php"/>';
		}
	}

	public static function getUserPassword () {
		$sql = self::sqlQuery('SELECT `value` FROM `camp_contacts` WHERE `name`="password"');
		while ($row = mysqli_fetch_assoc($sql)) {
			$password = $row['value'];
		}
		return $password;
	}

	public static function userLogin () {
		if (isset($_POST['password'])) {
			$sql = self::sqlQuery('SELECT `value` FROM `camp_contacts` WHERE `name`="password"');
			while ($row = mysqli_fetch_assoc($sql)) {
				$password = $row['value'];
				if ($password == $_POST['password']) {
					$_SESSION['user_id'] = 1;
					Helpers::alertMessage('Авторизация прошла успешно.');
					echo '<meta http-equiv="refresh" content="2; url=../admin/index.php"/>';
				} else {
					Helpers::alertMessage('Неверный пароль.');
					echo '<meta http-equiv="refresh" content="2; url=../admin/index.php"/>';
				}
			}
		}
	}

	public static function getSupplementStatus () {
		$sql = self::sqlQuery('SELECT `name`, `value` 
			FROM `camp_contacts` 
			WHERE `name` LIKE "supplement__"');
		while ($row = mysqli_fetch_assoc($sql)) {
			self::$supplement_status[$row['name']] = $row['value'];
		}
	}

	public static function setSupplementStatus () {
		if (isset($_POST['supplement_status'])) {
			self::sqlQuery('UPDATE `camp_contacts` 
				SET `value`="'.$_POST['supplement_value'].'" 
				WHERE `name`="'.$_POST['supplement_number'].'"');
			Helpers::alertMessage('Запись таблицы базы данных обновлена.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page='.
			$_POST['supplement_number'].'"/>';
		}
	}

	public static function newLogo () {
		if (isset($_FILES['header-logo'])) {
			$file_type = explode('.', $_FILES['header-logo']['name'])[1];
			move_uploaded_file($_FILES['header-logo']['tmp_name'],'../img/header-logo.'.$file_type);
			Helpers::alertMessage('Логотип сохранен.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function newFavicon () {
		if (isset($_FILES['fav_logo'])) {
			$file_type = explode('.', $_FILES['fav_logo']['name'])[1];
			move_uploaded_file($_FILES['fav_logo']['tmp_name'],'../img/fav_logo.'.$file_type);
			Helpers::alertMessage('favicon сохранен.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function newStamp () {
		if (isset($_FILES['contract-stamp'])) {
			$file_type = explode('.', $_FILES['contract-stamp']['name'])[1];
			move_uploaded_file($_FILES['contract-stamp']['tmp_name'],'../img/stamp.'.$file_type);
			Helpers::alertMessage('Печать сохранена.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function newSignature () {
		if (isset($_FILES['contract-signature'])) {
			$file_type = explode('.', $_FILES['contract-signature']['name'])[1];
			move_uploaded_file($_FILES['contract-signature']['tmp_name'],
				'../img/signature.'.$file_type);
			Helpers::alertMessage('Подпись сохранена.');
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

	public static function setTagTitle () {
		if (isset($_POST['tag-title'])) {
			self::sqlQuery('UPDATE `camp_contacts` 
				SET `value`="'.$_POST['tag-title'].'" WHERE `name`="tag-title"');
			Helpers::alertMessage('Запись таблицы базы данных обновлена.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function getTagTitle () {
		$sql = self::sqlQuery('SELECT `value` FROM `camp_contacts` WHERE `name`="tag-title"');
		while ($row = mysqli_fetch_assoc($sql)) {
			self::$tag_title = $row['value'];
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

	public static function setContactsPDF () {
		if (isset($_POST['contacts_pdf'])) {
			self::sqlQuery('UPDATE `camp_contacts` 
				SET `value`="'.$_POST['contacts_pdf'].'" WHERE `name`="contacts_pdf"');
			Helpers::alertMessage('Запись таблицы базы данных обновлена.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts_pdf"/>';
		}
	}

	public static function getContactsPDF () {
		$sql = self::sqlQuery('SELECT `value` FROM `camp_contacts` WHERE `name`="contacts_pdf"');
		while ($row = mysqli_fetch_assoc($sql)) {
			self::$contacts_pdf = $row['value'];
		}
	}

	public static function setAdminMail () {
		if (isset($_POST['admin-mail'])) {
			self::sqlQuery('UPDATE `camp_contacts` 
				SET `value`="'.$_POST['admin-mail'].'" WHERE `name`="email"');
			Helpers::alertMessage('Запись таблицы базы данных обновлена.');
			echo '<meta http-equiv="refresh" content="2; url=../admin/index.php?page=contacts"/>';
		}
	}

	public static function getAdminMail () {
		$sql = self::sqlQuery('SELECT `value` FROM `camp_contacts` WHERE `name`="email"');
		while ($row = mysqli_fetch_assoc($sql)) {
			self::$admin_mail = $row['value'];
		}
	}

	public static function sqlQuery ($sql_query) {
		$link = \Core\Database::db_connect();
		$sql = mysqli_query($link, $sql_query);
		return $sql;
	}


}



?>