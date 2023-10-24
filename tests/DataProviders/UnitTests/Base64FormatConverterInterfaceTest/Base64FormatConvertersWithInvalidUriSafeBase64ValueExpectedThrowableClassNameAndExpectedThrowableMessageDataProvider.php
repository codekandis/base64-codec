<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64FormatConverterInterfaceTest;

use CodeKandis\Base64Codec\Base64FormatConverter;
use CodeKandis\Base64Codec\InvalidUriSafeBase64ValueException;
use CodeKandis\Base64Codec\Tests\Fixtures\InvalidValuesFixture;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing Base64 format converters with invalid URI safe Base64 value, expected throwable class name and expected throwable message.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatConvertersWithInvalidUriSafeBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'base64FormatConverter'      => new Base64FormatConverter(),
				'invalidUriSafeBase64Value'  => InvalidValuesFixture::URI_SAFE_BASE64_VALUE,
				'expectedThrowableClassName' => InvalidUriSafeBase64ValueException::class,
				'expectedThrowableMessage'   => InvalidUriSafeBase64ValueException::EXCEPTION_MESSAGE_DEFAULT
			]
		];
	}
}
