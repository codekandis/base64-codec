<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\Types\BaseObject;
use Override;
use function base64_decode;

/**
 * Represents a Base64 decoder.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64Decoder extends BaseObject implements Base64DecoderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function decodeFromStandard( string $value ): string
	{
		( new Base64FormatGuard() )
			->guardStandard( $value );

		return base64_decode( $value, true );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function decodeFromUriSafe( string $value ): string
	{
		( new Base64FormatGuard() )
			->guardUriSafe( $value );

		$formattedValue = ( new Base64FormatConverter() )
			->convertToStandard( $value );

		return base64_decode( $formattedValue, true );
	}
}
