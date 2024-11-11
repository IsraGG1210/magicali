<?php
namespace MailPoetVendor\Twig;
if (!defined('ABSPATH')) exit;
use MailPoetVendor\Twig\Node\Expression\TestExpression;
final class TwigTest
{
 private $name;
 private $callable;
 private $options;
 private $arguments = [];
 public function __construct(string $name, $callable = null, array $options = [])
 {
 $this->name = $name;
 $this->callable = $callable;
 $this->options = \array_merge(['is_variadic' => \false, 'node_class' => TestExpression::class, 'deprecated' => \false, 'deprecating_package' => '', 'alternative' => null, 'one_mandatory_argument' => \false], $options);
 }
 public function getName() : string
 {
 return $this->name;
 }
 public function getCallable()
 {
 return $this->callable;
 }
 public function getNodeClass() : string
 {
 return $this->options['node_class'];
 }
 public function setArguments(array $arguments) : void
 {
 $this->arguments = $arguments;
 }
 public function getArguments() : array
 {
 return $this->arguments;
 }
 public function isVariadic() : bool
 {
 return (bool) $this->options['is_variadic'];
 }
 public function isDeprecated() : bool
 {
 return (bool) $this->options['deprecated'];
 }
 public function getDeprecatingPackage() : string
 {
 return $this->options['deprecating_package'];
 }
 public function getDeprecatedVersion() : string
 {
 return \is_bool($this->options['deprecated']) ? '' : $this->options['deprecated'];
 }
 public function getAlternative() : ?string
 {
 return $this->options['alternative'];
 }
 public function hasOneMandatoryArgument() : bool
 {
 return (bool) $this->options['one_mandatory_argument'];
 }
}