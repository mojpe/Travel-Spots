<?php

namespace App\Models\NewArticle;

use App\Library\Helpers;

class NewArticleModel
{

    private $title;
    private $content;
    private $location;
    private $latitude;
    private $longtitude;
    private $picturePath;

    public function __construct($title, $content, $location, $latitude, $longtitude)
    {
        $this->title = $title;
        $this->content = $content;
        $this->location = $location;
        $this->latitude = $latitude;
        $this->longtitude = $longtitude;
    }

    /**
     * Checks if the length of the title is a valid value.
     * @return boolean  TRUE -> If the length of the title is valid
     */
    public function validateTitleLength()
    {
        return Helpers::stringLengthValidation($this->title, 3, 50);
    }

    /**
     * Checks if the length of the content is a valid value.
     * @return boolean  TRUE -> If the length of the content is valid
     */
    public function validateContextLength()
    {
        return Helpers::stringLengthValidation($this->content, 0, 2000);
    }

    /**
     * NEEDS FIXING
     * @return boolean
     */
    private function validatePicture($imgExtension, $target_file)
    {
        // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["file"]["tmp_name"]);
        if ($check === false) {
            return false;
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            return false;
        }

        // Check file size
        if ($_FILES["file"]["size"] > 500000) {
            return false;
        }

        // Allow certain file formats
        if ($imgExtension != "jpg" && $imgExtension != "png" && $imgExtension != "jpeg" && $imgExtension != "gif") {
            return false;
        }

        return true;
    }

    /**
     * NEEDS FIXING
     * @return boolean
     */
    private function uploadPicture()
    {
        $target_dir = "uploads/";
        $this->picturePath = $target_dir . basename($_FILES["file"]["name"]);

        $imageFileType = pathinfo($this->picturePath, PATHINFO_EXTENSION);

        if ($this->validatePicture($imageFileType, $this->picturePath)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $this->picturePath)) {
                return true;
            } else {
                return false;
            }
        }
    }

    /**
     * Inserts in the database - table: 'articles' a new article with
     *  title, author, content and date.
     */
    public function addArticleToDatabase()
    {
        $app = \Yee\Yee::getInstance();

        $data = array(
            'title' => $this->title,
            'author' => $_SESSION['email'],
            'date' => date("Y-m-d H:i:s"),
            'content' => $this->content,
            'location' => $this->location,
            'latitude' => $this->latitude,
            'longtitude' => $this->longtitude
        );

        $app->db['default']->insert('articles', $data);

    }

}
