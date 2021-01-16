<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\DataProviders\UnitTests\Base64EncoderInterfaceTest;

use ArrayIterator;
use CodeKandis\Base64Codec\Base64Encoder;

/**
 * Represents a data provider providing initiated Base64 encoders with decoded values and Base64 URI safe encoded values.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
class Base64EncodersWithDecodedValuesAndBase64UriSafeEncodedValuesDataProvider extends ArrayIterator
{
	public function __construct()
	{
		parent::__construct(
			[
				0 => [
					'base64Encoder'               => new Base64Encoder(),
					'value'                       => '8ÇÂ<Ç<ï¯ñ×78B>ïAË¡4Wïc§ÿPîXø4\Êá¡t7?/SµÚ²·x}0¤¯ç»M',
					'expectedUriSafeEncodedValue' => 'OMOHw4I8w4c8w6_Cr8Oxw5c3OEI-w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc_L1PCtcOawrLCt3h9MMKkwq_Dp8K7TQ'
				]
			]
		);
	}
}
