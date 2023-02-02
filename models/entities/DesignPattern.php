<?php

interface RegimeInterface {
  public function mange();
}


class Carnivore implements RegimeInterface {
  public function mange() {
    echo "cet animal mange de la viande et d'autres animaux potentiellement,
    gare aux occupants du chenil !";
  }
}
class Herbivore implements RegimeInterface {
  public function mange() {
    echo "celui-là ne mange que des végétaux";
  }
}


?>
