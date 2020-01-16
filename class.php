<?php
class Car {
    function Car() {
        $this->model = "Maruthi Suzuki";
        $this->model = "BMW";
    }
}
$herbie = new Car();
echo $herbie->model;
?>