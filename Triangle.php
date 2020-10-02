<?php 
class Triangle extends Shape
{
	private array $summits;

	public function __construct (IRendering $rendering, ICalculator $calculator, array $params)
	{
		parent::__construct($rendering, $calculator, $params);

		$this->summits = [];
		foreach ($params['summits'] as $summit)
		{
			$this->summits[] = new Position($summit['x'], $summit['y']);
		}
	}

	public function getSummits()
	{
		return $this->summits;
	}

	public function toString() : string
	{
		return "type: triangle, summits : ".$this->summits[0]->toString().', '.$this->summits[1]->toString().', '. $this->summits[2]->toString();
	}

}