<?php
class Jaime extends Lannister
{
	public function sleepWith($who)
	{
		if (get_class($who) == "Cersei")
		{
			print ("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		}
		else
			parent::sleepWith($who);
	}
}
?>