<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\InvalidUriSafeBase64ValueExceptionInterfaceTest;

use CodeKandis\Base64Codec\InvalidUriSafeBase64ValueException;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing throwable class names with expected throwable class name and expected throwable message.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithExpectedThrowableClassNameAndExpectedThrowableMessageDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InvalidUriSafeBase64ValueException::class,
				'expectedThrowableClassName' => $throwableClassName,
				'expectedThrowableMessage'   => InvalidUriSafeBase64ValueException::ERROR_INVALID_URI_SAFE_BASE64_VALUE
			]
		];
	}
}
