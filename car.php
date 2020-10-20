<?php
/*
MIT License

Copyright (c) 2020 Jean-Jacques François Reibel

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/

class Car {
    public $wheels;
    public $doors;
    public $cylinders;
    
    function __construct($wheelsIn, $doorsIn, $cylindersIn) {
      $this->wheels = $wheelsIn;
      $this->doors = $doorsIn;
      $this->cylinders = $cylindersIn;
    }
    function addWheels($wheelsIn){
      $this->wheels = $this->wheels + $wheelsIn;
    }
    function addDoors($doorsIn){
      $this->doors = $this->doors + $doorsIn;
    }
    function addCylinders($cylindersIn){
      $this->cylinders = $this->cylinders + $cylindersIn;
    }
    function deleteWheels($wheelsIn){
      $this->wheels = $this->wheels - $wheelsIn;
    }
    function deleteDoors($doorsIn){
      $this->doors = $this->doors - $doorsIn;
    }
    function deleteCylinders($cylindersIn){
      $this->cylinders = $this->cylinders - $cylindersIn;
    }
}

echo "Creating car.\n";
$subaru = new Car(4, 4, 4);
echo "Wheels check: " . $subaru->wheels . "\n";
echo "Doors check: " . $subaru->doors . "\n";
echo "Cylinders check: " . $subaru->cylinders . "\n";
echo "\n";
echo "Adding wheel directly to car object.\n";
$subaru->wheels = 5;
echo "Wheels check: " . $subaru->wheels . "\n";
echo "Doors check: " . $subaru->doors . "\n";
echo "Cylinders check: " . $subaru->cylinders . "\n";
echo "\n";
echo "Removing wheel using class method.\n";
$subaru->deleteWheels(1);
echo "Wheels check: " . $subaru->wheels . "\n";
echo "Doors check: " . $subaru->doors . "\n";
echo "Cylinders check: " . $subaru->cylinders . "\n";
echo "\n";