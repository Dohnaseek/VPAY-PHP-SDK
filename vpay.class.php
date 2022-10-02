<?php


class VPAY {

  private $publicKey = '';
  private $privateKey = '';
  
  
  // Construct
  
  public function __construct($publicKey, $privateKey){
     
    $this->publicKey = $publicKey;
    $this->privateKey = $privateKey;
    
  }
  
  
  

}



?>
