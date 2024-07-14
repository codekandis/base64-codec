<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\Types\BaseObject;
use Override;
use function str_replace;

/**
 * Represents a Base64 format converter.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64FormatConverter extends BaseObject implements Base64FormatConverterInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertGuardedToStandard( string $value ): string
	{
		( new Base64FormatGuard() )
			->guardUriSafe( $value );

		return str_replace( Base64Formats::URI_SAFE_UNIQUE_CHARACTER_SUBSET, Base64Formats::STANDARD_UNIQUE_CHARACTER_SUBSET, $value );
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function convertToStandard( string $value ): string
	{
		return str_replace( Base64Formats::URI_SAFE_UNIQUE_CHARACTER_SUBSET, Base64Formats::STANDARD_UNIQUE_CHARACTER_SUBSET, $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function convertGuardedToUriSafe( string $value ): string
	{
		( new Base64FormatGuard() )
			->guardStandard( $value );

		return str_replace( Base64Formats::STANDARD_UNIQUE_CHARACTER_SUBSET, Base64Formats::URI_SAFE_UNIQUE_CHARACTER_SUBSET, $value );
	}

	/**
	 * {@inheritDoc}
	 */
	#[Override]
	public function convertToUriSafe( string $value ): string
	{
		return str_replace( Base64Formats::STANDARD_UNIQUE_CHARACTER_SUBSET, Base64Formats::URI_SAFE_UNIQUE_CHARACTER_SUBSET, $value );
	}
}
