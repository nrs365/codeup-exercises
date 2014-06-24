<?php

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'nicole', 'bakagaki');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";

//CREATE TABLE national_parks;
// Create the query and assign to var

//making table for parks
// $query = 'CREATE TABLE national_parks (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     name VARCHAR(50) NOT NULL,
//     location VARCHAR(50) NOT NULL,
//     date_established DATE NOT NULL,
//     area_in_acres INT NOT NULL,
//     description VARCHAR(10000) NOT NULL,
//     PRIMARY KEY (id)
// )';

// // // // Run query, if there are errors they will be thrown as PDOExceptions
// $dbc->exec($query);

$parks = [
	[ 'name' => 'Arches', 'location' =>'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => '76518', 'description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.'],
	[ 'name' => 'Badlands', 'location' =>'South Dakota', 'date_established' => '1978-11-10', 'area_in_acres' => '242755', 'description' => "The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world's richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes"],
	[ 'name' => 'Carlsbad', 'location' =>'New Mexico', 'date_established' => '1930-05-14', 'area_in_acres' => '4676', 'description' => "The park's Waterpocket Fold is a 100-mile (160 km) monocline that exhibits the Earth's diverse geologic layers. Other natural features are monoliths, sandstone domes, and cliffs shaped like the United States Capitol"],
	[ 'name' => 'Death Valley', 'location' =>'California/Nevada', 'date_established' => '1994-10-31', 'area_in_acres' => '3372401', 'description' => "Death Valley is the hottest, lowest, and driest place in the United States. Daytime temperatures have topped 130 °F (54 °C) and it is home to Badwater Basin, the lowest elevation in North America. A diversity of colorful canyons, desolate badlands, shifting sand dunes, sprawling mountains, and over 1000 species of plants populate this geologic graben. Additional points of interest include salt flats, historic mines, and springs."],
	[ 'name' => 'Everglades', 'location' =>'Florida', 'date_established' => '1943-05-30', 'area_in_acres' => '1508537', 'description' => "The Everglades are the largest subtropical wilderness in the United States. This mangrove ecosystem and marine estuary is home to 36 protected species, including the Florida panther, American crocodile, and West Indian manatee. Some areas have been drained and developed; restoration projects aim to restore the ecology."],
	[ 'name' => 'Big Bend ', 'location' =>'Texas', 'date_established' => '1935-06-20', 'area_in_acres' => '801163', 'description' => "Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert. Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans also exist within its borders."],
    [ 'name' => 'Grand Canyon', 'location' =>'Arizona', 'date_established' => '1919-02-26', 'area_in_acres' => '1217403', 'description' => "The Grand Canyon, carved by the mighty Colorado River, is 277 miles (446 km) long, up to 1 mile (1.6 km) deep, and up to 15 miles (24 km) wide. Millions of years of erosion have exposed the colorful layers of the Colorado Plateau in countless mesas and canyon walls, visible from both the north and south rims, or from a number of trails that descend into the canyon itself."],
    [ 'name' => 'Mount Rainier', 'location' =>'Washington', 'date_established' => '1899-03-02', 'area_in_acres' => '235625', 'description'=>"Mount Rainier, an active stratovolcano, is the most prominent peak in the Cascades, and is covered by 26 named glaciers including Carbon Glacier and Emmons Glacier, the largest in the continental United States. The mountain is popular for climbing, and more than half of the park is covered by subalpine and alpine forests. Paradise on the south slope is one of the snowiest places in the world, and the Longmire visitor center is the start of the Wonderland Trail, which encircles the mountain"],
    [ 'name' => 'Rocky Moutain', 'location' =>'Colorado', 'date_established' => '1925-01-26', 'area_in_acres' => '265828', 'description' => "Bisected north to south by the Continental Divide, this portion of the Rockies has ecosystems varying from over 150 riparian lakes to montane and subalpine forests to treeless alpine tundra. Wildlife including mule deer, bighorn sheep, black bears, and cougars inhabit its igneous mountains and glacier valleys. Longs Peak, a classic Colorado fourteener, and the scenic Bear Lake are popular destinations, as well as the famous Trail Ridge Road, which reaches an elevation of more than 12,000 feet (3,700 m)."],
];    
 
$query = $dbc->prepare('INSERT INTO national_parks (name, location, date_established, area_in_acres, description) VALUES (:name, :location, :date_established, :area_in_acres, :description)');

foreach ($parks as $park) {
	$query->bindValue(':name', $park['name'], PDO::PARAM_STR);
	$query->bindValue(':location', $park['location'], PDO::PARAM_STR);
	$query->bindValue(':date_established', $park['date_established'], PDO::PARAM_STR);
	$query->bindValue(':area_in_acres', $park['area_in_acres'], PDO::PARAM_INT);
	$query->bindValue(':description', $park['description'], PDO::PARAM_STR);
	$query->execute();
}
	
	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
?>