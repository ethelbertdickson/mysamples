<?php

class Family{
    public $father = 'EL';
    public $mother = 'Clare';
    protected $daugher1 = 'Ellen';
    protected $daughter2 = 'Elexie';

    function whatPeopleSee(){
        echo $this->father;
        echo PHP_EOL;
        echo $this->mother;
        echo PHP_EOL;
        echo $this->daugher1;
        echo PHP_EOL;
        echo $this->daughter2;
    }

}

$profile = new Family();

//print_r ($profile);

echo $profile->whatPeopleSee();