 <?php class Laylout extends MY_Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){
        $temp['title']="Admin";
        $temp['dau']="trang Admin";
        $temp['template']='admin/content';
        $temp['b']['info']="Welcome to CI Layout - QHOnline.Info";
        $this->load->view("admin/index",$temp);
    }
}