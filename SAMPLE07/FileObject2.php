class FileObject
{
    private $file;

    public function __construct(){
        $this->file = 'status.txt';
    }

    public function read(){
        $fp = fopen($this->file,'r');
        $status = fread($fp,8192);
        fclose($fp);
        return $status;
    }

    public function close(){
        $fp = fopen($this->file,'w');
        fwrite($fp,"");
        fclose($fp);
    }

    public function open(){
        $fp = fopen($this->file,'w');
        fwrite($fp,"1");
        fclose($fp);
    }

}