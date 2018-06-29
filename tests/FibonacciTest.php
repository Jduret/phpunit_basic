<?php

use PHPUnit\Framework\TestCase;

require PROJECT_PATH . DIRECTORY_SEPARATOR . 'Fibonacci.php';

//final est facultatif, mais une classe de test est par définition une classe final
final class FibonacciTest extends TestCase
{

	public function setUp(): void
	{
		// set up
	}

	public function tearDown(): void
	{
		// tear down
	}

	/**
	 * Premier test qui n'a aucun but à part permettre
	 * de contrôler le bon fonctionnement du paramétrage
	 * @return void
	 */
	public function testSetup(): void
	{
		$this->assertTrue(true);
	}
}
