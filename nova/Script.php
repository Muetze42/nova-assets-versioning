<?php

namespace Laravel\Nova;

use NormanHuth\NovaAssetsVersioning\PackageTrait;

class Script extends Asset
{
    use PackageTrait;

    /**
     * Get the Asset URL.
     *
     * @return string
     */
    public function url(): string
    {
        if (!$this->isRemote()) {
            return '/nova-api/scripts/'.$this->getHashedName();
        }

        return $this->path;
    }

    /**
     * Get the response headers for the asset.
     *
     * @return array<string, string>
     */
    public function toResponseHeaders(): array
    {
        return [
            'Content-Type' => 'application/javascript',
        ];
    }
}
