<?php



Class Point{
    private $absc;
    private $ordn; 

    public function __construct($abscsee , $ordonnee ){
        $this->absc = $abscsee;
        $this->ordn = $ordonnee;
    }

    public function getAbsc(){
        return $this->absc;
    }

    public function getOrd(){
        return $this->ordn;
    }

    public function setAbs($abs){
        $this->absc = $abs;
    }

    public function setOrd($ord){
        $this->ordn = $ord;
    }

    public function Norme($pointB){
        $res1 = pow($pointB->getOrd() - $this->ordn,2);
        $res2 = pow($pointB->getAbsc() - $this->absc , 2);

        return sqrt($res1 + $res2);
    }
}

 $pointA = new Point(1,2);
 $pointB = new Point(5,7);
 echo "Before changing ". '<br/> <br/>' ;
 echo "X a : " . $pointA->getAbsc() . '<br/> <br/>' ;
 echo "Y a : " . $pointA->getOrd() . '<br/> <br/>' ;

//  echo "After changing ". '<br/> <br/>' ;
//  $pointA->setAbs(2);
// $pointA->setOrd(4);
//  echo "X a : " . $pointA->getAbsc() . '<br/> <br/>' ;
//  echo "Y a : " . $pointA->getOrd() . '<br/> <br/>' ;



$norme = $pointA->Norme($pointB);

echo "La norme de a et b : " . $norme ;




//  echo "X b : " . $pointB->getAbsc() . '<br/> <br/>' ;
//  echo "Y b : " . $pointB->getOrd() . '<br/> <br/>' ;
