<?php

include "Position.php";
include "IRendering.php";
include "SVGRendering.php";
include "IColor.php";
include "Color.php";
include "ICalculator.php";
include "AreaCalculator.php";
include "BlackColor.php";
include "RedColor.php";
include "Shape.php";
include "Square.php";
include "Rect.php";
include "Triangle.php";
include "ShapeFactory.php";


$shapesDescrption = '[
{"type": "rect", "x" : "20", "y" : "20", "width" : "30", "height" : "60"},
{"type" : "square","x" : "80", "y" : "100", "side" : "50"},
{"type" : "triangle", "color" : "red", "summits" : [{"x" : "100", "y" : "200"},{"x" : "400", "y" : "200"},{"x" : "100", "y" : "400"} ]}
]';

$svgFact = new ShapeSvgFactory(json_decode($shapesDescrption, true));
echo $svgFact->getSvgCanva();
echo $svgFact->getAreas();