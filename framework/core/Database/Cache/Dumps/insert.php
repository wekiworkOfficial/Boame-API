<?php

return array (
  'dadfa8ede15de1aa684014ee05764d51' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accounttypeid = :accounttypeid and accountid = :accountid ',
    'bind' => 
    array (
      'accounttypeid' => 5,
      'accountid' => 1,
    ),
  ),
  '4810718b6e25aff35d3d976b80b6a5fb' => 
  array (
    'query' => 'SELECT * FROM volunteers WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => 1,
    ),
  ),
  'b281c6865f3d51bb96d9bae794cdee2d' => 
  array (
    'query' => 'SELECT * FROM volunteers {where}',
    'bind' => 
    array (
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
  '5749c47264c42d0eafe6e5c9f65d44d9' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE account_type = :account_type ',
    'bind' => 
    array (
      'account_type' => 'volunteer',
    ),
  ),
  '053ca0e82c3d87d573e995d43aae3f83' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE email = :email or telephone = :telephone ',
    'bind' => 
    array (
      'email' => 'helloamadiify@gmail.com',
      'telephone' => '08029982122',
    ),
  ),
  'ddf492935938ca87954f44703f3ad886' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE firstname = :firstname AND lastname = :lastname AND email = :email AND telephone = :telephone AND accounttypeid = :accounttypeid AND verified = :verified AND display_image = :display_image  ',
    'bind' => 
    array (
      'firstname' => 'frank',
      'lastname' => 'paul',
      'email' => 'helloamadiify@gmail.com',
      'telephone' => '08029982122',
      'accounttypeid' => '5',
      'verified' => '0',
      'display_image' => 'd7b9e72c745b11e8d6de089343983547df2f56be.png',
    ),
  ),
  '46f503a6cc0b6591f29e555c5c3254c8' => 
  array (
    'query' => 'INSERT INTO authentication (accountid,date_created) VALUES (:accountid0,:date_created0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'date_created0' => 1600286650,
    ),
  ),
  '844aa3edc30d65c30c09d7abec36c462' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE accountid = :accountid AND date_created = :date_created  ',
    'bind' => 
    array (
      'accountid' => '1',
      'date_created' => '1600286650',
    ),
  ),
  'e1f6d6f4c8b07e1657c9bc8cfffb665a' => 
  array (
    'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
    'bind' => 
    array (
      'authenticationid0' => '1',
      'passwordhash0' => '$2y$10$FhPVZ73M/wyXb2NdJzRdG./axAnBe6lJslykHrzbHJYnt9XXVb25K',
      'password_salt0' => 'salt_fefcb3d17ff50adb834ff0fd5e265c3da8a21e98',
    ),
  ),
  '5b247d59aad754ed446dd82e9c205b5e' => 
  array (
    'query' => 'INSERT INTO volunteers (accountid,residential_address,cv_address,biography,date_created,volunteerpositionid) VALUES (:accountid0,:residential_address0,:cv_address0,:biography0,:date_created0,:volunteerpositionid0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'residential_address0' => 'hello 2 @muke street',
      'cv_address0' => '53c6bd2055f4aeb6dfe76a436a0e820f635bec6b.docx',
      'biography0' => 'i love coding',
      'date_created0' => 1600286650,
      'volunteerpositionid0' => '1',
    ),
  ),
  '181f624aff69e32078cc040d84088712' => 
  array (
    'query' => 'INSERT INTO accounts (firstname,lastname,email,telephone,accounttypeid,verified,display_image) VALUES (:firstname0,:lastname0,:email0,:telephone0,:accounttypeid0,:verified0,:display_image0)',
    'bind' => 
    array (
      'firstname0' => 'frank',
      'lastname0' => 'paul',
      'email0' => 'helloamadiify@gmail.com',
      'telephone0' => '08029982122',
      'accounttypeid0' => 5,
      'verified0' => 0,
      'display_image0' => 'd7b9e72c745b11e8d6de089343983547df2f56be.png',
    ),
  ),
  '0716f2bce31983c0749850b78eab0e2e' => 
  array (
    'query' => 'INSERT INTO authentication (accountid,date_created) VALUES (:accountid0,:date_created0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'date_created0' => 1600286716,
    ),
  ),
  'b7ae1eec3bfc6a1da4ea40432b77d409' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE accountid = :accountid AND date_created = :date_created  ',
    'bind' => 
    array (
      'accountid' => '1',
      'date_created' => '1600286716',
    ),
  ),
  'e21b63b1713a864ba323be6f4879165c' => 
  array (
    'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
    'bind' => 
    array (
      'authenticationid0' => '1',
      'passwordhash0' => '$2y$10$1MkVj840AvHlSbwcU8pF2.o9dXEqCBDvTQxFI6wVmjtGwwt/kGsjS',
      'password_salt0' => 'salt_1553a902ef711990d81573f5048346eaea6b8068',
    ),
  ),
  '1f8a639b12eea4408144810b89086682' => 
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
  '2335288248e16f0617db9b0563e2303e' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '1',
    ),
  ),
  '0c8fa4afd58a2eb2fb4ad3c59ed01798' => 
  array (
    'query' => 'SELECT * FROM navigation WHERE nav_tag = :nav_tag and accounttypeid = :accounttypeid and platformid = :platformid ',
    'bind' => 
    array (
      'nav_tag' => 'knowledge-tag',
      'accounttypeid' => '5',
      'platformid' => '1',
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
  'fbeb1d0362234c54f83c486a5c52370e' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE account_type = :account_type ',
    'bind' => 
    array (
      'account_type' => 'moderator',
    ),
  ),
  '44c4632a5e5302e71040f79aab192f1e' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE account_type = :account_type ',
    'bind' => 
    array (
      'account_type' => 'administrator',
    ),
  ),
  'f8f71262db19c6b6087882e553ace487' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE email = :email or telephone = :telephone ',
    'bind' => 
    array (
      'email' => 'helloadmin@m.com',
      'telephone' => '08011001100',
    ),
  ),
  '317c1e542401c6b7e01e3af7f8e9f79b' => 
  array (
    'query' => 'INSERT INTO accounts (firstname,lastname,email,telephone,accounttypeid,verified,addedby) VALUES (:firstname0,:lastname0,:email0,:telephone0,:accounttypeid0,:verified0,:addedby0)',
    'bind' => 
    array (
      'firstname0' => 'admin',
      'lastname0' => 'wekiwork',
      'email0' => 'helloadmin@m.com',
      'telephone0' => '08011001100',
      'accounttypeid0' => 1,
      'verified0' => 1,
      'addedby0' => '0',
    ),
  ),
  'c8e91a9f693ab28a2f9b5b718e945d92' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE firstname = :firstname AND lastname = :lastname AND email = :email AND telephone = :telephone AND accounttypeid = :accounttypeid AND verified = :verified AND addedby = :addedby  ',
    'bind' => 
    array (
      'firstname' => 'admin',
      'lastname' => 'wekiwork',
      'email' => 'helloadmin@m.com',
      'telephone' => '08011001100',
      'accounttypeid' => '1',
      'verified' => '1',
      'addedby' => '0',
    ),
  ),
  '89ea6970badfbaa3a71b2f82088d2c14' => 
  array (
    'query' => 'INSERT INTO authentication (accountid,date_created) VALUES (:accountid0,:date_created0)',
    'bind' => 
    array (
      'accountid0' => '2',
      'date_created0' => 1600334084,
    ),
  ),
  '523ad733bc4ccd5a6a3bc7e94a00edc4' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE accountid = :accountid AND date_created = :date_created  ',
    'bind' => 
    array (
      'accountid' => '2',
      'date_created' => '1600334084',
    ),
  ),
  '734ed1749accd4355bd8f6542fb822b6' => 
  array (
    'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
    'bind' => 
    array (
      'authenticationid0' => '2',
      'passwordhash0' => '$2y$10$sat699PAkS8vmXMZ6Kjxa.ZsN5mWkP0mNgY.a7Er7vfJOaKDR/Xl.',
      'password_salt0' => 'salt_470f6e9797e81817d72f41f21e175ab1a35f64c7',
    ),
  ),
  '69f3e6773514164e2eb1d22ace76bd91' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE email = :email or telephone = :telephone ',
    'bind' => 
    array (
      'email' => 'hello1@m.com',
      'telephone' => '08011221121',
    ),
  ),
  '1c60894f52b6bd2cb1f800f6515a7eba' => 
  array (
    'query' => 'INSERT INTO accounts (firstname,lastname,email,telephone,accounttypeid,verified,addedby) VALUES (:firstname0,:lastname0,:email0,:telephone0,:accounttypeid0,:verified0,:addedby0)',
    'bind' => 
    array (
      'firstname0' => 'amadi',
      'lastname0' => 'joe',
      'email0' => 'hello1@m.com',
      'telephone0' => '08011221121',
      'accounttypeid0' => 3,
      'verified0' => 1,
      'addedby0' => '2',
    ),
  ),
  '25aac433b467dfd8e6fe773b9cf5622e' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE firstname = :firstname AND lastname = :lastname AND email = :email AND telephone = :telephone AND accounttypeid = :accounttypeid AND verified = :verified AND addedby = :addedby  ',
    'bind' => 
    array (
      'firstname' => 'amadi',
      'lastname' => 'joe',
      'email' => 'hello1@m.com',
      'telephone' => '08011221121',
      'accounttypeid' => '3',
      'verified' => '1',
      'addedby' => '2',
    ),
  ),
  '7a2d38f40459f3bda3861fbba7ad4c99' => 
  array (
    'query' => 'INSERT INTO authentication (accountid,date_created) VALUES (:accountid0,:date_created0)',
    'bind' => 
    array (
      'accountid0' => '3',
      'date_created0' => 1600334118,
    ),
  ),
  'a43ff6f162c77b45bf43592678cab836' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE accountid = :accountid AND date_created = :date_created  ',
    'bind' => 
    array (
      'accountid' => '3',
      'date_created' => '1600334118',
    ),
  ),
  '20c363ed13f4e2259817f48bdc05485f' => 
  array (
    'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
    'bind' => 
    array (
      'authenticationid0' => '3',
      'passwordhash0' => '$2y$10$NhkO3IJwuv.ESMJv/lDaoe86cLoW4cjjdTvRSuNVfO8XlIqQvBWmK',
      'password_salt0' => 'salt_e47e9599b580a7c0b3c654af7652d2f39d71199f',
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
  '3f098de336a90ee40d83d3a23b4591ec' => 
  array (
    'query' => 'SELECT * FROM articles WHERE article_title = :article_title ',
    'bind' => 
    array (
      'article_title' => 'Building a stronger Ghana',
    ),
  ),
  'd6e70bccf495bd631a1fc9fa8ce92740' => 
  array (
    'query' => 'SELECT * FROM articles WHERE article_cover_image = :article_cover_image AND article_title = :article_title AND article_text = :article_text AND total_views = :total_views AND date_created = :date_created AND accountid = :accountid  ',
    'bind' => 
    array (
      'article_cover_image' => '4fe189f35b2bb9cb2e095c5c5a2cb869c553c2ff.jpg',
      'article_title' => 'Building a stronger Ghana',
      'article_text' => 'V2UgaGF2ZSBzZWVuIHRoaXMgZWZmZWN0IHdoZXJlIHRoZXJlIGEgYnVuY2ggb2YgdGV4dCBsaW5rcyBvbiB0aGUgcGFnZSBhbmQgb24gaG92ZXIgYW4gaW1hZ2UgaXMgbG9hZGVkIHVwIGFuZCBzaG93biB0byB0aGUgdmlzaXRvci4gVGhpcyBzbmlwcGV0IGFsbG93cyB5b3UgdG8gYWNoaWV2ZSB0aGlzIHBvcHVwIGltYWdlIG9uIHRleHQgbGluayBob3ZlciBvbiB5b3VyIHdlYiBwYWdlcy4KCkhvd2V2ZXIsIGlmIHlvdeKAmXJlIGFjY2Vzc2luZyBibG9ja2VkIGNvbnRlbnQsIHRoaW5ncyBhcmUgYSBsaXR0bGUgZGlmZmVyZW50LiBXaGlsZSBhIHByb3h5IGlzIGdvb2QgZm9yIGxvdyBzdGFrZXMsIGl0IGRvZXNu4oCZdCByZW1vdmUgaWRlbnRpZnlpbmcgaW5mb3JtYXRpb24gb3RoZXIgdGhhbiB0aGUgSVAgYWRkcmVzcy4gSXTigJlzIG9wZW4gdG8gc25vb3BpbmcgZnJvbSBhbnlvbmUgd2l0aCBhY2Nlc3MgdG8geW91ciBkYXRhIHN0cmVhbSwgc3VjaCBhcyB5b3VyIElTUCBhbmQgZ292ZXJubWVudC4gQWNjZXNzaW5nIGNlbnNvcmVkIGZpbGUtc2hhcmluZyB3ZWJzaXRlcyBhbmQgb3RoZXIgcXVlc3Rpb25hYmxlIGNvbnRlbnQgaXMgYmVzdCBkb25lIHRocm91Z2ggYSBWUE4u',
      'total_views' => '0',
      'date_created' => '1600339266',
      'accountid' => '3',
    ),
  ),
  'daa202818e66a95c4754aee172b65683' => 
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
);
