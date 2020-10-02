<?php
abstract class Color implements IColor
{
	public function getVal()
	{
		return static::COLOR_VAL;
	}
}