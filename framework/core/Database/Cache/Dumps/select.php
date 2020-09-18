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
  '4fc8740151fa6d878f77a9392c5bd504' => 
  array (
    'query' => 'SELECT * FROM feedbacks WHERE accountid = :accountid AND devicehash = :devicehash AND fullname = :fullname AND email = :email AND feedback = :feedback  ',
    'bind' => 
    array (
      'accountid' => '0',
      'devicehash' => 'xQUvREqEXPFhP4LwR3ZVUP3ki8moJen9iTFrfPKQXVLDlaJgGiMS',
      'fullname' => 'mack henry',
      'email' => 'helloamadiify@gmail.com',
      'feedback' => 'This is so cool my friend.',
    ),
  ),
  '4a914344a86272ab4b2b188485c2bab8' => 
  array (
    'query' => 'SELECT * FROM feedbacks WHERE feedbackid = :feedbackid ',
    'bind' => 
    array (
      'feedbackid' => '1',
    ),
  ),
  '376a5156461eff0181b06fbacd1e3678' => 
  array (
    'query' => 'SELECT * FROM feedbacks {where}',
    'bind' => 
    array (
    ),
  ),
);
