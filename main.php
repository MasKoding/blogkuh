<?php 
        $page = $_GET['page'];

        switch ($page) {
            case 'home':
                require_once 'home.php';
                break;
            
            case 'articles':
                    require_once 'articles.php';
                    break;
            
            case 'detail':
                    require_once 'detail.php';
                    break;
                
            default:
                 require_once 'home.php';
            break;
        
        }

?>