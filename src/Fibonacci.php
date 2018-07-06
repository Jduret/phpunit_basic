<?php

class Fibonacci
{
	protected $prevImage=0;
	protected $image=0;

	public function next()
	{

		$sum = $this->prevImage + $this->image;
		if(0 === $sum) {
			$sum = 1;
		}
		$this->prevImage = $this->image;
		$this->image = $sum;
		return $this->image;
	}

	public function jumpTo($index)
	{
		$this->prevImage = 0;
		$this->image = 0;


		for($i=1; $i<=$index; $i++) {
			$this->next();
		}

		return $this->image;
	}
}
