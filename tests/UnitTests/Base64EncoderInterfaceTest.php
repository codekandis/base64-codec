<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\UnitTests;

use CodeKandis\Base64Codec\Base64EncoderInterface;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64EncoderInterfaceTest\Base64EncodersWithUnencodedValueAndExpectedStandardBased64PaddedValueDataProvider;
use CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64EncoderInterfaceTest\Base64EncodersWithUnencodedValueAndExpectedUriSafeBased64ValueDataProvider;
use CodeKandis\PhpUnit\TestCase;
use PHPUnit\Framework\Attributes\DataProviderExternal;

/**
 * Represents the test case of `CodeKandis\Base64Codec\Base64EncoderInterface`.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64EncoderInterfaceTest extends TestCase
{
	/**
	 * Tests if the method `Base64EncoderInterface::encodeToStandard()` encodes a value to a standard Base64 value correctly.
	 * @param Base64EncoderInterface $base64Encoder The Base64 encoder to test.
	 * @param string $unencodedValue The unencoded value to pass.
	 * @param string $expectedStandardBase64PaddedValue The expected standard Base64 padded value.
	 */
	#[DataProviderExternal( Base64EncodersWithUnencodedValueAndExpectedStandardBased64PaddedValueDataProvider::class, 'provideData' )]
	public function testIfMethodEncodeToStandardEncodesToStandardBase64ValueCorrectly( Base64EncoderInterface $base64Encoder, string $unencodedValue, string $expectedStandardBase64PaddedValue ): void
	{
		$resultedEncodedValue = $base64Encoder->encodeToStandard( $unencodedValue );

		static::assertSame( $expectedStandardBase64PaddedValue, $resultedEncodedValue );
	}

	/**
	 * Tests if the method `Base64EncoderInterface::encodeToUriSafe()` encodes a value to a URI safe Base64 value correctly.
	 * @param Base64EncoderInterface $base64Encoder The Base64 encoder to test.
	 * @param string $unencodedValue The unencoded value to pass.
	 * @param string $expectedUriSafeBase64Value The expected URI safe Base64 value.
	 */
	#[DataProviderExternal( Base64EncodersWithUnencodedValueAndExpectedUriSafeBased64ValueDataProvider::class, 'provideData' )]
	public function testIfMethodEncodeToStandardEncodesToUriSafeBase64ValueCorrectly( Base64EncoderInterface $base64Encoder, string $unencodedValue, string $expectedUriSafeBase64Value ): void
	{
		$resultedEncodedValue = $base64Encoder->encodeToUriSafe( $unencodedValue );

		static::assertSame( $expectedUriSafeBase64Value, $resultedEncodedValue );
	}
}
