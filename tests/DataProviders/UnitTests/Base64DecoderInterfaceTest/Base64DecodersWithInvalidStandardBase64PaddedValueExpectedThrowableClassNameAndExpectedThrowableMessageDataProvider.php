<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderInterfaceTest;

use CodeKandis\Base64Codec\Base64Decoder;
use CodeKandis\Base64Codec\InvalidStandardBase64PaddingException;
use CodeKandis\Base64Codec\Tests\Fixtures\InvalidValuesFixture;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing Base64 format guards with invalid standard Base64 padded value, expected throwable class name and expected throwable message.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecodersWithInvalidStandardBase64PaddedValueExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'base64Decoder'                    => new Base64Decoder(),
				'invalidStandardBase64PaddedValue' => InvalidValuesFixture::STANDARD_BASE64_PADDED_VALUE,
				'expectedThrowableClassName'       => InvalidStandardBase64PaddingException::class,
				'expectedThrowableMessage'         => InvalidStandardBase64PaddingException::EXCEPTION_MESSAGE_DEFAULT
			]
		];
	}
}
