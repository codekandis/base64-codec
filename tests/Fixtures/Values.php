<?php declare( strict_types = 1 );
namespace CodeKandis\Base64Codec\Tests\Fixtures;

use Exception;
use Throwable;

/**
 * Represents an enumeration of values.
 * @package codekandis/types
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class Values
{
	/**
	 * Represents a throwable message.
	 * @var string
	 */
	public const string THROWABLE_MESSAGE = 'exceptionMessage';

	/**
	 * Represents a throwable message default.
	 * @var string
	 */
	public const string THROWABLE_MESSAGE_DEFAULT = '';

	/**
	 * Represents a throwable code.
	 * @var int
	 */
	public const int THROWABLE_CODE = 42;

	/**
	 * Represents a throwable code default.
	 * @var int
	 */
	public const int THROWABLE_CODE_DEFAULT = 0;

	/**
	 * Represents a throwable previous default.
	 * @var ?Throwable
	 */
	public const ?Throwable THROWABLE_PREVIOUS_DEFAULT = null;

	/**
	 * Creates a throwable previous.
	 * @return Throwable The created throwable previous.
	 */
	public static function createThrowablePrevious(): Throwable
	{
		return new Exception();
	}
}
