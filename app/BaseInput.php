<?php

namespace App;

abstract class BaseInput extends HtmlElement
{
    public string $name;
    public string $label;
    public string $value;
    public function __construct(string $name, string $label = '', string $value = '')
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
    }

    public function render(): string
    {
        return sprintf('<div>
                <label>%s</label><br>
                %s
                </div>', $this->label, $this->renderInput());
    }

    abstract public function renderInput(): string;

}