<?php

namespace Math;

class Pi
{
    /**
     * Calculate pi using the Leibniz formula
     *
     * 1 - 1/3 + 1/5 - 1/7 + 1/9 - ... = pi/4
     *
     * https://en.wikipedia.org/wiki/Leibniz_formula_for_%CF%80
     *
     * @param $iterations Number of iterations for successive approximation
     *
     * @return float|int
     */
    public static function pi($iterations)
    {
        $pi = 4;
        $top = 4;
        $bottom = 3;
        $minus = true;

        for ($i = 0; $i < $iterations; $i++) {

            // calculate the next value in the series
            $value = $top / $bottom;

            // add or substract this value from the series per the Leibniz formula
            if ($minus) {
                $pi = $pi - $value;
            } else {
                $pi = $pi + $value;
            }

            // if we added, subtract next, but if we've subtracted, add next
            $minus = !$minus;

            // increase the denominator of the next value in the series
            $bottom += 2;
        }
        return $pi;
    }
}
