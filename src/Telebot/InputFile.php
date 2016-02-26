<?php
/**
 * Created by PhpStorm.
 * User: Emad Omar <emad2030@gmail.com>
 * Date: 2/26/2016
 * Time: 9:14 AM
 */

namespace Telebot;


class InputFile {

    /**
     * Full path to file
     * @var string
     */
    protected $file_path;

    /**
     * File name
     * @var string
     */
    protected $filename;

    /**
     * File's mime type
     * @var string
     */
    protected $mime_type;

    public function __construct($file_path, $filename = null, $mime_type = null) {
        if (!is_file($file_path)) {
            throw new Telebot_InvalidFileException(
                'Invalid file path or file does not exist `' . $file_path . '`'
            );
        }

        $this->file_path = $file_path;
        $this->filename = $filename;
        $this->mime_type = $mime_type;
    }

    /**
     * @return string
     */
    public function getFileName() {
        if ($this->filename === null) {
            $this->filename = basename($this->file_path);
        }

        return $this->filename;
    }

    /**
     * @return string
     */
    public function getMimeType() {
        if ($this->mime_type === null) {
            return mime_content_type($this->file_path);
        }

        return $this->mime_type;
    }

    /**
     * @return string
     */
    public function getFileContent() {
        return file_get_contents($this->file_path);
    }

}