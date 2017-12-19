<?php
class Lens extends Database{
	protected $productId;
	protected $productName;
	protected $brand;
	protected $focalLength;
	protected $angelOfView;
	protected $formatCompability;
	
	public function add($productId,$productName,$brand,$focalLength,$angleOfView,$formatCompability)
	{
		$this->query('INSERT INTO photodb.lens(productId,productName,brand,focalLength,angleOfView,formatCompability) VALUES(:productId,:productName,:brand,:focalLength,:angleOfView,:formatCompability)');
		//binding.them
		$this->bind(':productId',$productId);
		$this->bind(':productName',$productName);
		$this->bind(':brand',$brand);
		$this->bind(':focalLength',$focalLength);
		$this->bind(':angleOfView',$angleOfView);
		$this->bind(':formatCompability',$formatCompability);
		//execute
		$this->execute();
		//insertID
		
		header('Location:hhtp://localhost/pixelooks/formAddLens.php');
		
		return;
	}
}