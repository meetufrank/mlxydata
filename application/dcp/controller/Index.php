<?php
namespace app\dcp\controller;

use think\Config;
use cms\Controller;
use cms\Response;
use app\manage\service\ViewService;
use app\common\App;
use think\Request;

use core\cases\validate\CaseValidate;
use core\cases\model\CaseModel;
use core\cases\logic\CaseTypeLogic;
use core\cases\model\AreaModel;
use core\cases\model\ChatUserModel;
use core\manage\model\FileModel;
use app\common\sendemail\SendUser;
class Index extends Controller
{
    /**
     * 网站标题
     *
     * @var unknown
     */
    protected $siteTitle;
    
    
      /**
     *
     * {@inheritdoc}
     *
     * @see Controller::_initialize()
     */
    public function _initialize()
    {
        
        parent::_initialize();
        if(cookie('savedump')!='dcp'){
            cookie('phone_user_id', null);
            cookie('phone_user_name', null);
            cookie('phone_user_sign', null);
            cookie('phone_user_avatar', null);
        }
        cookie('savedump', 'dcp');
        //记录当前url
        $this->savebackurl();
        //获取服务列表
        $this->getServiceList();
        
                    //获取省列表
            $this->assignProvinceList();
            //获取国家列表
            $this->getCountryList();
            
            //获取语言服务列表
            $this->getCaseServiceList();
            
            //获取当前用户信息
            $userid=cookie('phone_user_id')? cookie('phone_user_id'):0;
            $this->assign('userid', $userid);
            $chatuser=ChatUserModel::getInstance();
            $cuname=$chatuser->alias_name;
            if($userid){
                $where=[
                   $cuname. '.id'=>$userid
                    ];
            }else{
                $where=[];
            }
            $this->getUserList($where);

    }
   
    protected function getUserList($where){
        $chatuser=ChatUserModel::getInstance();
        $data=$chatuser->getUserlist($where)->find();
        $this->assign('minedata',$data);
    }
    //获取国家数组
    protected function getCountryList(){
         
         $logic =CaseTypeLogic::getInstance();
         $country_list=$logic->getSelectCountry("locate('Malaysia',ename) desc");
         $this->assign('country_list',$country_list);
     }
     
     //获取语言服务列表
    protected function getCaseServiceList(){
         
         $logic =CaseTypeLogic::getInstance();
         $case_service_list=$logic->getSelectServiceLang(['sl_status'=>1],'',2);
         $this->assign('case_service_list',$case_service_list);
     }
         //省市区联动
     protected function assignProvinceList(){
        
    	//地区
    	$area= AreaModel::all(['parent_id'=>0]);
    	$this->assign('area',$area);

     }
    /*
     * 记录当前url
     */
    public function savebackurl() {
        $request = Request::instance();
        $url=$request->url(true);
        if(strtolower($request->action())!='addcase'){
          cookie('amback', $url);  
        }
    }
    /**
     * 首页
     *
     * @return string
     */
    public function index()
    {
       exit;
       $this->siteTitle = 'Home of advance|medical';

       
        return $this->fetch();
    }
    
    
    public function getServiceList($where=null) {
        
        $service_list=db('cases_case_type')->where($where)->order('sort desc')->select();
        
        $this->assign('service_list', $service_list);
    }
        /**
     * 服务详情页
     *
     * @return string
     */
    public function service_details($id=1)
    {
      $this->siteTitle = 'service_details of advance|medical';
       $this->assign('service_id', $id);
        
        return $this->fetch();
    }

    
    /*
     * mobile form
     */
    public function mobile_form($id) {
        $request = Request::instance();
        $url=$request->url(true);
        $this->siteTitle = 'cases of advance|medical';
        //此页面无需记录为登录
        cookie('amback', url('login/index'));
        cookie('mobile_login', $url);
        $this->assign('service_id', $id);
        return $this->fetch();
    }
    
    /*
     * 添加case
     * 
     */
    public function addCase(Request $request) {
//        $aa=[
//                   'content'=>'<div>  A new patient, '.$data['field']['username'].' has enrolled in the ALLIANZ MALAYSIA/ADVANCE MEDICAL '.$data['field']['typeename'].' through the online portal. Case details are as follows:</div> 
//                
//    	
//    	<table style="border:1px solid #ddd;">
//    	
//    	<thead  style="border:1px solid #ddd;">
//    		<tr>
//    			<th colspan="2">Case Information</th>
//    		</tr>
//    	</thead>
//    	<tbody style="margin-top:10px;">
//    		<tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Case Type</td>
//    			<td class="TableRight" >'.$data['field']['typeename'].'</td>
//    		</tr>
//		<tr>
//    			<td class="TableLeft" >Policy Number</td>
//    			<td class="TableRight" >'.$data['policy'].'</td>
//    		</tr>		
//    		<tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Patient Name</td>
//    			<td class="TableRight" >'.$data['field']['username'].'</td>
//    		</tr>
//    		<tr>
//    			<td class="TableLeft" >Date of Birth</td>
//    			<td class="TableRight" >'.$data['field']['birthday'].'</td>
//    		</tr>
//		<tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Gender</td>
//    			<td class="TableRight" >'.$data['field']['sexename'].'</td>
//    		</tr>
//	        <tr>
//    			<td class="TableLeft" >If you are the patient</td>
//    			<td class="TableRight" >'.$data['field']['ismeename'].'</td>
//    		</tr>
//		<tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Relationship with the patient</td>
//    			<td class="TableRight" >'.$data['field']['relationship'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Name of applicant</td>
//    			<td class="TableRight" >'.$data['field']['applicant_name'].'</td>
//    		</tr>
//		<tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Country</td>
//    			<td class="TableRight" >'.$data['field']['countryename'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Address</td>
//    			<td class="TableRight" >'.$address.'</td>
//    		</tr>
//		<tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Zip code</td>
//    			<td class="TableRight" >'.$data['field']['zip_code'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Preferred Telephone Number</td>
//    			<td class="TableRight" >'.$data['field']['preferred_phone'].'</td>
//    		</tr>
//		<tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Alternative Telephone Number</td>
//    			<td class="TableRight" >'.$data['field']['standby_phone'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Email</td>
//    			<td class="TableRight" >'.$data['field']['email'].'</td>
//    		</tr>
//		<tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Convenient Time to be Contacted</td>
//    			<td class="TableRight" >'.$data['field']['preferred_time'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Description</td>
//    			<td class="TableRight" >'.$data['field']['illness'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Doctor name</td>
//    			<td class="TableRight" >'.$data['field']['treatment_doctor'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Hospital</td>
//    			<td class="TableRight" >'.$data['field']['treatment_hospital'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Specialist</td>
//    			<td class="TableRight" >'.$data['field']['specialty'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Year of diagnosis</td>
//    			<td class="TableRight" >'.$data['field']['diagnosisDate'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Current Weight</td>
//    			<td class="TableRight" >'.$data['field']['weight'].'</td>
//    		</tr>
//                 <tr>
//    			<td class="TableLeft" >Height</td>
//    			<td class="TableRight" >'.$data['field']['height'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Medications for glucose(oral,insulin)</td>
//    			<td class="TableRight" >'.$data['field']['Me_glucose'].'</td>
//    		</tr>
//              
//                 <tr>
//    			<td class="TableLeft" >Medications for blood pressure</td>
//    			<td class="TableRight" >'.$data['field']['Me_bloodPressure'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Medications for cholesterol(e.g.statins)</td>
//    			<td class="TableRight" >'.$data['field']['Me_cholesterol'].'</td>
//    		</tr>
//                 <tr>
//    			<td class="TableLeft" >Medications for kidney protection(e.g.ACI)</td>
//    			<td class="TableRight" >'.$data['field']['Me_kidneyProtection'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Medications for arterial protection(e.g.ASA)</td>
//    			<td class="TableRight" >'.$data['field']['Me_arterialProtection'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Hypertension</td>
//    			<td class="TableRight" >'.$data['field']['Hypertensionename'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >High cholestero</td>
//    			<td class="TableRight" >'.$data['field']['highCholesteroename'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Heart disease</td>
//    			<td class="TableRight" >'.$data['field']['heartDiseaseename'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Kidney disease</td>
//    			<td class="TableRight" >'.$data['field']['kidneyDiseaseename'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Eye disease</td>
//    			<td class="TableRight" >'.$data['field']['eyeDiseaseename'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Foot or leg problems</td>
//    			<td class="TableRight" >'.$data['field']['footLegProblemsename'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Mental stress issues</td>
//    			<td class="TableRight" >'.$data['field']['msIssuesename'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Male or female concerns</td>
//    			<td class="TableRight" >'.$data['field']['mfConcernsename'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Smoking stop date</td>
//    			<td class="TableRight" >'.$data['field']['smokingDate'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Alcohol stop date</td>
//    			<td class="TableRight" >'.$data['field']['alcoholDate'].'</td>
//    		</tr>
//                <tr>
//    			<td class="TableLeft" >Most recent blood pressure</td>
//    			<td class="TableRight" >'.$data['field']['MRBPressure'].'</td>
//    		</tr>
//                <tr style="background:#efd3d2;">
//    			<td class="TableLeft" >Most recent HbA1c</td>
//    			<td class="TableRight" >'.$data['field']['HbA1c'].'</td>
//    		</tr>
//                 
//               
//                
//    	</tbody>
//    </table>',
//                   'description'=>'为用户添加成功case发送的邮件内容',
//                   'title'=>'Reminder of medical service',
//                   'short_title'=>'Advance Medical'
//                ];
         if ($request->isPost()) {
             
             
             //组合体重
             
             $weight_kg='';
             $weight_lb='';
             empty($request->param('weight_kg')) || $weight_kg=$request->param('weight_kg').'kg';
             empty($request->param('weight_lb')) || $weight_lb=$request->param('weight_lb').'lb';
             if($weight_kg&&$weight_lb){
                 $weight=$weight_kg.'/'.$weight_lb;
             }else{
                 $weight=$weight_kg.$weight_lb;
             }
             //组合身高
             
             $height_cm='';
             $height_feet='';
             empty($request->param('height_cm')) || $height_cm=$request->param('height_cm').'cm';
             empty($request->param('height_feet')) || $height_feet=$request->param('height_feet').'feet';
             if($height_cm&&$height_feet){
                 $height=$height_cm.'/'.$height_feet;
             }else{
                 $height=$height_cm.$height_feet;
             }
            $data = [
                'username' => str_replace(' ', '',$request->param('firstname')).' '.str_replace(' ', '',$request->param('lastname')),
                'birthday' => $request->param('birthday'),
                'sex' => $request->param('sex'),
                'isme' => $request->param('isme'),
                'relationship' => $request->param('relationship'),
                'applicant_name' => str_replace(' ', '',$request->param('applicant_name')),
                'address' => $request->param('address'),
                'province' => $request->param('province',110000),
                'city' => $request->param('city',110100),
                'district' => $request->param('district',110101),
                'zip_code' => $request->param('zip_code'),
                'preferred_phone' => $request->param('preferred_phone'),
                'standby_phone' => $request->param('standby_phone'),
                'service_lang' => $request->param('service_lang'),
                'preferred_time' => $request->param('preferred_time'),
                'illness' => $request->param('illness'),
                'treatment_doctor' => $request->param('treatment_doctor'),
                'treatment_hospital' => $request->param('treatment_hospital'),
                 'specialty' => $request->param('specialty'),
                 'case_type' => 2,
                'sort' => $request->param('sort',0), 
                'country'=>$request->param('country',3),
                'email'=>str_replace(' ', '',$request->param('email')),
                'e_province'=>$request->param('e_province'),
                'Hypertension'=>$request->param('Hypertension'),
                'highCholestero'=>$request->param('highCholestero'),
                'heartDisease'=>$request->param('heartDisease'),
                'kidneyDisease'=>$request->param('kidneyDisease'),
                'eyeDisease'=>$request->param('eyeDisease'),
                'footLegProblems'=>$request->param('footLegProblems'),
                'msIssues'=>$request->param('msIssues'),
                'mfConcerns'=>$request->param('mfConcerns'),
                'smokingDate'=>$request->param('smokingDate')?$request->param('smokingDate'):null,
                'alcoholDate'=>$request->param('alcoholDate')?$request->param('alcoholDate'):null,
                'MRBPressure'=>$request->param('MRBPressure'),
                'HbA1c'=>$request->param('HbA1c'),
                'diagnosisDate'=>$request->param('diagnosisDate')?$request->param('diagnosisDate'):null,
                'weight'=>$weight,
                'height'=>$height,
                'Me_glucose'=>$request->param('Me_glucose'),
                'Me_bloodPressure'=>$request->param('Me_bloodPressure'),
                'Me_cholesterol'=>$request->param('Me_cholesterol'),
                'Me_kidneyProtection'=>$request->param('Me_kidneyProtection'),
                'Me_arterialProtection'=>$request->param('Me_arterialProtection'),
                'isAccept'=>1,
            ];
            
            if($data['case_type']!=2){
                $msg['error']=1;
                $msg['msg']='提交case类型非法'; 
                  echo $this->error($msg);                 
                  exit;
            }
           if(empty($data['province'])){
               $data['province']=110000;
           }
           if(empty($data['city'])){
               $data['city']=110100;
           }
           if(empty($data['district'])){
               $data['district']=110101;
           }
            if($request->param('options')){
                $file=FileModel::getInstance()->where(['file_url'=>$request->param('options')])->find();
                if(!empty($file)){
                    $data['options']=$file['id'];
                }
            }
            //动态注入身高体重
            Request::instance()->bind('weight',$data['weight']);
            Request::instance()->bind('height',$data['height']);
;
            if(cookie('phone_user_id')){
                $data['userid']= cookie('phone_user_id');
                // 动态绑定属性
                Request::instance()->bind('userid',$data['userid']);
            }else{
                $msg['error']=2;
                $msg['msg']='please sign in';
                echo $this->error($msg); 
                exit;
            }
      
       $case_validate=CaseValidate::getInstance();
        $result =$case_validate->scene('add')->check($data);
        $msg=[];
        if ($result!==true) {
            $msg['error']=1;
            $msg['msg']=$case_validate->getError(); 
             echo $this->error($msg);  
        }else{
                        // 添加
            $model = CaseModel::getInstance();
            $status = $model->save($data);

            $msg['error']=0;
            $msg['msg']='added successfully';
              echo $this->success($msg);  
        }
          
          

            
            
          
         }
    }
       /**
     *
     * {@inheritdoc}
     *
     * @see Controller::beforeViewRender()
     */
    protected function beforeViewRender()
    {
        // 网站标题
        $this->assign('site_title', $this->siteTitle);
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see Controller::getView()
     */
    protected function getView()
    {
        return ViewService::getSingleton()->getView();
    }
}
 