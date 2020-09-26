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
  'f943b55cad651551fa87d7d807d1c3fd' => 
  array (
    'query' => 'SELECT * FROM videos_published WHERE video_title = :video_title ',
    'bind' => 
    array (
      'video_title' => 'Super cool stuff',
    ),
  ),
  'a42a4487e13e331f62172a522b8c02cd' => 
  array (
    'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
    'bind' => 
    array (
      'job_name0' => 'process-video-salt_54924b83786c4ac5f602c4a36e99dc385790f361.mp4',
      'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_54924b83786c4ac5f602c4a36e99dc385790f361.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//a8ef96197729a7261da7f71c70a9591fb32d1313.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_54924b83786c4ac5f602c4a36e99dc385790f361.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"0000000026a41101000000002f858fb2\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
      'job_status0' => 'pending',
      'time_queued0' => 1600386581,
    ),
  ),
  'af0f75b9e766315734b6e5725be2fff6' => 
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
  '2049142ce9609aef3a5490dd9b5faa90' => 
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
  '29be624069d2c0bd1fd538f1219af24b' => 
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
  'ada88b9db4897c9702858515e68274c7' => 
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
  '49927ecef458f360a13ab832a6637b73' => 
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
  '9a5a8efed78534a296cf539c3d47dea7' => 
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
  '8dcef9bb5654927a9281002c29548422' => 
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
  '5a34614b07ec07c4c1fdb3dc2880f9cd' => 
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
  '0f7ffba3de1d24266b01f36827611f6f' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_5c0cd564eb354aab1a243626d40dd1fdc2a270e5.mp4',
      'job_status' => 'pending',
    ),
  ),
  '6276e4780edb7a4759eaf6f94f9b9d8d' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_5c0cd564eb354aab1a243626d40dd1fdc2a270e5.mp4',
      'job_status' => 'processing',
    ),
  ),
  '528efe937e6aeb0a980c650313e550d5' => 
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
  '29d03ba74540d83434025f63981e1941' => 
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
  'cfaaa41b925798568a5b1be54867b20c' => 
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
  '1d0095bca0030b4c952d5c39a9673608' => 
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
  '66db77315fb89fc91a42d0842cebe1b9' => 
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
  '497035c94eb294161358083fe5c8d634' => 
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
  '1d07e30c6b3dd10fc4372878129406e3' => 
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
  'a108c91d125a2cd7139a47936b914e9a' => 
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
  'c098f0e7ba869f7eceead118ede5a296' => 
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
  '4d4ec3390636e36e4981ed02edc58263' => 
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
  '218b0d98f304e43724668b5a03aa5c7c' => 
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
  '9b24ade0635592efa4fca786746b832a' => 
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
  '280032ac51f59f0bf4bf2d1a3834ecee' => 
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
  '6d9202c39587039b51f09cbbb82100ce' => 
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
  'edaf9c549ed9261cbdd3ff4326214a40' => 
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
  'def2611ff987cc601213162d33ff3dac' => 
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
  '62b93990beb324e1004339cc6724a632' => 
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
  '981d2f1c2601d41c292560c1bcd20f08' => 
  array (
    'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
    'bind' => 
    array (
      'job_name0' => 'process-video-salt_92443d46de7c7dcdaf9f9f83f2edc4b2abdb1018.mp4',
      'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_92443d46de7c7dcdaf9f9f83f2edc4b2abdb1018.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//012a81f3d1ec3ad88f6716c42b5ea83d63d898fa.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_92443d46de7c7dcdaf9f9f83f2edc4b2abdb1018.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"00000000596a65210000000002bc2510\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
      'job_status0' => 'pending',
      'time_queued0' => 1600390545,
    ),
  ),
  '709e1e5ee9143cbb809af3ca3e261bae' => 
  array (
    'query' => 'INSERT INTO video_attached (video_address,total_views,total_likes,video_caption,date_created,video_frame_address) VALUES (:video_address0,:total_views0,:total_likes0,:video_caption0,:date_created0,:video_frame_address0)',
    'bind' => 
    array (
      'video_address0' => 'salt_92443d46de7c7dcdaf9f9f83f2edc4b2abdb1018.mp4',
      'total_views0' => 0,
      'total_likes0' => 0,
      'video_caption0' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
      'date_created0' => 1600390545,
      'video_frame_address0' => 'salt_952fd1c80fddd809fd73580d059c51413f78d0ab.jpg',
    ),
  ),
  '874a918523b2bcb9370234c89f7dea73' => 
  array (
    'query' => 'SELECT * FROM video_attached WHERE video_address = :video_address AND total_views = :total_views AND total_likes = :total_likes AND video_caption = :video_caption AND date_created = :date_created AND video_frame_address = :video_frame_address  ',
    'bind' => 
    array (
      'video_address' => 'salt_92443d46de7c7dcdaf9f9f83f2edc4b2abdb1018.mp4',
      'total_views' => '0',
      'total_likes' => '0',
      'video_caption' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
      'date_created' => '1600390545',
      'video_frame_address' => 'salt_952fd1c80fddd809fd73580d059c51413f78d0ab.jpg',
    ),
  ),
  'f66cb81c6efb823f92220b1891361263' => 
  array (
    'query' => 'SELECT * FROM videos_published WHERE video_title = :video_title AND accountid = :accountid AND video_length = :video_length AND date_created = :date_created AND videoattachedid = :videoattachedid  ',
    'bind' => 
    array (
      'video_title' => 'Super cool stuff',
      'accountid' => '3',
      'video_length' => '206',
      'date_created' => '1600390545',
      'videoattachedid' => '1',
    ),
  ),
  'b891a45dd066133795981647b05d735f' => 
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
  '97e8cc4b4643f53a35a03afa55b68d76' => 
  array (
    'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
    'bind' => 
    array (
      'job_name0' => 'process-video-salt_396cada6b8f5de1e1e126862cd21d9e417cd372e.mp4',
      'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_396cada6b8f5de1e1e126862cd21d9e417cd372e.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//b943ede843b908df994d1acb741ca5c1ab831026.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_396cada6b8f5de1e1e126862cd21d9e417cd372e.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000007a3486af0000000043dec2f5\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
      'job_status0' => 'pending',
      'time_queued0' => 1600390645,
    ),
  ),
  'ebb3e6a80af5472f7bfcfabe082be75f' => 
  array (
    'query' => 'INSERT INTO video_attached (video_address,total_views,total_likes,total_dislikes,video_caption,date_created,video_frame_address) VALUES (:video_address0,:total_views0,:total_likes0,:total_dislikes0,:video_caption0,:date_created0,:video_frame_address0)',
    'bind' => 
    array (
      'video_address0' => 'salt_396cada6b8f5de1e1e126862cd21d9e417cd372e.mp4',
      'total_views0' => 0,
      'total_likes0' => 0,
      'total_dislikes0' => 0,
      'video_caption0' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
      'date_created0' => 1600390645,
      'video_frame_address0' => 'salt_7dc5152ed26e51ba26201a059938ce3264e84b33.jpg',
    ),
  ),
  'e58971c3d4d8675c4faed6fd4d69ded4' => 
  array (
    'query' => 'SELECT * FROM video_attached WHERE video_address = :video_address AND total_views = :total_views AND total_likes = :total_likes AND total_dislikes = :total_dislikes AND video_caption = :video_caption AND date_created = :date_created AND video_frame_address = :video_frame_address  ',
    'bind' => 
    array (
      'video_address' => 'salt_396cada6b8f5de1e1e126862cd21d9e417cd372e.mp4',
      'total_views' => '0',
      'total_likes' => '0',
      'total_dislikes' => '0',
      'video_caption' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
      'date_created' => '1600390645',
      'video_frame_address' => 'salt_7dc5152ed26e51ba26201a059938ce3264e84b33.jpg',
    ),
  ),
  'c8089139bb09ca35524934b7e870cad0' => 
  array (
    'query' => 'SELECT * FROM videos_published WHERE video_title = :video_title AND accountid = :accountid AND video_length = :video_length AND date_created = :date_created AND videoattachedid = :videoattachedid  ',
    'bind' => 
    array (
      'video_title' => 'Super cool stuff',
      'accountid' => '3',
      'video_length' => '206',
      'date_created' => '1600390645',
      'videoattachedid' => '1',
    ),
  ),
  'f84b9a0a7673c302cae8185de9610e31' => 
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
  'd090e38727a73de1658586e74d898ab3' => 
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
  '3852dfa8cf33a69eaa51555170584ffa' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid AND accountid = :accountid AND devicehash = :devicehash AND case_text = :case_text AND date_created = :date_created  ',
    'bind' => 
    array (
      'casetypeid' => '1',
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text' => 'first video case',
      'date_created' => '1600391255',
    ),
  ),
  'ba659a53c09801030abe16f3bb629e1b' => 
  array (
    'query' => 'SELECT * FROM case_types WHERE case_type = :case_type ',
    'bind' => 
    array (
      'case_type' => 'video',
    ),
  ),
  '9481d4660cce6402aa803dc5a0633665' => 
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
  '61e99c36af1af054e637ca5dc7bf1b03' => 
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
  '67b67e86fbe0fba29e6d59768eb70b4a' => 
  array (
    'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
    'bind' => 
    array (
      'casetypeid0' => 1,
      'accountid0' => 0,
      'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text0' => 'first video case',
      'date_created0' => 1600391540,
    ),
  ),
  'a7a608c45243943e8bb015ca6f05ab2b' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid AND accountid = :accountid AND devicehash = :devicehash AND case_text = :case_text AND date_created = :date_created  ',
    'bind' => 
    array (
      'casetypeid' => '1',
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text' => 'first video case',
      'date_created' => '1600391540',
    ),
  ),
  '27d6f2b1e217bf78a01e193e677626ff' => 
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
  '1d13ac7f81c0c037639cb470402b0940' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_92443d46de7c7dcdaf9f9f83f2edc4b2abdb1018.mp4',
      'job_status' => 'pending',
    ),
  ),
  '8a697fe679559ab3e95f9d06b1cc05bf' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_92443d46de7c7dcdaf9f9f83f2edc4b2abdb1018.mp4',
    ),
  ),
  '875ec3e34c7685e517a86fc515baf9e6' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1600390555',
      'jobid' => '1',
    ),
  ),
  '56338d31e921860fabd7403d87fe0d3a' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_396cada6b8f5de1e1e126862cd21d9e417cd372e.mp4',
      'job_status' => 'pending',
    ),
  ),
  'cdc98589d52b78159c18b6bbf1872320' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_396cada6b8f5de1e1e126862cd21d9e417cd372e.mp4',
    ),
  ),
  '40fd952b382cba6616d248b5352c021b' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1600390655',
      'jobid' => '2',
    ),
  ),
  '4ff3f41e03520961709dbec9cf18d569' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_e300e91b9c70f7de4a7ce92c57f33248cf3a3787.mp4',
      'job_status' => 'pending',
    ),
  ),
  '140398d7d26144412cd8b9fd917f6c64' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_e300e91b9c70f7de4a7ce92c57f33248cf3a3787.mp4',
    ),
  ),
  'cf3387abf07f386c6e8b47aa477d1f04' => 
  array (
    'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
    'bind' => 
    array (
      'casetypeid0' => 1,
      'accountid0' => 0,
      'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text0' => 'first video case',
      'date_created0' => 1600391662,
    ),
  ),
  '89191e96855e2271b1bc7eabdb4ccd9e' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid AND accountid = :accountid AND devicehash = :devicehash AND case_text = :case_text AND date_created = :date_created  ',
    'bind' => 
    array (
      'casetypeid' => '1',
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text' => 'first video case',
      'date_created' => '1600391662',
    ),
  ),
  '16845b13bb1633f7759f7fab5d3c55bd' => 
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
  '90b98346ab45d3a6d648091d5dc461ab' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE account_type = :account_type ',
    'bind' => 
    array (
      'account_type' => 'reporter',
    ),
  ),
  'd4e25f10c34eb1f3809a64c54e9854ae' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE email = :email or telephone = :telephone ',
    'bind' => 
    array (
      'email' => 'hello@m.com',
      'telephone' => '08011221122',
    ),
  ),
  '055f4fd9baeef6a217ee8e058078b34f' => 
  array (
    'query' => 'INSERT INTO accounts (firstname,lastname,email,telephone,accounttypeid,verified) VALUES (:firstname0,:lastname0,:email0,:telephone0,:accounttypeid0,:verified0)',
    'bind' => 
    array (
      'firstname0' => 'amadi',
      'lastname0' => 'ifeanyi',
      'email0' => 'hello@m.com',
      'telephone0' => '08011221122',
      'accounttypeid0' => 4,
      'verified0' => 1,
    ),
  ),
  '5c681ab6ecb636b0fbe882fed4152721' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE firstname = :firstname AND lastname = :lastname AND email = :email AND telephone = :telephone AND accounttypeid = :accounttypeid AND verified = :verified  ',
    'bind' => 
    array (
      'firstname' => 'amadi',
      'lastname' => 'ifeanyi',
      'email' => 'hello@m.com',
      'telephone' => '08011221122',
      'accounttypeid' => '4',
      'verified' => '1',
    ),
  ),
  'd7fd6ff272a215d2025794ea63dae7aa' => 
  array (
    'query' => 'INSERT INTO authentication (accountid,date_created) VALUES (:accountid0,:date_created0)',
    'bind' => 
    array (
      'accountid0' => '4',
      'date_created0' => 1600394999,
    ),
  ),
  '7c9584a0ff9bfc6e385cebe0da3c5485' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE accountid = :accountid AND date_created = :date_created  ',
    'bind' => 
    array (
      'accountid' => '4',
      'date_created' => '1600394999',
    ),
  ),
  '8b6303b53fe2f312e5e578df7e3c8c71' => 
  array (
    'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
    'bind' => 
    array (
      'authenticationid0' => '4',
      'passwordhash0' => '$2y$10$VDNXnVJTwIwswTMyGK9N5.Csk0kV0zqGovQ4EWW7sSiIPe/rbhWke',
      'password_salt0' => 'salt_2fa5aaebd765be931a0a812c11a52dd70cbfe25c',
    ),
  ),
  '2380f0e1ba910f6417789c6e16f3cb64' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE account_type = :account_type ',
    'bind' => 
    array (
      'account_type' => 'counsellor',
    ),
  ),
  '092469f2b491b32de16bf1c46e356a5a' => 
  array (
    'query' => 'SELECT * FROM case_types WHERE case_type = :case_type ',
    'bind' => 
    array (
      'case_type' => 'text',
    ),
  ),
  '5c8a1406d518f039ec6b0d078291ef23' => 
  array (
    'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
    'bind' => 
    array (
      'casetypeid0' => 1,
      'accountid0' => 0,
      'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text0' => 'Also, there are APIs available to access third party data; for example, LINQ to Amazon provides the ability to use LINQ with Amazon web services to search for books and other items. This can be achieved by implementing the IQueryable interface for Amazon.',
      'date_created0' => 1600395008,
    ),
  ),
  '6fa488063a59638a178f38794fac6a36' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid AND accountid = :accountid AND devicehash = :devicehash AND case_text = :case_text AND date_created = :date_created  ',
    'bind' => 
    array (
      'casetypeid' => '1',
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text' => 'Also, there are APIs available to access third party data; for example, LINQ to Amazon provides the ability to use LINQ with Amazon web services to search for books and other items. This can be achieved by implementing the IQueryable interface for Amazon.',
      'date_created' => '1600395008',
    ),
  ),
  'cd5dd6b6f0a25ff8d3d0368c2a037b84' => 
  array (
    'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
    'bind' => 
    array (
      'casesreportedid0' => '1',
      'image_address0' => '30fa227268d67da2649aa44313c5dc62d542b966.png',
      'date_created0' => 1600395008,
    ),
  ),
  'fb6cb1d502053501eca86547c23b6f57' => 
  array (
    'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
    'bind' => 
    array (
      'casesreportedid0' => '1',
      'image_address0' => 'a5f6deb482c2a8fb91a382430d1fbcbddb9031c9.png',
      'date_created0' => 1600395008,
    ),
  ),
  '0b8a4c5fb818d991c397e03e88c686f7' => 
  array (
    'query' => 'SELECT * FROM case_types WHERE case_type = :case_type ',
    'bind' => 
    array (
      'case_type' => 'audio',
    ),
  ),
  '450796e39d1ec4d21db8b3b03cf95196' => 
  array (
    'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
    'bind' => 
    array (
      'casetypeid0' => 1,
      'accountid0' => 0,
      'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text0' => 'first audio case',
      'date_created0' => 1600395011,
    ),
  ),
  '543349bbf01cb66782e56a0342e5923b' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid AND accountid = :accountid AND devicehash = :devicehash AND case_text = :case_text AND date_created = :date_created  ',
    'bind' => 
    array (
      'casetypeid' => '1',
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text' => 'first audio case',
      'date_created' => '1600395011',
    ),
  ),
  '068835bdf2ed438a052783a567ca84cf' => 
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
  'a4f872c4ae329ca10ce99f2afa5dba9f' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid ',
    'bind' => 
    array (
      'casetypeid' => 3,
    ),
  ),
  'efa5800556c39e349a04393b1afbdc9b' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid and casesreportedid = :casesreportedid ',
    'bind' => 
    array (
      'casetypeid' => 3,
      'casesreportedid' => 0,
    ),
  ),
  'd56c765cd63d1e99d8689cc86315b609' => 
  array (
    'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
    'bind' => 
    array (
      'casetypeid0' => 1,
      'accountid0' => 0,
      'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text0' => 'Also, there are APIs available to access third party data; for example, LINQ to Amazon provides the ability to use LINQ with Amazon web services to search for books and other items. This can be achieved by implementing the IQueryable interface for Amazon.',
      'date_created0' => 1600395037,
    ),
  ),
  '02e6c7986877ef2211ebc5cde6b4a6d7' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid AND accountid = :accountid AND devicehash = :devicehash AND case_text = :case_text AND date_created = :date_created  ',
    'bind' => 
    array (
      'casetypeid' => '1',
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text' => 'Also, there are APIs available to access third party data; for example, LINQ to Amazon provides the ability to use LINQ with Amazon web services to search for books and other items. This can be achieved by implementing the IQueryable interface for Amazon.',
      'date_created' => '1600395037',
    ),
  ),
  '9a8e2fe9f9d1bb559ed71d7ad93d079f' => 
  array (
    'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
    'bind' => 
    array (
      'casesreportedid0' => '3',
      'image_address0' => 'a9f5df94a15cd1944f11a609a2f399cae25f5489.png',
      'date_created0' => 1600395037,
    ),
  ),
  '621f3b8877276a481c7d3c7f230b0f29' => 
  array (
    'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
    'bind' => 
    array (
      'casesreportedid0' => '3',
      'image_address0' => 'd2f3b75eb85694c973c4510b6ec0a5107bf5e24b.png',
      'date_created0' => 1600395037,
    ),
  ),
  'ec405da44560a201040e44bf63ae0299' => 
  array (
    'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
    'bind' => 
    array (
      'casetypeid0' => 3,
      'accountid0' => 0,
      'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text0' => 'Also, there are APIs available to access third party data; for example, LINQ to Amazon provides the ability to use LINQ with Amazon web services to search for books and other items. This can be achieved by implementing the IQueryable interface for Amazon.',
      'date_created0' => 1600395303,
    ),
  ),
  '08e6899a343bc0d526347fcfc8c72e6f' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid AND accountid = :accountid AND devicehash = :devicehash AND case_text = :case_text AND date_created = :date_created  ',
    'bind' => 
    array (
      'casetypeid' => '3',
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text' => 'Also, there are APIs available to access third party data; for example, LINQ to Amazon provides the ability to use LINQ with Amazon web services to search for books and other items. This can be achieved by implementing the IQueryable interface for Amazon.',
      'date_created' => '1600395303',
    ),
  ),
  'd9f1725199275ea36040243d16cd5b53' => 
  array (
    'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
    'bind' => 
    array (
      'casesreportedid0' => '1',
      'image_address0' => '677510ec27f52cc933b27d4abcf084ce9b112f45.png',
      'date_created0' => 1600395303,
    ),
  ),
  '75263484c20bba4bdc33f7f36ef1b9de' => 
  array (
    'query' => 'INSERT INTO images_attached (casesreportedid,image_address,date_created) VALUES (:casesreportedid0,:image_address0,:date_created0)',
    'bind' => 
    array (
      'casesreportedid0' => '1',
      'image_address0' => '8ff76571d9fcfcabcad8536c23e26e82c8c168d4.png',
      'date_created0' => 1600395303,
    ),
  ),
  '4549247f5bb966c757bdde318036a423' => 
  array (
    'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
    'bind' => 
    array (
      'casetypeid0' => 2,
      'accountid0' => 0,
      'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text0' => 'first audio case',
      'date_created0' => 1600395316,
    ),
  ),
  'b78b31397786c9979b2d4b1e3c8955f3' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid AND accountid = :accountid AND devicehash = :devicehash AND case_text = :case_text AND date_created = :date_created  ',
    'bind' => 
    array (
      'casetypeid' => '2',
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text' => 'first audio case',
      'date_created' => '1600395316',
    ),
  ),
  '7a30940e94744c1ec94a24a1b338d2de' => 
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
  '66cebcf0a4171e01d61af398b7334d33' => 
  array (
    'query' => 'INSERT INTO cases_reported (casetypeid,accountid,devicehash,case_text,date_created) VALUES (:casetypeid0,:accountid0,:devicehash0,:case_text0,:date_created0)',
    'bind' => 
    array (
      'casetypeid0' => 1,
      'accountid0' => 0,
      'devicehash0' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text0' => 'first video case',
      'date_created0' => 1600395321,
    ),
  ),
  'a0d8d08fd6700ad8c4f34946048e191a' => 
  array (
    'query' => 'SELECT * FROM cases_reported WHERE casetypeid = :casetypeid AND accountid = :accountid AND devicehash = :devicehash AND case_text = :case_text AND date_created = :date_created  ',
    'bind' => 
    array (
      'casetypeid' => '1',
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'case_text' => 'first video case',
      'date_created' => '1600395321',
    ),
  ),
  '7adae3606ec79607e247985cca771493' => 
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
  '4f5bdb6cffb94fde468255e4893f0d0d' => 
  array (
    'query' => 'SELECT * FROM articles WHERE article_cover_image = :article_cover_image AND article_title = :article_title AND article_text = :article_text AND total_views = :total_views AND date_created = :date_created AND accountid = :accountid  ',
    'bind' => 
    array (
      'article_cover_image' => '4fe189f35b2bb9cb2e095c5c5a2cb869c553c2ff.jpg',
      'article_title' => 'Building a stronger Ghana',
      'article_text' => 'V2UgaGF2ZSBzZWVuIHRoaXMgZWZmZWN0IHdoZXJlIHRoZXJlIGEgYnVuY2ggb2YgdGV4dCBsaW5rcyBvbiB0aGUgcGFnZSBhbmQgb24gaG92ZXIgYW4gaW1hZ2UgaXMgbG9hZGVkIHVwIGFuZCBzaG93biB0byB0aGUgdmlzaXRvci4gVGhpcyBzbmlwcGV0IGFsbG93cyB5b3UgdG8gYWNoaWV2ZSB0aGlzIHBvcHVwIGltYWdlIG9uIHRleHQgbGluayBob3ZlciBvbiB5b3VyIHdlYiBwYWdlcy4KCkhvd2V2ZXIsIGlmIHlvdeKAmXJlIGFjY2Vzc2luZyBibG9ja2VkIGNvbnRlbnQsIHRoaW5ncyBhcmUgYSBsaXR0bGUgZGlmZmVyZW50LiBXaGlsZSBhIHByb3h5IGlzIGdvb2QgZm9yIGxvdyBzdGFrZXMsIGl0IGRvZXNu4oCZdCByZW1vdmUgaWRlbnRpZnlpbmcgaW5mb3JtYXRpb24gb3RoZXIgdGhhbiB0aGUgSVAgYWRkcmVzcy4gSXTigJlzIG9wZW4gdG8gc25vb3BpbmcgZnJvbSBhbnlvbmUgd2l0aCBhY2Nlc3MgdG8geW91ciBkYXRhIHN0cmVhbSwgc3VjaCBhcyB5b3VyIElTUCBhbmQgZ292ZXJubWVudC4gQWNjZXNzaW5nIGNlbnNvcmVkIGZpbGUtc2hhcmluZyB3ZWJzaXRlcyBhbmQgb3RoZXIgcXVlc3Rpb25hYmxlIGNvbnRlbnQgaXMgYmVzdCBkb25lIHRocm91Z2ggYSBWUE4u',
      'total_views' => '0',
      'date_created' => '1600395344',
      'accountid' => '3',
    ),
  ),
  'd9c972f76e3e4a63eb2fc4ed6004cb24' => 
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
  '799f58ef4d5f0aadd306e6d7222d54ae' => 
  array (
    'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
    'bind' => 
    array (
      'job_name0' => 'process-video-salt_a079cffb8c8667ad5f401aaf2ad0e6a5952ff650.mp4',
      'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_a079cffb8c8667ad5f401aaf2ad0e6a5952ff650.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:852:\\"C:32:\\"OpisClosureSerializableClosure\\":806:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1280;s:6:\\"height\\";i:720;s:12:\\"videUploaded\\";s:59:\\".//../uploads//6fa9e3d982a43054afd1832261b5e7cc03b46ea2.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_a079cffb8c8667ad5f401aaf2ad0e6a5952ff650.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000003e7da50e000000004a3b61c2\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
      'job_status0' => 'pending',
      'time_queued0' => 1600397022,
    ),
  ),
  'fc7d6db1e53ef5b03fe95dc692e0b355' => 
  array (
    'query' => 'INSERT INTO video_attached (video_address,total_views,total_likes,total_dislikes,video_caption,date_created,video_frame_address) VALUES (:video_address0,:total_views0,:total_likes0,:total_dislikes0,:video_caption0,:date_created0,:video_frame_address0)',
    'bind' => 
    array (
      'video_address0' => 'salt_a079cffb8c8667ad5f401aaf2ad0e6a5952ff650.mp4',
      'total_views0' => 0,
      'total_likes0' => 0,
      'total_dislikes0' => 0,
      'video_caption0' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
      'date_created0' => 1600397022,
      'video_frame_address0' => 'salt_dee0abd217945d00268aaa5382e21b4fd5f9d73d.jpg',
    ),
  ),
  '6a564a238dce68e275a308e860c8e08b' => 
  array (
    'query' => 'SELECT * FROM video_attached WHERE video_address = :video_address AND total_views = :total_views AND total_likes = :total_likes AND total_dislikes = :total_dislikes AND video_caption = :video_caption AND date_created = :date_created AND video_frame_address = :video_frame_address  ',
    'bind' => 
    array (
      'video_address' => 'salt_a079cffb8c8667ad5f401aaf2ad0e6a5952ff650.mp4',
      'total_views' => '0',
      'total_likes' => '0',
      'total_dislikes' => '0',
      'video_caption' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
      'date_created' => '1600397022',
      'video_frame_address' => 'salt_dee0abd217945d00268aaa5382e21b4fd5f9d73d.jpg',
    ),
  ),
  'b71f897f4f4aa57720ff6f8d5000e0ad' => 
  array (
    'query' => 'SELECT * FROM videos_published WHERE video_title = :video_title AND accountid = :accountid AND video_length = :video_length AND date_created = :date_created AND videoattachedid = :videoattachedid  ',
    'bind' => 
    array (
      'video_title' => 'Super cool stuff',
      'accountid' => '3',
      'video_length' => '206',
      'date_created' => '1600397022',
      'videoattachedid' => '2',
    ),
  ),
  'bce524b40fdc5d2fd05d172ea0ea9d59' => 
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
  'dcb373bca2914bbef72eea3eb0deea66' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE accounttypeid = :accounttypeid ',
    'bind' => 
    array (
      'accounttypeid' => '5',
    ),
  ),
  '7854ee980550675e5c2779702a19da18' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '0',
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
  '1595a93482780d82027a7cf509f705b1' => 
  array (
    'query' => 'SELECT * FROM volunteer_positions WHERE volunteerpositionid = :volunteerpositionid ',
    'bind' => 
    array (
      'volunteerpositionid' => '1',
    ),
  ),
  'e9661a99347edaa5b29326cfb521f596' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '2',
    ),
  ),
  'a7e893a6a72d0d698e803fb670bc4ebe' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE accounttypeid = :accounttypeid ',
    'bind' => 
    array (
      'accounttypeid' => '1',
    ),
  ),
  '53abd77fd9a4e590537256e0a700e40f' => 
  array (
    'query' => 'SELECT * FROM volunteers WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '2',
    ),
  ),
  'bb15a00c0e6bfeb6541d16dfd03a91c4' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '3',
    ),
  ),
  '366b894c6bfa4a6b7bf18dc82c3bd63c' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE accounttypeid = :accounttypeid ',
    'bind' => 
    array (
      'accounttypeid' => '3',
    ),
  ),
  'fad86f4fd117db3dbf9e5f094196a646' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '2',
    ),
  ),
  'ee2a7a36a8614d4cfec01c09c1701364' => 
  array (
    'query' => 'SELECT * FROM volunteers WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '3',
    ),
  ),
  '3bb470941035a6bebcc1186e7d04129b' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '4',
    ),
  ),
  '94dc587099eb23eb4458e79a34dd2e74' => 
  array (
    'query' => 'SELECT * FROM account_types WHERE accounttypeid = :accounttypeid ',
    'bind' => 
    array (
      'accounttypeid' => '4',
    ),
  ),
  'c043b949c59ab44baf8190bca3015910' => 
  array (
    'query' => 'SELECT * FROM volunteers WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '4',
    ),
  ),
  'c978c375463b879c357dce45761cb15d' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '1',
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
  '91fa4f3404d813af3aac1c7bfd3aef1a' => 
  array (
    'query' => 'INSERT INTO jobs (job_name,job_body,job_status,time_queued) VALUES (:job_name0,:job_body0,:job_status0,:time_queued0)',
    'bind' => 
    array (
      'job_name0' => 'process-video-salt_f88b7822669e4dfcd8e9f8df4cfd3099f882f3ea.mp4',
      'job_body0' => 'O:31:\\"LightroomQueuesQueueContainer\\":3:{s:40:\\"\\0LightroomQueuesQueueContainer\\0jobName\\";s:63:\\"process-video-salt_f88b7822669e4dfcd8e9f8df4cfd3099f882f3ea.mp4\\";s:36:\\"\\0LightroomQueuesQueueContainer\\0job\\";s:853:\\"C:32:\\"OpisClosureSerializableClosure\\":807:{a:5:{s:3:\\"use\\";a:4:{s:5:\\"width\\";i:1879;s:6:\\"height\\";i:1080;s:12:\\"videUploaded\\";s:59:\\".//../uploads//7c46e8a25d63319d48a68d969802e3956bd99226.mp4\\";s:3:\\"dir\\";s:64:\\".//../uploads//salt_f88b7822669e4dfcd8e9f8df4cfd3099f882f3ea.mp4\\";}s:8:\\"function\\";s:441:\\"function() use ($width, $height, $videUploaded, $dir)
        {
            // run compression
            if ($width > 640 || $height > 480) :
                // reduce resolution
                system(\\"ffmpeg -i {$videUploaded} -s 640x480 {$dir}; rm -rf {$videUploaded}\\");
            else:
                // convert to mp4
                system(\\"ffmpeg -i {$videUploaded} {$dir}; rm -rf {$videUploaded}\\");
            endif;

        }\\";s:5:\\"scope\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"this\\";N;s:4:\\"self\\";s:32:\\"000000004ad2ce000000000051d6aa79\\";}}\\";s:45:\\"\\0LightroomQueuesQueueContainer\\0closureScope\\";a:2:{s:9:\\"namespace\\";s:28:\\"BoameSupportVideoProcessor\\";s:4:\\"file\\";s:77:\\"/Users/mac/Desktop/workspace/boame_modules/helpers/Support/VideoProcessor.php\\";}}',
      'job_status0' => 'pending',
      'time_queued0' => 1600415240,
    ),
  ),
  '4c3c6c46a1e53c9aaaa2766855cc7d5f' => 
  array (
    'query' => 'INSERT INTO video_attached (video_address,total_views,total_likes,total_dislikes,video_caption,date_created,video_frame_address) VALUES (:video_address0,:total_views0,:total_likes0,:total_dislikes0,:video_caption0,:date_created0,:video_frame_address0)',
    'bind' => 
    array (
      'video_address0' => 'salt_f88b7822669e4dfcd8e9f8df4cfd3099f882f3ea.mp4',
      'total_views0' => 0,
      'total_likes0' => 0,
      'total_dislikes0' => 0,
      'video_caption0' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
      'date_created0' => 1600415240,
      'video_frame_address0' => 'salt_bd1c6d6395554c48a2a128715f72fc016e678905.jpg',
    ),
  ),
  '868824733f17a4d202098ad33ef99025' => 
  array (
    'query' => 'SELECT * FROM video_attached WHERE video_address = :video_address AND total_views = :total_views AND total_likes = :total_likes AND total_dislikes = :total_dislikes AND video_caption = :video_caption AND date_created = :date_created AND video_frame_address = :video_frame_address  ',
    'bind' => 
    array (
      'video_address' => 'salt_f88b7822669e4dfcd8e9f8df4cfd3099f882f3ea.mp4',
      'total_views' => '0',
      'total_likes' => '0',
      'total_dislikes' => '0',
      'video_caption' => 'VGhpcyBpcyBhIGNvb2wgdmlkZW8gZm9yIGV2ZXJ5b25l',
      'date_created' => '1600415240',
      'video_frame_address' => 'salt_bd1c6d6395554c48a2a128715f72fc016e678905.jpg',
    ),
  ),
  'a58e88d2447376b1b87dc0385df3aa97' => 
  array (
    'query' => 'SELECT * FROM videos_published WHERE video_title = :video_title AND accountid = :accountid AND video_length = :video_length AND date_created = :date_created AND videoattachedid = :videoattachedid  ',
    'bind' => 
    array (
      'video_title' => 'Super cool stuff',
      'accountid' => '3',
      'video_length' => '295.242000',
      'date_created' => '1600415240',
      'videoattachedid' => '3',
    ),
  ),
  'db8dcdb40219c85ee9c9c96f98cb67a3' => 
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
  '2ce954aa6eed32b81ac54d6f571753e8' => 
  array (
    'query' => 'SELECT * FROM feedbacks WHERE feedback = :feedback and fullname = :fullname ',
    'bind' => 
    array (
      'feedback' => 'This is so cool my friend.',
      'fullname' => 'mack henry',
    ),
  ),
  'e3b3f4aa68909b5625b4f222769f03ff' => 
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
  '115bc2f03991cf4b2742aeafaccfa8e1' => 
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
  '90f51f19fbc64774c0b5d04c077adc8d' => 
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
  '284be2f86824da3bb5e372d287bf97b5' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_eb26959583fe484edb732a63fc88332f5c654016.mp4',
      'job_status' => 'pending',
    ),
  ),
  '8ce4e82eeff2dd3b053f42884e12b5ff' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_eb26959583fe484edb732a63fc88332f5c654016.mp4',
    ),
  ),
  'd3f2700ea7ec697fba34206af726a7d8' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_cd78403b8840964e6591218bc10294f653893eb0.mp4',
      'job_status' => 'pending',
    ),
  ),
  '359205341b456977c7ef4044b939e1d1' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_cd78403b8840964e6591218bc10294f653893eb0.mp4',
    ),
  ),
  'dfa6fc3569baf701c842371a9de8397c' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_a079cffb8c8667ad5f401aaf2ad0e6a5952ff650.mp4',
      'job_status' => 'pending',
    ),
  ),
  '95efdb6c7900fe6ca29e8f670243eb95' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_a079cffb8c8667ad5f401aaf2ad0e6a5952ff650.mp4',
    ),
  ),
  'b1adf169c209c0bd76c63c224b640021' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1600397031',
      'jobid' => '1',
    ),
  ),
  '45c116f72f4c9497c10640794a6ac6da' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_f88b7822669e4dfcd8e9f8df4cfd3099f882f3ea.mp4',
      'job_status' => 'pending',
    ),
  ),
  'e9c68dace1b7901ac0f2866fad580f83' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name ',
    'bind' => 
    array (
      'job_name' => 'process-video-salt_f88b7822669e4dfcd8e9f8df4cfd3099f882f3ea.mp4',
    ),
  ),
  'c80459034812f0d14b29882afef168c8' => 
  array (
    'query' => 'UPDATE jobs SET job_status = :job_status , time_completed = :time_completed  WHERE jobid = :jobid ',
    'bind' => 
    array (
      'job_status' => 'complete',
      'time_completed' => '1600415262',
      'jobid' => '2',
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
  '2f053c65bdfe378aeb41ac952dda81eb' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE telephone = :telephone or email = :email ',
    'bind' => 
    array (
      'telephone' => '08029982122',
      'email' => '',
    ),
  ),
  'c8bfd954352ee881fed0d2800993f99c' => 
  array (
    'query' => 'INSERT INTO password_reset_vault (accountid,password,reset_code,date_created) VALUES (:accountid0,:password0,:reset_code0,:date_created0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'password0' => '$2y$10$LPLoy4Qxl.su6TND8jHesOF9Kk676Mwr/e5RUtrEaZr/3Z9cU6foe',
      'reset_code0' => 3119,
      'date_created0' => 1600460530,
    ),
  ),
  '7003080c9b7ab63701b4f93ce25d18f9' => 
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
  '53b3d7a5d2aeedc0cbe3824134c9baaf' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'password_reset_vaultid' => '3',
    ),
  ),
  '151b3b1be5d55e94f0bca7ef00b3db79' => 
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
  'a2cc7b67e5b2ca56ee0441f5c654aa4c' => 
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
  '6c7b081902cc59bf3f1b77304d31da69' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and job_status = :job_status or job_status = :job_status0 and time_queued = :time_queued ',
    'bind' => 
    array (
      'job_name' => 'send-mail-to-helloamadiify@gmail.com',
      'job_status' => 'processing',
      'job_status0' => 'pending',
      'time_queued' => 0,
    ),
  ),
  '8b1c18c1f094cd9eda514143ce9c9f70' => 
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
  'baa8f15832fd5e22b17d7616c53a5169' => 
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
  '8c58290f724971f643594c0c71a0fe75' => 
  array (
    'query' => 'SELECT * FROM jobs WHERE job_name = :job_name and time_queued = :time_queued ',
    'bind' => 
    array (
      'job_name' => 'send-mail-to-helloamadiify@gmail.com',
      'time_queued' => 0,
    ),
  ),
  'e80c195ef2739b3a8e170b36ad42fe65' => 
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
  '56f8cc1091beb22f62d702d87860772f' => 
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
  '15681bd9b0d555bc2ea7ad5b723b387f' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid and reset_code = :reset_code ',
    'bind' => 
    array (
      'accountid' => '1',
      'reset_code' => '1111',
    ),
  ),
  '513b55194c34bf1b6591166bc9891a18' => 
  array (
    'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'password0' => '$2y$10$2WtZbwTDZlLcZ7oTrTZlceW6RRPjVe/KTdBwTzMIb9YKyVUphgEVu',
      'password_salt0' => 'salt_16fa84e8d2a97a493456c59ec68087b7f756742c',
      'reset_code0' => 9014,
      'date_created0' => 1600476811,
      'expire_date0' => 1600478611,
    ),
  ),
  '21f36a5c4c4368a9c489130b4d3950d7' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid AND password = :password AND password_salt = :password_salt AND reset_code = :reset_code AND date_created = :date_created AND expire_date = :expire_date  ',
    'bind' => 
    array (
      'accountid' => '1',
      'password' => '$2y$10$2WtZbwTDZlLcZ7oTrTZlceW6RRPjVe/KTdBwTzMIb9YKyVUphgEVu',
      'password_salt' => 'salt_16fa84e8d2a97a493456c59ec68087b7f756742c',
      'reset_code' => '9014',
      'date_created' => '1600476811',
      'expire_date' => '1600478611',
    ),
  ),
  '716cb5f42e96972ebbafdab51b4671da' => 
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
  'c1f728bc22e2282214716a3af9b3186c' => 
  array (
    'query' => 'SELECT * FROM platforms WHERE platformid = :platformid ',
    'bind' => 
    array (
      'platformid' => '2',
    ),
  ),
  'bff6b61dac8c38c5ed1498f0ddfbfb46' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE telephone = :telephone or email = :email ',
    'bind' => 
    array (
      'telephone' => 'dr lexy',
      'email' => '',
    ),
  ),
  '2b56759d84820877d767d4ff22401920' => 
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
  'ed9cc2ce04dc71ced8ad44905061f546' => 
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
  'bbd4fc0e7efe75b8c00d5496b6889501' => 
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
  '4ab12feab695880effa9744444d2414c' => 
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
  'c077a1f8c12f968ae250959db6e8072c' => 
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
  'ed72d291256efb1de207857169cd30c2' => 
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
  'f0430bc67721e5f3f57193152048514b' => 
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
  'f3270e91fd24798fecf022b1e6807dad' => 
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
  '1e8055ee44c9ec23a10276ee938942c1' => 
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
  'fd1a96bbd2e818d0887a2f571b7fcd32' => 
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
  '3150e6edc266db431b4980beefe7479e' => 
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
  '57c58a2904c9a93137c24395ce063fd1' => 
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
  'b800acf7f6a54bf8890baaa383c4ac2a' => 
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
  '014216ebf9f48a61119abf6c6add7120' => 
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
  '660a02a2ba3a6f4f84bc8822e62d8928' => 
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
  'a8f895844d70bcab680e7d3a77640f5d' => 
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
  'd5c203b2f6aea0065c6d1ec5a5df8e08' => 
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
  '52f99ff41c9357f7007b6029607c8d3f' => 
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
  'b67bdd59ffd9709abb4fce01f1e7434d' => 
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
  '9d6237f29f8f3644ee59e53c61213ebb' => 
  array (
    'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'password0' => '$2y$10$IPcZD8SWuDnPH82XW64PhOehy47DNIEBSjndfRpo0Uu9OCSxExKai',
      'password_salt0' => 'salt_ecc966e0708412ed8b9c9f0c1ce3754bc3a4edf8',
      'reset_code0' => 3209,
      'date_created0' => 1601126088,
      'expire_date0' => 1601127888,
    ),
  ),
  '2b72b16b8a52e2051f4a2cd3ac8dbacd' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid AND password = :password AND password_salt = :password_salt AND reset_code = :reset_code AND date_created = :date_created AND expire_date = :expire_date  ',
    'bind' => 
    array (
      'accountid' => '1',
      'password' => '$2y$10$IPcZD8SWuDnPH82XW64PhOehy47DNIEBSjndfRpo0Uu9OCSxExKai',
      'password_salt' => 'salt_ecc966e0708412ed8b9c9f0c1ce3754bc3a4edf8',
      'reset_code' => '3209',
      'date_created' => '1601126088',
      'expire_date' => '1601127888',
    ),
  ),
  '3adad0f243b1057b59a51ed509df679d' => 
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
  '28e3a218d37e85244b7105cbfdf9575d' => 
  array (
    'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'password0' => '$2y$10$JzjkAuKYz0cuDdY/uuNN5eskfQdv0WQwI8yuNbcYH4qOKbXB8KG0a',
      'password_salt0' => 'salt_c5f3a28d62eff753a78ad85596eb8b3f36ca6f47',
      'reset_code0' => 2212,
      'date_created0' => 1601126199,
      'expire_date0' => 1601127999,
    ),
  ),
  '62cc9e82419300e60001619eb1e0d44e' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid AND password = :password AND password_salt = :password_salt AND reset_code = :reset_code AND date_created = :date_created AND expire_date = :expire_date  ',
    'bind' => 
    array (
      'accountid' => '1',
      'password' => '$2y$10$JzjkAuKYz0cuDdY/uuNN5eskfQdv0WQwI8yuNbcYH4qOKbXB8KG0a',
      'password_salt' => 'salt_c5f3a28d62eff753a78ad85596eb8b3f36ca6f47',
      'reset_code' => '2212',
      'date_created' => '1601126199',
      'expire_date' => '1601127999',
    ),
  ),
  'a696ccd5e8b8df157c19ab87370c5ce0' => 
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
  '28b4dceb8904cbdcf9ca5613e9207541' => 
  array (
    'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'password0' => '$2y$10$jppJUQSv4fvbpitdIB7FtegBQ./3oCcqxtL9ovpzyTyC2kLrXOarO',
      'password_salt0' => 'salt_7352397adc702d12d9ba3e9213eb2d41f5e8b619',
      'reset_code0' => 7878,
      'date_created0' => 1601126310,
      'expire_date0' => 1601128110,
    ),
  ),
  'fad260312e58fbc8bbab22d9efeb9add' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid AND password = :password AND password_salt = :password_salt AND reset_code = :reset_code AND date_created = :date_created AND expire_date = :expire_date  ',
    'bind' => 
    array (
      'accountid' => '1',
      'password' => '$2y$10$jppJUQSv4fvbpitdIB7FtegBQ./3oCcqxtL9ovpzyTyC2kLrXOarO',
      'password_salt' => 'salt_7352397adc702d12d9ba3e9213eb2d41f5e8b619',
      'reset_code' => '7878',
      'date_created' => '1601126310',
      'expire_date' => '1601128110',
    ),
  ),
  '120e3b37617296ff3de439deb2fa2a82' => 
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
  '5a093a0fe7c5486ba91018d5746253b2' => 
  array (
    'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'password0' => '$2y$10$C3BElOGLb6Vxgp4IrBgvPuBfBCOwR2SLtByourykMbUa9xPIOLary',
      'password_salt0' => 'salt_6bf7737b0e6aaeb22130334dbc259e85c5a763a1',
      'reset_code0' => 3518,
      'date_created0' => 1601126321,
      'expire_date0' => 1601128121,
    ),
  ),
  '410935dbe0bbdb208a28ea8948134536' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid AND password = :password AND password_salt = :password_salt AND reset_code = :reset_code AND date_created = :date_created AND expire_date = :expire_date  ',
    'bind' => 
    array (
      'accountid' => '1',
      'password' => '$2y$10$C3BElOGLb6Vxgp4IrBgvPuBfBCOwR2SLtByourykMbUa9xPIOLary',
      'password_salt' => 'salt_6bf7737b0e6aaeb22130334dbc259e85c5a763a1',
      'reset_code' => '3518',
      'date_created' => '1601126321',
      'expire_date' => '1601128121',
    ),
  ),
  'f2ce82708b192cae8adef6b074c97b50' => 
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
  'efb1d100961ddc7b8dd5e138586b4517' => 
  array (
    'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'password0' => '$2y$10$CjDEk7oIRQIcvemBvkWKjOtEemuBBoYtf9wDdykLObITUSW.1SjJe',
      'password_salt0' => 'salt_4e2daf35f4c2b3db9ed14e559da93559429b1a1a',
      'reset_code0' => 3052,
      'date_created0' => 1601126331,
      'expire_date0' => 1601128131,
    ),
  ),
  '71fd5208d40fb31a82072e2b52e72e9a' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid AND password = :password AND password_salt = :password_salt AND reset_code = :reset_code AND date_created = :date_created AND expire_date = :expire_date  ',
    'bind' => 
    array (
      'accountid' => '1',
      'password' => '$2y$10$CjDEk7oIRQIcvemBvkWKjOtEemuBBoYtf9wDdykLObITUSW.1SjJe',
      'password_salt' => 'salt_4e2daf35f4c2b3db9ed14e559da93559429b1a1a',
      'reset_code' => '3052',
      'date_created' => '1601126331',
      'expire_date' => '1601128131',
    ),
  ),
  '8c5bc2a75ee6add941dcec0f5670fedc' => 
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
  '2c987846a254e08578a44591f5b261f2' => 
  array (
    'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'password0' => '$2y$10$nww9LGWNkBhXLGELb38n/.PBrUbEff0Kg5yNlJHr59utrfeyMJhiO',
      'password_salt0' => 'salt_6e935811cba55264d406a222e86baee15cc25424',
      'reset_code0' => 1942,
      'date_created0' => 1601126704,
      'expire_date0' => 1601128504,
    ),
  ),
  'f75f55e706df0b785da4045e775014c8' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid AND password = :password AND password_salt = :password_salt AND reset_code = :reset_code AND date_created = :date_created AND expire_date = :expire_date  ',
    'bind' => 
    array (
      'accountid' => '1',
      'password' => '$2y$10$nww9LGWNkBhXLGELb38n/.PBrUbEff0Kg5yNlJHr59utrfeyMJhiO',
      'password_salt' => 'salt_6e935811cba55264d406a222e86baee15cc25424',
      'reset_code' => '1942',
      'date_created' => '1601126704',
      'expire_date' => '1601128504',
    ),
  ),
  'b1f5a294e2d7f38d614774a5a49743fa' => 
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
  '0ff3317e0708fad7eeec98c62cf6bb87' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid ',
    'bind' => 
    array (
      'accountid' => '1',
    ),
  ),
  'bed2369b2bb60df8a4a2df983382307a' => 
  array (
    'query' => 'INSERT INTO password_reset_vault (accountid,password,password_salt,reset_code,date_created,expire_date) VALUES (:accountid0,:password0,:password_salt0,:reset_code0,:date_created0,:expire_date0)',
    'bind' => 
    array (
      'accountid0' => '1',
      'password0' => '$2y$10$5V3VVcJkMDoV/PQ7d4t8w.ki09ct9C0bWswEMKKLraNEne6r9rR2m',
      'password_salt0' => 'salt_4742cc6af21234e682cddbffee8eeed87a2d2e34',
      'reset_code0' => 3003,
      'date_created0' => 1601127691,
      'expire_date0' => 1601129491,
    ),
  ),
  '230b25e64eefd72e5f719d5b97467517' => 
  array (
    'query' => 'SELECT * FROM password_reset_vault WHERE accountid = :accountid AND password = :password AND password_salt = :password_salt AND reset_code = :reset_code AND date_created = :date_created AND expire_date = :expire_date  ',
    'bind' => 
    array (
      'accountid' => '1',
      'password' => '$2y$10$5V3VVcJkMDoV/PQ7d4t8w.ki09ct9C0bWswEMKKLraNEne6r9rR2m',
      'password_salt' => 'salt_4742cc6af21234e682cddbffee8eeed87a2d2e34',
      'reset_code' => '3003',
      'date_created' => '1601127691',
      'expire_date' => '1601129491',
    ),
  ),
  'd5161976c2eee5f36448a7db73ede284' => 
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
  'a0c775b4d992db4a7454858cf844a598' => 
  array (
    'query' => 'SELECT * FROM navigation WHERE platformid = :platformid and accounttypeid = :accounttypeid ',
    'bind' => 
    array (
      'platformid' => '1',
      'accounttypeid' => '5',
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
  'b342397af37df39d2046a9f52de07cfc' => 
  array (
    'query' => 'SELECT * FROM volunteer_positions WHERE volunteerpositionid = :volunteerpositionid ',
    'bind' => 
    array (
      'volunteerpositionid' => '1',
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
  '8c5d0471418cb75a39d9c2b9e0e0fc3a' => 
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
  '0e011fd1fd25df806d2294cc3909d7ba' => 
  array (
    'query' => 'UPDATE password_reset_vault SET expire_date = :expire_date , password = :password , password_salt = :password_salt  WHERE password_reset_vaultid = :password_reset_vaultid ',
    'bind' => 
    array (
      'expire_date' => '1601130461',
      'password' => '$2y$10$hly/uBelP/H0nqq4c1O6UuLPwXVI7zAwq1IuXGz4O7ZfmXzJx/.AC',
      'password_salt' => 'salt_d0b78a1530ca60a894722820e1468486d650889a',
      'password_reset_vaultid' => '1',
    ),
  ),
  '445437586c8aad85f92756069da559dc' => 
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
  '614b55752ed882dc43396a656b479471' => 
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
  '2a6bbb833d2ab79706f31b87d0ea010e' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE email = :email or telephone = :telephone ',
    'bind' => 
    array (
      'email' => 'hellofrank@test.com',
      'telephone' => '08011221123',
    ),
  ),
  '6d68a41c27ed1fa9f9a146471d1fea31' => 
  array (
    'query' => 'INSERT INTO accounts (firstname,lastname,email,telephone,accounttypeid,verified) VALUES (:firstname0,:lastname0,:email0,:telephone0,:accounttypeid0,:verified0)',
    'bind' => 
    array (
      'firstname0' => 'micheak',
      'lastname0' => 'ogu',
      'email0' => 'hellofrank@test.com',
      'telephone0' => '08011221123',
      'accounttypeid0' => 4,
      'verified0' => 1,
    ),
  ),
  'd0d408ef0c6ee4c56a612d409d17cee0' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE firstname = :firstname AND lastname = :lastname AND email = :email AND telephone = :telephone AND accounttypeid = :accounttypeid AND verified = :verified  ',
    'bind' => 
    array (
      'firstname' => 'micheak',
      'lastname' => 'ogu',
      'email' => 'hellofrank@test.com',
      'telephone' => '08011221123',
      'accounttypeid' => '4',
      'verified' => '1',
    ),
  ),
  '41019b6819b14cdc827ef7ff6186330d' => 
  array (
    'query' => 'INSERT INTO authentication (accountid,date_created) VALUES (:accountid0,:date_created0)',
    'bind' => 
    array (
      'accountid0' => '5',
      'date_created0' => 1601133881,
    ),
  ),
  'd416f261701b79cdaaaddc749cf35c67' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE accountid = :accountid AND date_created = :date_created  ',
    'bind' => 
    array (
      'accountid' => '5',
      'date_created' => '1601133881',
    ),
  ),
  'ba48f4bbd61b18bfdae608a131bf4647' => 
  array (
    'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
    'bind' => 
    array (
      'authenticationid0' => '5',
      'passwordhash0' => '$2y$10$GbL.zxiq8rqSyyaxU0a9dO.bGq53rXxZf2LTVuX91UoLqBuwX6cU2',
      'password_salt0' => 'salt_48e2e9506742df0313e01f0c702bb105d97efe78',
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
  '4d62a4e6e154ffa28be7393891dbb868' => 
  array (
    'query' => 'SELECT * FROM permissions WHERE permissionid = :permissionid ',
    'bind' => 
    array (
      'permissionid' => '1',
    ),
  ),
  '45e84e349cc4ed83e8d024fec1dbd421' => 
  array (
    'query' => 'SELECT * FROM permissions WHERE permissionid = :permissionid ',
    'bind' => 
    array (
      'permissionid' => '2',
    ),
  ),
  '051eaffad711b5d82dd3dae3c81dd781' => 
  array (
    'query' => 'SELECT * FROM permissions WHERE permissionid = :permissionid ',
    'bind' => 
    array (
      'permissionid' => '3',
    ),
  ),
  '59d269b0d7b6df8c1d65bfd0183134e0' => 
  array (
    'query' => 'SELECT * FROM permissions WHERE permissionid = :permissionid ',
    'bind' => 
    array (
      'permissionid' => '4',
    ),
  ),
  'f703c4601252618a9be29dd73e7cfc20' => 
  array (
    'query' => 'SELECT * FROM permissions WHERE permissionid = :permissionid ',
    'bind' => 
    array (
      'permissionid' => '5',
    ),
  ),
  '6a732439f6c3f09f44451fdeb226d045' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE email = :email or telephone = :telephone ',
    'bind' => 
    array (
      'email' => 'samloko@test.com',
      'telephone' => '09012121212',
    ),
  ),
  '1f970b7dffb12d0c04c635eb55406279' => 
  array (
    'query' => 'INSERT INTO accounts (firstname,lastname,email,telephone,accounttypeid,verified) VALUES (:firstname0,:lastname0,:email0,:telephone0,:accounttypeid0,:verified0)',
    'bind' => 
    array (
      'firstname0' => 'sam',
      'lastname0' => 'loko',
      'email0' => 'samloko@test.com',
      'telephone0' => '09012121212',
      'accounttypeid0' => 4,
      'verified0' => 1,
    ),
  ),
  'ffafd0913cf63cab30e0176f8ddfbd21' => 
  array (
    'query' => 'SELECT * FROM accounts WHERE firstname = :firstname AND lastname = :lastname AND email = :email AND telephone = :telephone AND accounttypeid = :accounttypeid AND verified = :verified  ',
    'bind' => 
    array (
      'firstname' => 'sam',
      'lastname' => 'loko',
      'email' => 'samloko@test.com',
      'telephone' => '09012121212',
      'accounttypeid' => '4',
      'verified' => '1',
    ),
  ),
  '178712bbf34f5a34aaaebc478292b138' => 
  array (
    'query' => 'INSERT INTO authentication (accountid,date_created) VALUES (:accountid0,:date_created0)',
    'bind' => 
    array (
      'accountid0' => '6',
      'date_created0' => 1601134094,
    ),
  ),
  '412a2e916ecd477c8b93072e840d92eb' => 
  array (
    'query' => 'SELECT * FROM authentication WHERE accountid = :accountid AND date_created = :date_created  ',
    'bind' => 
    array (
      'accountid' => '6',
      'date_created' => '1601134094',
    ),
  ),
  '4d23735940ce5d33633eccfc6670184f' => 
  array (
    'query' => 'INSERT INTO password_hash (authenticationid,passwordhash,password_salt) VALUES (:authenticationid0,:passwordhash0,:password_salt0)',
    'bind' => 
    array (
      'authenticationid0' => '6',
      'passwordhash0' => '$2y$10$73.er7S1SpRw0HmzXPvzuOxwGyC5MoaQ6Wi7iLYFWBqEb9pFQCCCG',
      'password_salt0' => 'salt_5f81be75bcb5f3d387ed391d9ce736607c7b0e79',
    ),
  ),
);
