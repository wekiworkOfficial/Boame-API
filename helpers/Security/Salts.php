<?php
namespace Boame\Security;

use function Lightroom\Security\Functions\{encrypt};
/**
 * @package Security Salt
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
class Salts
{
    /**
     * @method Salt generate
     * @return string
     * 
     * This method will generate a unqiue salt
     */
    public static function generate(string $prefix = "_SALT_")
    {
        // alphabets
        $alphabets = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p',
                     'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
        
        // load certificate
        $certificate = file_get_contents(__DIR__ . '/boame-private.key');

        // shuffle array
        shuffle($alphabets);

        // generate salt
        return 'salt_' . sha1(encrypt($prefix . implode('::', $alphabets), $certificate));
    }

}