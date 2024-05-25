<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatConverterInterfaceTest;

use CodeKandis\Base64Codec\Base64FormatConverter;
use CodeKandis\Base64Codec\Tests\Fixtures\ValidValuesFixture;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing Base64 format converters with valid URI safe Base64 value and expected standard Base64 value.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatConvertersWithValidUriSafeBase64ValueAndExpectedStandardBase64ValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'base64FormatConverter'       => new Base64FormatConverter(),
				'validUriSafeBase64Value'     => ValidValuesFixture::URI_SAFE_BASE64_VALUE,
				'expectedStandardBase64Value' => ValidValuesFixture::STANDARD_BASE64_VALUE
			]
		];
	}
}
