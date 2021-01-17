<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

/**
 * Represents an exception thrown if a value is not Base64 URI safe formatted.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class ValueIsNotBase64UriSafeFormattedException extends Base64Exception
{
}
