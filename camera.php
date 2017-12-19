<?php
class Camera extends Database{
	
	protected $productId;
	protected $productName;
	protected $brand;
	protected $valuePixel;
	protected $shutterSpeed;
	protected $resolution;
	
	public function add($productId,$productName,$brand,$valuePixel,$shutterSpeed,$resolution)
	{
		$this->query('INSERT INTO photodb.camera(productId,productName,brand,valuePixel,shutterSpeed,resolution) VALUES (:productId,:productName,:brand,:valuePixel,:shutterSpeed,:resolution)');	
		//binding them
		$this->bind(':productId',$productId);
		$this->bind(':productName',$productName);
		$this->bind(':brand',$brand);
		$this->bind(':valuePixel',$valuePixel);
		$this->bind(':shutterSpeed',$shutterSpeed);
		$this->bind(':resolution',$resolution);
		//execute 
		$this->execute();
		//insertID	
				
		header('Location:http://localhost/pixelooks/formAddCamera.php');
		
		return;	
		
	}
}