<?php 



if($request_method == 'GET' && $route == '/api/user'){

    header('content-type: application/json');

    require_once './controllers/UserController.php';

    $user_controller  = new UserController();

    $user_controller->index();
    exit;
}

http_response_code(400);
echo json_encode([
    'status' => false,
    'message' => 'Route not found'
]);