<?php 
namespace Boame\Support;
/**
 * @package Support UploadToStorage
 * @author Amadi Ifeanyi <wekiwork.com> <amadiify.com>
 */
trait UploadToStorage
{
    /**
     * @var string $uploadDir
     */
    private $uploadDir = HOME . '/../uploads/';

    /**
     * @method UploadToStorage uploadFile
     * @param array $file
     * @param array $data
     * @return string
     * 
     * Should return just the new file name
     */
    private function uploadFile(array $file, array &$data) : string 
    {
        // upload directory
        $uploads = $this->uploadDir;

        // clean file name
        $fileName = preg_replace('/[\s]+/', '', $file['name']);

        // get the extension
        $extension = explode('.', $fileName);
        $extension = end($extension);

        // create a unique name
        $fileName = sha1(implode(':', array_values($data)) . $fileName) . '.' . $extension;

        // set file destination
        $fileDestination = $uploads . $fileName;

        // upload file
        if (move_uploaded_file($file['tmp_name'], $fileDestination) == true) return $fileName;

        // return string 
        return $file['name'];
    }

    /**
     * @method UploadToStorage uploadMultipleFiles
     * @param array $file
     * @param array $data
     * @return string
     * 
     * Should return just an array of files uploaded
     */
    private function uploadMultipleFiles(array $file, array &$data) : array 
    {
        // @var array $files 
        $files = [];

        // build file array
        foreach ($file['name'] as $index => $fileName) :

            // build
            $fileArray = [
                'name'      => $fileName,
                'tmp_name'  => $file['tmp_name'][$index],
                'size'      => $file['size'][$index],
                'error'     => $file['error'][$index]
            ];

            // upload file
            $files[] = $this->uploadFile($fileArray, $data);

        endforeach;


        // return array
        return $files;
    }

}