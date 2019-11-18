<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use function base64_decode;

/**
 * Represents a Base64 decoder.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64Decoder implements Base64DecoderInterface
{
	/**
	 * {@inheritdoc}
	 */
	public function decode( string $value ): string
	{
		( new Base64FormatGuard() )
			->guard( $value );

		return base64_decode( $value, true );
	}

	/**
	 * {@inheritdoc}
	 */
	public function decodeUriSafe( string $value ): string
	{
		( new Base64FormatGuard() )
			->guardUriSafe( $value );

		$formattedValue = ( new Base64FormatConverter() )
			->convertToStandard( $value );

		return base64_decode( $formattedValue, true );
	}
}
