<?php

namespace App\Forms;
use LaraForm\LaraForm;

class TestForm extends Laraform
{
  public function schema() {
    return [
      'hello_world' => [
        'type' => 'text',
        'label' => 'Hello',
        'default' => 'World'
      ]
    ];
  }

  public function buttons() {
    return [[
      'label' => 'Submit'
    ]];
  }

    /**
     */
    public function __construct() {
    }
}
