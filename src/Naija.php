<?php

namespace Emmadonjo\Naija;

use Closure;
use Emmadonjo\Naija\State;
use Emmadonjo\Naija\Exception\StateException;

class Naija
{
    /**
     * the states
     * @var array
     */
    protected static array $states;


    /**
     * Loads the specified state's data
     * @param string $name
     * @return State
     * @throws StateException
     */
    public static function state(string $name): State
    {
        $name = static::formatStateNameToKey($name);
        if (!isset(self::$states[$name])) {
            self::$states[$name] = json_decode(static::getFile(__DIR__ . "/../resources/data/$name.json"), true);
        }
        return new State(static::$states[$name]);
    }


    /**
     * get the minified data for all the states
     *
     * @return array
     * @throws StateException
     */
    public static function states(): array
    {
        static::$states['states'] = json_decode(static::getFile(__DIR__ . "/../resources/data/states.json"), true);

        return static::$states['states'];
    }

    /**
     * Filter states conditionally
     * @param string $key
     * @param string $operator
     * @param string|int|null $value
     *
     * @return array
     * @throws StateException
     */
    public static function where(string $key, string $operator, string|int $value = null): array
    {
        if (func_num_args() === 2) {
            $value = $operator;
            $operator = '=';
        }

        if (! isset(static::$states['states'])) {
            static::$states['states'] = json_decode(static::getFile(__DIR__.'/../resources/data/states.json'), true);
        }

        return static::filter(static::$states['states'], static::operatorForWhere($key, $operator, $value));
    }

    /**
     * Get an operator checker callback.
     *
     * @param string $key
     * @param string $operator
     * @param mixed  $value
     *
     * @return Closure
     */
    protected static function operatorForWhere(string $key, string $operator, mixed $value): Closure
    {
        return function ($item) use ($key, $operator, $value) {
            $retrieved = static::get($item, $key);

            switch ($operator) {
                default:
                case '=':
                case '==':  return $retrieved == $value;
                case '!=':
                case '<>':  return $retrieved != $value;
                case '<':   return $retrieved < $value;
                case '>':   return $retrieved > $value;
                case '<=':  return $retrieved <= $value;
                case '>=':  return $retrieved >= $value;
                case '===': return $retrieved === $value;
                case '!==': return $retrieved !== $value;
            }
        };
    }

    /**
     * Run a filter over each of the items.
     *
     * @param array         $items
     * @param callable|null $callback
     *
     * @return array
     */
    protected static function filter(array $items, callable $callback = null): array
    {
        if ($callback) {
            return array_filter($items, $callback, ARRAY_FILTER_USE_BOTH);
        }

        return array_filter($items);
    }

    /**
     * Get an item from an array or object using "dot" notation.
     *
     * @param mixed        $target
     * @param string|array|null $key
     * @param mixed        $default
     *
     * @return mixed
     */
    protected static function get(mixed $target, string|array|null $key = null, mixed $default = null): mixed
    {
        if (is_null($key)) {
            return $target;
        }

        $key = is_array($key) ? $key : explode('.', $key);

        while (($segment = array_shift($key)) !== null) {
            if ($segment === '*') {
                if (! is_array($target)) {
                    return $default instanceof Closure ? $default() : $default;
                }

                $result = static::pluck($target, $key);

                return in_array('*', $key) ? static::collapse($result) : $result;
            }

            if (is_array($target) && array_key_exists($segment, $target)) {
                $target = $target[$segment];
            } elseif (is_object($target) && isset($target->{$segment})) {
                $target = $target->{$segment};
            } else {
                return $default instanceof Closure ? $default() : $default;
            }
        }

        return $target;
    }

    /**
     * Pluck an array of values from an array.
     *
     * @param array             $array
     * @param string|array      $value
     * @param string|array|null $key
     *
     * @return array
     */
    protected static function pluck(array $array, string|array $value, string|array|null $key = null): array
    {
        $results = [];

        $value = is_string($value) ? explode('.', $value) : $value;

        $key = is_null($key) || is_array($key) ? $key : explode('.', $key);

        foreach ($array as $item) {
            $itemValue = static::get($item, $value);

            // If the key is "null", we will just append the value to the array and keep
            // looping. Otherwise, we will key the array using the value of the key we
            // received from the developer. Then we'll return the final array form.
            if (is_null($key)) {
                $results[] = $itemValue;
            } else {
                $itemKey = static::get($item, $key);

                $results[$itemKey] = $itemValue;
            }
        }

        return $results;
    }

    /**
     * Collapse an array of arrays into a single array.
     *
     * @param array $array
     *
     * @return array
     */
    protected static function collapse(array $array): array
    {
        $results = [];
        foreach ($array as $values) {
            if (! is_array($values)) {
                continue;
            }
            $results = array_merge($results, $values);
        }

        return $results;
    }

    /**
     * retrieves the data in the file of the specified path.
     *
     * @param mixed $filePath
     *
     * @throws StateException
     * @return bool|string
     */
    protected static function getFile(mixed $filePath): bool|string
    {
        if (!file_exists($filePath)) {
            throw StateException::unknownStateInformationException();
        }
        return file_get_contents($filePath);
    }

    /**
     * @param string $name
     * @return string
     */
    private static function formatStateNameToKey(string $name): string
    {
        $name = strtolower(trim($name));
        return str_replace([' ', '-'], '_', $name);
    }
}
