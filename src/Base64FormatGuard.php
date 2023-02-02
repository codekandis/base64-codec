<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\Types\BaseObject;
use Override;
use function preg_match;
use function strlen;
use function substr;

/**
 * Represents a Base64 format guard.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatGuard extends BaseObject implements Base64FormatGuardInterface
{
	/**
	 * Guards if a value is a standard Base64 value.
	 * @param string $value The value to guard.
	 * @throws InvalidStandardBase64ValueExceptionInterface The value is not a standard Base64 value.
	 */
	private function guardStandardCharSet( string $value ): void
	{
		$isValid = 1 === preg_match( '~' . Base64Formats::STANDARD_FORMAT . '~', $value );
		if ( false === $isValid )
		{
			throw new InvalidStandardBase64ValueException();
		}
	}

	/**
	 * Guards if the padding of a standard Base64 value is valid.
	 * @param string $value The value to guard.
	 * @throws InvalidStandardBase64PaddingExceptionInterface The padding of the standard Base64 value is invalid.
	 */
	private function guardStandardPadding( string $value ): void
	{
		$paddingModulo    = strlen( $value ) % 4;
		$lastValueSegment = 0 === $paddingModulo
			? substr( $value, -4 )
			: substr( $value, -$paddingModulo );
		if ( '=' === $lastValueSegment[ 0 ] )
		{
			throw new InvalidStandardBase64PaddingException();
		}
	}

	/**
	 * Guards if a value is a URI safe Base64 value.
	 * @param string $value The value to guard.
	 * @throws InvalidUriSafeBase64ValueExceptionInterface The value is not a URI safe Base64 value.
	 */
	private function guardUriSafeCharSet( string $value ): void
	{
		$isValid = 1 === preg_match( '~' . Base64Formats::URI_SAFE_FORMAT . '~', $value );
		if ( false === $isValid )
		{
			throw new InvalidUriSafeBase64ValueException();
		}
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function guardStandard( string $value ): void
	{
		$this->guardStandardCharSet( $value );
		$this->guardStandardPadding( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function guardUriSafe( string $value ): void
	{
		$this->guardUriSafeCharSet( $value );
	}
}
