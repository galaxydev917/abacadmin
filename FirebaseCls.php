<?php 
    require 'vendor/autoload.php';
    use Kreait\Firebase;
    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    class FirebaseCls{
        protected $firebase;
        protected $name;
        public $serviceAccount;
        public function __construct(string $collection){

            $this->name = $collection;
            $this->serviceAccount = ServiceAccount::fromJsonFile('../abac-fdef3-firebase-adminsdk-i5ufd-52d8bd98af.json');
            $this->firebase = (new Factory)->withServiceAccount($this->serviceAccount)->withDatabaseUri('https://abac-fdef3.firebaseio.com')->create();
        }


        public function get(){

            $database = $this->firebase->getDatabase(); 
            $result = $database->getReference($this->name)->getValue();
            return $result;
        }
        public function addCategory($name, $meal, $filename){

            $database = $this->firebase->getDatabase(); 
            $result = $database->getReference($this->name)->push(['name'=> $name, "isMeal"=>$meal, "image"=>$filename ]);
            return $result;
        }  
        public function removeCategory($id){
            $database = $this->firebase->getDatabase(); 
            $result = $database->getReference($this->name."/".$id)->remove();
            return $result;
        }

        //school part starting-----
        public function addSchool($name, $address, $director){

            $database = $this->firebase->getDatabase(); 
            $result = $database->getReference($this->name)->push(['name'=> $name, "address"=>$address, "director"=>$director ]);
            return $result;
        }  
        public function removeSchools($id){
            $database = $this->firebase->getDatabase(); 
            $result = $database->getReference($this->name."/".$id)->remove();
            return $result;
        }

        //parents part starting-----
        public function addParents($name, $email, $phonenumber){

            $database = $this->firebase->getDatabase(); 
            $result = $database->getReference($this->name)->push(['fullName'=> $name, "email"=>$email, "phonenumber"=>$phonenumber ]);
            return $result;
        }  
        public function addChild($name, $email, $phonenumber){

            $database = $this->firebase->getDatabase(); 
            $result = $database->getReference($this->name)->push(['fullName'=> $name, "email"=>$email, "phonenumber"=>$phonenumber ]);
            return $result;
        }  

        //activities part starting-----
        public function addActivity($data){

            $database = $this->firebase->getDatabase(); 
            $id = $database->getReference($this->name)->push($data)->getKey();

            $id_array = ["id"=>$id];
            $data = array_merge($data, $id_array);
            $result = $database->getReference($this->name."/".$id)->update($data);

            return $result;
        }  
        public function removeActivities($id){
            $database = $this->firebase->getDatabase(); 
            $result = $database->getReference($this->name."/".$id)->remove();
            return $result;
        }
        public function addActivityDetail($data, $id){

            $database = $this->firebase->getDatabase(); 
            $result = $database->getReference($this->name."/".$id)->update($data);
            return $result;
        }  


    }

?>