<?php

class Continent {
  public $nameContinent;

  public function __construct($_continent){
    $this->nameContinent = $_continent; 
  }
}

class Country extends Continent {
    public $nameCoutry;

    public function __construct($_continent, $_country) {
        parent::__construct($_continent);
        $this->nameCoutry = $_country;
    }
}

class Region extends Country {
    public $nameRegion;

    public function __construct($_continent, $_country, $_region) {
        parent::__construct($_continent, $_country);
        $this->nameRegion = $_region;
    }
}

class Province extends Region {
    public $nameProvince;

    public function __construct($_continent, $_country, $_region, $_province) {
        parent::__construct($_continent, $_country, $_region);
        $this->nameProvince = $_province;
    }
}

class City extends Province {
    public $nameCity;

    public function __construct($_continent, $_country, $_region, $_province, $_city) {
        parent::__construct($_continent, $_country, $_region, $_province);
        $this->nameCity = $_city;
    }
}

class Street extends City {
    public $nameStreet;

    public function __construct($_continent, $_country, $_region, $_province, $_city, $_street) {
        parent::__construct($_continent, $_country, $_region, $_province, $_city);
        $this->nameStreet = $_street;
    }

    public function location($_continent, $_country, $_region, $_province, $_city, $_street){
        var_dump("Mi trovo in $_continent, $_country, $_region, $_province, $_city, $_street");
    }
}

$myLocation = new Street("Europa", "Italia", "Campania", "NA", "Giugliano", "Via San Vito");
$myLocation->location("Europa", "Italia", "Campania", "NA", "Giugliano", "Via San Vito");