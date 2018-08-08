<?php
//factory pattern
class Automobile{
  private $vehicleMake;
  private $vehicleModel;

  public function __construct($make, $model){
    $this->vehicleMake=$make;
    $this->vehicleModel=$model;
  }

  public function getMakeAndModel(){
    return $this->vehicleMake . ' ' . $this->vehicleModel;
  }
}

class AutomobileFacotory{
  public static function create($make, $model){
    return new Automobile($make, $model);
  }
}

//팩토리 사용
$veyron = AutomobileFacotory::create('Bugatti', 'Veyron');

print_r($veyron->getMakeAndModel());

//strategy pattern
interface OutputInterface{
  public function load();
}

class SerializedArrayOutput implements OutputInterface{
  public function load(){
    return serialize($arrayOfData);
  }
}

class JsonStringOutput implements OutputInterface{
  public function load(){
    return json_encode($arrayOfData);
  }
}

class ArrayOutput implements OutputInterface{
  public function load(){
    return $arrayOfData;
  }
}

class SomeClient{
  private $output;

  public function setOutput(OutputInterface $outputType){
    $this->output=$outputType;
  }

  public function loadOutput(){
    return $this->output->load();
  }
}

$client = new SomeClient();
$client->setOutput(new ArrayOutput());
$data = $client->loadOutput();

$client->setOutput(new JsonStringOutput());
$data=$client->loadOutput();
 ?>
