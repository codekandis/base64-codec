<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use CodeKandis\Base64Codec\Base64FormatGuardInterface;
use CodeKandis\Base64Codec\InvalidStandardBase64PaddingExceptionInterface;
use CodeKandis\Base64Codec\InvalidStandardBase64ValueExceptionInterface;
use CodeKandis\Base64Codec\InvalidUriSafeBase64ValueExceptionInterface;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest\Base64FormatGuardsWithInvalidStandardBase64PaddedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest\Base64FormatGuardsWithInvalidStandardBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest\Base64FormatGuardsWithInvalidUriSafeBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest\Base64FormatGuardsWithValidStandardBase64ValueDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest\Base64FormatGuardsWithValidUriSafeBase64ValueDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use Throwable;

/**
 * Represents the test case of `CodeKandis\Base64Codec\Base64FormatGuardInterface`.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatGuardInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `Base64FormatGuardInterface::guardStandard()` throws a `CodeKandis\Base64Codec\InvalidStandardBase64ValueExceptionInterface` if a value is not a standard Base64 value.
	 * @param Base64FormatGuardInterface $base64FormatGuard The Base64 format guard to test.
	 * @param string $invalidStandardBase64Value The invalid standard Base64 value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( Base64FormatGuardsWithInvalidStandardBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodGuardStandardThrowsInvalidStandardBase64ValueExceptionInterfaceOnInvalidStandardBase64Value( Base64FormatGuardInterface $base64FormatGuard, string $invalidStandardBase64Value, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$base64FormatGuard->guardStandard( $invalidStandardBase64Value );
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
	 * Tests if the method `Base64FormatGuardInterface::guardStandard()` throws a `CodeKandis\Base64Codec\InvalidStandardBase64PaddingExceptionInterface` if a value is not a standard Base64 padded value.
	 * @param Base64FormatGuardInterface $base64FormatGuard The Base64 format guard to test.
	 * @param string $invalidStandardBase64PaddedValue The invalid standard Base64 padded value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( Base64FormatGuardsWithInvalidStandardBase64PaddedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodGuardStandardThrowsInvalidStandardBase64PaddingExceptionInterfaceOnInvalidStandardBase64PaddedValue( Base64FormatGuardInterface $base64FormatGuard, string $invalidStandardBase64PaddedValue, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$base64FormatGuard->guardStandard( $invalidStandardBase64PaddedValue );
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
	 * Tests if the method `Base64FormatGuardInterface::guardStandard()` returns void if the value is a standard Base64 value.
	 * @param Base64FormatGuardInterface $base64FormatGuard The Base64 format guard to test.
	 * @param string $validStandardBase64Value The valid standard Base64 value to pass.
	 */
	#[DataProviderExternal( Base64FormatGuardsWithValidStandardBase64ValueDataProvider::class, 'provideData' )]
	public function testIfMethodGuardStandardReturnsOnValidStandardBase64Value( Base64FormatGuardInterface $base64FormatGuard, string $validStandardBase64Value ): void
	{
		$resultedReturnValue = $base64FormatGuard->guardStandard( $validStandardBase64Value );

		static::assertNull( $resultedReturnValue );
	}

	/**
	 * Tests if the method `Base64FormatGuardInterface::guardUriSafe()` throws a `CodeKandis\Base64Codec\InvalidUriSafeBase64ValueExceptionInterface` if a value is not a URI safe Base64 value.
	 * @param Base64FormatGuardInterface $base64FormatGuard The Base64 format guard to test.
	 * @param string $invalidUriSafeBase64Value The invalid URI safe Base64 value to pass.
	 * @param string $expectedThrowableClassName The class name of the expected throwable.
	 * @param string $expectedThrowableMessage The message of the expected throwable.
	 */
	#[DataProviderExternal( Base64FormatGuardsWithInvalidUriSafeBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider::class, 'provideData' )]
	public function testIfMethodGuardUriSafeThrowsInvalidUriSafeBase64ValueExceptionInterfaceOnInvalidStandardBase64Value( Base64FormatGuardInterface $base64FormatGuard, string $invalidUriSafeBase64Value, string $expectedThrowableClassName, string $expectedThrowableMessage ): void
	{
		try
		{
			$base64FormatGuard->guardUriSafe( $invalidUriSafeBase64Value );
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
	 * Tests if the method `Base64FormatGuardInterface::guardUriSafe()` returns void if the value is a URI safe Base64 value.
	 * @param Base64FormatGuardInterface $base64FormatGuard The Base64 format guard to test.
	 * @param string $validUriSafeBase64Value The valid URI safe Base64 value to pass.
	 */
	#[DataProviderExternal( Base64FormatGuardsWithValidUriSafeBase64ValueDataProvider::class, 'provideData' )]
	public function testIfMethodGuardStandardReturnsOnValidUriSafeBase64Value( Base64FormatGuardInterface $base64FormatGuard, string $validUriSafeBase64Value ): void
	{
		$resultedReturnValue = $base64FormatGuard->guardUriSafe( $validUriSafeBase64Value );

		static::assertNull( $resultedReturnValue );
	}
}
