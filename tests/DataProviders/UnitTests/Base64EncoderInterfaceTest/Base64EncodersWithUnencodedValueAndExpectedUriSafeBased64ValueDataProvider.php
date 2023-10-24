<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64EncoderInterfaceTest;

use CodeKandis\Base64Codec\Base64Encoder;
use CodeKandis\Base64Codec\Tests\Fixtures\ValidValuesFixture;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing Base64 encoders with unencoded value and expected URI safe Base64 value.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64EncodersWithUnencodedValueAndExpectedUriSafeBased64ValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'base64Encoder'              => new Base64Encoder(),
				'unencodedValue'             => ValidValuesFixture::UNENCODED_VALUE,
				'expectedUriSafeBase64Value' => ValidValuesFixture::URI_SAFE_BASE64_VALUE
			]
		];
	}
}
