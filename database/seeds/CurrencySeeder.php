<?php

use App\Currency;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $htg = Currency::where('abbreviation', 'HTG')->first();

        if ($htg == null) {
            $htg = new Currency();
            $htg->abbreviation = 'HTG';
            $htg->sale_rate = 1;
            $htg->purchase_rate = 1;
            $htg->date = Carbon::today()->toDateString();
            $htg->editable = false;
            $htg->is_reference = true;
            $htg->save();
        }

        $usd = Currency::where('abbreviation', 'USD')->first();

        if ($usd == null) {
            $usd = new Currency();
            $usd->abbreviation = 'USD';
            $usd->sale_rate = 92;
            $usd->purchase_rate = 95;
            $usd->date = Carbon::today()->toDateString();
            $usd->editable = true;
            $usd->is_reference = false;
            $usd->save();

        }

        $euro = Currency::where('abbreviation', 'EURO')->first();

        if ($euro == null) {
            $euro = new Currency();
            $euro->abbreviation = 'EURO';
            $euro->sale_rate = 98;
            $euro->purchase_rate = 100;
            $euro->date = Carbon::today()->toDateString();
            $euro->editable = true;
            $euro->is_reference = false;
            $euro->save();
        }


    }
}
