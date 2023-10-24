<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use CodeKandis\Base64Codec\Base64ExceptionInterface;
use CodeKandis\Base64Codec\InvalidStandardBase64PaddingExceptionInterface;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\InvalidStandardBase64PaddingExceptionInterfaceTest\ThrowableClassNamesWithExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\InvalidStandardBase64PaddingExceptionInterfaceTest\ThrowableClassNamesWithExpectedThrowableClassNameDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use function call_user_func;

/**
 * Represents the test case of `CodeKandis\Base64Codec\InvalidStandardBase64PaddingExceptionInterface`.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidStandardBase64PaddingExceptionInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `InvalidStandardBase64PaddingExceptionInterface::__construct()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithExpectedThrowableClassNameDataProvider::class, 'provideData' )]
	public function testIfMethodConstructInstantiatesThrowableCorrectly( string $throwableClassName, string $expectedThrowableClassName ): void
	{
		$resultedThrowable          = new $throwableClassName();
		$resultedThrowableClassName = $resultedThrowable::class;

		static::assertInstanceOf( Base64ExceptionInterface::class, $resultedThrowable );
		static::assertInstanceOf( InvalidStandardBase64PaddingExceptionInterface::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
	}

	/**
	 * Tests if the method `InvalidStandardBase64PaddingExceptionInterface::with_defaultMessage()` instantiates the throwable correctly.
	 * @param string $throwableClassName The class name of the throwable to test.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( ThrowableClassNamesWithExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodWithDefaultMessageInstantiatesThrowableCorrectly( string $throwableClassName, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		$resultedThrowable          = $throwableClassName::{'with_defaultMessage'}();
		$resultedThrowableClassName = $resultedThrowable::class;
		$resultedThrowableMessage   = $resultedThrowable->getMessage();

		static::assertInstanceOf( Base64ExceptionInterface::class, $resultedThrowable );
		static::assertInstanceOf( InvalidStandardBase64PaddingExceptionInterface::class, $resultedThrowable );
		static::assertSame( $expectedThrowableClassName, $resultedThrowableClassName );
		static::assertSame( $expectedThrowableMessage, $resultedThrowableMessage );
	}
}
