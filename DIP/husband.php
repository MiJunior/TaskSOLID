<?php
class lowRankingMale{
    public function eat(){
        $wife = new Wife();
        $food = $wife->getFood();
        //eat
    }
}
class averageRankingMale{

    private $wife;

    public function __construct($wife){
        $this->wife = $wife;
    }

    public function eat(){
        $food = $this->wife->getFood();
    }
}
class hightRankingMale{

    private $foodProvider;

    public function __construct(IFoodProvaider $foodProvider){
        $this->foodProvaider = $foodProvider;
    }

    public function eat(){
        $food = $this->foodProvider->getFood();
    }
}