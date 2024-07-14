<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatGuardInterfaceTest;

use CodeKandis\Base64Codec\Base64FormatGuard;
use CodeKandis\Base64Codec\Tests\Fixtures\ValidValuesFixture;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing Base64 format guards with valid standard Base64 value.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatGuardsWithValidStandardBase64ValueDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'base64FormatGuard'        => new Base64FormatGuard(),
				'validStandardBase64Value' => ValidValuesFixture::STANDARD_BASE64_VALUE
			],
			1 => [
				'base64FormatGuard'        => new Base64FormatGuard(),
				'validStandardBase64Value' => ValidValuesFixture::STANDARD_BASE64_PADDED_VALUE
			],
		];
	}
}
