<?php

return array (
  'e522c5ec5f4a0b4b01555f9c9a37e4ec' => 
  array (
    'query' => 'SELECT * FROM platforms WHERE platform_name = :platform_name ',
    'bind' => 
    array (
      'platform_name' => 'web',
    ),
  ),
  '083e7026a1cd4b0b754d525b41d1bf72' => 
  array (
    'query' => 'SELECT * FROM permissions WHERE privilege = :privilege ',
    'bind' => 
    array (
      'privilege' => 'delete',
    ),
  ),
  'b97bb3ae80c25f5b3d16f6380ed14772' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '3',
    ),
  ),
  '8dfcafad282dddfea62676aa61dc7789' => 
  array (
    'query' => 'SELECT * FROM navigation WHERE nav_tag = :nav_tag and accounttypeid = :accounttypeid and platformid = :platformid ',
    'bind' => 
    array (
      'nav_tag' => 'knowledge-tag',
      'accounttypeid' => '3',
      'platformid' => '1',
    ),
  ),
  '6fe04305285b60df8f64c9046bf38297' => 
  array (
    'query' => 'SELECT * FROM articles WHERE articleid = :articleid ',
    'bind' => 
    array (
      'articleid' => '1',
    ),
  ),
  '9ee9d9daf56760b5db8ecfed0d6493ac' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE token = :token ',
    'bind' => 
    array (
      'token' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
    ),
  ),
  'b24b7201df36fe4309338f81c6b45726' => 
  array (
    'query' => 'DELETE FROM articles WHERE articleid = :articleid ',
    'bind' => 
    array (
      'articleid' => '1',
    ),
  ),
);
