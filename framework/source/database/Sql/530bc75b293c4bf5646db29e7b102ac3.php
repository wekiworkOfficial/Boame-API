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
  ),
);

?>