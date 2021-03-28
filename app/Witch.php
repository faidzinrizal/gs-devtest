<?php
require_once("Villager.php");
/**
 * class Witch
 */
class Witch {
    /**
     * function numberOfKill, to execute killing in every year. there has fibonacci logic to get sum of villagers
     * @param int year
     * @return int 
     * @throws int 
     **/
    public function kill($year) {
        $numberOfVictim = 0;
        $victims = [];
        $lastVictim = 0;
        $victim = 1;
        for ($i = 0; $i < $year; $i++) {
            $count = $victim + $lastVictim;
            $victim = $lastVictim;
            $lastVictim = $count;
            $numberOfVictim += $count;
        }

        return $numberOfVictim;
    }
}


?>