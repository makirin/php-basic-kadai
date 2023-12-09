<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編-kadai016</title>
 </head>
 
 <body>
    <p>
        <?php
            // クラスを定義する
            class Food {
                // プロパティを定義する                        
                private $name;
                private $price;
    
                // コンストラクタを定義する
                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }

                public function show_price() {
                    echo $this->price;
                }
                
            }
            
            class Animal {
                private $name;
                private $height;
                private $Weight;

                public function __construct(string $name, int $height, int $Weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $Weight;
                }

                public function show_height() {
                    echo $this->height;
                }
            }

            // インスタンス化する
            $food = new Food('potato', 250);
            $animal = new Animal('dog', 60, 5000);

            // インスタンスの各プロパティの値を出力する
            print_r($food);
            echo '<br>';
            print_r($animal);
            echo '<br>';
            $food->show_price();
            echo '<br>';
            $animal->show_height();
        ?>
    </p>
</body>

</html>