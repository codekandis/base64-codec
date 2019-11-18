<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\Base64DecoderInterfaceTest;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64Decoder;

/**
 * Represents a data provider providing initiated Base64 decoders with valid Base64 encoded values and decoded values.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64DecodersWithValidBase64EncodedValuesAndDecodedValuesDataProvider extends ArrayIterator
{
	/**
	 * Constructor method.
	 */
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'base64Decoder'        => new Base64Decoder(),
					'encodedValue'         => 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ==',
					'expectedDecodedValue' => '8ÇÂ<Ç<ï¯ñ×78B>ïAË¡4Wïc§ÿPîXø4\Êá¡t7?/SµÚ²·x}0¤¯ç»M'
				]
			]
		);
	}
}
