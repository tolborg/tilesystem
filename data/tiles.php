<?php

$tiles = array(
  array(
    "color" => "#3498db",
    "group_span" => array(
      "default" => "3/3",
      "small" => "2/3",
    ),
    "item_span" => array(
      "default" => "1/2",
      "small" => "1/2",
    ),
    "items" => array(
      array(
        "name" => "Tile A1",
      ),
      array(
        "name" => "Tile A2",
      ),
      array(
        "name" => "Tile A3",
      ),
      array(
        "name" => "Tile A4",
      ),
    ),
  ),
  array(
    "color" => "#e67e22",
    "group_span" => array(
      "default" => "1/2",
      "small" => "1/3",
    ),
    "item_span" => array(
      "default" => "1/1",
      "small" => "1/1",
    ),
    "items" => array(
      array(
        "name" => "Tile B1",
      ),
    ),
  ),
  array(
    "color" => "#16a085",
    "group_span" => array(
      "default" => "1/2",
      "small" => "1/3",
    ),
    "item_span" => array(
      "default" => "1/1",
      "small" => "1/1",
    ),
    "items" => array(
      array(
        "name" => "Tile C1",
      ),
    ),
  ),
  array(
    "color" => "#c0392b",
    "group_span" => array(
      "default" => "3/3",
      "small" => "2/3",
    ),
    "item_span" => array(
      "default" => "1/2",
      "small" => "1/2",
    ),
    "items" => array(
      array(
        "name" => "Tile D1",
      ),
      array(
        "name" => "Tile D2",
      ),
    ),
  ),
  array(
    "color" => "#f1c40f",
    "group_span" => array(
      "default" => "1/2",
      "small" => "1/3",
    ),
    "item_span" => array(
      "default" => "1/1",
      "small" => "1/1",
    ),
    "items" => array(
      array(
        "name" => "Tile D1",
      ),
    ),
  ),
);


foreach($tiles as $tile_group_key => $tile_group) {

  $tiles[$tile_group_key]['group_span_string'] = "";
  $tiles[$tile_group_key]['item_span_string'] = "";

  foreach ($tile_group['group_span'] as $attr => $value) {
    $tiles[$tile_group_key]['group_span_string'] .= 'dsb-group-span-' . $attr . '="' . $value . '" ';
  }

  foreach ($tile_group['item_span'] as $attr => $value) {
    $tiles[$tile_group_key]['item_span_string'] .= 'dsb-item-span-' . $attr . '="' . $value . '" ';
  }

}





