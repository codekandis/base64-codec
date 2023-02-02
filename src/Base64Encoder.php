<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\Types\BaseObject;
use Override;
use function base64_encode;

/**
 * Represents a Base64 encoder.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64Encoder extends BaseObject implements Base64EncoderInterface
{
	/**
	 * @inheritDoc
	 */
	#[Override]
	public function encodeToStandard( string $value ): string
	{
		return base64_encode( $value );
	}

	/**
	 * @inheritDoc
	 */
	#[Override]
	public function encodeToUriSafe( string $value ): string
	{
		$encodedValue = base64_encode( $value );

		return ( new Base64FormatConverter() )
			->convertToUriSafe( $encodedValue );
	}
}
