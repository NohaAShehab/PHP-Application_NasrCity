<?php

Interface Transportation {
    # everything inside the interface is public
    const pi =3.14;
     function setModel($model);
     function setYear($car);
}

abstract class car implements  Transportation{
    function setModel($model=""){

    }

}
class Bus implements Transportation{
    public function setModel($model){}
    public function setYear($car){}
}

echo "tee";