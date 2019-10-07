<?php

namespace Matsuvel;

class TemplateFactory
{
    /** @var string テンプレートのベースディレクトリ */
    private $base_dir;

    /**
     * TemplateFactory constructor.
     * @param string $base_dir
     */
    public function __construct(string $base_dir)
    {
        $this->base_dir = rtrim($base_dir, '\\/');
    }

    /**
     * @param string $name
     * @param array $params
     * @return Template
     */
    public function create(string $name, array $params)
    {
        return new Template("{$this->base_dir}/{$name}.phtml", $params);
    }
}