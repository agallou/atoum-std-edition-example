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
}

