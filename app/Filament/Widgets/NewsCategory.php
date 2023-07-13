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
                        'backgroundColor' => [
                            '#FF6384', // Couleur pour le premier élément
                            '#36A2EB', // Couleur pour le deuxième élément
                            '#FFCE56', // Couleur pour le troisième élément
                            // Ajoutez plus de couleurs selon vos besoins
                        ],
                    ],

                ],

                'labels' => $data->pluck('category.name'),
            ];
    }
}
