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
  '3f8acce4bf7d3aac92d8705fac099b82' => 
  array (
    'query' => 'UPDATE video_attached SET video_caption = :video_caption  WHERE videoattachedid = :videoattachedid ',
    'bind' => 
    array (
      'video_caption' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
      'videoattachedid' => '3',
    ),
  ),
  '914703894118d5abb999cff134feec3a' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'processing',
      'jobid' => '3',
    ),
  ),
  'dd240fca674258124a9f7729497ddc18' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name ',
    'bind' => 
    array (
      'job_name' => 'send-mail-to-helloamadiify@gmail.com',
    ),
  ),
  '53f6c4084cdccba71f3e64cc0122f4ce' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1600472585',
      'jobid' => '3',
    ),
  ),
  '8c58290f724971f643594c0c71a0fe75' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and time_queued = :time_queued ',
    'bind' => 
    array (
      'job_name' => 'send-mail-to-helloamadiify@gmail.com',
      'time_queued' => 0,
    ),
  ),
  '1faa49d86e3d917d7e28988709405e78' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status and time_queued = :time_queued ',
    'bind' => 
    array (
      'job_name' => 'send-mail-to-helloamadiify@gmail.com',
      'job_status' => 'pending',
      'time_queued' => 0,
    ),
  ),
  '53b3d7a5d2aeedc0cbe3824134c9baaf' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'password_reset_vaultid' => '3',
    ),
  ),
  '2335288248e16f0617db9b0563e2303e' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '1',
    ),
  ),
  '317424ee338f70c06002aa82331f5427' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'send-mail-to-helloamadiify@gmail.com',
      'job_status' => 'pending',
    ),
  ),
  '82ecc95d85524a2b79dca3f1c90b5055' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'processing',
      'jobid' => '9',
    ),
  ),
  '84285d29c65418f131a1315cc229b551' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status or job_status = :job_status0 ',
    'bind' => 
    array (
      'job_name' => 'send-mail-to-helloamadiify@gmail.com',
      'job_status' => 'pending',
      'job_status0' => 'processing',
    ),
  ),
  'f595e4213724868da6cb015a0a0aedbd' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1600475216',
      'jobid' => '9',
    ),
  ),
  '207e801d22aecea7a4bf63293e675578' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'processing',
      'jobid' => '10',
    ),
  ),
  '720ed1264a54c90534312a546eda9669' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1600475389',
      'jobid' => '10',
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
  '5c5beb8e136b13d4d104948384ff50d2' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$2WtZbwTDZlLcZ7oTrTZlceW6RRPjVe/KTdBwTzMIb9YKyVUphgEVu',
      'password_salt' => 'salt_16fa84e8d2a97a493456c59ec68087b7f756742c',
    ),
  ),
  '6f9cccc3db4d76377a53d5aabdeccb92' => 
  array (
    'query' => 'SELECT * FROM permissions WHERE privilege = :privilege ',
    'bind' => 
    array (
      'privilege' => 'edit',
    ),
  ),
  '337d346bda6ee250f613d6df6212093a' => 
  array (
    'query' => 'SELECT * FROM navigation WHERE nav_tag = :nav_tag and accounttypeid = :accounttypeid and platformid = :platformid ',
    'bind' => 
    array (
      'nav_tag' => 'volun-tag',
      'accounttypeid' => '3',
      'platformid' => '1',
    ),
  ),
  '794e97ed3d5b65492542bbf18f47bad3' => 
  array (
    'query' => 'SELECT * FROM volunteers WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '1',
    ),
  ),
  '70fa2af25b1671b3b9c8e1521dc791c6' => 
  array (
    'query' => 'UPDATE volunteers SET comment = :comment , date_approved = :date_approved , approved = :approved , approved_by = :approved_by  WHERE volunteerid = :volunteerid ',
    'bind' => 
    array (
      'comment' => 'has an intresting personality',
      'date_approved' => '1600481858',
      'approved' => '1',
      'approved_by' => '3',
      'volunteerid' => '1',
    ),
  ),
  '949893f3a1ad04a6376b62703daaf5a2' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE email = :email or telephone = :telephone ',
    'bind' => 
    array (
      'email' => '08029982122',
      'telephone' => '',
    ),
  ),
  '3c46a5b48b39bc19cf7d849bae3f04de' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '1',
    ),
  ),
  '270685148b1266c4a9b064a92b1ecaff' => 
  array (
    'query' => 'SELECT * FROM password_hash WHERE authenticationid = :authenticationid ',
    'bind' => 
    array (
      'authenticationid' => '1',
    ),
  ),
  'a0c775b4d992db4a7454858cf844a598' => 
  array (
    'query' => 'SELECT * FROM navigation WHERE platformid = :platformid and accounttypeid = :accounttypeid ',
    'bind' => 
    array (
      'platformid' => '1',
      'accounttypeid' => '5',
    ),
  ),
  'c1f728bc22e2282214716a3af9b3186c' => 
  array (
    'query' => 'SELECT * FROM platforms WHERE platformid = :platformid ',
    'bind' => 
    array (
      'platformid' => '2',
    ),
  ),
  '2a81e221e3b8813d2a620194526da5ec' => 
  array (
    'query' => 'SELECT * FROM navigation WHERE platformid = :platformid and accounttypeid = :accounttypeid ',
    'bind' => 
    array (
      'platformid' => '2',
      'accounttypeid' => '5',
    ),
  ),
  '9f897dd4cdc4b897fea7be0c224a3b06' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$Xq0wTwtL9PfjPQjiYZFui.//Um7BJ0xKkjmqIcWKQNHFs2p.0Bs/i',
      'password_salt' => 'salt_626cb309d464066ac1fd143a142d18eb8f8ddf28',
      'passwordhashid' => '1',
    ),
  ),
  'af46b3e6986d16768b8feb3ea02b25a3' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$kKaAbXg2I/44jZsYGvn0gu06dPHhfkd2P5qTvsTdHTW9deZCOqpA2',
      'password_salt' => 'salt_fdef552923903b8d51d739a1e59c910f8c481af4',
      'passwordhashid' => '1',
    ),
  ),
  '0daf9848d16d48e4302a5063109570f4' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$AQ7F6m4yRG1Y365GVEYHPOo3IHdc6t9hJoAKAte8FzqYJ4gmlMztG',
      'password_salt' => 'salt_91c2f403edcee58eedac54958e08459cbfae4200',
      'passwordhashid' => '1',
    ),
  ),
  '30daf4918ceb2a29cfb201c6df6e4103' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$YDsqzM6b0dXFGqYWVYfX1OpEqHHdo4epGgS7GxCKHzkkuTjjZQu1q',
      'password_salt' => 'salt_3d0b39311653b62c551f42b6fd16dde1d5ae817d',
      'passwordhashid' => '1',
    ),
  ),
  '149c046437905e14848030d81a97d3a2' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$LhPNtXZLseEelKMj7lRH9ujs3yFqGXJuJ7fsarpU.tnvnA4QqSqcm',
      'password_salt' => 'salt_a2c8cb51d72135f74f02b7ca35d16d9905ce9e1e',
      'passwordhashid' => '1',
    ),
  ),
  '0a74f44c9bdbf6fe706a7a7520f26e83' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$omq5/dyGSJrhUdIpjqI0O.9GDY2ybPoMUkNC8J7qJX6lZ71NGitvK',
      'password_salt' => 'salt_e9ca493946b29f7d848805e4dacd9ceccdc44234',
    ),
  ),
  'f40a12c7852bd97138fed080a7952b77' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '79657fb1e12954628dd73185d59fa8cd71be6948',
      'last_seen' => '1600486984',
    ),
  ),
  'a1c9ab50b6c88eec8104bd9fc7f16b07' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$REeFqaFFq6Z8XgEtrMCTT.gdyBeZ.xPgs/x4aRz3pMUPS.rMdMzpu',
      'password_salt' => 'salt_8e688258310a772a034142a35e0d71d382078e09',
    ),
  ),
  '85acfff0e09d1e1d024f2786daf20e06' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => 'b504b2e83a8696d59a4ecf7a4d66d469b09151c1',
      'last_seen' => '1600487136',
    ),
  ),
  '6cb7fa3c011d00f95c4dda0b6bde147a' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$lNZPjD6v4NtmsM8.IuKmMu0cvp6yRVaqpw19pH/jC2I3kkYLqaCpW',
      'password_salt' => 'salt_06e02b43be9c1fef01ef197ee75a8324bf2eb8a3',
    ),
  ),
  '6f792356e8d302ce7e19fcbb3a82eb45' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '0a7c311c17a7a43f2f6f285fb7393cc0c57a3b1a',
      'last_seen' => '1600487146',
    ),
  ),
  '3c2020932ce763beb6885919eaf33459' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$A13U9PgT5L4YKw9AqXFWrOnW8pR0O8OgMG0n8Yr3w5qzTqCMzZ/DW',
      'password_salt' => 'salt_7a8bc676a6806a2d1aa0752d5ff623c792b63ea9',
    ),
  ),
  '12ffdeeb7779157ba1a29ae0d3597be0' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '06f180f91aa923f2f0a038f2a1c2d2f065cb4625',
      'last_seen' => '1600487326',
    ),
  ),
  '90e8d901c7834fbd4c8c65c80fc2b1fd' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$gWhJ7bZzXHBwS8Bds5AV.elGxPcxswbfi4mIa/RKO5b0dAsiRQQNS',
      'password_salt' => 'salt_8a121a5a09a9c142f5291d941d792afd672593b1',
    ),
  ),
  '570f6a803dbc07b59eaf00fa5372fa21' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => 'f723a1fc0bf76f29dad6f25e22c0616e00f4a0e9',
      'last_seen' => '1600487485',
    ),
  ),
  'a6a68695efa8dbe4491b8b4f8cbef2c7' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$P0dSfcN9uMtlUIdfE097L.ButF15zRHOd7CHTSixvIZ3XjqhL6WVK',
      'password_salt' => 'salt_ff6ec8d5e4526021c887b7e43b94c4f305ac0070',
    ),
  ),
  '0ee1b7dc801baddff0f567f5f8373877' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '01446eebd28393139e78c0175047bb6cbbda056f',
      'last_seen' => '1600487618',
    ),
  ),
  'd4667b88dd7b8da503340e32f3da2e2f' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accounttypeid = :accounttypeid ',
    'bind' => 
    array (
      'accounttypeid' => 5,
    ),
  ),
  'eb56e2fcc89ddb2c2e43f9609d4119d4' => 
  array (
    'query' => 'SELECT * FROM volunteers WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '1',
    ),
  ),
  'b342397af37df39d2046a9f52de07cfc' => 
  array (
    'query' => 'SELECT * FROM volunteer_positions WHERE volunteerpositionid = :volunteerpositionid ',
    'bind' => 
    array (
      'volunteerpositionid' => '1',
    ),
  ),
  'bcc4fbd253127224a396777cddddc269' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE account_type = :account_type ',
    'bind' => 
    array (
      'account_type' => 'volunteer',
    ),
  ),
  'e2265d8208c807769810d35bda025fcb' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$v3ejVvuU0oCygH6UPJC0hOuMNWnC1T0BrRChD1u2Yk0WZ77qGOCwy',
      'password_salt' => 'salt_f90532eacf6bd39b61bc926bead1af3385a67d60',
    ),
  ),
  '6782a002c60a5315ca9b2fbe5bee879b' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => 'adde014c8d09c619c4b02d7b09aec7cb6e3de173',
      'last_seen' => '1601045452',
    ),
  ),
  'c9689108bd5052b881878a85eb35fbed' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$tAJFnz3vFrYraRAM2CHQKOX9zKrdeoVx9QITQVZDMp3wbC23MSKwO',
      'password_salt' => 'salt_bc6996198d5e109a2ead0c6c1ce3c810d19ed54a',
    ),
  ),
  'a8fcf8adad0d45eeedd040f6875861ad' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => 'f8c6fed4636c10ebe951627ada20b96e1d757f13',
      'last_seen' => '1601045467',
    ),
  ),
  '4f85cf375e7c7027f9a96b57378b902d' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$oaO0Uve97XqjuesoY4Ulau1b1tEvAr9bXuVCs0FTQWUKPX8.a2JsS',
      'password_salt' => 'salt_b1a03403f827b2539d86d092579d41c17be78d7d',
    ),
  ),
  '53d5b84d531b8313222748353202dc30' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '2ea165f0509c38d6cef8f25d3169e70a2ad1a26c',
      'last_seen' => '1601052868',
    ),
  ),
  '04c71990dceda0e6dc86bd01e23d4a50' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE email = :email or telephone = :telephone ',
    'bind' => 
    array (
      'email' => 'dr lexy',
      'telephone' => '',
    ),
  ),
  '2a2461d570bd01ea7b3014733488139c' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$R4s3p8XffFisS0ktNTCfYug0FYXehSa0ORJFHBJLjLEX7gmESAHGu',
      'password_salt' => 'salt_a855ca313f92c184a6585942ad97018d4f664edb',
    ),
  ),
  '8e1c8efe875c078f98c9bb57b38dc352' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '81764eaee394c29d3348cc792d2d95c275c1e248',
      'last_seen' => '1601052997',
    ),
  ),
  'fd68c44b1725fa20f48f914fd38ed11a' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$Fjs5qKnFS5Shr7FM4Ui8leVP2YSMsbFDRo9/a8GG0q63Q6yJUSF.O',
      'password_salt' => 'salt_697198728af65dff62f705e64e7fea93c5a67517',
    ),
  ),
  'b39e1c1820aa9f649850e34145c4b618' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '064d8519e4763ca5ce37c6914cb252e44adfe93f',
      'last_seen' => '1601053078',
    ),
  ),
  'd079dd5c7176331858e55d1b929ce302' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$nl/JLq4xjnjQQlPsl45OrOLaaJSb/mwS61AxARIJkhvpJ11JS4Lb2',
      'password_salt' => 'salt_bfc4879312fb4a7437c5dfd05b15d52570fc8f0d',
    ),
  ),
  'd0ab2b63e9fdd5efcae9f275042967d8' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '4e70c4779c5a6fca1da96f1db0692a7c3e8c1f28',
      'last_seen' => '1601053085',
    ),
  ),
  '257bb8b35e556f161985b10266a61afe' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$LwHxCbfaxi/M.zpKu3HHrOfty4DW68Y3s1CME2CENqo3YEZy68GG6',
      'password_salt' => 'salt_83dc03a8563012d22e06c3cdbb4963c2d2e19d12',
    ),
  ),
  'ea9ca0f693e5873137e3914bb23114be' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '327528916920ec6273b76ec24b759f8a6cad180c',
      'last_seen' => '1601053110',
    ),
  ),
  '0c09571d88f715f457261e56a2a9dd28' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'processing',
      'jobid' => '11',
    ),
  ),
  'd0053e0090e5e899f736581f12dc1868' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1601126079',
      'jobid' => '11',
    ),
  ),
  '6a26a5953fad1edcc4eb192475144439' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1601126089',
      'jobid' => '12',
    ),
  ),
  '0ff3317e0708fad7eeec98c62cf6bb87' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '1',
    ),
  ),
  '0af05c7bc59993909f8f8d25d8367483' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601130051',
      'password' => '$2y$10$ZGhukUEZLilHHsVQ1uh4uezysn/DeiGkqlH0qpcoZ8CWMMwtPRr5i',
      'password_salt' => 'salt_9a74f6054096e922ec6abcccb6db9d5219cedb0a',
      'password_reset_vaultid' => '1',
    ),
  ),
  'b993505ec34e2d50f2e3d0298b676a08' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'processing',
      'jobid' => '1',
    ),
  ),
  '9d26270a52be308b02e591d43efbbe3d' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1601128254',
      'jobid' => '1',
    ),
  ),
  'f494db3a2f1f2b41cc8e115bb3e7818d' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'processing',
      'jobid' => '2',
    ),
  ),
  'cade1502506b1d83d335542c0de7debc' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1601128711',
      'jobid' => '2',
    ),
  ),
  '2f053c65bdfe378aeb41ac952dda81eb' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE telephone = :telephone or email = :email ',
    'bind' => 
    array (
      'telephone' => '08029982122',
      'email' => '',
    ),
  ),
  '74dfccbadaa808213c0a29210d2209f8' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601130597',
      'password' => '$2y$10$9BiHG0tK7p/qgrft7N22N.DZFo9lAtWF5H33yQ7fZ8kiQBJ1rGr2u',
      'password_salt' => 'salt_ebd43d5d665c132accd82efd45f7b3cd02af1928',
      'password_reset_vaultid' => '1',
    ),
  ),
  '0c28dd3ae1822f318b264ce41a1b66c2' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131052',
      'password' => '$2y$10$CZOP2bvsUKo.OeFY1hUiqeIrpCLzWy5UxsOUJuvUzHktsjU6rXxUG',
      'password_salt' => 'salt_5d58e47e2abc21cebb447ceb8d3b04d9385fc9e6',
      'password_reset_vaultid' => '1',
    ),
  ),
  '62bd671b23059388ebeccbe715d5a51e' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131191',
      'password' => '$2y$10$XjilAu4WiOw8HTFruSaMs.P1i1z74WU4XVnZyVWpuVg2CMFNSXtpW',
      'password_salt' => 'salt_b615ca620bfa433306155f92976b9269b423c4ff',
      'password_reset_vaultid' => '1',
    ),
  ),
  '04cb0eeefd428b7b020501b730d609c0' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131218',
      'password' => '$2y$10$HIKlpjjbAXbdnlW2B36RD.2mhpE8rtYKUeebhGPfL94ruo50PK80i',
      'password_salt' => 'salt_df199d6c084b0adaa92e702543cf19230e2e378e',
      'password_reset_vaultid' => '1',
    ),
  ),
  '1c1f75a8090d234f16f45c9ef69202aa' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131294',
      'password' => '$2y$10$5P5t1w/FFJ0YVfOcdmYWYelN2ec9z8sCc1OxTNW59z8EL41z/tyFW',
      'password_salt' => 'salt_e524b145691d090505caac26e3ff3f6eb80a5dc2',
      'password_reset_vaultid' => '1',
    ),
  ),
  'a04123c86160187709e7700ab6b97ef7' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131423',
      'password' => '$2y$10$kdBPIXyfS.gsooJoL7gaYuvojYsxOaZ5IAw1rC.v5fSteQF4SLMgS',
      'password_salt' => 'salt_e973f6b9594ee4d4cb346189a13ed4a96a12423b',
      'password_reset_vaultid' => '1',
    ),
  ),
  'eba55c705cb9ef2e951e5f890d5912f8' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131476',
      'password' => '$2y$10$6sNvAGrsIAYGlEF5z3wpReal8pWiFllWWh8dctmenF6AEt7KXUqQy',
      'password_salt' => 'salt_b9b6feb061c5456e4b02af923dd3196366124990',
      'password_reset_vaultid' => '1',
    ),
  ),
  '4e45fb9686fb40fa628d0e900979e24f' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131513',
      'password' => '$2y$10$WrxbWGVjrITqhdeKl8hCgeN6uX79.fzTja9KFXENtm4C.SQQ6jt8K',
      'password_salt' => 'salt_394abad183f4387746101b2f488fd08d510a9f89',
      'password_reset_vaultid' => '1',
    ),
  ),
  '6566c1fafc381b397c284b6a330cee21' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131559',
      'password' => '$2y$10$7B7tjjxUyKQyxaWLvA3rTOtIIOfeuC0Smz1hwUNEksNRR4dhOi3o2',
      'password_salt' => 'salt_81082e3816bbb9f43d6bd8e100df301879d1cf6c',
      'password_reset_vaultid' => '1',
    ),
  ),
  '835ffdfee08d548bac5474e1a2bf5c5c' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131602',
      'password' => '$2y$10$E3SNeaEhnQ8OukgP0DuKousxMWdQ6w9HP/YkESZhC4v1LNlqBmO4W',
      'password_salt' => 'salt_d6048efe0ff710af778727d20d43c20aa1dcef90',
      'password_reset_vaultid' => '1',
    ),
  ),
  '67766b93542edcbea2b319afcd5405e9' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601131804',
      'password' => '$2y$10$LpiUgKevcdnp11RBeLgEE.2kEorjgASqJg7LhffbQzHM1XdxaAHSS',
      'password_salt' => 'salt_afe51bd004fe8bae147e953d3e29713d556e5313',
      'password_reset_vaultid' => '1',
    ),
  ),
  'e410808e5a2e8dcc866979f72d6e7b73' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601132202',
      'password' => '$2y$10$BLixdCqXDmR6h1YpINxU2.mub2dRrJ8qJ8mySiphOPOU.Jg3GVywK',
      'password_salt' => 'salt_5b20c682d7e814bb25e6606c84a3777aef104b65',
      'password_reset_vaultid' => '1',
    ),
  ),
  'f4d44de0d3e291a2ec9bb34adf2fd520' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid and reset_code = :reset_code ',
    'bind' => 
    array (
      'accountid' => '1',
      'reset_code' => '3003',
    ),
  ),
  '0d6b68be5b54fc004476f932107af606' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$BLixdCqXDmR6h1YpINxU2.mub2dRrJ8qJ8mySiphOPOU.Jg3GVywK',
      'password_salt' => 'salt_5b20c682d7e814bb25e6606c84a3777aef104b65',
    ),
  ),
  'a676703a2653684316756659bd016822' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$4s3pFpUL.nGYIg/PXUuzhuOT/tyAAPmdRJ71Ex7c1KJYMnPhYbBh.',
      'password_salt' => 'salt_dbdfd22a93ccbec5121e7c06d780b9bfc0324e7f',
    ),
  ),
  'd160bad06f7a9f802886d36e116f930a' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => 'c574a68a5f616ba7c5fefc81d164a972e1b196d9',
      'last_seen' => '1601130432',
    ),
  ),
  '0983413a76714fbc85fa1bc6a1a3b049' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$jemwyu0L55F7ECflleav1eWdFfZbVNLGMnVI7ZJrq1jj1YjcFrfV.',
      'password_salt' => 'salt_51b5ed3386c7052d4e09bc3fe8569f3a45d55285',
    ),
  ),
  '8e3d7388d2b9b52519daef2b6ab592fe' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '635cf2f05ee106bb9762649527bbe23e4ec33442',
      'last_seen' => '1601133941',
    ),
  ),
  '1db352c32563dd120aba9f8a4199edd3' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$EML7QnMdSBNCFsEZyM6LDeJEtW0WKbOkFlqo24.O75QbecHdW6YWG',
      'password_salt' => 'salt_c0ee91045359bf0bedd5774df6bea34dab65ce92',
    ),
  ),
  '02fb0254251b6d7fd8934d7b626ac972' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => 'c846b975c208044856cc034b0eeb71fec748eb78',
      'last_seen' => '1601134003',
    ),
  ),
  '85615049a92f2133d90cf2e4f002f3f7' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$gsBGqn3Xk.b6NQkGOIvvJOnODc21VuAHYQebHZE0C/zvHNHM0Hfwa',
      'password_salt' => 'salt_1fc0143a5df983364da3ca80da897ba27488d615',
    ),
  ),
  '7f4012c46ff05287c62289d1c7d8f0f5' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '89c46521251f05d11751e0b855a228908dd42139',
      'last_seen' => '1601134011',
    ),
  ),
  'c653a0dbef23cb568177cbe6e46f27ca' => 
  array (
    'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  {where}',
    'bind' => 
    array (
      'passwordhash' => '$2y$10$efF4IjaywLN6LMqUegtUyekfYBZX7pWsPkSkRfwoqd2mW3Yr93k4O',
      'password_salt' => 'salt_0f294fb7d25b47f6fd198d13e8c22c9153558512',
    ),
  ),
  '3fa754acc1c4fef31864a07ec42cf058' => 
  array (
    'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  {where}',
    'bind' => 
    array (
      'token' => '4b9af9e80d36348d6bcea361009e5adfb098a096',
      'last_seen' => '1601134183',
    ),
  ),
);
