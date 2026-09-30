<?php class View{
    private $view_path; 
    public function __construct(){
        $this->view_path =  __DIR__ . '/../views/';
    }

    public function render(String $view_name, array $data = []){

        $file = $this->view_path . $view_name . '.php';
        if(!file_exists($file)){
            throw new Exception("View file not found: " . $file);
        }

        extract($data);
        ob_start();
        
        require $this->view_path . $view_name . '.php';

        return ob_get_clean();

    }

}