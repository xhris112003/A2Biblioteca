<?php spacename App;

class Sancion{
  protected double $costeDia;
  protected double $coteTotal;
  protected datetime $fechaFinal;
  protected boolean $confirmacionPago;

  //SETTERS
  
public function setCosteDia($costeDia){
  $this->=$costeDia;
}
  
public function setCosteTotal($costeTotal){
  $this->=$costeTotal;
}
  
public function setFechaFinal($fechaFinal){
  $this->=$fechaFinal;
}
  
public function setConfirmacionPago($confirmacionPago){
  $this->=$confirmacionPago;
}


  //GETTERS
  public function getCosteDia($costeDia){
return this->costeDia;
}
  public function getCosteTotal($costeTotal){
return this->costeTotal;
}
  public function getFechaFinal($fechaFinal){
return this->fechaFinal;
}
  public function getConfirmacionPago($confirmacionPago){
return this->confirmacionPago;
}
  
}