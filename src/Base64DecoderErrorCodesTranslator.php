<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec;

use CodeKandis\ConstantsClassesTranslator\ConstantsClassesTranslator;

/**
 * Represents a Base64 error codes translator.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecoderErrorCodesTranslator extends ConstantsClassesTranslator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct( Base64DecoderErrorCodes::class, Base64DecoderErrorMessages::class );
	}
}
