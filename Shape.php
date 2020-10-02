<?php
abstract class Shape
{
	protected Color $color;
	protected IRendering $rendering;
	protected ICalculator $calculator;


	public function __construct(IRendering $rendering, ICalculator $calculator, array $params)
	{
		$this->rendering = $rendering;
		$this->calculator = $calculator;

		$colorClassName = isset($params['color']) ? ucfirst($params['color']).'Color' : 'BlackColor';
		$this->color = new $colorClassName();
	}
	public function getColor() :Color
	{
		return $this->color;
	}

	public function draw() :string
	{
		return $this->rendering->draw($this);
	}

	public function calculate() :string
	{
		return $this->calculator->calculate($this);
	}

}