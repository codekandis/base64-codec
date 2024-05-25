<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\Fixtures;

/**
 * Represents an enumeration of valid values.
 * @package codekandis/base64-codec
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ValidValuesFixture
{
	/**
	 * Represents a valid unencoded value.
	 */
	public const string UNENCODED_VALUE = '8ÇÂ<Ç<ï¯ñ×78B>ïAË¡4Wïc§ÿPîXø4\Êá¡t7?/SµÚ²·x}0¤¯ç»M';

	/**
	 * Represents a valid standard Base64 value.
	 */
	public const string STANDARD_BASE64_VALUE = 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ';

	/**
	 * Represents a valid standard Base64 padded value.
	 */
	public const string STANDARD_BASE64_PADDED_VALUE = 'OMOHw4I8w4c8w6/Cr8Oxw5c3OEI+w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc/L1PCtcOawrLCt3h9MMKkwq/Dp8K7TQ==';

	/**
	 * Represents a valid URI safe Base64 value.
	 */
	public const string URI_SAFE_BASE64_VALUE = 'OMOHw4I8w4c8w6_Cr8Oxw5c3OEI-w69Bw4vCoTRXw69jwqfDv1DDrljDuDRcw4rDocKhdDc_L1PCtcOawrLCt3h9MMKkwq_Dp8K7TQ';
}
