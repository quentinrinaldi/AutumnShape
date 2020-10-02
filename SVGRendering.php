<?php
class SVGRendering implements IRendering
{

	public function __call ($methodName, $arguments) 
	{
		$realMethod = $methodName.get_class($arguments[0]);
		return $this->$realMethod($arguments[0]);
	}
	
	public function drawSquare ($shape) :string
	{
		return '<rect x="'.$shape->getOrigin()->getX().'" y="'.$shape->getOrigin()->getY().'" width="'.$shape->getSide().'" height="'.$shape->getSide().'" fill="'.$triangle->getColor()->getVal().'" />';
	}

	public function drawRect ($shape) :string
	{
		return '<rect x="'.$shape->getOrigin()->getX().'" y="'.$shape->getOrigin()->getY().'" width="'.$shape->getWidth().'" height="'.$shape->getHeight().'" />';
	}

	public function drawTriangle ($triangle) :string
	{
		$triangleSVG ='<polyline points ="';
		$summits = $triangle->getSummits();
		$i=0;
		foreach ($summits as $summit)
		{

			$pointSVG = $summit->getX().','.$summit->getY();
			$triangleSVG.=$pointSVG;
			if ($i < 2) $triangleSVG.=' ';
			$i++;
		}
		return $triangleSVG.'" fill="'.$triangle->getColor()->getVal().'"/>';
	}
}