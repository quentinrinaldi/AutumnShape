<?php

class ShapeFactory
{
	private $shapesDescription;
	private $shapesObject;

	function __construct (array $shapesDescription)
	{
		$this->shapesDescription = $shapesDescription;
		$this->shapesObject = [];
		$this->initObjects();
	}

	function initObjects ()
	{
		foreach ($this->shapesDescription as $shape) {
			$className = ucfirst($shape['type']);
			array_unshift($this->shapesObject, new $className(new SVGRendering(), new AreaCalculator(), $shape));
		}
	}

	public function getSvgCanva ()
	{
		$svgDrawing="<svg width='500' height='500'>";
		foreach ($this->shapesObject as $shape) 
		{
			$svgDrawing.= $shape->draw();
		}
		return $svgDrawing.'</svg>';
	}

	public function getAreas () 
	{
		$text = "<br>calcul des aires :<br>";
		foreach ($this->shapesObject as $shape) 
		{
			$text.=$shape->toString().' area : '.$shape->calculate().'<br>';
		}
		return $text;
	}
}