<?php
use function cli\line;
use function cli\prompt;
namespace Php\Project\Lvl1\Cli
function greeting()
{
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
}
