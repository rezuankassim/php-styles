<?php

namespace Rez;

use PhpCsFixer\Config;
use PhpCsFixer\Finder; 

function styles(Finder $finder, array $rules = []): Config {
    $project_path = getcwd();
    $finder = $finder
        ->in([
            $project_path . '/app',
            $project_path . '/config',
            $project_path . '/database',
            $project_path . '/resources',
            $project_path . '/routes',
            $project_path . '/tests',
        ])
        ->name('*.php')
        ->notName('*.blade.php')
        ->ignoreDotFiles(true)
        ->ignoreVCS(true);
    
    return Config::create()
        ->setFinder($finder)
        ->setRules($rules)
        ->setRiskyAllowed(true)
        ->setUsingCache(true);
}