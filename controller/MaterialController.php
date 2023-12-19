<?php

require_once(__DIR__ . '../../model/MaterialModel.php');
require_once(__DIR__ . '/../model/Model.php');


class MaterialController
{
    public function handleRequest()
    {
        $action = $_POST['action'] ?? '';

        switch ($action) {
            case 'addMaterial':
                $this->addMaterial();
                break;
            case 'deleteMaterial':
                $this->deleteMaterial();
                break;
                case 'editMaterial':
                $this->editMaterial();
                break;
            default:
                break;
        }
        $action = $_POST['action'] ?? '';
        var_dump($_POST); // Add this line for debugging
        echo 'Action from POST: ' . $action;
    }
    public function deleteMaterial()
    {}
    public function editMaterial()
    {}
    public function addMaterial()
    {
        try {
            // Validate input data
            $materialData = [
                'Title' => $_POST['add-title'] ?? '',
                'Content' => $_POST['add-content'] ?? '',
                'FilePath' => $_FILES['add-pdf'] ?? null, // Corrected key to 'FilePath'
                'SubjectID' => $_POST['subjectId'] ?? '',
                'TeacherID' => $_POST['teacherId'] ?? '',
            ];
    
            // Validate required fields
            if (empty($materialData['Title']) || empty($materialData['Content']) || empty($materialData['FilePath']) || empty($materialData['SubjectID']) || empty($materialData['TeacherID'])) {
                throw new Exception('All fields are required.');
            }
    
            $materialModel = new MaterialModel($materialData);
    
            // Add material with file and get the result
            $result = $materialModel->addMaterialWithFile($materialData['FilePath']); // Corrected key to 'FilePath'
    
            // You can send a response back to the frontend (e.g., JSON response)
            header('Content-Type: application/json');
    
            if ($result) {
                echo json_encode(['success' => true, 'message' => 'Material added successfully.']);
            } else {
                throw new Exception('Failed to add material.');
            }
        } catch (Exception $e) {
            // Handle exceptions and errors
            header('Content-Type: application/json');
            echo json_encode(['success' => false, 'message' => $e->getMessage()]);
        }
    
        exit;
    }

}
$controller = new MaterialController();
$controller->handleRequest();
?>
