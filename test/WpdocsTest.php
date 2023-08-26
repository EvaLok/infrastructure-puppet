<?php
/**
 * Usage: php test/WpdocsTest.php
 */

require_once __DIR__ . '/Unit.php';
$server = @$argv[1] ?: '';

Unit::start();

foreach ( [
  'https://jquery.com/blog/feed/' => 'https://blog.jquery.com/feed/',
  'https://jquery.com/blog/2008/09/28/jquery-microsoft-nokia' => 'https://blog.jquery.com/2008/09/28/jquery-microsoft-nokia',
] as $url => $expected ) {
  Unit::testHttp( $url, null, [], [
    'status' => '301',
    'location' => $expected,
  ] );
}

foreach ( [
  'https://jqueryui.com/bugs/ticket/3484' => 'http://bugs.jqueryui.com/ticket/3484',
] as $url => $expected ) {
  Unit::testHttp( $url, null, [], [
    'status' => '301',
    'location' => $expected,
  ] );
}

foreach ( [
  'https://jquerymobile.com/blog/feed/' => 'https://blog.jquerymobile.com/feed/',
  'https://jquerymobile.com/blog/2011/11/16/announcing-jquery-mobile-1-0/' => 'https://blog.jquerymobile.com/2011/11/16/announcing-jquery-mobile-1-0/',
] as $url => $expected ) {
  Unit::testHttp( $url, null, [], [
    'status' => '301',
    'location' => $expected,
  ] );
}

Unit::end();
