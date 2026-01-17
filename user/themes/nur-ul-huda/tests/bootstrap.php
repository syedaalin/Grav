<?php

declare(strict_types=1);

namespace {
    require_once __DIR__ . '/../vendor/autoload.php';
}

namespace Grav\Common {
    if (!class_exists(__NAMESPACE__ . '\Grav', false)) {
        class Grav implements \ArrayAccess
        {
            public static ?Grav $instance = null;
            public array $container = [];

            public static function instance()
            {
                if (!self::$instance) {
                    self::$instance = new self();
                }
                return self::$instance;
            }

            public function offsetExists($offset): bool
            {
                return isset($this->container[$offset]);
            }
            public function offsetGet($offset): mixed
            {
                return $this->container[$offset] ?? null;
            }
            public function offsetSet($offset, $value): void
            {
                $this->container[$offset] = $value;
            }
            public function offsetUnset($offset): void
            {
                unset($this->container[$offset]);
            }
        }
    }

    if (!class_exists(__NAMESPACE__ . '\Theme', false)) {
        class Theme {}
    }
}

namespace Grav\Common\Config {
    if (!class_exists(__NAMESPACE__ . '\Config', false)) {
        class Config
        {
            public function get($path, $default = null)
            {
                return $default;
            }
        }
    }
}
