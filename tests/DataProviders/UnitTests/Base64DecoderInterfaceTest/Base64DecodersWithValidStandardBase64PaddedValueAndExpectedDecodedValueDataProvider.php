<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest;

use CodeKandis\Base64Codec\Base64Decoder;
use CodeKandis\Base64Codec\Tests\Fixtures\ValidValuesFixture;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing Base64 decoders with valid standard Base64 padded value and expected decoded value.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecodersWithValidStandardBase64PaddedValueAndExpectedDecodedValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'base64Decoder'                  => new Base64Decoder(),
				'validStandardBase64PaddedValue' => ValidValuesFixture::STANDARD_BASE64_PADDED_VALUE,
				'expectedDecodedValue'           => ValidValuesFixture::UNENCODED_VALUE
			]
		];
	}
}
