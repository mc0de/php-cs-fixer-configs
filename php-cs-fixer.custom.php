<?php

$finder = PhpCsFixer\Finder::create()
        ->exclude('vendor')
        ->in(__DIR__);

$config = new PhpCsFixer\Config();
$config
    ->setRiskyAllowed(false)
    ->setRules([
        '@PHP80Migration'        => true,
        '@Symfony'               => true,
        'binary_operator_spaces' => [
            'operators' => [
                '=>' => 'align_single_space_minimal',
                '='  => 'align_single_space_minimal',
            ],
        ],
        'concat_space'             => ['spacing' => 'one'],
        'no_extra_blank_lines'     => ['tokens' => ['extra']],
        'yoda_style'               => false,
        'single_blank_line_at_eof' => true,
        'no_unused_imports'        => false,
    ])
    ->setFinder($finder);

return $config;
