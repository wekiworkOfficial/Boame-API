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
  '5e2d8427d38af05dab6238767aa5b76e' => 
  array (
    'query' => 'SELECT * FROM permissions WHERE privilege = :privilege ',
    'bind' => 
    array (
      'privilege' => 'create',
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
  '09ac4697a7b18e2ea21d193934f2d522' => 
  array (
    'query' => 'SELECT * FROM videos_published WHERE videospublishedid = :videospublishedid ',
    'bind' => 
    array (
      'videospublishedid' => '2',
    ),
  ),
  '3d5efce1530b9ae8bb7e0f8225319e43' => 
  array (
    'query' => 'SELECT * FROM video_attached WHERE videoattachedid = :videoattachedid ',
    'bind' => 
    array (
      'videoattachedid' => '3',
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
);
