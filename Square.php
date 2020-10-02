<?php 
class Square extends Shape
{
	private Position $origin;
	private int $side;

	public function __construct(IRendering $rendering, ICalculator $calculator, array $params)
	{
		parent::__construct($rendering, $calculator, $params);

		$this->origin = new Position($params['x'], $params['y']);
		$this->side = $params['side']; 
	}

	public function getOrigin() :Position
	{
		return $this->origin;
	}

	public function getSide() :int
	{
		return $this->side;
	}

	public function toString() : string
	{
		return "type: square, origin : ".$this->origin->toString().' side : '.$this->side;
	}
}