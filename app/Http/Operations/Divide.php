<?php

namespace App\Http\Operations;

use Illuminate\Support\Facades\Log;


class Divide
{
    /**
     * Function to calculate division.
     *
     * @param float $value1
     * @param float $value2
     *
     * @return float|int
     */
    public function calculate($value1, $value2)
    {
        Log::info(
            'Executing division .',
            [
                'input_1' => $value1,
                'input_2'=>$value2,
            ]
        );

        return $value1 / $value2;
    }
}
