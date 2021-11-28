<?php
class BaseController
{   const Views_Folder_Name = 'Views';
    public function index(){
        echo __METHOD__;
    } 
    public function show(){
        echo __METHOD__;
    }
    public function getPath($path,array $data=[],$socanhiem,$khoi,$tuvong,$socatang )
    {   foreach($data as $key => $Values)
        {
            $$key = $Values;
        }
       $$socanhiem=$socanhiem;
       $$khoi=$khoi;
       $$tuvong=$tuvong;
       $$socatang=$socatang;
        require('./'.self::Views_Folder_Name.'/'.str_replace('.','/',$path).'.php');
    }
}