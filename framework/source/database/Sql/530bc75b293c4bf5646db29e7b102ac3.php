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
    ),
  ),
);

?>