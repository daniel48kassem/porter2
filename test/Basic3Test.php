<?php

namespace markfullmer\porterstemmer;

/**
 * Test words are stemmed correctly.
 */
class Basic3Test extends \PHPUnit_Framework_TestCase {

  /**
   * Provides data.
   */
  public function basicDataProvider() {
    $words = retrieve_stem_words(10000, 5000);
    $tests = array();
    foreach ($words as $key => $values) {
      $tests[$key]['word'] = $values[0];
      $tests[$key]['expected'] = $values[1];
    }
    return $tests;
  }

  /**
   * Test assertions.
   *
   * @dataProvider basicDataProvider
   */
  public function testBasic3($word, $expected) {
    $stem = Porter2::stem($word);
    $this->assertEquals($expected, $stem);
  }

}