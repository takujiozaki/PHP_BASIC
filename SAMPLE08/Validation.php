class Validation{
    private $title;
    private $author;
    private $publisher,
    private $price;
    private $error_array;

    public function __construct($title, $author, $publisher,$price){
        $this->title = $title;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->price = $price;
        $this->error_array = array();
    }

    public function vaidate(){
        //内容をチェックする
        return $this->error_array;
    }


}