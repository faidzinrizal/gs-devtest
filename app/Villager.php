<?php
/**
 * undocumented class
 */
class Villager {
    public $deathAge;
    public $deathYear;

    /**
     * construct
     *
     * public function contstruct to set default value on attributes
     *
     * @param String $name villager name
     * @param Int $birth year of birth
     **/
    public function __construct($deathAge = 0, $deathYear = 0)
    {
        $this->deathAge = $deathAge;
        $this->deathYear = $deathYear;
    }


    /**
     * getBornYear
     *
     * function to get born year of a villager
     *
     * @return int bornYeer
     * @throws conditon
     **/
    public function getBornYear()
    {
        if ($this->deathAge < 0 || $this->deathYear < 0) {
            return -1;
        }
        $bornYear = intval($this->deathYear) - intval($this->deathAge);
        if ($bornYear >= 0) {
            return $bornYear;
        } else {
            return -1;
        }
    }
}


?>