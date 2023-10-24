<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest;

use CodeKandis\Base64Codec\Base64Decoder;
use CodeKandis\Base64Codec\Tests\Fixtures\ValidValuesFixture;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing Base64 decoders with valid URI safe Base64 value and expected decoded value.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecodersWithValidUriSafeBase64ValueAndExpectedDecodedValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'base64Decoder'           => new Base64Decoder(),
				'validUriSafeBase64Value' => ValidValuesFixture::URI_SAFE_BASE64_VALUE,
				'expectedDecodedValue'    => ValidValuesFixture::UNENCODED_VALUE
			]
		];
	}
}
