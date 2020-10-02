<?php
class CanvasRendering implements IRendering
{
	public function __call ($methodName, $arguments) 
	{
		$realMethod = $methodName.get_class($arguments[0]);
		return $this->$realMethod($arguments[0]);
	}
	
	public function drawSquare ($shape) :string
	{
		$x = $shape->getOrigin()->getX();
		$y = $shape->getOrigin()->getY();
		$x2 = $x + $shape->getSide();
		$y2 = $y + $shape->getSide();

		$text = 'ctx.moveTo('.$x.', '.$y.');'
		$text.= 'ctx.fillStyle = "'.$shape->getColor()->getVal().'";';
		$text.='ctx.fillRect('.$x.', '.$y.', '.$x2.', '.$y2.');';
		return $text;
	}

	public function drawRect ($shape) :string
	{
		$x = $shape->getOrigin()->getX();
		$y = $shape->getOrigin()->getY();
		$x2 = $x + $shape->getWidth();
		$y2 = $y + $shape->getHeight();

		$text = 'ctx.moveTo('.$x.', '.$y.');'
		$text = 'ctx.fillStyle = "'.$shape->getColor()->getVal().'";';
		$text.='ctx.fillRect('.$x.', '.$y.', '.$x2.', '.$y2.');';
		return $text;	
	}

	public function drawTriangle ($triangle) :string
	{
		$x1 = $shape->getSummits[0]->getX();
		$y1 = $shape->getSummits[0]->getY();

		$x2 = $shape->getSummits[1]->getX();
		$y2 = $shape->getSummits[1]->getY();

		$x3 = $shape->getSummits[2]->getX();
		$y3 = $shape->getSummits[2]->getY();

		$text ='ctx.beginPath();';
		
		$text. = 'ctx.moveTo('.$x2.', '.$y2.');';
		$text. = 'ctx.moveTo('.$x3.', '.$y3.');';
		$text.= 'ctx.fill();';
		
		return $text;
	}
}