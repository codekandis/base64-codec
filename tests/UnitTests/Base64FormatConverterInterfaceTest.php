<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64FormatConverterInterface;
use CodeKandis\Base64Codec\Tests\DataProviders\Base64FormatConverterInterfaceTest\Base64FormatConvertersWithBase64EncodedValuesAndExpectedBase64UriSafeEncodedValuesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\Base64FormatConverterInterfaceTest\Base64FormatConvertersWithBase64UriSafeEncodedValuesAndExpectedBase64EncodedValuesDataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Represents the test case to test objects against the `Base64FormatConverterInterface`.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatConverterInterfaceTest extends TestCase
{
	/**
	 * Provides initiated Base64 format converters with Base64 encoded values and expected Base64 URI safe encoded values.
	 * @return ArrayIterator The initiated Base64 format converters with Base64 encoded values and expected Base64 URI safe encoded values.
	 */
	public function base64FormatConvertersWithBase64EncodedValuesAndExpectedBase64UriSafeEncodedValuesDataProvider(): ArrayIterator
	{
		return new Base64FormatConvertersWithBase64EncodedValuesAndExpectedBase64UriSafeEncodedValuesDataProvider();
	}

	/**
	 * Tests if `Base64FormatConverterInterface::convertToStandard()` converts correctly.
	 * @param Base64FormatConverterInterface $base64FormatConverter The Base64 format guard to test.
	 * @param string $value The Base64 encoded value to convert.
	 * @param string $expectedUriSafeValue The expected converted Base64 URI safe encoded value.
	 * @dataProvider base64FormatConvertersWithBase64EncodedValuesAndExpectedBase64UriSafeEncodedValuesDataProvider
	 */
	public function testMethodConvertToUriSafeConvertsCorrectly( Base64FormatConverterInterface $base64FormatConverter, string $value, string $expectedUriSafeValue ): void
	{
		$resultedReturnValue = $base64FormatConverter->convertToUriSafe( $value );

		static::assertSame( $expectedUriSafeValue, $resultedReturnValue );
	}

	/**
	 * Provides initiated Base64 format converters with Base64 URI safe encoded values and expected Base64 encoded values.
	 * @return ArrayIterator The initiated Base64 format converters with Base64 URI safe encoded values and expected Base64 encoded values.
	 */
	public function base64FormatConvertersWithBase64UriSafeEncodedValuesAndExpectedBase64EncodedValuesDataProvider(): ArrayIterator
	{
		return new Base64FormatConvertersWithBase64UriSafeEncodedValuesAndExpectedBase64EncodedValuesDataProvider();
	}

	/**
	 * Tests if `Base64FormatConverterInterface::convertToStandard()` converts correctly.
	 * @param Base64FormatConverterInterface $base64FormatConverter The Base64 format guard to test.
	 * @param string $uriSafeValue The Base64 URI safe encoded value to convert.
	 * @param string $expectedValue The expected converted Base64 encoded value.
	 * @dataProvider base64FormatConvertersWithBase64UriSafeEncodedValuesAndExpectedBase64EncodedValuesDataProvider
	 */
	public function testMethodConvertToStandardExecutesAndReturnsVoid( Base64FormatConverterInterface $base64FormatConverter, string $uriSafeValue, string $expectedValue ): void
	{
		$resultedReturnValue = $base64FormatConverter->convertToStandard( $uriSafeValue );

		static::assertSame( $expectedValue, $resultedReturnValue );
	}
}
