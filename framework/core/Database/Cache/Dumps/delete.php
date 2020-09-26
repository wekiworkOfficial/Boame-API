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
  '4e82d13b82261c8086633c4bdb6e275f' => 
  array (
    'query' => 'SELECT * FROM videos_published WHERE videospublishedid = :videospublishedid ',
    'bind' => 
    array (
      'videospublishedid' => '1',
    ),
  ),
  '30a24ed6c4d3f0929d60709639be7c24' => 
  array (
    'query' => 'SELECT * FROM video_attached WHERE videoattachedid = :videoattachedid ',
    'bind' => 
    array (
      'videoattachedid' => '2',
    ),
  ),
  'e4dc7f89567e848d23219620cbbf051b' => 
  array (
    'query' => 'DELETE FROM video_attached WHERE videoattachedid = :videoattachedid ',
    'bind' => 
    array (
      'videoattachedid' => '2',
    ),
  ),
  'ee9e9fd7117ba568ea600e46faec123f' => 
  array (
    'query' => 'DELETE FROM videos_published WHERE videospublishedid = :videospublishedid ',
    'bind' => 
    array (
      'videospublishedid' => '1',
    ),
  ),
  '139aca3fee8c332df7ab2e2cc9e6abc6' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid and reset_code = :reset_code ',
    'bind' => 
    array (
      'accountid' => '1',
      'reset_code' => '9014',
    ),
  ),
  '58a90f147a801a51e8ed54a149392b12' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '1',
    ),
  ),
  '997a1aca4471491f6a339eca61c014c9' => 
  array (
    'query' => 'DELETE FROM password_reset_vault WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'password_reset_vaultid' => '1',
    ),
  ),
);
