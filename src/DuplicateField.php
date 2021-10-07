<?php

namespace Jackabox\DuplicateField;

use Illuminate\Database\Eloquent\Model;
use Laravel\Nova\Fields\Field;

class DuplicateField extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'duplicate-field';

    /**
     * @inheritdoc 
     */
    public function __construct($name, $attribute = null, callable $resolveCallback = null)
    {
        parent::__construct(null, null, null);

        $this->onlyOnIndex();
    }
}
