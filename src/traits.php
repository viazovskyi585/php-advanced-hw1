<?php
trait TraitOne
{
	protected function test(): int
	{
		return 1;
	}
}

trait TraitTwo
{
	protected function test(): int
	{
		return 2;
	}
}

trait TraitThree
{
	protected function test(): int
	{
		return 3;
	}
}

class Test
{
	use TraitOne, TraitTwo, TraitThree {
		TraitOne::test insteadof TraitTwo, TraitThree;
		TraitTwo::test as testTwo;
		TraitThree::test as testThree;
	}

	public function getSum(): int
	{
		return $this->test() + $this->testTwo() + $this->testThree();
	}
}

$test = new Test();
echo $test->getSum();
