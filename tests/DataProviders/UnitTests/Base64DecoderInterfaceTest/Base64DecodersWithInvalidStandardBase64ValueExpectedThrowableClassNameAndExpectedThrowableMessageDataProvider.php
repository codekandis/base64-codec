<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest;

use CodeKandis\Base64Codec\Base64Decoder;
use CodeKandis\Base64Codec\InvalidStandardBase64ValueException;
use CodeKandis\Base64Codec\Tests\Fixtures\InvalidValuesFixture;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing Base64 format guards with invalid standard Base64 value, expected throwable class name and expected throwable message.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecodersWithInvalidStandardBase64ValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'base64Decoder'              => new Base64Decoder(),
				'invalidStandardBase64Value' => InvalidValuesFixture::STANDARD_BASE64_VALUE,
				'expectedThrowableClassName' => InvalidStandardBase64ValueException::class,
				'expectedThrowableMessage'   => InvalidStandardBase64ValueException::EXCEPTION_MESSAGE_DEFAULT
			]
		];
	}
}
