<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64FormatGuardInterface;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest\Base64FormatGuardsWithInvalidBase64EncodedValuesExpectedExceptionsErrorCodesAndErrorMessagesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest\Base64FormatGuardsWithInvalidBase64UriSafeEncodedValuesExpectedExceptionsErrorCodesAndErrorMessagesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest\Base64FormatGuardsWithValidBase64EncodedValuesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest\Base64FormatGuardsWithValidBase64UriSafeEncodedValuesDataProvider;
use CodeKandis\PhpUnit\TestCase;

/**
 * Represents the test case to test objects against the `Base64FormatGuardInterface`.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatGuardInterfaceTest extends TestCase
{
	/**
	 * Provides initiated Base64 format guards with valid Base64 encoded values.
	 * @return ArrayIterator The initiated Base64 format guards with valid Base64 encoded values.
	 */
	public function base64FormatGuardsWithValidBase64EncodedValuesDataProvider(): ArrayIterator
	{
		return new Base64FormatGuardsWithValidBase64EncodedValuesDataProvider();
	}

	/**
	 * Tests if `Base64FormatGuardInterface::guard()` executes without any exception.
	 * @param Base64FormatGuardInterface $base64FormatGuard The Base64 format guard to test.
	 * @param string $validEncodedValue The valid Base64 encoded value to decode.
	 * @dataProvider base64FormatGuardsWithValidBase64EncodedValuesDataProvider
	 */
	public function testMethodGuardExecutesAndReturnsVoid( Base64FormatGuardInterface $base64FormatGuard, string $validEncodedValue ): void
	{
		static::assertNull( $base64FormatGuard->guard( $validEncodedValue ) );
	}

	/**
	 * Provides initiated Base64 format guards with valid Base64 URI safe encoded values.
	 * @return ArrayIterator The initiated Base64 format guards with valid Base64 URI safe encoded values.
	 */
	public function base64FormatGuardsWithValidBase64UriSafeEncodedValuesDataProvider(): ArrayIterator
	{
		return new Base64FormatGuardsWithValidBase64UriSafeEncodedValuesDataProvider();
	}

	/**
	 * Tests if `Base64FormatGuardInterface::guard()` executes without any exception.
	 * @param Base64FormatGuardInterface $base64FormatGuard The Base64 format guard to test.
	 * @param string $validUriSafeEncodedValue The valid Base64 URI safe encoded value to decode.
	 * @dataProvider base64FormatGuardsWithValidBase64UriSafeEncodedValuesDataProvider
	 */
	public function testMethodGuardUriSafeExecutesAndReturnsVoid( Base64FormatGuardInterface $base64FormatGuard, string $validUriSafeEncodedValue ): void
	{
		static::assertNull( $base64FormatGuard->guardUriSafe( $validUriSafeEncodedValue ) );
	}

	/**
	 * Provides initiated Base64 format guards with invalid Base64 encoded values, expected exceptions, error codes and error messages.
	 * @return ArrayIterator The initiated Base64 format guards with invalid Base64 encoded values, expected exceptions, error codes and error messages.
	 */
	public function base64FormatGuardsWithInvalidBase64EncodedValuesExpectedExceptionsErrorCodesAndErrorMessagesDataProvider(): ArrayIterator
	{
		return new Base64FormatGuardsWithInvalidBase64EncodedValuesExpectedExceptionsErrorCodesAndErrorMessagesDataProvider();
	}

	/**
	 * Tests if `Base64FormatGuard::guard()` throws an exception while an error occurred.
	 * @param Base64FormatGuardInterface $base64FormatGuard The Base64 format guard to test.
	 * @param string $invalidEncodedValue The invalid Base64 encoded value.
	 * @param string $expectedExceptionClass The class name of the expected exception.
	 * @param int $expectedErrorCode The error code of the expected exception.
	 * @param string $expectedErrorMessage The error message of the expected exception.
	 * @dataProvider base64FormatGuardsWithInvalidBase64EncodedValuesExpectedExceptionsErrorCodesAndErrorMessagesDataProvider
	 */
	public function testMethodGuardThrowsExceptionOnError( Base64FormatGuardInterface $base64FormatGuard, string $invalidEncodedValue, string $expectedExceptionClass, int $expectedErrorCode, string $expectedErrorMessage ): void
	{
		$this->expectException( $expectedExceptionClass );
		$this->expectExceptionCode( $expectedErrorCode );
		$this->expectExceptionMessage( $expectedErrorMessage );

		$base64FormatGuard->guard( $invalidEncodedValue );
	}

	/**
	 * Provides initiated Base64 format guards with invalid Base64 URI safe encoded values, expected exceptions, error codes and error messages.
	 * @return ArrayIterator The initiated Base64 format guards with invalid Base64 URI safe encoded values, expected exceptions, error codes and error messages.
	 */
	public function base64FormatGuardsWithInvalidBase64UriSafeEncodedValuesExpectedExceptionsErrorCodesAndErrorMessagesDataProvider(): ArrayIterator
	{
		return new Base64FormatGuardsWithInvalidBase64UriSafeEncodedValuesExpectedExceptionsErrorCodesAndErrorMessagesDataProvider();
	}

	/**
	 * Tests if `Base64FormatGuard::guard()` throws an exception while an error occurred.
	 * @param Base64FormatGuardInterface $base64FormatGuard The Base64 format guard to test.
	 * @param string $invalidUriSafeEncodedValue The invalid Base64 URI safe encoded value.
	 * @param string $expectedExceptionClass The class name of the expected exception.
	 * @param int $expectedErrorCode The error code of the expected exception.
	 * @param string $expectedErrorMessage The error message of the expected exception.
	 * @dataProvider base64FormatGuardsWithInvalidBase64UriSafeEncodedValuesExpectedExceptionsErrorCodesAndErrorMessagesDataProvider
	 */
	public function testMethodGuardUriSafeThrowsExceptionOnError( Base64FormatGuardInterface $base64FormatGuard, string $invalidUriSafeEncodedValue, string $expectedExceptionClass, int $expectedErrorCode, string $expectedErrorMessage ): void
	{
		$this->expectException( $expectedExceptionClass );
		$this->expectExceptionCode( $expectedErrorCode );
		$this->expectExceptionMessage( $expectedErrorMessage );

		$base64FormatGuard->guardUriSafe( $invalidUriSafeEncodedValue );
	}
}
