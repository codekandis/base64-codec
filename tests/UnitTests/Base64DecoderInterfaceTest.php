<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64DecoderInterface;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithInvalidBase64EncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithInvalidBase64UriSafeEncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithValidBase64EncodedValuesAndDecodedValuesDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest\Base64DecodersWithValidBase64UriSafeEncodedValuesAndDecodedValuesDataProvider;
use CodeKandis\PhpUnit\TestCase;

/**
 * Represents the test case to test objects against the `Base64DecoderInterface`.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecoderInterfaceTest extends TestCase
{
	/**
	 * Provides initiated Base64 decoders with valid Base64 encoded values and decoded values.
	 * @return ArrayIterator The initiated Base64 decoders with valid Base64 encoded values and decoded values.
	 */
	public function base64DecodersWithValidBase64EncodedValuesAndDecodedValuesDataProvider(): ArrayIterator
	{
		return new Base64DecodersWithValidBase64EncodedValuesAndDecodedValuesDataProvider();
	}

	/**
	 * Tests if `Base64DecoderInterface::decode()` decodes correctly.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param mixed $validEncodedValue The Base64 encoded value to decode.
	 * @param mixed $expectedDecodedValue The expected decoded value.
	 * @dataProvider base64DecodersWithValidBase64EncodedValuesAndDecodedValuesDataProvider
	 */
	public function testDecodeDecodesCorrectly( Base64DecoderInterface $base64Decoder, string $validEncodedValue, $expectedDecodedValue ): void
	{
		$resultedDecodedValue = $base64Decoder->decode( $validEncodedValue );

		$this->assertEquals( $expectedDecodedValue, $resultedDecodedValue );
	}

	/**
	 * Provides initiated Base64 decoders with valid Base64 URI safe encoded values and decoded values.
	 * @return ArrayIterator The initiated Base64 decoders with valid Base64 URI safe encoded values and decoded values.
	 */
	public function base64DecodersWithValidBase64UriSafeEncodedValuesAndDecodedValuesDataProvider(): ArrayIterator
	{
		return new Base64DecodersWithValidBase64UriSafeEncodedValuesAndDecodedValuesDataProvider();
	}

	/**
	 * Tests if `Base64DecoderInterface::decodeUriSafe()` decodes correctly.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param mixed $validUriSafeEncodedValue The valid Base64 URI safe encoded value to decode.
	 * @param mixed $expectedDecodedValue The expected decoded value.
	 * @dataProvider base64DecodersWithValidBase64UriSafeEncodedValuesAndDecodedValuesDataProvider
	 */
	public function testDecodeUriSafeDecodesCorrectly( Base64DecoderInterface $base64Decoder, string $validUriSafeEncodedValue, $expectedDecodedValue ): void
	{
		$resultedDecodedValue = $base64Decoder->decodeUriSafe( $validUriSafeEncodedValue );

		$this->assertEquals( $expectedDecodedValue, $resultedDecodedValue );
	}

	/**
	 * Provides initiated Base64 decoders with invalid Base64 encoded values and expected exceptions, error codes and error messages.
	 * @return ArrayIterator The initiated Base64 decoders with invalid Base64 encoded values and expected exceptions, error codes and error messages.
	 */
	public function base64DecodersWithInvalidBase64EncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider(): ArrayIterator
	{
		return new Base64DecodersWithInvalidBase64EncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider();
	}

	/**
	 * Tests if `Base64DecoderInterface::decode()` throws an exception while an error occurred.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param string $invalidEncodedValue The invalid Base64 encoded value to decode.
	 * @param string $expectedExceptionClass The class name of the expected exception.
	 * @param int $expectedErrorCode The error code of the expected exception.
	 * @param string $expectedErrorMessage The error message of the expected exception.
	 * @dataProvider base64DecodersWithInvalidBase64EncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider
	 */
	public function testDecodeThrowsExceptionOnError( Base64DecoderInterface $base64Decoder, string $invalidEncodedValue, string $expectedExceptionClass, int $expectedErrorCode, string $expectedErrorMessage ): void
	{
		$this->expectException( $expectedExceptionClass );
		$this->expectExceptionCode( $expectedErrorCode );
		$this->expectExceptionMessage( $expectedErrorMessage );

		$base64Decoder->decode( $invalidEncodedValue );
	}

	/**
	 * Provides initiated Base64 decoders with invalid Base64 URI safe encoded values and expected exceptions, error codes and error messages.
	 * @return ArrayIterator The initiated Base64 decoders with invalid Base64 URI safe encoded values and expected exceptions, error codes and error messages.
	 */
	public function base64DecodersWithInvalidBase64UriSafeEncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider(): ArrayIterator
	{
		return new Base64DecodersWithInvalidBase64UriSafeEncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider();
	}

	/**
	 * Tests if `Base64DecoderInterface::decodeUriSafe()` throws an exception while an error occurred.
	 * @param Base64DecoderInterface $base64Decoder The Base64 decoder to test.
	 * @param string $invalidUriSafeEncodedValue The invalid Base64 URI safe encoded value to decode.
	 * @param string $expectedExceptionClass The class name of the expected exception.
	 * @param int $expectedErrorCode The error code of the expected exception.
	 * @param string $expectedErrorMessage The error message of the expected exception.
	 * @dataProvider base64DecodersWithInvalidBase64UriSafeEncodedValuesExceptionsErrorCodesAndErrorMessagesDataProvider
	 */
	public function testDecodeUriSafeThrowsExceptionOnError( Base64DecoderInterface $base64Decoder, string $invalidUriSafeEncodedValue, string $expectedExceptionClass, int $expectedErrorCode, string $expectedErrorMessage ): void
	{
		$this->expectException( $expectedExceptionClass );
		$this->expectExceptionCode( $expectedErrorCode );
		$this->expectExceptionMessage( $expectedErrorMessage );

		$base64Decoder->decodeUriSafe( $invalidUriSafeEncodedValue );
	}
}
