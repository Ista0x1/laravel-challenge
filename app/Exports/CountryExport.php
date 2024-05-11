<?php

namespace App\Exports;

use App\Models\Country;
use Maatwebsite\Excel\Concerns\FromCollection;

class CountryExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Country::select('id','name' ,'created_at')->get();
    }
    public function headings(): array
    {
        return ["ID", "Name", "Created At"];
    }
}
