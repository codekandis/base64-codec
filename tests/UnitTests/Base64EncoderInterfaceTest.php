<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64EncoderInterface;
use CodeKandis\Base64Codec\Tests\DataProviders\Base64EncoderInterfaceTest\Base64EncodersWithDecodedValuesAndBase64UriSafeEncodedValuesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\Base64EncoderInterfaceTest\Base64EncodersWithDecodedValuesAndBased64EncodedValuesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\Base64EncoderInterfaceTest\Base64EncodersWithValidValuesAndEncodedUriSafeValuesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\Base64EncoderInterfaceTest\Base64EncodersWithValidValuesAndEncodedValuesDataProvider;
use PHPUnit\Framework\TestCase;

/**
 * Represents the test case to test objects against the `Base64EncoderInterface`.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64EncoderInterfaceTest extends TestCase
{
	/**
	 * Provides initiated Base64 encoders with decoded values and Base64 encoded values.
	 * @return ArrayIterator The initiated Base64 encoders with decoded values and Base64 encoded values.
	 */
	public function base64EncodersWithDecodedValuesAndBased64EncodedValuesDataProvider(): ArrayIterator
	{
		return new Base64EncodersWithDecodedValuesAndBased64EncodedValuesDataProvider();
	}

	/**
	 * Tests if `Base64EncoderInterface::encode()` encodes correctly.
	 * @param Base64EncoderInterface $base64Encoder The Base64 encoder to test.
	 * @param mixed $value The value to encode.
	 * @param string $expectedEncodedValue The expected encoded value.
	 * @dataProvider base64EncodersWithDecodedValuesAndBased64EncodedValuesDataProvider
	 */
	public function testEncodeEncodesCorrectly( Base64EncoderInterface $base64Encoder, $value, string $expectedEncodedValue ): void
	{
		$resultedEncodedValue = $base64Encoder->encode( $value );

		$this->assertSame( $expectedEncodedValue, $resultedEncodedValue );
	}

	/**
	 * Provides initiated Base64 encoders with decoded values and Base64 URI safe encoded values.
	 * @return ArrayIterator The initiated Base64 encoders with decoded values and Base64 URI safe encoded values.
	 */
	public function base64EncodersWithDecodedValuesAndBase64UriSafeEncodedValuesDataProvider(): ArrayIterator
	{
		return new Base64EncodersWithDecodedValuesAndBase64UriSafeEncodedValuesDataProvider();
	}

	/**
	 * Tests if `Base64EncoderInterface::encode()` encodes correctly.
	 * @param Base64EncoderInterface $base64Encoder The Base64 encoder to test.
	 * @param mixed $value The value to encode URI safe.
	 * @param string $expectedUriSafeEncodedValue The expected URI safe encoded value.
	 * @dataProvider base64EncodersWithDecodedValuesAndBase64UriSafeEncodedValuesDataProvider
	 */
	public function testEncodeUriSafeEncodesCorrectly( Base64EncoderInterface $base64Encoder, $value, string $expectedUriSafeEncodedValue ): void
	{
		$resultedEncodedValue = $base64Encoder->encodeUriSafe( $value );

		$this->assertSame( $expectedUriSafeEncodedValue, $resultedEncodedValue );
	}
}
