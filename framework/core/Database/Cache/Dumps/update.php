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
  '6f9cccc3db4d76377a53d5aabdeccb92' => 
  array (
    'query' => 'SELECT * FROM permissions WHERE privilege = :privilege ',
    'bind' => 
    array (
      'privilege' => 'edit',
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
  '00c8f7631a20d139d0fec9bc79aa3a33' => 
  array (
    'query' => 'SELECT * FROM articles WHERE articleid = :articleid ',
    'bind' => 
    array (
      'articleid' => '1',
    ),
  ),
  '1e67cb4d016564392af027dde70733ec' => 
  array (
    'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
    'bind' => 
    array (
      'total_views' => '5',
      'articleid' => '1',
    ),
  ),
  'fd36b130fe27f73a0701086df9620088' => 
  array (
    'query' => 'UPDATE articles SET article_title = :article_title , article_text = :article_text , article_cover_image = :article_cover_image  WHERE articleid = :articleid ',
    'bind' => 
    array (
      'article_title' => 'Building a stronger Ghana *revisited',
      'article_text' => 'V2UgaGF2ZSBzZWVuIHRoaXMgZWZmZWN0IHdoZXJlIHRoZXJlIGEgYnVuY2ggb2YgdGV4dCBsaW5rcyBvbiB0aGUgcGFnZSBhbmQgb24gaG92ZXIgYW4gaW1hZ2UgaXMgbG9hZGVkIHVwIGFuZCBzaG93biB0byB0aGUgdmlzaXRvci4gVGhpcyBzbmlwcGV0IGFsbG93cyB5b3UgdG8gYWNoaWV2ZSB0aGlzIHBvcHVwIGltYWdlIG9uIHRleHQgbGluayBob3ZlciBvbiB5b3VyIHdlYiBwYWdlcy4KCkhvd2V2ZXIsIGlmIHlvdeKAmXJlIGFjY2Vzc2luZyBibG9ja2VkIGNvbnRlbnQsIHRoaW5ncyBhcmUgYSBsaXR0bGUgZGlmZmVyZW50LiBXaGlsZSBhIHByb3h5IGlzIGdvb2QgZm9yIGxvdyBzdGFrZXMsIGl0IGRvZXNu4oCZdCByZW1vdmUgaWRlbnRpZnlpbmcgaW5mb3JtYXRpb24gb3RoZXIgdGhhbiB0aGUgSVAgYWRkcmVzcy4gSXTigJlzIG9wZW4gdG8gc25vb3BpbmcgZnJvbSBhbnlvbmUgd2l0aCBhY2Nlc3MgdG8geW91ciBkYXRhIHN0cmVhbSwgc3VjaCBhcyB5b3VyIElTUCBhbmQgZ292ZXJubWVudC4gQWNjZXNzaW5nIGNlbnNvcmVkIGZpbGUtc2hhcmluZyB3ZWJzaXRlcyBhbmQgb3RoZXIgcXVlc3Rpb25hYmxlIGNvbnRlbnQgaXMgYmVzdCBkb25lIHRocm91Z2ggYSBWUE4u',
      'article_cover_image' => '4fe189f35b2bb9cb2e095c5c5a2cb869c553c2ff.jpg',
      'articleid' => '1',
    ),
  ),
  '4cc2799e1b76f881accdf248358f329c' => 
  array (
    'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
    'bind' => 
    array (
      'total_views' => '6',
      'articleid' => '1',
    ),
  ),
  'e97537de9d263b6cbb13e9a09826b413' => 
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
  '5b30ff836e123bdf583758651edc10d2' => 
  array (
    'query' => 'UPDATE articles SET total_views = :total_views  WHERE articleid = :articleid ',
    'bind' => 
    array (
      'total_views' => '7',
      'articleid' => '1',
    ),
  ),
);
