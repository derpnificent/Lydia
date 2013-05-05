<?php
/**
 * Interface for class that interacts with the database to encapsulates all SQL requests.
 *
 * @package Derp
 */
interface IHasSQL {
  public static function SQL($key=null);
}