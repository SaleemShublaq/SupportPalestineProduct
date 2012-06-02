<?php
    class itemType{ 
        private $typeId;
        private $typeName;
		
		public function __construct(){ 
        }
		
        public function setId($typeId){
            $this->typeId = $typeId;
        }

         public function setTypeName($typeName){
            $this->typeName = $typeName;
        }
		
        public function getId(){
            return  $this->typeId ;
        }
		
         public function getTypeName(){
            return $this->typeName;
        }
    }
?>