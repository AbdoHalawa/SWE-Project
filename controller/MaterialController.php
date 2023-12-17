<?php

require_once(__DIR__ . '../../model/MaterialModel.php');
require_once(__DIR__ . '/../model/Model.php');


class MaterialController
{
    public function addMaterial()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $materialData = [
                'Title' => $_POST['add-title'] ?? '',
                'Content' => $_POST['add-content'] ?? '',
                'File' => $_FILES['add-pdf'] ?? null,
                'SubjectID' => $_POST['subjectId'] ?? '',
                'TeacherID' => $_POST['teacherId'] ?? '',
            ];

            $materialModel = new MaterialModel($materialData);
            $result = $materialModel->addMaterialWithFile($materialData['File']);

            // You can send a response back to the frontend (e.g., JSON response)
            header('Content-Type: application/json');

            if ($result) {
                echo json_encode(['success' => true, 'message' => 'Material added successfully.']);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to add material.']);
            }

            exit;
        }
    }
}

?>
