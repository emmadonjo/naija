<?php


namespace Emmadonjo\Naija;


use Exception;

class State
{
    /**
     * The attributes array.
     *
     * @var array
     */
    protected array $attributes;

    /**
     * Create a new state instance.
     *
     * @param array $attributes
     *
     * @throws Exception
     */
    public function __construct($attributes)
    {
        // Set the attributes
        $this->setAttributes($attributes);
    }

    /**
     * Set the attributes.
     *
     * @param array $attributes
     *
     * @return $this
     */
    public function setAttributes(array $attributes)
    {

        $this->attributes = $attributes;
        return $this;
    }

    /**
     * Get the attributes.
     *
     * @return array|null
     */
    public function getAttributes(): ?array
    {
        return $this->attributes;
    }

    /**
     * Set single attribute.
     *
     * @param string $key
     * @param mixed $value
     *
     * @return $this
     */
    public function set(string $key, mixed $value)
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    /**
     * Get an item from attributes array using "dot" notation.
     *
     * @param string $key
     * @param mixed $default
     *
     * @return mixed
     */
    public function get(string $key = null, mixed $default = null)
    {
        $array = $this->attributes;

        if (is_null($key)) {
            return $array;
        }

        if (array_key_exists($key, $array)) {
            return $array[$key];
        }

        foreach (explode('.', $key) as $segment) {
            if (is_array($array) && array_key_exists($segment, $array)) {
                $array = $array[$segment];
            } else {
                return $default;
            }
        }

        return $array;
    }

    /**
     * Get the common name.
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->get('name.common') ?: $this->get('name');
    }

    /**
     * Get the official name.
     *
     * @return string|null
     */
    public function getOfficialName(): ?string
    {
        return $this->get('name.official') ?: $this->get('official_name');
    }


    public function getShortCode(): ?string
    {
        return $this->get('name.short_code') ?: $this->get('short_code');
    }


    /**
     * Get the native names.
     *
     * @return array|null
     */
    public function getCapital(): ?string
    {
        return $this->get('capital');
    }


    /**
     * Get the demonym.
     *
     * @return string|null
     */
    public function getGeoPoliticalZone(): ?string
    {
        return $this->get('political_zone');
    }

    /**
     *  Retrieve the date created
     * @return string|null
     * @return mixed
     */
    public function getDateCreated(): ?string
    {

        return $this->get('date_created');
    }


    public function getPopulation(): array
    {
        return $this->get('population');
    }

    public function getWebsite(): ?string
    {
        return $this->get('website');
    }

    public function getLogo(): ?string
    {
        return $this->get('logo');
    }

    public function getFlag(): ?string
    {
        return $this->get('flag');
    }


    public function getDemonym(): ?string
    {
        return $this->get('demonym');

    }

    public function getNickName(): ?string
    {
        return $this->get('nick_name');

    }


    public function getLgas(): ?array
    {
        return $this->get('lga');
    }


    public function getLanguages(): ?array
    {
        return $this->get('languages');
    }

    public function getAreas(): ?array
    {
        $lgas = $this->get('lga') ?? [];

        $areas = [];

        foreach($lgas as $lga) {
            if (empty($lga['areas'])) {
                continue;
            }

            $areas = array_merge($areas, array_filter($lga['areas']));
        }

        // sort areas in ascending order
        asort($areas);

        return array_filter($areas);
    }
}
