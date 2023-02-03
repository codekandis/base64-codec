<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use RuntimeException;

/**
 * Represents an exception thrown if an error occurred during encoding into or decoding from a Base64 value.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64Exception extends RuntimeException implements Base64ExceptionInterface
{
}
