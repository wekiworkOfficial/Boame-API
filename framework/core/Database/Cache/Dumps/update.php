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
);
