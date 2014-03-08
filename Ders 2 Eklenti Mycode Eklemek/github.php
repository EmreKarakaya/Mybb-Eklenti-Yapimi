<?php

//Bir satır kullandım
/**

Eklenti Yazarı Emre Karakaya'dır.Lütfen yedek alarak eklentiyi uygulayanız...

**/
$plugins->add_hook("parse_message", "github_run");

if(!defined("IN_MYBB"))
{
    die("Mybb !!!!!");
}
function github_info()
{
// Kendimizi Tanıtalım
    return array(
        "name" => "Mybb Github Mykod",
        "description" => "Kodlama Konusunda Olan Mybb Forumlara Github Mykodunu Ekler",
        "website" => "http://www.emrekarakaya.com.tr",
        "author" => "Emre Karakaya",
        "authorsite" => "http://www.emrekarakaya.com.tr",
        "version" => "1.0",
        "guid" => "",
        "compatibility" => "14*,16*"
    );
}
function github_activate()
{
}

function github_deactivate()
{
}
function github_run($message)
{
    return preg_replace('#\[gist\](.*?)\[/gist\]#i', "<script src=\"$1.js\"></script>", $message);
	
	//\[gist\](.*?)\[/gist\] = [gist][/gist]
}
?>