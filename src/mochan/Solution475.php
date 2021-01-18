<?php

namespace mochan;

class Solution475
{

    /**
     * @param Integer[] $houses
     * @param Integer[] $heaters
     * @return Integer
     */
    function findRadius($houses, $heaters)
    {
        sort($houses);
        sort($heaters);

        $find_heater = function ($house) use ($heaters) {
            $left = 0;
            $right = count($heaters) - 1;
            while ($left <= $right) {
                $mid = intdiv($left + $right, 2);
                if ($heaters[$mid] == $house) {
                    return $mid;
                } elseif ($heaters[$mid] < $house) {
                    $left = $mid + 1;
                } else {
                    $right = $mid - 1;
                }
            }
            return $left;
        };

        $radius = 0;

        for ($i = 0; $i < count($houses); $i++) {
            $house = $houses[$i];
            $heater_index = $find_heater($house);

            $left_dist_fn = function () use ($heater_index, $heaters, $house) {
                return $house - $heaters[$heater_index - 1];
            };
            $right_dist_fn = function () use ($heater_index, $heaters, $house) {
                return $heaters[$heater_index] - $house;
            };

            if ($heater_index == 0) {
                $heater_dist = $right_dist_fn();
            } elseif ($heater_index == count($heaters)) {
                $heater_dist = $left_dist_fn();
            } else {
                $heater_dist = min($left_dist_fn(), $right_dist_fn());
            }

            $radius = max($radius, $heater_dist);
        }

        return $radius;
    }
}
