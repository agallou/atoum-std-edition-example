<?php

namespace tests\units;

require_once __DIR__ . '/../src/Example.php';

class Example extends \atoum
{

	public function testDoSomething()
	{
		$this
			->given($example = new \Example())
			->integer($example->doSometing())
				->isEqualTo(46)
		;
	}
}

