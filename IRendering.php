<?php
interface IRendering 
{
	//public function drawCircle(Circle $circle) :string;
	public function drawSquare($square) :string;
	public function drawTriangle($triangle) :string;
	public function drawRect($rectangle) :string;
}