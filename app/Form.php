<?php

namespace App;

class Form extends HtmlElement
{
    public string $method;
    public string $action;

    /**
     * @var HtmlElement[]
    */
    protected array $elements = [];

    public function __construct(string $method, string $action)
    {
        $this->method = $method;
        $this->action = $action;
    }

    public function addElement(HtmlElement $element)
    {
        
    }

    public function render(): string
    {
        $content = implode(PHP_EOL, array_map(fn($element) => $element->render(), $this->elements));
        return sprintf('<form action="%s" method="%s">%s</form>', $this->action, $this->method, $content);

    }
}