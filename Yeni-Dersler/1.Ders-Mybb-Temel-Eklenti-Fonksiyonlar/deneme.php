<?php

/*
  @Ders Yapımcısı Emre Karakaya
*/

if (!defined("IN_MYBB")) {
	die("Mybb.com.tr");
} // Mybb Dışı Bağlantıları Engelliyoruz
function deneme_info()
{
// Eklentiyi Tanıtıyoruz
	return array(
	'name' => "Mybb Deneme Eklentim" , //Eklenti'nin Adı
	'description' => "Mybb Deneme Eklentisi Yapıyorum" , //Eklentinin Açıklaması
	'website' => "http://www.mybb.com.tr" , // Eklentinin Websitesi
	'author' => "Emre Karakaya" , // Eklenti Yapımcısı
	'authorsite' => "http://www.emrekarakaya.com.tr" , // Eklenti Yapımcısının Sitesi
	'version' => "1.0" , // Eklenti Versiyonu
	'guid' => "" , // Eklenti için Verilen kod.Detayları Videoda
	'compatibility' => "18*", // Eklenti uyumlu olduğu Mybb Sürümleri
);
}

function deneme_activate()
{
//Eklenti Aktif Olduğundaki Kodlarımız

}

function deneme_deactivate()
{
//Eklenti Pasif Olduğundaki Kodlarımız
}

function deneme_install()
{
//Eklenti Kur Dediğimizdeki Kodlarımız
}
function deneme_uninstall()
{
//Eklenti Kaldır Dediğimizdeki Kodlarımız
}
function deneme_is_installed()
{
//Eklenti Kuruldumu kontrol eden kodumuz
	return true;
	return false;
}

?>
