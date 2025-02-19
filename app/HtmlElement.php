<?php

namespace App;

abstract class HtmlElement
{
    abstract public function render(): string;
}