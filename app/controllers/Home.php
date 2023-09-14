<?php

class Home{



    public function index()
    {   
        echo "home view page";
        
    }
    public function edit($id)
    {   
        echo "home editing".$id;
        
    }
    public function delete($id)
    {   
        echo "home deleting".$id[0];
        
    }
    
}