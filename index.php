<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    interface Actity{
      public function action();
      public function ride();
      public function toggleLight();
      public function beep();
    }
    //МАШИНЫ
    class Auto implements Actity{
      private $light=false;

      public function action(){
        echo "Запускаем турбо";
      }
      public function ride(){
        echo "Едем";
      }
      public function toggleLight(){
        if($this->light){
          $this->light=false;
          echo "Выключили свет";
        }else{
          $this->light=true;
          echo "Включили свет";
        }
      }
      public function beep(){
        echo "Бибип";
      }
    }
    //ПОДКЛАССЫ МАШИН
    class Buggy extends Auto{
      private $skin="skin1";
      private $wheels=4;
      private $maxSpeed=200;
      private $heath=150;
    }
    class MegaBuggy extends Auto{
      private $skin="skin2";
      private $wheels=6;
      private $maxSpeed=220;
      private $heath=180;
    }
    //ТАНК
    class Tank implements Actity{
      private $light=false;
      public function action(){
        echo "Выпускаем лазерный луч";
      }
      public function ride(){
        echo "Едем";
      }
      public function toggleLight(){
        if($this->light){
          $this->light=false;
          echo "Выключили свет";
        }else{
          $this->light=true;
          echo "Включили свет";
        }
      }
      public function beep(){
        echo "Бибип";
      }
    }
    //ПОДКЛАССЫ ТАНКОВ
    class T43 extends Tank{
      private $skin="skin2";
      private $wheels=10;
      private $maxSpeed=80;
      private $heath=450;
    }
    class SAU extends Tank{
      private $skin="skin1";
      private $wheels=10;
      private $maxSpeed=80;
      private $heath=400;
    }
    // БУЛЬДОЗЕРЫ
    class Buldozer implements Actity{
      private $light=false;
      public function action(){
        echo "Бьем ковшом";
      }
      public function ride(){
        echo "Едем";
      }
      public function toggleLight(){
        if($this->light){
          $this->light=false;
          echo "Выключили свет";
        }else{
          $this->light=true;
          echo "Включили свет";
        }
      }
      public function beep(){
        echo "Бибип";
      }
    }
    //ПОДКЛАССЫ БУЛЬДОЗЕРОВ
    class bigBuldozer extends Buldozer{
      private $skin="skin1";
      private $wheels=6;
      private $maxSpeed=100;
      private $heath=350;
    }
    class smallBuldozer extends Buldozer{
      private $skin="skin2";
      private $wheels=4;
      private $maxSpeed=120;
      private $heath=300;
    }

  ?>
</body>
</html>