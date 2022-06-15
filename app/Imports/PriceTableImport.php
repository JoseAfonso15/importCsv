<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Price_table;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class PriceTableImport implements ToModel, WithHeadingRow, WithChunkReading
{
    /**
    * @param Collection $collection
    */
    
    
    public function __construct()
    {
       
    }
    
    public function collection(Collection $collection)
    {
        //
    }

    public function chunkSize(): int {
         return 5000;
    }

   public function model(array $row)
    {
        return new Price_table([
            'from_postcode' => $row['from_postcode'],
            'to_postcode' => $row['to_postcode'],
            'from_weight' => $row['from_weight'],
            'to_weight' => $row['to_weight'],
            'cost' => $row['cost'],
            'cost1' => $row['cost1'],
            'cost2' => $row['cost2'],
            'cost3' => $row['cost3']
        ]);
    }

}
