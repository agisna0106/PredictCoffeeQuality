<?php

namespace App\Services;

use Illuminate\Support\Collection;

class MachineLearningService
{
    protected string $path;

    public function __construct()
    {
        $this->path = storage_path('app/ml');
    }

    public function getOptions(): array
    {
        return json_decode(
            file_get_contents($this->path . '/options.json'),
            true
        );
    }

    public function getStatistics(): array
    {
        return json_decode(
            file_get_contents($this->path . '/statistics.json'),
            true
        );
    }

    /**
     * Mengubah list menjadi format
     * value => label
     */
    public function getSelectOptions(string $key): array
    {
        $options = $this->getOptions();

        if (! isset($options[$key])) {
            return [];
        }

        return collect($options[$key])
            ->filter()
            ->sort()
            ->mapWithKeys(fn ($item) => [
                $item => $item
            ])
            ->toArray();
    }
}
