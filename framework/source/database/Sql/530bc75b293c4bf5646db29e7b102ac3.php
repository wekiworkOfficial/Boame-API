<?php

return array (
  'new-db@dev' => 
  array (
    'volunteers' => 
    array (
      'c7eb805d61b1d9b7b86db6ce48a81cad8956e59be0ee318c3c97895fd5942ba7b7c9aa11' => 
      array (
        'query' => 'INSERT INTO volunteers (accountid,residential_address,cv_address,biography,date_created) VALUES (:accountid0,:residential_address0,:cv_address0,:biography0,:date_created0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'residential_address0' => 'hello 2 @muke street',
          'cv_address0' => '53c6bd2055f4aeb6dfe76a436a0e820f635bec6b.docx',
          'biography0' => 'i love coding',
          'date_created0' => 1600233400,
        ),
      ),
      'c7eb805d61b1d9b7b86db6ce48a81cad5555bcfa227a732ababe5e9273960cf7136925e1' => 
      array (
        'query' => 'INSERT INTO volunteers (accountid,residential_address,cv_address,biography,date_created) VALUES (:accountid0,:residential_address0,:cv_address0,:biography0,:date_created0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'residential_address0' => 'hello 2 @muke street',
          'cv_address0' => '53c6bd2055f4aeb6dfe76a436a0e820f635bec6b.docx',
          'biography0' => 'i love coding',
          'date_created0' => 1600279963,
        ),
      ),
      '907b450bb3892d2879956899fa946cf212308e413d80681e87706cdeced426a471fe58d7' => 
      array (
        'query' => 'INSERT INTO volunteers (accountid,residential_address,cv_address,biography,date_created,volunteerpositionid) VALUES (:accountid0,:residential_address0,:cv_address0,:biography0,:date_created0,:volunteerpositionid0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'residential_address0' => 'hello 2 @muke street',
          'cv_address0' => '53c6bd2055f4aeb6dfe76a436a0e820f635bec6b.docx',
          'biography0' => 'i love coding',
          'date_created0' => 1600286716,
          'volunteerpositionid0' => '1',
        ),
      ),
      'e3fece2850724f85092d26e61c55572f019a61d363720608e8ebcf3b269df946d42357dd' => 
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
    ),
    'password_hash' => 
    array (
      'a72a13441e758268df4fe98fb9841361d9433c3b674e6fae8bcdaa065083745eeb808ef0' => 
      array (
        'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
        'bind' => 
        array (
          'authenticationid0' => NULL,
          'passwordhash0' => '$2y$10$TRjj7gANsdT2cenxFK3KOuxXOdtggo2U5Vkv6DMggHt9a9i9aNx0y',
          'password_salt0' => 'salt_94d5526fa88c18ba96e2623668ab852f81cdfb94',
        ),
      ),
      'a72a13441e758268df4fe98fb9841361080a2a064306fb9b315733c55828683e554eb7ec' => 
      array (
        'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
        'bind' => 
        array (
          'authenticationid0' => NULL,
          'passwordhash0' => '$2y$10$XNnwyQFVZuW7.8LIDHTgfOdZD/a2RHOR0z2hI.gPiYuWUvMLKa1w2',
          'password_salt0' => 'salt_03c06cba7cdb7fced76263904b6e5e06057eb13e',
        ),
      ),
      'a72a13441e758268df4fe98fb9841361c1f6c6ce4b5ccd198172e530975ddd6dca2b0999' => 
      array (
        'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
        'bind' => 
        array (
          'authenticationid0' => '1',
          'passwordhash0' => '$2y$10$FhPVZ73M/wyXb2NdJzRdG./axAnBe6lJslykHrzbHJYnt9XXVb25K',
          'password_salt0' => 'salt_fefcb3d17ff50adb834ff0fd5e265c3da8a21e98',
        ),
      ),
      'a72a13441e758268df4fe98fb9841361e2e97d7631d1e653f8cad33679914b2f331166ea' => 
      array (
        'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
        'bind' => 
        array (
          'authenticationid0' => '2',
          'passwordhash0' => '$2y$10$sat699PAkS8vmXMZ6Kjxa.ZsN5mWkP0mNgY.a7Er7vfJOaKDR/Xl.',
          'password_salt0' => 'salt_470f6e9797e81817d72f41f21e175ab1a35f64c7',
        ),
      ),
      'a72a13441e758268df4fe98fb9841361b7efcfc2813d9157591d5440346503863c378f86' => 
      array (
        'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
        'bind' => 
        array (
          'authenticationid0' => '3',
          'passwordhash0' => '$2y$10$NhkO3IJwuv.ESMJv/lDaoe86cLoW4cjjdTvRSuNVfO8XlIqQvBWmK',
          'password_salt0' => 'salt_e47e9599b580a7c0b3c654af7652d2f39d71199f',
        ),
      ),
      'a72a13441e758268df4fe98fb9841361b6a447416c81d987e2534756b7929c727f3ff0b1' => 
      array (
        'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
        'bind' => 
        array (
          'authenticationid0' => '4',
          'passwordhash0' => '$2y$10$VDNXnVJTwIwswTMyGK9N5.Csk0kV0zqGovQ4EWW7sSiIPe/rbhWke',
          'password_salt0' => 'salt_2fa5aaebd765be931a0a812c11a52dd70cbfe25c',
        ),
      ),
      '075af8fa230a239798d1a0f2602262dbb920be70e70b07fefa0ff4ad474f7ca9ab61f8e6' => 
      array (
        'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE authenticationid = :authenticationid ',
        'bind' => 
        array (
          'passwordhash' => '$2y$10$2WtZbwTDZlLcZ7oTrTZlceW6RRPjVe/KTdBwTzMIb9YKyVUphgEVu',
          'password_salt' => 'salt_16fa84e8d2a97a493456c59ec68087b7f756742c',
          'authenticationid' => '1',
        ),
      ),
      'f17225fbf1f16f0a5d735bae979c8837be750d6aae7f9c93cdb73a0f3df2ca853733d0ad' => 
      array (
        'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
        'bind' => 
        array (
          'passwordhash' => '$2y$10$Xq0wTwtL9PfjPQjiYZFui.//Um7BJ0xKkjmqIcWKQNHFs2p.0Bs/i',
          'password_salt' => 'salt_626cb309d464066ac1fd143a142d18eb8f8ddf28',
          'passwordhashid' => '1',
        ),
      ),
      'f17225fbf1f16f0a5d735bae979c88371fd7f6704d4c7d90d6ff28752bdb57204336b7f6' => 
      array (
        'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
        'bind' => 
        array (
          'passwordhash' => '$2y$10$kKaAbXg2I/44jZsYGvn0gu06dPHhfkd2P5qTvsTdHTW9deZCOqpA2',
          'password_salt' => 'salt_fdef552923903b8d51d739a1e59c910f8c481af4',
          'passwordhashid' => '1',
        ),
      ),
      'f17225fbf1f16f0a5d735bae979c8837afc44bc53e66c4674ff4f11ee089ddf4d31b7a82' => 
      array (
        'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
        'bind' => 
        array (
          'passwordhash' => '$2y$10$AQ7F6m4yRG1Y365GVEYHPOo3IHdc6t9hJoAKAte8FzqYJ4gmlMztG',
          'password_salt' => 'salt_91c2f403edcee58eedac54958e08459cbfae4200',
          'passwordhashid' => '1',
        ),
      ),
      'f17225fbf1f16f0a5d735bae979c88378a34947e4127326a0f68c365c46c34c0e334b1df' => 
      array (
        'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
        'bind' => 
        array (
          'passwordhash' => '$2y$10$YDsqzM6b0dXFGqYWVYfX1OpEqHHdo4epGgS7GxCKHzkkuTjjZQu1q',
          'password_salt' => 'salt_3d0b39311653b62c551f42b6fd16dde1d5ae817d',
          'passwordhashid' => '1',
        ),
      ),
      'f17225fbf1f16f0a5d735bae979c8837b849a12ceb9b1e03a70f2a2118b735b6d8a8efd4' => 
      array (
        'query' => 'UPDATE password_hash SET passwordhash = :passwordhash , password_salt = :password_salt  WHERE passwordhashid = :passwordhashid ',
        'bind' => 
        array (
          'passwordhash' => '$2y$10$LhPNtXZLseEelKMj7lRH9ujs3yFqGXJuJ7fsarpU.tnvnA4QqSqcm',
          'password_salt' => 'salt_a2c8cb51d72135f74f02b7ca35d16d9905ce9e1e',
          'passwordhashid' => '1',
        ),
      ),
      'a72a13441e758268df4fe98fb98413617af7fc0422bd4a16822269482ca09be09c6af07b' => 
      array (
        'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
        'bind' => 
        array (
          'authenticationid0' => '5',
          'passwordhash0' => '$2y$10$GbL.zxiq8rqSyyaxU0a9dO.bGq53rXxZf2LTVuX91UoLqBuwX6cU2',
          'password_salt0' => 'salt_48e2e9506742df0313e01f0c702bb105d97efe78',
        ),
      ),
      'a72a13441e758268df4fe98fb984136146a9ff6df5dfe5327f1f6a22b5ef5701173b76a6' => 
      array (
        'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
        'bind' => 
        array (
          'authenticationid0' => '6',
          'passwordhash0' => '$2y$10$73.er7S1SpRw0HmzXPvzuOxwGyC5MoaQ6Wi7iLYFWBqEb9pFQCCCG',
          'password_salt0' => 'salt_5f81be75bcb5f3d387ed391d9ce736607c7b0e79',
        ),
      ),
    ),
    'images_attached' => 
    array (
      'f182de16222752e1e6041a2ecc2504d922694d09b6b6f7a0f3f2f8c603c2991176bf9a1e' => 
      array (
        'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
        'bind' => 
        array (
          'casesreportedid0' => NULL,
          'image_address0' => 'e5e23e6badf8764487c0db7dbe476313b025858c.png',
          'date_created0' => 1600259978,
        ),
      ),
      'f182de16222752e1e6041a2ecc2504d99b370a7835257d39517c151ee53eb24c750cb868' => 
      array (
        'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
        'bind' => 
        array (
          'casesreportedid0' => '1',
          'image_address0' => '6e4b2e23ef9be79368311dc6812dc39c21563203.png',
          'date_created0' => 1600260105,
        ),
      ),
      'f182de16222752e1e6041a2ecc2504d9bfc476d2dfbfbcbfa7f14a199cb1036b5511f666' => 
      array (
        'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
        'bind' => 
        array (
          'casesreportedid0' => NULL,
          'image_address0' => '7cf89daa9ce387d5a300f3ff48187db3631e1f1d.png',
          'date_created0' => 1600260774,
        ),
      ),
      'f182de16222752e1e6041a2ecc2504d91e35c09916d361cf165065537abe9f56fba1dfda' => 
      array (
        'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
        'bind' => 
        array (
          'casesreportedid0' => NULL,
          'image_address0' => 'c21bcfc62bdfe86f5e8fdf504f961bf5db6c51ca.png',
          'date_created0' => 1600261034,
        ),
      ),
      'f182de16222752e1e6041a2ecc2504d969b1e9c85103459fd9182cf5b97070c44fc09f17' => 
      array (
        'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
        'bind' => 
        array (
          'casesreportedid0' => '6',
          'image_address0' => '2c4b7e468df0a63f0442ecb6cac0caefbe6943fb.png',
          'date_created0' => 1600261287,
        ),
      ),
      'f182de16222752e1e6041a2ecc2504d9416874b6317d09b6bed83ba1032ead07e1478356' => 
      array (
        'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
        'bind' => 
        array (
          'casesreportedid0' => '1',
          'image_address0' => 'a5f6deb482c2a8fb91a382430d1fbcbddb9031c9.png',
          'date_created0' => 1600395008,
        ),
      ),
      'f182de16222752e1e6041a2ecc2504d91c8e40f879445a6eaa108a8092776e4724eafb12' => 
      array (
        'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
        'bind' => 
        array (
          'casesreportedid0' => '3',
          'image_address0' => 'd2f3b75eb85694c973c4510b6ec0a5107bf5e24b.png',
          'date_created0' => 1600395037,
        ),
      ),
      'f182de16222752e1e6041a2ecc2504d961e9e7881ce840dc99623f8c46879412188642eb' => 
      array (
        'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
        'bind' => 
        array (
          'casesreportedid0' => '1',
          'image_address0' => '8ff76571d9fcfcabcad8536c23e26e82c8c168d4.png',
          'date_created0' => 1600395303,
        ),
      ),
    ),
    'cases_reported' => 
    array (
      'e924cc2b5aaf1ae9e03d6dfe4cafc8b582d44817da2c49e447458786f17bbb8d78b2de67' => 
      array (
        'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
        'bind' => 
        array (
          'casetypeid0' => 3,
          'accountid0' => 0,
          'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
          'case_text0' => 'Also, there are APIs available to access third party data; for example, LINQ to Amazon provides the ability to use LINQ with Amazon web services to search for books and other items. This can be achieved by implementing the IQueryable interface for Amazon.',
          'date_created0' => 1600261144,
        ),
      ),
      'e924cc2b5aaf1ae9e03d6dfe4cafc8b5570ed59ff2fd80fca343ff637232468faed50bd5' => 
      array (
        'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
        'bind' => 
        array (
          'casetypeid0' => 3,
          'accountid0' => 0,
          'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
          'case_text0' => 'Also, there are APIs available to access third party data; for example, LINQ to Amazon provides the ability to use LINQ with Amazon web services to search for books and other items. This can be achieved by implementing the IQueryable interface for Amazon.',
          'date_created0' => 1600261195,
        ),
      ),
      'e924cc2b5aaf1ae9e03d6dfe4cafc8b5fbd6bacbcdab40924a805fc5a8e09835799d2518' => 
      array (
        'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
        'bind' => 
        array (
          'casetypeid0' => 2,
          'accountid0' => 0,
          'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
          'case_text0' => 'first audio case',
          'date_created0' => 1600263579,
        ),
      ),
      'e924cc2b5aaf1ae9e03d6dfe4cafc8b5903ae6a5c1b06fcff5a9ca381986449622b14dd4' => 
      array (
        'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
        'bind' => 
        array (
          'casetypeid0' => 1,
          'accountid0' => 0,
          'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
          'case_text0' => 'first video case',
          'date_created0' => 1600391255,
        ),
      ),
      'e924cc2b5aaf1ae9e03d6dfe4cafc8b506fad699a551d80453d6c7fce233b208c81407a8' => 
      array (
        'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
        'bind' => 
        array (
          'casetypeid0' => 1,
          'accountid0' => 0,
          'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
          'case_text0' => 'first video case',
          'date_created0' => 1600391314,
        ),
      ),
      'e924cc2b5aaf1ae9e03d6dfe4cafc8b58e8a5ad47db08320c172d0d0b6da6f345930c92d' => 
      array (
        'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
        'bind' => 
        array (
          'casetypeid0' => 1,
          'accountid0' => 0,
          'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
          'case_text0' => 'first video case',
          'date_created0' => 1600391469,
        ),
      ),
    ),
    'audio_attached' => 
    array (
      'a06f357004a88006a24b4e4862e3b99dcf160017fa5bffbefb551c0c8ad01fc667047634' => 
      array (
        'query' => 'INSERT INTO audio_attached (casesreportedid,audio_address,date_created) VALUES (:casesreportedid0,:audio_address0,:date_created0)',
        'bind' => 
        array (
          'casesreportedid0' => '8',
          'audio_address0' => 'e4fce9675a597df9dece025216df5084aa3ae1f6.mp3',
          'date_created0' => 1600263619,
        ),
      ),
      'cc75f2fb11c8aa4406ad2e625a1721ad5d13575414899833eacd0fc7e4dc92ae9cbec518' => 
      array (
        'query' => 'INSERT INTO audio_attached (casesreportedid,audio_address,date_created,total_listen) VALUES (:casesreportedid0,:audio_address0,:date_created0,:total_listen0)',
        'bind' => 
        array (
          'casesreportedid0' => '2',
          'audio_address0' => '9278ec273acda7b655c4c17d64aa8c790ce1a045.mp3',
          'date_created0' => 1600395011,
          'total_listen0' => 0,
        ),
      ),
      'cc75f2fb11c8aa4406ad2e625a1721ad2786ab648a632ef72348d3ad8e231edb768ef126' => 
      array (
        'query' => 'INSERT INTO audio_attached (casesreportedid,audio_address,date_created,total_listen) VALUES (:casesreportedid0,:audio_address0,:date_created0,:total_listen0)',
        'bind' => 
        array (
          'casesreportedid0' => '2',
          'audio_address0' => '1a8be429cd07b186f280a2e3aeea7a1c79a9d954.mp3',
          'date_created0' => 1600395316,
          'total_listen0' => 0,
        ),
      ),
    ),
    'video_attached' => 
    array (
      '20d0d9e4ca94d60e44b603bfccdd8a0706f1e8f157a0e885bd6aaa7ca7654a1e921c96fe' => 
      array (
        'query' => 'INSERT INTO video_attached (casesreportedid,video_address,date_created,total_views,total_likes,total_dislikes) VALUES (:casesreportedid0,:video_address0,:date_created0,:total_views0,:total_likes0,:total_dislikes0)',
        'bind' => 
        array (
          'casesreportedid0' => '9',
          'video_address0' => '77b00e8ad5746b8abea2d0804fd694fb96f57c35.mp4',
          'date_created0' => 1600264419,
          'total_views0' => 0,
          'total_likes0' => 0,
          'total_dislikes0' => 0,
        ),
      ),
      '1f74b2373e31bf47839928998332d238577b473babb2445cfea97c002b51b38c91335603' => 
      array (
        'query' => 'INSERT INTO video_attached (casesreportedid,video_address,date_created,total_views,total_likes,total_dislikes,video_frame_address) VALUES (:casesreportedid0,:video_address0,:date_created0,:total_views0,:total_likes0,:total_dislikes0,:video_frame_address0)',
        'bind' => 
        array (
          'casesreportedid0' => '4',
          'video_address0' => 'salt_e300e91b9c70f7de4a7ce92c57f33248cf3a3787.mp4',
          'date_created0' => 1600391541,
          'total_views0' => 0,
          'total_likes0' => 0,
          'total_dislikes0' => 0,
          'video_frame_address0' => 'salt_7ba07aca250a367f80dd2a2e9dac4988482ca9cf.jpg',
        ),
      ),
      '1f74b2373e31bf47839928998332d238d74226f0b243cd05502f09f523499f9f2b49c928' => 
      array (
        'query' => 'INSERT INTO video_attached (casesreportedid,video_address,date_created,total_views,total_likes,total_dislikes,video_frame_address) VALUES (:casesreportedid0,:video_address0,:date_created0,:total_views0,:total_likes0,:total_dislikes0,:video_frame_address0)',
        'bind' => 
        array (
          'casesreportedid0' => '5',
          'video_address0' => 'salt_eb26959583fe484edb732a63fc88332f5c654016.mp4',
          'date_created0' => 1600391662,
          'total_views0' => 0,
          'total_likes0' => 0,
          'total_dislikes0' => 0,
          'video_frame_address0' => 'salt_7292248ad76fb357a4206f3cb477b5178cbdab92.jpg',
        ),
      ),
      '1f74b2373e31bf47839928998332d238bf352edd05a1981245d4d3a5ed391da468996b15' => 
      array (
        'query' => 'INSERT INTO video_attached (casesreportedid,video_address,date_created,total_views,total_likes,total_dislikes,video_frame_address) VALUES (:casesreportedid0,:video_address0,:date_created0,:total_views0,:total_likes0,:total_dislikes0,:video_frame_address0)',
        'bind' => 
        array (
          'casesreportedid0' => '3',
          'video_address0' => 'salt_cd78403b8840964e6591218bc10294f653893eb0.mp4',
          'date_created0' => 1600395321,
          'total_views0' => 0,
          'total_likes0' => 0,
          'total_dislikes0' => 0,
          'video_frame_address0' => 'salt_797aee206b35e9f77352846b11ae154d7e4a5d47.jpg',
        ),
      ),
      '84c92fd140b6f55cc94844ef59c074657b52009b64fd0a2a49e6d8a939753077792b0554' => 
      array (
        'query' => 'UPDATE video_attached SET total_views = :total_views  WHERE videoattachedid = :videoattachedid ',
        'bind' => 
        array (
          'total_views' => '1',
          'videoattachedid' => '2',
        ),
      ),
      '84c92fd140b6f55cc94844ef59c0746512c6fc06c99a462375eeb3f43dfd832b08ca9e17' => 
      array (
        'query' => 'UPDATE video_attached SET total_views = :total_views  WHERE videoattachedid = :videoattachedid ',
        'bind' => 
        array (
          'total_views' => '2',
          'videoattachedid' => '2',
        ),
      ),
      '84c92fd140b6f55cc94844ef59c07465bd307a3ec329e10a2cff8fb87480823da114f8f4' => 
      array (
        'query' => 'UPDATE video_attached SET total_views = :total_views  WHERE videoattachedid = :videoattachedid ',
        'bind' => 
        array (
          'total_views' => '1',
          'videoattachedid' => '3',
        ),
      ),
      '4d69922f62c310a5d5ffbf76a1689b6817ba0791499db908433b80f37c5fbc89b870084b' => 
      array (
        'query' => 'UPDATE video_attached SET total_likes = :total_likes  WHERE videoattachedid = :videoattachedid ',
        'bind' => 
        array (
          'total_likes' => '1',
          'videoattachedid' => '1',
        ),
      ),
      '4d69922f62c310a5d5ffbf76a1689b68472b07b9fcf2c2451e8781e944bf5f77cd8457c8' => 
      array (
        'query' => 'UPDATE video_attached SET total_likes = :total_likes  WHERE videoattachedid = :videoattachedid ',
        'bind' => 
        array (
          'total_likes' => '2',
          'videoattachedid' => '1',
        ),
      ),
      '61bb810257cd60b29b908d0115581eb317ba0791499db908433b80f37c5fbc89b870084b' => 
      array (
        'query' => 'UPDATE video_attached SET total_dislikes = :total_dislikes  WHERE videoattachedid = :videoattachedid ',
        'bind' => 
        array (
          'total_dislikes' => '1',
          'videoattachedid' => '1',
        ),
      ),
      'd811ce418bef9bd42495d6afba2f5bdd86f2acaa041742d7d962d19ac003fc599dbbea75' => 
      array (
        'query' => 'UPDATE video_attached SET video_caption = :video_caption  WHERE videoattachedid = :videoattachedid ',
        'bind' => 
        array (
          'video_caption' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
          'videoattachedid' => '3',
        ),
      ),
    ),
    'articles' => 
    array (
      'e67d337bdbed699190784763486084ff1ca1471be6f6c046c2bb430b065fc20bc887ef56' => 
      array (
        'query' => 'INSERT INTO articles (article_cover_image,article_title,article_text,total_views,date_created,accountid) VALUES (:article_cover_image0,:article_title0,:article_text0,:total_views0,:date_created0,:accountid0)',
        'bind' => 
        array (
          'article_cover_image0' => '4fe189f35b2bb9cb2e095c5c5a2cb869c553c2ff.jpg',
          'article_title0' => 'Building a stronger Ghana',
          'article_text0' => 'V2UgaGF2ZSBzZWVuIHRoaXMgZWZmZWN0IHdoZXJlIHRoZXJlIGEgYnVuY2ggb2YgdGV4dCBsaW5rcyBvbiB0aGUgcGFnZSBhbmQgb24gaG92ZXIgYW4gaW1hZ2UgaXMgbG9hZGVkIHVwIGFuZCBzaG93biB0byB0aGUgdmlzaXRvci4gVGhpcyBzbmlwcGV0IGFsbG93cyB5b3UgdG8gYWNoaWV2ZSB0aGlzIHBvcHVwIGltYWdlIG9uIHRleHQgbGluayBob3ZlciBvbiB5b3VyIHdlYiBwYWdlcy4KCkhvd2V2ZXIsIGlmIHlvdeKAmXJlIGFjY2Vzc2luZyBibG9ja2VkIGNvbnRlbnQsIHRoaW5ncyBhcmUgYSBsaXR0bGUgZGlmZmVyZW50LiBXaGlsZSBhIHByb3h5IGlzIGdvb2QgZm9yIGxvdyBzdGFrZXMsIGl0IGRvZXNu4oCZdCByZW1vdmUgaWRlbnRpZnlpbmcgaW5mb3JtYXRpb24gb3RoZXIgdGhhbiB0aGUgSVAgYWRkcmVzcy4gSXTigJlzIG9wZW4gdG8gc25vb3BpbmcgZnJvbSBhbnlvbmUgd2l0aCBhY2Nlc3MgdG8geW91ciBkYXRhIHN0cmVhbSwgc3VjaCBhcyB5b3VyIElTUCBhbmQgZ292ZXJubWVudC4gQWNjZXNzaW5nIGNlbnNvcmVkIGZpbGUtc2hhcmluZyB3ZWJzaXRlcyBhbmQgb3RoZXIgcXVlc3Rpb25hYmxlIGNvbnRlbnQgaXMgYmVzdCBkb25lIHRocm91Z2ggYSBWUE4u',
          'total_views0' => 0,
          'date_created0' => 1600339266,
          'accountid0' => '3',
        ),
      ),
      '72feef753041e5b81ea157cee2a8ef7c17ba0791499db908433b80f37c5fbc89b870084b' => 
      array (
        'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'total_views' => '1',
          'articleid' => '1',
        ),
      ),
      '72feef753041e5b81ea157cee2a8ef7c472b07b9fcf2c2451e8781e944bf5f77cd8457c8' => 
      array (
        'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'total_views' => '2',
          'articleid' => '1',
        ),
      ),
      '72feef753041e5b81ea157cee2a8ef7c632667547e7cd3e0466547863e1207a8c0c0c549' => 
      array (
        'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'total_views' => '3',
          'articleid' => '1',
        ),
      ),
      '9bef9dd9653c2e47c28d53e894ccb67eac9eb872ee5dd5ccaa7e5ea36d2385ebdc5dae18' => 
      array (
        'query' => 'UPDATE articles SET article_title = :article_title , article_text = :article_text , article_cover_image = :article_cover_image  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'article_title' => 'Building a stronger Ghana',
          'article_text' => 'V2UgaGF2ZSBzZWVuIHRoaXMgZWZmZWN0IHdoZXJlIHRoZXJlIGEgYnVuY2ggb2YgdGV4dCBsaW5rcyBvbiB0aGUgcGFnZSBhbmQgb24gaG92ZXIgYW4gaW1hZ2UgaXMgbG9hZGVkIHVwIGFuZCBzaG93biB0byB0aGUgdmlzaXRvci4gVGhpcyBzbmlwcGV0IGFsbG93cyB5b3UgdG8gYWNoaWV2ZSB0aGlzIHBvcHVwIGltYWdlIG9uIHRleHQgbGluayBob3ZlciBvbiB5b3VyIHdlYiBwYWdlcy4KCkhvd2V2ZXIsIGlmIHlvdeKAmXJlIGFjY2Vzc2luZyBibG9ja2VkIGNvbnRlbnQsIHRoaW5ncyBhcmUgYSBsaXR0bGUgZGlmZmVyZW50LiBXaGlsZSBhIHByb3h5IGlzIGdvb2QgZm9yIGxvdyBzdGFrZXMsIGl0IGRvZXNu4oCZdCByZW1vdmUgaWRlbnRpZnlpbmcgaW5mb3JtYXRpb24gb3RoZXIgdGhhbiB0aGUgSVAgYWRkcmVzcy4gSXTigJlzIG9wZW4gdG8gc25vb3BpbmcgZnJvbSBhbnlvbmUgd2l0aCBhY2Nlc3MgdG8geW91ciBkYXRhIHN0cmVhbSwgc3VjaCBhcyB5b3VyIElTUCBhbmQgZ292ZXJubWVudC4gQWNjZXNzaW5nIGNlbnNvcmVkIGZpbGUtc2hhcmluZyB3ZWJzaXRlcyBhbmQgb3RoZXIgcXVlc3Rpb25hYmxlIGNvbnRlbnQgaXMgYmVzdCBkb25lIHRocm91Z2ggYSBWUE4u',
          'article_cover_image' => '4fe189f35b2bb9cb2e095c5c5a2cb869c553c2ff.jpg',
          'articleid' => '1',
        ),
      ),
      '72feef753041e5b81ea157cee2a8ef7c761f22b2c1593d0bb87e0b606f990ba4974706de' => 
      array (
        'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'total_views' => '4',
          'articleid' => '1',
        ),
      ),
      '72feef753041e5b81ea157cee2a8ef7cb7eb6c689c037217079766fdb77c3bac3e51cb4c' => 
      array (
        'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'total_views' => '5',
          'articleid' => '1',
        ),
      ),
      '72feef753041e5b81ea157cee2a8ef7c6c1e671f9af5b46d9c1a52067bdf0e53685674f7' => 
      array (
        'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'total_views' => '6',
          'articleid' => '1',
        ),
      ),
      '72feef753041e5b81ea157cee2a8ef7cd02560dd9d7db4467627745bd6701e809ffca6e3' => 
      array (
        'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'total_views' => '7',
          'articleid' => '1',
        ),
      ),
      '612f30b36adff946183a5c1ca45f3983356a192b7913b04c54574d18c28d46e6395428ab' => 
      array (
        'query' => 'DELETE FROM articles WHERE articleid = :articleid ',
        'bind' => 
        array (
          'articleid' => '1',
        ),
      ),
      'e67d337bdbed699190784763486084ff086655b07cc18f8139bb36838a0d6eeef5f0af3c' => 
      array (
        'query' => 'INSERT INTO articles (article_cover_image,article_title,article_text,total_views,date_created,accountid) VALUES (:article_cover_image0,:article_title0,:article_text0,:total_views0,:date_created0,:accountid0)',
        'bind' => 
        array (
          'article_cover_image0' => '4fe189f35b2bb9cb2e095c5c5a2cb869c553c2ff.jpg',
          'article_title0' => 'Building a stronger Ghana',
          'article_text0' => 'V2UgaGF2ZSBzZWVuIHRoaXMgZWZmZWN0IHdoZXJlIHRoZXJlIGEgYnVuY2ggb2YgdGV4dCBsaW5rcyBvbiB0aGUgcGFnZSBhbmQgb24gaG92ZXIgYW4gaW1hZ2UgaXMgbG9hZGVkIHVwIGFuZCBzaG93biB0byB0aGUgdmlzaXRvci4gVGhpcyBzbmlwcGV0IGFsbG93cyB5b3UgdG8gYWNoaWV2ZSB0aGlzIHBvcHVwIGltYWdlIG9uIHRleHQgbGluayBob3ZlciBvbiB5b3VyIHdlYiBwYWdlcy4KCkhvd2V2ZXIsIGlmIHlvdeKAmXJlIGFjY2Vzc2luZyBibG9ja2VkIGNvbnRlbnQsIHRoaW5ncyBhcmUgYSBsaXR0bGUgZGlmZmVyZW50LiBXaGlsZSBhIHByb3h5IGlzIGdvb2QgZm9yIGxvdyBzdGFrZXMsIGl0IGRvZXNu4oCZdCByZW1vdmUgaWRlbnRpZnlpbmcgaW5mb3JtYXRpb24gb3RoZXIgdGhhbiB0aGUgSVAgYWRkcmVzcy4gSXTigJlzIG9wZW4gdG8gc25vb3BpbmcgZnJvbSBhbnlvbmUgd2l0aCBhY2Nlc3MgdG8geW91ciBkYXRhIHN0cmVhbSwgc3VjaCBhcyB5b3VyIElTUCBhbmQgZ292ZXJubWVudC4gQWNjZXNzaW5nIGNlbnNvcmVkIGZpbGUtc2hhcmluZyB3ZWJzaXRlcyBhbmQgb3RoZXIgcXVlc3Rpb25hYmxlIGNvbnRlbnQgaXMgYmVzdCBkb25lIHRocm91Z2ggYSBWUE4u',
          'total_views0' => 0,
          'date_created0' => 1600395344,
          'accountid0' => '3',
        ),
      ),
      '72feef753041e5b81ea157cee2a8ef7c7b52009b64fd0a2a49e6d8a939753077792b0554' => 
      array (
        'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'total_views' => '1',
          'articleid' => '2',
        ),
      ),
      '72feef753041e5b81ea157cee2a8ef7c12c6fc06c99a462375eeb3f43dfd832b08ca9e17' => 
      array (
        'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
        'bind' => 
        array (
          'total_views' => '2',
          'articleid' => '2',
        ),
      ),
    ),
    'jobs' => 
    array (
      'a7ea795a463fe43a2bf810c7d40c19b78f5d6a87bfca61166e59eeddb5f546fe1f9c640b' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_468b97a5d01d6e2925333039b5a128ef2c882489.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_468b97a5d01d6e2925333039b5a128ef2c882489.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//94e58bb89a6dcb2d65ddc2f6c93e3060fa805d29.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_468b97a5d01d6e2925333039b5a128ef2c882489.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000004b84ff27000000002271f7a9\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600386686,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b77d30b79799068009f230332e14088977c7531ccc' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_fde6312d522715381c34fbe21200e819efef5d78.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_fde6312d522715381c34fbe21200e819efef5d78.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//d00588ccbb1c44d8e4883acd949a7397571ba985.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_fde6312d522715381c34fbe21200e819efef5d78.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000006d3be5c9000000007c430adf\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600386897,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b72a073dac7c086768298a42a5b5619e92c3d75f73' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_3240b71703204669f1e5b73c2c1683659433bb7d.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_3240b71703204669f1e5b73c2c1683659433bb7d.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//06c5aad6b7cc948bf34471d3d2d355326307f911.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_3240b71703204669f1e5b73c2c1683659433bb7d.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000001c926f8400000000051965b2\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600386973,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7ef1dcc9fa3f50951c570151d577787b0c11f24a3' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_93e6101052920474ae0c0b89b44902de06122d67.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_93e6101052920474ae0c0b89b44902de06122d67.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//35cce5fe389e0ba9ffd4636f89b1e2b14f9320f4.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_93e6101052920474ae0c0b89b44902de06122d67.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000007671df3a000000005a9c45c3\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600387948,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7450c4c4de8768dc64c06222f73f8c749cf9ac5d3' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_79c9ed6e023c8d7838a5b2db18380178bed3625f.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_79c9ed6e023c8d7838a5b2db18380178bed3625f.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//e0191500848d0389fcc1cfd1d88685a2219c7bd0.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_79c9ed6e023c8d7838a5b2db18380178bed3625f.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000002fec3064000000006cb1ed1e\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600388144,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af86f56cf6c4343ca9966a0fdb0a8133c743970cbda' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '4',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af89d4dbb0bf8292fbc7b85b9eb31f0c70a39c99e47' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '4',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7f43d8bcdb20c7e10cf4c00dfa630058f2adbc125' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_4d070a052cb37dc0edf878b83034c06486abf846.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_4d070a052cb37dc0edf878b83034c06486abf846.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//c2edcf2c69986544d4be263d462cc5c3ae772421.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_4d070a052cb37dc0edf878b83034c06486abf846.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000074cd37d300000000262d0b93\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600388220,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af88484cbca54a038fc6f05e1bea5d14ca97d73ba92' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '5',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af8c18ce0c59bde2af1a4d78e445362f33a5ad05130' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '5',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b76d4e993d1669fe51e2f88cde586c85ee63bec5cc' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_53106331c7a7b0a9e8560a553fff067f5287cadd.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_53106331c7a7b0a9e8560a553fff067f5287cadd.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//0cb6ee420e7bf65a0f362b8373b7c258bd313b12.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_53106331c7a7b0a9e8560a553fff067f5287cadd.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000003ae17a0a000000006362b245\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600388253,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af8a4d47870b19d5d7c95d27c6b9cebe64b80062dc2' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '6',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af8dca8f2131338986c36a7604bcd25ef0d14222616' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '6',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b75bbfd7b3c3ff220c1c787431b33533c2add76678' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_0afb9cd78723df3abf817b8eb44243cac175af70.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_0afb9cd78723df3abf817b8eb44243cac175af70.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//13ffd091aba2e956fc9ab443c9e429a9c97ea72f.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_0afb9cd78723df3abf817b8eb44243cac175af70.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000013d4115d000000000ef175cd\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600388630,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7373d557a284bdcafbcdfb0c46cd2075a4323dc4a' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_c81120003ee6154c6230ce57fff316e2f1b50690.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_c81120003ee6154c6230ce57fff316e2f1b50690.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//df671d6069bf17cc52a0fb0e360372f20655516d.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_c81120003ee6154c6230ce57fff316e2f1b50690.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000001e4ebc5d0000000005a8b2bb\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389087,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af89c45bb4686be4b950855e72279281c3e459721a3' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '8',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af8f27b2488de0b7472f8709e3cb63b692eab43e976' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '8',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7e2ce57a5e3d77f44874f0e33a63cd152ea19d2e1' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_dbd87a4f7efee87440e4527c4bdc48480afd962f.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_dbd87a4f7efee87440e4527c4bdc48480afd962f.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//e396dea1494a9972e589cc2bbdc41745d21b7a11.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_dbd87a4f7efee87440e4527c4bdc48480afd962f.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000005f2def5000000001c3093e7\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389112,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b76734f5239bbca748fcfef691c4af3bf99c0033ad' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_a98c5f50cbf5f6fd5954f1092041d08cb396106a.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_a98c5f50cbf5f6fd5954f1092041d08cb396106a.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//d31813c2e4a6e32bfc103f4c7f4b3142d133c3a2.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_a98c5f50cbf5f6fd5954f1092041d08cb396106a.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"00000000715f6e8d000000005b019a80\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389219,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7deec8f683c68dc0b1448391540f37c37c872d2a9' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_b4bc6b70501ce1a11dadf3b8bc07a0b75027b613.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_b4bc6b70501ce1a11dadf3b8bc07a0b75027b613.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//34051ec67056a4bd157a94a13ec9b83452cf4daf.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_b4bc6b70501ce1a11dadf3b8bc07a0b75027b613.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000028e2f5310000000023ddce47\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389355,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af8cb158b0decad54ba4f1966ae681abc60e4ea3aef' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '11',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af820d05bd5e815fa93f8c70fd1e1e916bac4becc99' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '11',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b793b5027766469ccb70744698e4b76b23038b3132' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_1c39e9471af5a187cd12e41a0d13ef6812d1e705.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_1c39e9471af5a187cd12e41a0d13ef6812d1e705.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//d845248cde2749e08139791e0c6d635a64d3b666.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_1c39e9471af5a187cd12e41a0d13ef6812d1e705.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000061db126300000000646ce704\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389374,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b758ca4134488c52cbb4d71e151025721d4a0c5b7c' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_338b86c06e30189f8e12d5b02def75b0c485f93e.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_338b86c06e30189f8e12d5b02def75b0c485f93e.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//9a63c64fd1261c7387f75789870d9407d1e8b55f.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_338b86c06e30189f8e12d5b02def75b0c485f93e.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000068f41541000000001fee7c68\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389535,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af838fca1393ebc7d5da4bd36833b4fc4973b2e4f5c' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '13',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af89e7ffddb6715ee1c03d607256089b25e47e151b5' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '13',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b73bb407d19878620058963aa4c3a5cf96926a9fec' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_8db4cdd7570ae895301f16ea7c8ae4d45ce4b4da.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_8db4cdd7570ae895301f16ea7c8ae4d45ce4b4da.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//240699020b434257e88be1786add02c6e7015c9c.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_8db4cdd7570ae895301f16ea7c8ae4d45ce4b4da.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"00000000768ac673000000001ea5ff20\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389566,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af86ce04694acf6fb11d19be253a3611e10eebcce6d' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '14',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af846d7a028e838b61febaf27f42a0e3004889a5907' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '14',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7396bb71cd719bb343b197eb10af6609755c5528b' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_a246ef833cc736dc06015e30557ae0dc6e060598.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_a246ef833cc736dc06015e30557ae0dc6e060598.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//8f664f5565761e2426c3de15f7880a8d9e0d1964.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_a246ef833cc736dc06015e30557ae0dc6e060598.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000033e5411f000000002bb3fbad\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389582,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b797392177be8a3812ac75b4dc9212ee60236a4ed2' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_87e2295c1d2b1b601f97c9d0373d30b36b6fa7a9.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_87e2295c1d2b1b601f97c9d0373d30b36b6fa7a9.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//9e0dfc483b48032deea0509189e88c90662092c9.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_87e2295c1d2b1b601f97c9d0373d30b36b6fa7a9.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000073d610060000000036f139f6\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389695,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af86eb06f8e52d8c1f2ac83899473eb551d23262fc1' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '16',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af841171a8c16ab1bf975836a2bcf09f8382c870fe0' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '16',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b776783307742e180d5fedf3d152c95be80d5041c2' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_c0aadc873930e15bc529a62344853315fe0fc509.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_c0aadc873930e15bc529a62344853315fe0fc509.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//380a5d54e7ea685adee3e3a8a8ac8612b4f284ff.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_c0aadc873930e15bc529a62344853315fe0fc509.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000007bbfd426000000000574f960\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389713,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b78b18bd37744473439520beb93108793526738c7b' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_4ae94e5bdd35bbfa290adc483b3f6f93f206c71c.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_4ae94e5bdd35bbfa290adc483b3f6f93f206c71c.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//cbe85296b337b5d18ad4c945dbc4da6f70be1c38.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_4ae94e5bdd35bbfa290adc483b3f6f93f206c71c.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000007ccb5829000000004b676904\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389748,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af8e65c9e9de088a5fa14b5b45ec2bb57d0f2c6fbcb' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '18',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af81642441bfb0a6fced7d18184ff4813cfde5cce16' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '18',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b767af7baf542359856aa94cef4a7dbb880cb9712e' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_98d261e718dcdea957966d3d8018adb0a704a29c.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_98d261e718dcdea957966d3d8018adb0a704a29c.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//e7ec5908679e6620bc600719ce9b12b35db56849.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_98d261e718dcdea957966d3d8018adb0a704a29c.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000002bdb30f1000000003f906165\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389763,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7b69e3ed167b3ce1284293087cb602c334b4d9bf6' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_967d4a7a134cb6bbe6db7982d6e62676939d6e19.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_967d4a7a134cb6bbe6db7982d6e62676939d6e19.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//0df1817518f7112754d2ba6aebc67776e467cd28.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_967d4a7a134cb6bbe6db7982d6e62676939d6e19.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000005aaa596e00000000099ae901\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389798,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af83b4109ed1edb1100a340548bcaa9b200e429b466' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '20',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af8d5c4453aac95bdb21db683907e3089dd3982897f' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '20',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b765374b8ae87d6bd74437785bf871012276619be4' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_d25e274410df5c8ec3f705e036e286edc989209d.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_d25e274410df5c8ec3f705e036e286edc989209d.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//88ca0243ca3f7b0598ef7921766f7e94f5d14564.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_d25e274410df5c8ec3f705e036e286edc989209d.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000003d87dccb000000002bc9d605\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389832,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af8e8d47aec4117697774f198e254ad62872607647c' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '21',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af80dc1034888317f213bd52fc2ef4e1666b5104702' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '21',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b75119204e1edf8d6a83bd2def972a9699c9c4e92f' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_1708599c5a3f9513643ffd7db0592fa736309444.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_1708599c5a3f9513643ffd7db0592fa736309444.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//154571bae091eb8b10978e5f7273b6420725d622.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_1708599c5a3f9513643ffd7db0592fa736309444.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000007f50d759000000007c98fab9\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389861,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7dee73d31e4567f0d8110f2755d2d79900246675e' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_f044ccba50cd3b03523d7d4bb2889afc10219d6a.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_f044ccba50cd3b03523d7d4bb2889afc10219d6a.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//bb5ef9eb1161cc41461a7fd030a9292582e8297f.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_f044ccba50cd3b03523d7d4bb2889afc10219d6a.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000058e5e2970000000002ff52da\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600389984,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af875a8a76520c80df77369fa91658a91f65ce30de3' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '1',
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af8219f17b474545bc7a0571febd55327590d779045' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '1',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b79b7176b4a21b3bbf3e1830e1f91a8eb2304111dc' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'process-video-salt_657790816a0c620ce8b9017bc8bd54b390a070fd.mp4',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_657790816a0c620ce8b9017bc8bd54b390a070fd.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//1ae4e1f668bcbbd2a9b26c795ef2c5336427ecb8.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_657790816a0c620ce8b9017bc8bd54b390a070fd.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000005ea2e5ff0000000053386653\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600390007,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af890c6dbef30ff6796bbde83fbc25b87a04fb5107b' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'jobid' => '2',
        ),
      ),
      '3fbb392e544d994232075698d6bad1e3f564f1defcd655284bfcfe9d734b5eb127cbc463' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1600390555',
          'jobid' => '1',
        ),
      ),
      '3fbb392e544d994232075698d6bad1e35c9fead850b4f7ad800f02ad5528acfc344e596a' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1600390655',
          'jobid' => '2',
        ),
      ),
      '3fbb392e544d994232075698d6bad1e3e19896e39e0d520e058506ba0b64ae634eba1566' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1600397031',
          'jobid' => '1',
        ),
      ),
      '3fbb392e544d994232075698d6bad1e33ac12ba0831b4b830585fa29300615253008a090' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1600415262',
          'jobid' => '2',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7fa1307038229dc3160061e15a14c6c501cbd97b8' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1411:\\"C:32:\\"OpisClosureSerializableClosure\\":1364:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";i:3119;}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000002705de6000000002aa34fd7\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600460530,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af852b29ed549b620451022fcf8d5a12b023f15d77b' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '3',
        ),
      ),
      '3fbb392e544d994232075698d6bad1e317e3a732b5ca187918fb75e8093c8da904078eb5' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1600472585',
          'jobid' => '3',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7669349d55314017bf3b891c0097b90acb251e045' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1415:\\"C:32:\\"OpisClosureSerializableClosure\\":1368:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";s:4:\\"3119\\";}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"00000000393589f3000000004693bc4d\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600473522,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b72b26cfa40f8fa28eb7ecb164338e1a806be2a5e1' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1415:\\"C:32:\\"OpisClosureSerializableClosure\\":1368:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";s:4:\\"3119\\";}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000001f16f90a000000007d1612cc\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600473616,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7607ab929906d8d406a85d590a1c5dc92f1a5c14f' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1415:\\"C:32:\\"OpisClosureSerializableClosure\\":1368:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";s:4:\\"3119\\";}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000042fc7ef9000000003ce4414b\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600474851,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b75599078b693abacdabf4eb3a3ed12d4909339520' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1415:\\"C:32:\\"OpisClosureSerializableClosure\\":1368:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";s:4:\\"3119\\";}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000005e8feddd000000002d15a27e\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600474938,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7e5c5578ae8634b8239d34d499c0a01601f3cb680' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1415:\\"C:32:\\"OpisClosureSerializableClosure\\":1368:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";s:4:\\"3119\\";}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000063bc006d00000000102e1400\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600475213,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af824b7491748dc371769ddb568acad982f004a5bd0' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '9',
        ),
      ),
      '3fbb392e544d994232075698d6bad1e37109012ac43085d19e2ba1e63fe8240ccb171bbc' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1600475216',
          'jobid' => '9',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7744c051f91c26a1540d142a9cdcf78d45f243212' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1415:\\"C:32:\\"OpisClosureSerializableClosure\\":1368:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";s:4:\\"3119\\";}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000004876c96300000000438f217b\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600475386,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af83d6ee5f0b3df083169953cb027ce77b2944f13d0' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '10',
        ),
      ),
      '3fbb392e544d994232075698d6bad1e38cf2179e51e36b12376d399c33e33915f93a0663' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1600475389',
          'jobid' => '10',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7c8f04b25a0d932ede704f094a73693a6cb9c49ba' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1411:\\"C:32:\\"OpisClosureSerializableClosure\\":1364:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";i:9014;}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"00000000191c2bb40000000056e65943\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1600476811,
        ),
      ),
      '3fbb392e544d994232075698d6bad1e3c38cebeeacf6810cd2d8eab7d6527d168ab49476' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1601126079',
          'jobid' => '11',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b71090336a5ea385b444f9c0b11cdc0fd594af478f' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1411:\\"C:32:\\"OpisClosureSerializableClosure\\":1364:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";i:3209;}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"00000000793a6e18000000001a7767dc\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601126088,
        ),
      ),
      '3fbb392e544d994232075698d6bad1e3f59c42b5abe54b7bb46963cdf292e8d6c4f80706' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1601126089',
          'jobid' => '12',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b712c3a5942e875e6821df2ac918cd0573848f50f8' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1411:\\"C:32:\\"OpisClosureSerializableClosure\\":1364:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";i:2212;}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"00000000217afbca00000000088e6fcb\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601126199,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7c3e39a98a0d48df4b17190948e43cfe3bdfb7d48' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1411:\\"C:32:\\"OpisClosureSerializableClosure\\":1364:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";i:7878;}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000000eca6adf00000000142f565d\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601126310,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7b83121e35978e04ceb18b20c720942a427e98162' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1411:\\"C:32:\\"OpisClosureSerializableClosure\\":1364:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";i:3518;}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000007c1cfe6e00000000056385a9\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601126321,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b747979310ee4d578cba7c8d92b8a9438d38a3e172' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1411:\\"C:32:\\"OpisClosureSerializableClosure\\":1364:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";i:3052;}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000003259f98e000000003f7e8231\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601126331,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b78eeb2e4e9fcca59fac285fa85e2790780ed8a3ea' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1411:\\"C:32:\\"OpisClosureSerializableClosure\\":1364:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";i:1942;}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"00000000496f77ec00000000240b5681\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601126704,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7a8e59140e74358f5a49e314481526860cb1a66de' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1411:\\"C:32:\\"OpisClosureSerializableClosure\\":1364:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";i:3003;}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000000e32272b0000000029fd7bbb\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601127691,
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b750db87c3bafea20ef2cabf4df4179aa2a8e9f7a8' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1415:\\"C:32:\\"OpisClosureSerializableClosure\\":1368:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";s:4:\\"3003\\";}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000001362d9eb00000000654b120e\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601128251,
        ),
      ),
      '3fbb392e544d994232075698d6bad1e351ace647b6c168b94805e5375a39200c0ae83d8e' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1601128254',
          'jobid' => '1',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b7ab88dfef3db400d8747d59ad0d9967665a21643c' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1415:\\"C:32:\\"OpisClosureSerializableClosure\\":1368:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";s:4:\\"3003\\";}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000070be0cc8000000004b127e72\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601128661,
        ),
      ),
      '147ef2b299c13e7c9ef817cd82bc8af85d1175d98179c7073f965b069a49e2bb1c297edc' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'processing',
          'jobid' => '2',
        ),
      ),
      '3fbb392e544d994232075698d6bad1e3618500f13c298c750f1eb8df46b674acf149f00b' => 
      array (
        'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
        'bind' => 
        array (
          'job_status' => 'complete',
          'time_completed' => '1601128711',
          'jobid' => '2',
        ),
      ),
      'a7ea795a463fe43a2bf810c7d40c19b74b953c322f196c7d705c2ff196ab5248b679c70a' => 
      array (
        'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
        'bind' => 
        array (
          'job_name0' => 'send-mail-to-helloamadiify@gmail.com',
          'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:36:\\"send-mail-to-helloamadiify@gmail.com\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:1415:\\"C:32:\\"OpisClosureSerializableClosure\\":1368:{a:5:{s:3:\\"use\\";a:2:{s:8:\\"userInfo\\";O:8:\\"stdClass\\":9:{s:9:\\"accountid\\";s:1:\\"1\\";s:9:\\"firstname\\";s:5:\\"frank\\";s:8:\\"lastname\\";s:4:\\"paul\\";s:5:\\"email\\";s:23:\\"helloamadiify@gmail.com\\";s:9:\\"telephone\\";s:11:\\"08029982122\\";s:13:\\"accounttypeid\\";s:1:\\"5\\";s:13:\\"display_image\\";s:44:\\"d7b9e72c745b11e8d6de089343983547df2f56be.png\\";s:8:\\"verified\\";s:1:\\"0\\";s:7:\\"addedby\\";s:1:\\"0\\";}s:9:\\"resetCode\\";s:4:\\"3003\\";}s:8:\\"function\\";s:852:\\"function() use ($userInfo, $resetCode)
        {
            // get mail instance
            $mail = new MessagingMail();

            // set the subject
            $mail->subject(\\\'BOAME Password Reset\\\');

            // set from
            $mail->from(fdb()->get(\\\'default.email-from\\\'));

            // set to
            $mail->to($userInfo->email);

            // get reset template
            $template = fdb()->get(\\\'default.password-reset-template\\\');

            // replace code
            $template = str_replace(\\\'{code}\\\', $resetCode, $template);

            // replace name
            $template = str_replace(\\\'{name}\\\', ucwords($userInfo->firstname . \\\' \\\' . $userInfo->lastname), $template);

            // set the mail body
            $mail->html($template);

            // send now
            $mail->send();
            
        }\\";s:5:\\"scope\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"00000000216dfb5f0000000047523e18\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:22:\\"BoameMessagingEmails\\";s:4:\\"file\\";s:71:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Messaging/Emails.php\\";}}',
          'job_status0' => 'pending',
          'time_queued0' => 1601128797,
        ),
      ),
    ),
    'videos_published' => 
    array (
      '5e29d2b4bf93cc5e50d39bdeb65805f234f52827dbf18b517d33492954436aa36bb4f5fc' => 
      array (
        'query' => 'INSERT INTO videos_published (video_title,accountid,video_length,date_created,videoattachedid) VALUES (:video_title0,:accountid0,:video_length0,:date_created0,:videoattachedid0)',
        'bind' => 
        array (
          'video_title0' => 'Super cool stuff',
          'accountid0' => '3',
          'video_length0' => 206,
          'date_created0' => 1600390545,
          'videoattachedid0' => '1',
        ),
      ),
      '5e29d2b4bf93cc5e50d39bdeb65805f2e52f5e9bc9645c67d5a51ff23d13d169fba2f5aa' => 
      array (
        'query' => 'INSERT INTO videos_published (video_title,accountid,video_length,date_created,videoattachedid) VALUES (:video_title0,:accountid0,:video_length0,:date_created0,:videoattachedid0)',
        'bind' => 
        array (
          'video_title0' => 'Super cool stuff',
          'accountid0' => '3',
          'video_length0' => 206,
          'date_created0' => 1600390645,
          'videoattachedid0' => '1',
        ),
      ),
      '5e29d2b4bf93cc5e50d39bdeb65805f2c35c287720af19bdfef6b07471b0cc775756b77b' => 
      array (
        'query' => 'INSERT INTO videos_published (video_title,accountid,video_length,date_created,videoattachedid) VALUES (:video_title0,:accountid0,:video_length0,:date_created0,:videoattachedid0)',
        'bind' => 
        array (
          'video_title0' => 'Super cool stuff',
          'accountid0' => '3',
          'video_length0' => 206,
          'date_created0' => 1600397022,
          'videoattachedid0' => '2',
        ),
      ),
      'bfc23755a18a1059546622e5288a06b8356a192b7913b04c54574d18c28d46e6395428ab' => 
      array (
        'query' => 'DELETE FROM videos_published WHERE videospublishedid = :videospublishedid ',
        'bind' => 
        array (
          'videospublishedid' => '1',
        ),
      ),
      '5e29d2b4bf93cc5e50d39bdeb65805f28806d8fd78fcad4ef259df120fb018856527c19c' => 
      array (
        'query' => 'INSERT INTO videos_published (video_title,accountid,video_length,date_created,videoattachedid) VALUES (:video_title0,:accountid0,:video_length0,:date_created0,:videoattachedid0)',
        'bind' => 
        array (
          'video_title0' => 'Super cool stuff',
          'accountid0' => '3',
          'video_length0' => '295.242000',
          'date_created0' => 1600415240,
          'videoattachedid0' => '3',
        ),
      ),
      'b54ccce864e3e34c967a55d3378cdf3c4bf755cd43cae4dd591f5dc1a8c463b74bec15c2' => 
      array (
        'query' => 'UPDATE videos_published SET video_title = :video_title  WHERE videospublishedid = :videospublishedid ',
        'bind' => 
        array (
          'video_title' => 'Super cool stuff',
          'videospublishedid' => '2',
        ),
      ),
    ),
    'feedbacks' => 
    array (
      'da002f2baccf2629fad4d215da8d2c0ad3dab874684bdcfd0458661b4979a62ffb114763' => 
      array (
        'query' => 'INSERT INTO feedbacks (accountid,devicehash,fullname,email,feedback) VALUES (:accountid0,:devicehash0,:fullname0,:email0,:feedback0)',
        'bind' => 
        array (
          'accountid0' => 0,
          'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
          'fullname0' => 'mack henry',
          'email0' => 'helloamadiify@gmail.com',
          'feedback0' => 'This is so cool my friend.',
        ),
      ),
    ),
    'password_reset_vault' => 
    array (
      '35dcab34d118e7c1dc18f8e02cb5a211a456529cbe4d63d260c841428fdf4eadfe1063be' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,reset_code,date_created) VALUES (:accountid0,:password0,:reset_code0,:date_created0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$BvDkNjPFgWiDTA8b/s0bp.1h9F7rCBa7VJEVWp5.MbkJFd8U/nOsm',
          'reset_code0' => 2504,
          'date_created0' => 1600459458,
        ),
      ),
      '35dcab34d118e7c1dc18f8e02cb5a2115956451854b8a0cf3de8fb306ea892ff1a2dad87' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,reset_code,date_created) VALUES (:accountid0,:password0,:reset_code0,:date_created0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$hKETI6FvnGcIMb0OamH5guaclU/VXRcFcFTIvVyxpe74TsJ/Wn/cm',
          'reset_code0' => 5308,
          'date_created0' => 1600460036,
        ),
      ),
      'e75a543e0d2c53e5a3eb47930fbd3b50356a192b7913b04c54574d18c28d46e6395428ab' => 
      array (
        'query' => 'DELETE FROM password_reset_vault WHERE password_reset_vaultid = :password_reset_vaultid ',
        'bind' => 
        array (
          'password_reset_vaultid' => '1',
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f609e26c6b2ac18e6888db3b22591f2262e6cd9ddc' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$fC3uoKCFYThnnr3BmO1/h.YzWw/cFBB5KwXuPpmVJ11ahdd/ka3F.',
          'password_salt0' => 'salt_69dfa13dff63a67fa8b1041f273c9e85c6f6ff13',
          'reset_code0' => 5680,
          'date_created0' => 1601123951,
          'expire_date0' => 1601125751,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6e666585a267f26cb7ea3a57edaac9668ab87b10e' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$hkpz0NCh7Sgz1h8Qws09WeJDvt6Eli2LHB8AE3pMA3YEZrVmWKOTm',
          'password_salt0' => 'salt_80274eaf241b4fece5ba2243b481adf24c903058',
          'reset_code0' => 9885,
          'date_created0' => 1601124064,
          'expire_date0' => 1601125864,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6e2864629cf67c0b50a13748c7db382507551ce2a' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$yytjOPLgGUFoIlOiWQw6..e4mhf8Op0X/p6alS0rVUNxF6FZZniHK',
          'password_salt0' => 'salt_d527eae623c5af8654737df4fd5be0413d3ac8e4',
          'reset_code0' => 3905,
          'date_created0' => 1601124187,
          'expire_date0' => 1601125987,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6cff66d727e7d166c9300f22156f058faf9c34bd8' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$9SvLr19GJ0v1mzmn9TReRufcY1ZEaLp3dWuxF3UkT.sFOJ412etuq',
          'password_salt0' => 'salt_98da005e6d45fe8357255a7906c4233db5737eab',
          'reset_code0' => 9717,
          'date_created0' => 1601124239,
          'expire_date0' => 1601126039,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6747cf39ff60ffd05f859a423732ed49ef82532dd' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$c3IrQbIcfepVPa7WrLHKwe6HESBmkEZNY0Vs8mUUYA3y5WkUCZiTi',
          'password_salt0' => 'salt_6fd34ee735543f8f67ff11e3acf5bf3c07dd259f',
          'reset_code0' => 2881,
          'date_created0' => 1601124313,
          'expire_date0' => 1601126113,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f640afd409a46ccef358f56347f809729985fa2860' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$d/geZRyOcQA/BcDeD0NfbOMaU8DT7w.xm6EPjzygnWZYBAdblcNkq',
          'password_salt0' => 'salt_1c15ccdd6bd966fe61f0eeb57851ce6ebcb06074',
          'reset_code0' => 8549,
          'date_created0' => 1601124362,
          'expire_date0' => 1601126162,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f64f0789916f55560447356b2a042d4d5acfd88e3d' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$r3ZmO4X4vI.T0wG4ml.FvOhOdibRvQo9wBeHRxbpwMUJIDMW2Ej5O',
          'password_salt0' => 'salt_5ae496b5a899a803dea0b66305748e8a2bb7d0cf',
          'reset_code0' => 8634,
          'date_created0' => 1601124716,
          'expire_date0' => 1601126516,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6cbf95ae7c5ebe7525fd5695901ed36aeb83375c8' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$nGtf/0TW4ndS2z5N/14bcOIIlq9l7hBwANj7aWUw6RJsX7Odz7PRq',
          'password_salt0' => 'salt_95c1e3f8d8eac53f144fade5ec692549ceb83b8d',
          'reset_code0' => 4767,
          'date_created0' => 1601124773,
          'expire_date0' => 1601126573,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6cd2ce11b21ea76b1dff16ec03b9202a9ca490ecc' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$fSl2IpuVJz1BHv45o4gBnefdaR6K.LHPrCD4Ly.0rYSzOhOa/GNii',
          'password_salt0' => 'salt_b02a2615fc890cf2ed1dc5cda07f9ef4a1afb8d8',
          'reset_code0' => 8210,
          'date_created0' => 1601124842,
          'expire_date0' => 1601126642,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f66c7e80e909f4e24d0fdd495a4021e3be1923ccff' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$l7Xo6Zqzrw7hj9CLQFcfie6Sn2EfqkwKC0uTiXBs9OMbCgpC.IoHe',
          'password_salt0' => 'salt_8271c39fba714d427fd56fdf2bb5641dce506694',
          'reset_code0' => 5131,
          'date_created0' => 1601124849,
          'expire_date0' => 1601126649,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6922e509ee39ba295129e0064a7eab55a5ca2bf68' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$1PyxpGH8ED6DHeKy0W5ZMu7Jm/2voNQh5FdkBsFvKj36T3XoW..ni',
          'password_salt0' => 'salt_421e0bbbfe09427af3a0e02b93d1a3e412260bfc',
          'reset_code0' => 1755,
          'date_created0' => 1601124898,
          'expire_date0' => 1601126698,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6773440546ce8c3e738bb345c773133c7ac00024f' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$.LqlqC7iNOp.VcgcfOMR..KRi.oLv13dMGKDIdqrpbQaNQ46S5PDG',
          'password_salt0' => 'salt_d56a20f94253658d977e2a0e14812505a5979315',
          'reset_code0' => 8505,
          'date_created0' => 1601124955,
          'expire_date0' => 1601126755,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6eabc7d3231f2bb511704b32cc1d43dc8dc509c1b' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$9jX6TbfmctSCs50yFy21iOhay.bPEwYtHlSEPW/7rpITGJOVV4UYO',
          'password_salt0' => 'salt_f01bd5a466f9d6d0e2a17cdf87692043e2190637',
          'reset_code0' => 6419,
          'date_created0' => 1601125015,
          'expire_date0' => 1601126815,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6c7aa39ea3cf6687c5a2c45c6b10a08f22fdadc0c' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$DnftvrmNMlzNvGrVtEYomeDJN7G9idez81vmFG36lbKY0.VWo2.7e',
          'password_salt0' => 'salt_1062ec003bd8537f28843429eda37c2bc1a159fc',
          'reset_code0' => 2736,
          'date_created0' => 1601125046,
          'expire_date0' => 1601126846,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f65c3a3380c04a8cffafc70789bf54d2d21936debe' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$Nlja.aq4lSiz08Qx5UMdlOilQYa07u4aP/VDM4tGN6n9iatxCKnFS',
          'password_salt0' => 'salt_0a9ec36c127433f9b5cd4f1dffd948f3875c0505',
          'reset_code0' => 7500,
          'date_created0' => 1601125264,
          'expire_date0' => 1601127064,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6800d52ef9396c1b3999ee9db7146cfcdc969c333' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$WlD7Skk77dQL22t6J3w29ewRXCqv9TWhPN/KFKUz6JTLABS05H2Eu',
          'password_salt0' => 'salt_9b38488e1cddd00ce84e69a4cf23476f5f7a3866',
          'reset_code0' => 6614,
          'date_created0' => 1601125698,
          'expire_date0' => 1601127498,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6aa7881faa18c0f19559672900341d0320ea93872' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$8S3lfgi/LrDNgJlcdRwWBO4jyKUgNZGu0l9zk5agZj8ox3OQAtWn6',
          'password_salt0' => 'salt_707fbddd3f79d9412ff02e7749acb3bd08524410',
          'reset_code0' => 8852,
          'date_created0' => 1601125724,
          'expire_date0' => 1601127524,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f658c762d511019f1df6fe848413e0a52a2a0e54ec' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$ER9h9EALBvDVyTKNS31bcuoWaAYXnyDGHdpTAc91ixn7r.99/0FJm',
          'password_salt0' => 'salt_131715d1c51560c0f9c6fa91c776f86d35541445',
          'reset_code0' => 8847,
          'date_created0' => 1601125824,
          'expire_date0' => 1601127624,
        ),
      ),
      'eeb934d615332b4cf4f576010a57f6f6027793c2eebadaaa93979f3d0b704c56d0b75c05' => 
      array (
        'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
        'bind' => 
        array (
          'accountid0' => '1',
          'password0' => '$2y$10$eF4ZZN9fY2Gl.rm5xC7Nb.5dqHzaiJd3tGtNWfGEiAcmI8M753p9W',
          'password_salt0' => 'salt_780042d9dd3d92db7a7378074c9cbfc83fe6586b',
          'reset_code0' => 7585,
          'date_created0' => 1601125865,
          'expire_date0' => 1601127665,
        ),
      ),
      'aab1aff4e2b169ec3087cb954755758f85df2bee6e99038f069009e9f967608e116d7d74' => 
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
      'aab1aff4e2b169ec3087cb954755758f2c7e39b4b881e3caeb2c44d92cc75da31066c6e5' => 
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
      'aab1aff4e2b169ec3087cb954755758f07e30e3f703e1ac889df8da87eb01829536445f7' => 
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
      'aab1aff4e2b169ec3087cb954755758fd13ddc5b00cb7c1379d73f3fd540d13ac1692a93' => 
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
      'aab1aff4e2b169ec3087cb954755758ffd33b5a03d45776cb4d80bb86e1bf7643700d7b4' => 
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
      'aab1aff4e2b169ec3087cb954755758f332c83b36728c9868f40e0a7efb92f7ff78dfc4e' => 
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
      'aab1aff4e2b169ec3087cb954755758ff01d3df1803121d937a9ecf93c1f6e35ffc8c1ed' => 
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
      'aab1aff4e2b169ec3087cb954755758f13cb28e15e898935e19883406a85b8c00adea4af' => 
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
      'aab1aff4e2b169ec3087cb954755758f13ad12b7261e3cbbaaf78d297266c2b0ade7aac8' => 
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
      'aab1aff4e2b169ec3087cb954755758fe500dcd7b3bcc850397d4983a503a289ad1018fb' => 
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
      'aab1aff4e2b169ec3087cb954755758ffa18c20a9207b0cb9569a5cb7552a2572aaa7123' => 
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
    ),
    'authentication' => 
    array (
      'bf1c1506cca072236b3a929343bc7d6b18bab484057ce526fbbc8b02ac4777c3e39df648' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '79657fb1e12954628dd73185d59fa8cd71be6948',
          'last_seen' => '1600486984',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6bc51e0fb9c6e260791d2d3d9c2e4119315e5dbb53' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => 'b504b2e83a8696d59a4ecf7a4d66d469b09151c1',
          'last_seen' => '1600487136',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6b72b31cbe76fd217db0606337330c421fdc5f4627' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '0a7c311c17a7a43f2f6f285fb7393cc0c57a3b1a',
          'last_seen' => '1600487146',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6b27aef7e27db28cacffb7b1d2e2a17724c533d41c' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '06f180f91aa923f2f0a038f2a1c2d2f065cb4625',
          'last_seen' => '1600487326',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6bf366314c1757fdb1a69957a928f3c6792f74953d' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => 'f723a1fc0bf76f29dad6f25e22c0616e00f4a0e9',
          'last_seen' => '1600487485',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6bf678d85f2e81ecec38595ce4860a707ad4e364c2' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '01446eebd28393139e78c0175047bb6cbbda056f',
          'last_seen' => '1600487618',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6bbb96dbcf60e4883d10d1e7435d0e316d224c130f' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => 'adde014c8d09c619c4b02d7b09aec7cb6e3de173',
          'last_seen' => '1601045452',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6b6ce1a2be7b531599d4654f264c0577ef6ff13861' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => 'f8c6fed4636c10ebe951627ada20b96e1d757f13',
          'last_seen' => '1601045467',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6bf768b1620372764c6a45e644f57b04c585652516' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '2ea165f0509c38d6cef8f25d3169e70a2ad1a26c',
          'last_seen' => '1601052868',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6b0ed9f873a91f461f1cff7eda734cb09c9048b75c' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '81764eaee394c29d3348cc792d2d95c275c1e248',
          'last_seen' => '1601052997',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6b846e988f57911e50e8aee17a4cec5cb953d4f5a7' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '064d8519e4763ca5ce37c6914cb252e44adfe93f',
          'last_seen' => '1601053078',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6bd2a129e0454aa658db4c37d4af9930c5d928c420' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '4e70c4779c5a6fca1da96f1db0692a7c3e8c1f28',
          'last_seen' => '1601053085',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6bed4aa75e2be3b3b18f6129b39b0f8c51eb404604' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '327528916920ec6273b76ec24b759f8a6cad180c',
          'last_seen' => '1601053110',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6bf2e67472170d6e39a99a387f2ded4053c3d36c50' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => 'c574a68a5f616ba7c5fefc81d164a972e1b196d9',
          'last_seen' => '1601130432',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6b5aa654bfccdbbd9cbcd6015da35d707b0fe760c1' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '635cf2f05ee106bb9762649527bbe23e4ec33442',
          'last_seen' => '1601133941',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6b2c76962b80b0bdb8ee1f737d4f927e9b04bdac32' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => 'c846b975c208044856cc034b0eeb71fec748eb78',
          'last_seen' => '1601134003',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6b25b501de561c37d8953ded950520ad31243a765e' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '89c46521251f05d11751e0b855a228908dd42139',
          'last_seen' => '1601134011',
          'accountid' => '1',
        ),
      ),
      'bf1c1506cca072236b3a929343bc7d6b91a048008c6ff84539d763ba57313158433791c1' => 
      array (
        'query' => 'UPDATE authentication SET token = :token , last_seen = :last_seen  WHERE accountid = :accountid ',
        'bind' => 
        array (
          'token' => '4b9af9e80d36348d6bcea361009e5adfb098a096',
          'last_seen' => '1601134183',
          'accountid' => '1',
        ),
      ),
    ),
  ),
);

?>