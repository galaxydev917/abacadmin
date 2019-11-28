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
        
        public function getDocument(string $name){
            try{
                if($this->db->collection($this->name)->document($name)->snapshot()->exists()){
                    return $this->db->collection($this->name)->document($name)->snapshot()->data();
                }else{
                    throw new Exception( "Document are not exist");
                }
            }catch(Exception $exception){
                return $exception->getMessage();
            }
        }

        public function getWhere(string $field, string $operator, $value){
            $arr = [];
            $query = $this->db->collection($this->name)->where($field, $operator, $value)->documents()->rows();
            if(!empty($query)){
                foreach($query as $item){
                    $arr[] = $item->data();
                }
            }
            return $arr;
        }

        public function addDocument(string $name, array $data = []){
            try{
               // $this->db->collection($this->name)->document($name)->create($data);

               // add document with auto id 
                $addedDocRef = $this->db->collection($this->name)->newDocument();
                $addedDocRef->set($data);

                return true;
            }
            catch(Exeption $exception){
                return $exception->getMessage();
            }
        }

        public function addCollection(string $name, string $doc_name, array $data = []){
            try{
                $this->db->collection($name)->document($doc_name)->create($data);
                return true;
            }
            catch(Exeption $exception){
                return $exception->getMessage();
            }
        }

        public function dropDocument(string $name){
            $this->db->collection($this->name)->document($name)->delete();
        }

    }

?>