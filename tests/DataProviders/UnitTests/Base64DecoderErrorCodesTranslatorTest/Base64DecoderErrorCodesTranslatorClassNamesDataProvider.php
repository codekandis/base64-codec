<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64DecoderErrorCodesTranslatorTest;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64DecoderErrorCodesTranslator;

/**
 * Represents a data provider providing Base64 decoder error codes translators class names with expected Base64 decoder error codes translators class names.
 * @package codekandis/constants-classes-translator
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecoderErrorCodesTranslatorClassNamesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'base64DecoderErrorCodesTranslatorClassName'         => Base64DecoderErrorCodesTranslator::class,
					'expectedBase64DecoderErrorCodesTranslatorClassName' => Base64DecoderErrorCodesTranslator::class
				]
			]
		);
	}
}
