<?php 
class AreaCalculator implements ICalculator
{
	public function __call ($methodName, $arguments) 
	{
		$realMethod = $methodName.get_class($arguments[0]);
		return $this->$realMethod($arguments[0]);
	}

	public function calculateSquare ($square) :int
	{
		return pow($square->getSide(),2);
	}

	public function calculateTriangle ($triangle) :int
	{
		$summits = $triangle->getSummits();
		$dist1 = $summits[0]->getDistance($summits[1]);
		$dist2 = $summits[0]->getDistance($summits[2]);
		$dist3 = $summits[1]->getDistance($summits[2]);

		$p = 0.5 * ($dist1 + $dist2 + $dist3);

		return sqrt($p * ($p - $dist1) * ($p - $dist2) * ($p - $dist3));
	}

	public function calculateRect($rectangle) :int
	{
		return $rectangle->getHeight() + $rectangle->getWidth();
	}
}