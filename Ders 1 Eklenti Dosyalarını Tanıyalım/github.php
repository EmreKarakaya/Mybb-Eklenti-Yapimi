<?php

/**

Eklenti Yazarı Emre Karakaya'dır.Lütfen yedek alarak eklentiyi uygulayanız...

**/

if(!defined("IN_MYBB"))
{
    die("Mybb !!!!!");
}
function github_info()
{
// Kendimizi Tanıtalım
    return array(
        "name"          => "Mybb Github Mykod",
        "description"   => "Kodlama Konusunda Olan Mybb Forumlara Github Mykodunu Ekler",
        "website"       => "http://www.emrekarakaya.com.tr",
        "author"        => "Emre Karakaya",
        "authorsite"    => "http://www.emrekarakaya.com.tr",
        "version"       => "1.0",
        "guid"          => "",
        "compatibility" => "14*,16*"
    );
}
function github_activate()
{
global $db, $mybb;


}

function github_deactivate()
{
global $db, $mybb;


}

?>