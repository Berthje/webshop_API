<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function allProducts(){
        return $products = [
            0 => array(
                "name" => "iPhone 14",
                "description" => "Apple iPhone 14 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Midnight",
                "storage" => [128, 256, 512],
                "introduction_year" => 2022,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
            1 => array(
                "name" => "iPhone 14",
                "description" => "Apple iPhone 14 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Midnight",
                "storage" => [128, 256, 512],
                "introduction_year" => 2022,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
            2 => array(
                "name" => "iPhone 14",
                "description" => "Apple iPhone 14 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Midnight",
                "storage" => [128, 256, 512],
                "introduction_year" => 2022,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
            3 => array(
                "name" => "iPhone 14",
                "description" => "Apple iPhone 14 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Midnight",
                "storage" => [128, 256, 512],
                "introduction_year" => 2022,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
            4 => array(
                "name" => "iPhone 14",
                "description" => "Apple iPhone 14 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Midnight",
                "storage" => [128, 256, 512],
                "introduction_year" => 2022,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
        ];
    }

    function productById($id){
        $products = [
            0 => array(
                "name" => "iPhone 14",
                "description" => "Apple iPhone 14 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Midnight",
                "storage" => [128, 256, 512],
                "introduction_year" => 2022,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
            1 => array(
                "name" => "iPhone 14",
                "description" => "Apple iPhone 14 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Midnight",
                "storage" => [128, 256, 512],
                "introduction_year" => 2022,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
            2 => array(
                "name" => "iPhone 12",
                "description" => "Apple iPhone 12 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Ocean Blue",
                "storage" => [128],
                "introduction_year" => 2017,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
            3 => array(
                "name" => "iPhone 14",
                "description" => "Apple iPhone 14 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Midnight",
                "storage" => [128, 256, 512],
                "introduction_year" => 2022,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
            4 => array(
                "name" => "iPhone 14",
                "description" => "Apple iPhone 14 128GB Midnight is een alleskunner. Met de verbeterde standaard- en groothoeklens maak je nog scherpere foto's dan zijn voorganger, Apple iPhone 13. Daarnaast heeft de TrueDepth selfiecamera autofocus. Zo ligt de focus sneller op je gezicht en blijft het beeld bijvoorbeeld scherp als je beweegt tijdens het videobellen, ook bij weinig licht. Dankzij de krachtige A15 Bionic chip en 4 GB werkgeheugen bewerk je snel al je foto's en multitask je erop los. Je bewaart je foto's en apps op het 128 GB opslaggeheugen. Met de speciale Action Mode blijven al je video's stabiel als je iets opneemt waarbij je veel beweegt. Op het 6,1 inch OLED scherm kijk je in hoge kwaliteit naar al je favoriete series en films. Wil je meer schermruimte? Kies van voor iPhone 14 Plus.",
                "brand" => "Apple",
                "color" => "Midnight",
                "storage" => [128, 256, 512],
                "introduction_year" => 2022,
                "image" => "https://image.coolblue.be/max/500x500/products/1812765",
            ),
        ];
        return $products[$id];
    }
}
