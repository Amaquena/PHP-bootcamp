<?php
class Color
{
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	static $verbose = false;

	function __construct(array $color)
	{
		if (isset($color['red']) && isset($color['green']) && isset($color['blue']))
		{
			$this->red = intval($color['red']);
			$this->green = intval($color['green']);
			$this->blue = intval($color['blue']);
		}
		else if (isset($color['rgb']))
		{
			$rgb = $color["rgb"];
			$this->red = ($rgb >> 16) & 255;
			$this->green = ($rgb >> 8) & 255;
			$this->blue = $rgb & 255;
		}
		if (self::$verbose)
			printf("Color( red:	%3d, green:	%3d, blue:	%3d) constructed.<br />", $this->red, $this->green, $this->blue);
	}

	function __destruct()
	{
		if (self::$verbose)
		printf("Color( red:	%3d, green:	%3d, blue:	%3d) constructed.<br />", $this->red, $this->green, $this->blue);
	}
	function __toString()
	{
		return sprintf("Color( red:	%3d, green:	%3d, blue:	%3d) constructed.<br />", $this->red, $this->green, $this->blue);
	}

	static function doc()
	{
		$file = fopen("Color.doc.txt", "r");
		while (!feof(($file)))
			echo fgets($file)."<br />";
		fclose($file);
	}

	function add(Color $rgb)
	{
		return (new Color(array('red' => ($this->red + $rgb->red), 'green' => ($this->green + $rgb->green), 'blue' => ($this->blue + $rgb->blue))));
	}

	function sub(color $rgb)
	{
		return (new Color(array('red' => ($this->red - $rgb->red), 'green' => ($this->green - $rgb->green), 'blue' => ($this->blue - $rgb->blue))));
	}

	function mult($rgb)
	{
		return (new Color(array('red' => ($this->red * $rgb), 'green' => ($this->green * $rgb), 'blue' => ($this->blue * $rgb))));
	}
}
?>