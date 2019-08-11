<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\ErrorCodesInterpreter\ErrorCodesInterpreter;

/**
 * Represents a Base64 error codes interpreter.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecoderErrorCodesInterpreter extends ErrorCodesInterpreter
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct( Base64DecoderErrorCodes::class, Base64DecoderErrorMessages::class );
	}
}
