<?php
class Rect extends Shape
{
	private Position $origin;
	private int $width, $height;

	public function __construct(IRendering $rendering, ICalculator $calculator, array $params)
	{
		parent::__construct($rendering, $calculator, $params);

		$this->origin = new Position($params['x'], $params['y']);
		$this->width = $params['width']; 
		$this->height = $params['height']; 
	}

	public function getOrigin() :Position
	{
		return $this->origin;
	}

	public function getWidth() :int
	{
		return $this->width;
	}

	public function getHeight() :int
	{
		return $this->height;
	}

	public function toString() : string
	{
		return "type: rect, origin : ".$this->origin->toString().' width : '.$this->width.' height : '.$this->height;
	}
}