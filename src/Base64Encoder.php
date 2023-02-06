<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use Override;
use function base64_encode;

/**
 * Represents a Base64 encoder.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64Encoder implements Base64EncoderInterface
{
	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public function encode( string $value ): string
	{
		return base64_encode( $value );
	}

	/**
	 * {@inheritdoc}
	 */
	#[Override]
	public function encodeUriSafe( string $value ): string
	{
		$encodedValue = base64_encode( $value );

		return ( new Base64FormatConverter() )
			->convertToUriSafe( $encodedValue );
	}
}
