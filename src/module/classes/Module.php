<?php


class SkeletonModule extends Module {


    protected $strTemplate = 'template';

    public function generate(){

        // ANREIßer im BAckend 

        if(TL_MODE == 'BE'){

            $objTemplate = new BackendTemplate("be_wildcard");

            $objTemplate -> wildcard = "###".$this->name."###";
           
            return $objTemplate ->parse();

        }

        return parents::generate();



    }

    public function compile(){
        $this->Template->module_class_variable ="This text was filled in backend";
    }
}