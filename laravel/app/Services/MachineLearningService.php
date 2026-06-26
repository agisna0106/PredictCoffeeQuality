<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

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

    public function predict(array $data): array
    {
        $response = Http::timeout(30)
            ->post('http://127.0.0.1:8000/predict', $data);

        $response->throw();

        return $response->json();
    }
}
