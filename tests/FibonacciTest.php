<?php

use PHPUnit\Framework\TestCase;

require PROJECT_PATH . DIRECTORY_SEPARATOR . 'Fibonacci.php';

//final est facultatif, mais une classe de test est par définition une classe final
final class FibonacciTest extends TestCase
{

	protected $sut;

	public function setUp(): void
	{
		// set up
		require_once '../src/Fibonacci.php';
		$this->sut = new Fibonacci();
	}

	public function tearDown(): void
	{
		// tear down
		$this->sut = null;
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

	public function testFirstImageWillReturn1(): void
	{

		$image = $this->sut->next();

		$this->assertEquals(1, $image);
	}

	public function testSecondImageWillReturn1(): void
	{
		$this->testFirstImageWillReturn1();
		$image = $this->sut->next();

		$this->assertEquals(1, $image);
	}

	public function testThirdImageWillReturn2(): void
	{
		$this->testSecondImageWillReturn1();
		$image = $this->sut->next();

		$this->assertEquals(2, $image);
	}

	public function testJumpToWillReturn2IfJumpToThird(): void
	{
		$image = $this->sut->jumpTo(3);
		$this->assertEquals(2, $image);
	}

	/**
	 * 1 1 2 3 5 8 13 21 34 55
	 * @dataProvider providerJumpTo
	 * @return void
	 */
	public function testJumpToWillReturn2IfJumpTo($jump, $expected): void
	{
		$image = $this->sut->jumpTo($jump);
		$this->assertEquals($expected, $image);
	}

	public function providerJumpTo(): array
	{
		return [
			[1, 1],
			[2, 1],
			[3, 2],
			[4, 3],
			[5, 5],
			[6, 8],
			[7, 13],
			[8, 21],
			[9, 34],
			[10, 55],
		];
	}


	/**
	 * Random
	 * (pas de préfix sur cette méthode, on peut utiliser l'annotation)
	 * @test
	 * @return void
	 */
	public function jumpToWillReturn2IfJumpToX(): void
	{
		$randJump = rand(3, 99999);

		echo PHP_EOL . "Jump to $randJump" . PHP_EOL;
		$imagePrevPrev = $this->sut->jumpTo($randJump - 2);
		$imagePrev = $this->sut->jumpTo($randJump - 1);
		$image = $this->sut->jumpTo($randJump);
		$this->assertEquals($image, $imagePrev + $imagePrevPrev);
	}
}
