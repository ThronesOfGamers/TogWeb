<?php

namespace App\Filament\Widgets;

use App\Models\GamesMembers;
use Filament\Widgets\PieChartWidget;


class GameMembersChart extends PieChartWidget
{
    protected static ?string $heading = 'Members by game';

    protected function getData(): array
    {
        $data = GamesMembers::getMembersByGameCount();

        return [
            'datasets' => [
                [
                    'label' => 'Members',

                    'data' => $data->pluck('member_count'),
                ],
            ],
            'labels' => $data->pluck('games.name'),
        ];
    }
}
