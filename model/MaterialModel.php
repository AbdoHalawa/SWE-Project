<?php

require_once(__DIR__ . '../../Db/Dbh.php');
require_once(__DIR__ . '/Model.php');
error_reporting(E_ALL);
ini_set('display_errors', 1);
    class MaterialModel extends Model
    {
        private $materialId;
        private $title;
        private $content;
        private $uploadDate;
        private $file;
        private $subjectId;
        private $teacherId;
    
        public function __construct($data = [])
        {
            parent::__construct();
    
            $this->materialId = $data['MaterialID'] ?? '';
            $this->title = $data['Title'] ?? '';
            $this->content = $data['Content'] ?? '';
            $this->uploadDate = $data['UploadDate'] ?? '';
            $this->file = $data['File'] ?? '';
            $this->subjectId = $data['SubjectID'] ?? '';
            $this->teacherId = $data['TeacherID'] ?? '';
        }
    
        public function setMaterialId($materialId)
        {
            $this->materialId = $materialId;
        }
    
        public function setTitle($title)
        {
            $this->title = $title;
        }
    
        public function setContent($content)
        {
            $this->content = $content;
        }
    
        public function setUploadDate($uploadDate)
        {
            $this->uploadDate = $uploadDate;
        }
    
        public function setFile($file)
        {
            $this->file = $file;
        }
    
        public function setSubjectId($subjectId)
        {
            $this->subjectId = $subjectId;
        }
    
        public function setTeacherId($teacherId)
        {
            $this->teacherId = $teacherId;
        }
    
        // Getters
        public function getMaterialId()
        {
            return $this->materialId;
        }
    
        public function getTitle()
        {
            return $this->title;
        }
    
        public function getContent()
        {
            return $this->content;
        }
    
        public function getUploadDate()
        {
            return $this->uploadDate;
        }
    
        public function getFile()
        {
            return $this->file;
        }
    
        public function getSubjectId()
        {
            return $this->subjectId;
        }
    
        public function getTeacherId()
        {
            return $this->teacherId;
        }    
        public function addMaterialWithFile($file): bool
    {
        $uploadDir = '../uploads/';
        $uploadFile = $uploadDir . basename($file['name']);

        // Check if the file has been successfully uploaded
        if (move_uploaded_file($file['tmp_name'], $uploadFile)) {
            $data = [
                'Title' => $this->title,
                'Content' => $this->content,
                'File' => $uploadFile,
                'SubjectID' => $this->subjectId,
                'TeacherID' => $this->teacherId,
            ];

            $sql = "INSERT INTO Materials (Title, Content, File, SubjectID, TeacherID) VALUES (?, ?, ?, ?, ?)";
            $values = array_values($data);

            try {
                $result = $this->executeQuery($sql, $values);

                if ($result) {
                    return true;
                } else {
                    // Log the error or handle it in a way suitable for your application
                    echo "Error: Failed to execute SQL query.";
                }
            } catch (mysqli_sql_exception $exception) {
                // Log the exception or handle it in a way suitable for your application
                echo "Error: " . $exception->getMessage();
            }
        } else {
            // Log or handle the case where file upload fails
            echo "Error: Failed to move uploaded file.";
        }

        return false;
    }
}
    
    


?>