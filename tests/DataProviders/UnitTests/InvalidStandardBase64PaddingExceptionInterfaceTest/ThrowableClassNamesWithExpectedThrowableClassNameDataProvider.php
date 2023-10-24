<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\InvalidStandardBase64PaddingExceptionInterfaceTest;

use CodeKandis\Base64Codec\InvalidStandardBase64PaddingException;
use CodeKandis\PhpUnit\DataProviderInterface;
use Override;

/**
 * Represents a data provider providing throwable class names with expected throwable class name.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class ThrowableClassNamesWithExpectedThrowableClassNameDataProvider implements DataProviderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public static function provideData(): iterable
	{
		return [
			0 => [
				'throwableClassName'         => $throwableClassName = InvalidStandardBase64PaddingException::class,
				'expectedThrowableClassName' => $throwableClassName
			]
		];
	}
}
