<?php
 namespace Predis\Command; class HyperLogLogAdd extends Command { public function getId() { return 'PFADD'; } protected function filterArguments(array $arguments) { return self::normalizeVariadic($arguments); } } 