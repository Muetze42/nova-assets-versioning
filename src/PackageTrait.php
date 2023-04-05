<?php

namespace NormanHuth\NovaAssetsVersioning;

trait PackageTrait
{
    protected function getHashedName(): string
    {
        if (str_contains($this->name(), '?')) {
            return $this->name();
        }

        $hash = null;
        $manifestFile = dirname($this->path(), 2).'/mix-manifest.json';
        if (file_exists($manifestFile)) {
            $manifest = json_decode(file_get_contents($manifestFile), true);
            if ($manifest) {
                $baseParts = explode('..', $this->path());
                $parts = explode('/', last($baseParts), 3);
                $key = '/'.last($parts);
                if (!empty($key) && !empty($manifest[$key])) {
                    $valueParts = explode('?', $manifest[$key]);
                    if (!empty($valueParts[1])) {
                        $hash = '?'.$valueParts[1];
                    }
                }
            }
        }

        if (!$hash && file_exists($this->path())) {
            $hash = '?id='.md5_file($this->path());
        }

        return $this->name().$hash;
    }
}
