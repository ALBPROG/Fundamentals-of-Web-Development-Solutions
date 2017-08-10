<?php
//Travel-data-classes.php
include('TravelPhoto.class.php');

$continents = array("Asia","Africa","Europe","North America","South America", "Oceania");

$countries = array();
$countries["US"] = "United States";
$countries["DE"] = "Germany";
$countries["GH"] = "Ghana";
$countries["CA"] = "Canada";
$countries["GB"] = "United Kingdom";


$images = array();
$images[] = new TravelPhoto("6114850721.jpg", "View of Cologne", "View of Cologne from atop the Cologne Cathedral",  50.941149, 6.957358 );

$images[] = new TravelPhoto("9495574327.jpg", "Arch of Septimus Severus", "In the Roman Forum", 41.892949, 12.484972);

$images[] = new TravelPhoto("5856697109.jpg", "Lunenburg Port", "On board a small sailing ship leaving Lunenburg", 44.373257, -64.307249);

$images[] = new TravelPhoto("5855729828.jpg", "British Museum", "The library in the British Museum in London", 51.519148, -0.126826);

$images[] = new TravelPhoto("8711645510.jpg", "Temple of Hephaistos", "Located on western perimeter of Agora in Athens. Built in 460-415 BCE, it is the best preserved temple of antiquity.",  37.975579, 23.721526);

$images[] = new TravelPhoto("6114907897.jpg", "At the top of Sulpher Mountain", "At top of Sulpher Mountain near Banff", 51.144571, -115.57467);

  
?>