<?php

namespace App\Filament\Widgets;

use App\Models\News;
use Filament\Widgets\PieChartWidget;

class NewsCategory extends PieChartWidget
{

    protected static ?string $heading = "New's by Category";
    protected function getData(): array
    {
        $data = News::getNewsByCategoryCount();
            return [
                'datasets' => [
                    [
                        'label' => 'Category',

                        'data' => $data->pluck('news_count'),
                    ],
                ],
                'labels' => $data->pluck('category.name'),
            ];
    }
}
