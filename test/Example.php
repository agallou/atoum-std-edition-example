<?php

namespace monvendor\monproject\tests\units;

class Example extends \atoum
{

	public function testDoSomething()
	{
		$this
			->given($example = new \monvendor\monproject\Example())
			->integer($example->doSometing())
				->isEqualTo(40)
		;
	}

	public function testVisiblityIsLoaded()
	{
		$this
			->given($example = new \monvendor\monproject\Example())
			->string($this->invoke($example)->protegee())
			->isIdenticalTo('content')
		;
	}
}

