<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use CodeKandis\Base64Codec\Base64FormatConverterInterface;
use CodeKandis\Base64Codec\InvalidStandardBase64PaddingExceptionInterface;
use CodeKandis\Base64Codec\InvalidStandardBase64ValueExceptionInterface;
use CodeKandis\Base64Codec\InvalidUriSafeBase64ValueExceptionInterface;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatConverterInterfaceTest\Base64FormatConvertersWithInvalidStandardBase64PaddedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatConverterInterfaceTest\Base64FormatConvertersWithInvalidStandardBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatConverterInterfaceTest\Base64FormatConvertersWithInvalidUriSafeBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatConverterInterfaceTest\Base64FormatConvertersWithValidStandardBase64ValueAndExpectedUriSafeBase64ValueDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatConverterInterfaceTest\Base64FormatConvertersWithValidUriSafeBase64ValueAndExpectedStandardBase64ValueDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Base64Codec\Base64FormatConverterInterface`.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatConverterInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `Base64FormatConverterInterface::convertGuardedToStandard()` throws a `CodeKandis\Base64Codec\InvalidUriSafeBase64ValueExceptionInterface` if a value is not a URI safe Base64 value.
	 * @param Base64FormatConverterInterface $base64FormatConverter The Base64 format converter to test.
	 * @param string $invalidUriSafeBase64Value The invalid URI safe Base64 value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( Base64FormatConvertersWithInvalidUriSafeBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertGuardedToStandardThrowsInvalidUriSafeBase64ValueExceptionInterfaceOnInvalidUriSafeBase64Value( Base64FormatConverterInterface $base64FormatConverter, string $invalidUriSafeBase64Value, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$base64FormatConverter->convertGuardedToStandard( $invalidUriSafeBase64Value );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidUriSafeBase64ValueExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `Base64FormatConverterInterface::convertGuardedToStandard()` converts a URI safe Base64 value into standard Base64 value correctly.
	 * @param Base64FormatConverterInterface $base64FormatConverter The Base64 format converter to test.
	 * @param string $validUriSafeBase64Value The valid URI safe Base64 value to pass.
	 * @param string $expectedStandardBase64Value The expected standard Base64 value.
	 */
	#[DataProviderExternal( Base64FormatConvertersWithValidUriSafeBase64ValueAndExpectedStandardBase64ValueDataProvider::class, 'provideData' )]
	public function testIfMethodConvertGuardedToStandardConvertsUriSafeBase64ValueToStandardBase64ValueCorrectly( Base64FormatConverterInterface $base64FormatConverter, string $validUriSafeBase64Value, string $expectedStandardBase64Value ): void
	{
		$resultedReturnValue = $base64FormatConverter->convertGuardedToStandard( $validUriSafeBase64Value );

		static::assertSame( $expectedStandardBase64Value, $resultedReturnValue );
	}

	/**
	 * Tests if the method `Base64FormatConverterInterface::convertToStandard()` converts a URI safe Base64 value into standard Base64 value correctly.
	 * @param Base64FormatConverterInterface $base64FormatConverter The Base64 format converter to test.
	 * @param string $validUriSafeBase64Value The valid URI safe Base64 value to pass.
	 * @param string $expectedStandardBase64Value The expected standard Base64 value.
	 */
	#[DataProviderExternal( Base64FormatConvertersWithValidUriSafeBase64ValueAndExpectedStandardBase64ValueDataProvider::class, 'provideData' )]
	public function testIfMethodConvertToStandardConvertsUriSafeBase64ValueToStandardBase64ValueCorrectly( Base64FormatConverterInterface $base64FormatConverter, string $validUriSafeBase64Value, string $expectedStandardBase64Value ): void
	{
		$resultedReturnValue = $base64FormatConverter->convertToStandard( $validUriSafeBase64Value );

		static::assertSame( $expectedStandardBase64Value, $resultedReturnValue );
	}

	/**
	 * Tests if the method `Base64FormatConverterInterface::convertGuardedToUriSafe()` throws a `CodeKandis\Base64Codec\InvalidStandardBase64ValueExceptionInterface` if a value is not a standard Base64 value.
	 * @param Base64FormatConverterInterface $base64FormatConverter The Base64 format converter to test.
	 * @param string $invalidStandardBase64Value The invalid standard Base64 value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( Base64FormatConvertersWithInvalidStandardBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertGuardedToUriSafeThrowsInvalidStandardBase64ValueExceptionInterfaceOnInvalidStandardBase64Value( Base64FormatConverterInterface $base64FormatConverter, string $invalidStandardBase64Value, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$base64FormatConverter->convertGuardedToUriSafe( $invalidStandardBase64Value );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidStandardBase64ValueExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `Base64FormatConverterInterface::convertGuardedToUriSafe()` throws a `CodeKandis\Base64Codec\InvalidStandardBase64PaddingExceptionInterface` if a value is not a standard Base64 padded value.
	 * @param Base64FormatConverterInterface $base64FormatConverter The Base64 format converter to test.
	 * @param string $invalidStandardBase64PaddedValue The invalid standard Base64 padded value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( Base64FormatConvertersWithInvalidStandardBase64PaddedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodConvertGuardedToUriSafeThrowsInvalidStandardBase64PaddingExceptionInterfaceOnInvalidStandardBase64PaddedValue( Base64FormatConverterInterface $base64FormatConverter, string $invalidStandardBase64PaddedValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$base64FormatConverter->convertGuardedToUriSafe( $invalidStandardBase64PaddedValue );
		}
		catch ( Throwable $throwable )
		{
			static::assertInstanceOf( InvalidStandardBase64PaddingExceptionInterface::class, $throwable );
			static::assertInstanceOf( $expectedThrowableClassName, $throwable );
			static::assertSame(
				$expectedThrowableMessage,
				$throwable->getMessage()
			);
		}
	}

	/**
	 * Tests if the method `Base64FormatConverterInterface::convertGuardedToUriSafe()` converts a standard Base64 value into URI safe Base64 value correctly.
	 * @param Base64FormatConverterInterface $base64FormatConverter The Base64 format converter to test.
	 * @param string $validStandardBase64Value The valid standard Base64 value to pass.
	 * @param string $expectedUriSafeBase64Value The expected URI safe Base64 value.
	 */
	#[DataProviderExternal( Base64FormatConvertersWithValidStandardBase64ValueAndExpectedUriSafeBase64ValueDataProvider::class, 'provideData' )]
	public function testIfMethodConvertGuardedToUriSafeConvertsStandardBase64ValueToUriSafeBase64ValueCorrectly( Base64FormatConverterInterface $base64FormatConverter, string $validStandardBase64Value, string $expectedUriSafeBase64Value ): void
	{
		$resultedReturnValue = $base64FormatConverter->convertGuardedToUriSafe( $validStandardBase64Value );

		static::assertSame( $expectedUriSafeBase64Value, $resultedReturnValue );
	}

	/**
	 * Tests if the method `Base64FormatConverterInterface::convertToUriSafe()` converts a standard Base64 value into URI safe Base64 value correctly.
	 * @param Base64FormatConverterInterface $base64FormatConverter The Base64 format converter to test.
	 * @param string $validStandardBase64Value The valid standard Base64 value to pass.
	 * @param string $expectedUriSafeBase64Value The expected URI safe Base64 value.
	 */
	#[DataProviderExternal( Base64FormatConvertersWithValidStandardBase64ValueAndExpectedUriSafeBase64ValueDataProvider::class, 'provideData' )]
	public function testIfMethodConvertToUriSafeConvertsStandardBase64ValueToUriSafeBase64ValueCorrectly( Base64FormatConverterInterface $base64FormatConverter, string $validStandardBase64Value, string $expectedUriSafeBase64Value ): void
	{
		$resultedReturnValue = $base64FormatConverter->convertToUriSafe( $validStandardBase64Value );

		static::assertSame( $expectedUriSafeBase64Value, $resultedReturnValue );
	}
}
