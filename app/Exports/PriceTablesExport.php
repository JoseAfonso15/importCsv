<?php

namespace App\Exports;

use App\Models\Price_table;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class PriceTablesExport implements FromQuery, WithHeadings, WithMapping
{
    use Exportable;
     public function query()
    {
        return Price_table::query();
    }

    public function headings(): array
    {
        return [
            'from_postcode',
            'to_postcode',
            'from_weight',
            'to_weight',
            'cost',
            'cost1',
            'cost2',
            'cost3'
        ];
    }
 
    public function map($price_table): array
    {
        return [
            $price_table->from_postcode,
            $price_table->to_postcode,
            $price_table->from_weight,
            $price_table->to_weight,
            $price_table->cost,
            $price_table->cost1,
            $price_table->cost2,
            $price_table->cost3
        ];
    }

    public function fields(): array
    {
        return [
            'from_postcode',
            'to_postcode',
            'from_weight',
            'to_weight',
            'cost',
            'cost1',
            'cost2',
            'cost3'
        ];
    }
}
