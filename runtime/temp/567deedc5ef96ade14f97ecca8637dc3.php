<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"E:\www\mlxyadmin\application\advance\view\index\service_details.html";i:1508324479;s:58:"E:\www\mlxyadmin\application\advance\view\common\base.html";i:1507630327;s:60:"E:\www\mlxyadmin\application\advance\view\common\header.html";i:1508324730;s:60:"E:\www\mlxyadmin\application\advance\view\common\footer.html";i:1508324641;}*/ ?>
<!doctype html>
<html lang="">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $site_title; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" type="text/css" href="<?php echo $static_path; ?>/advance/bower_components/bootstrap/dist/css/bootstrap.min.css?_=<?php echo $site_version; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $static_path; ?>/advance/css/flexslider.css?_=<?php echo $site_version; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $static_path; ?>/advance/css/font-awesome.min.css?_=<?php echo $site_version; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $static_path; ?>/advance/css/perfect-scrollbar.min.css?_=<?php echo $site_version; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $static_path; ?>/advance/css/DateTimePicker.css?_=<?php echo $site_version; ?>">
  <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="./css/DateTimePicker-ltie9.min.css">
  <![endif]-->
  <link rel="stylesheet" type="text/css" href="<?php echo $static_path; ?>/advance/css/app.css?_=<?php echo $site_version; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $static_path; ?>/advance/css/forms.css?_=<?php echo $site_version; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo $static_path; ?>/advance/css/new.css?_=<?php echo $site_version; ?>">
  

<link rel="stylesheet" type="text/css" href="<?php echo $static_path; ?>/advance/css/sub_page.css?_=<?php echo $site_version; ?>">


</head>
<body class="loading  ">

  <div class="hide-image" style="display:none;">
    <img src="<?php echo $static_path; ?>/advance/img/001.jpg">
  </div>
  <div id="page-wrapper">
    <section id="preloader">
      <div class="loader" id="loader">
          <div class="loader-img"></div>
      </div>
    </section>
    <div class="top-nav clearfix">
      <a class="logo-wrapper" href="<?php echo url('/am'); ?>">
        <span class="logo1"><img src="<?php echo $static_path; ?>/advance/img/logo.png" alt=""></span>
      </a>
        <?php if($userid != 0): ?>
      <a class="login-wrapper" href="<?php echo url('Login/logout'); ?>"><?php echo mb_substr($minedata['user_name'],0,4,'utf-8'); ?>,Login out</a>
       <?php else: ?>
        <a class="login-wrapper" href="<?php echo url('Login/index'); ?>">Log In</a>
       <?php endif; ?>
      <ul class="menu-wrapper clearfix">
         <?php if(is_array($service_list) || $service_list instanceof \think\Collection || $service_list instanceof \think\Paginator): $i = 0; $__LIST__ = $service_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sl): $mod = ($i % 2 );++$i;if(in_array(($sl['id']), explode(',',"1,2"))): ?>
         <li class="menubar menubar-<?php echo $sl['id']; ?>"><a href="<?php echo url('/services/'.$sl['id']); ?>"><span class="bar-background"></span><span class="bar-text"><?php echo $sl['typeename']; ?></span><span class="bottom-gradient"></span></a><span class="right-gradient"></span></li>
         <?php endif; endforeach; endif; else: echo "" ;endif; ?>

      </ul>
    </div>
    <div class="flex-container-outer-wrapper">
    <div class="flex-container-wrapper mb--l">
      <div class="flex-container">
        <div class="flexslider">
          <ul class="slides">
            <li>
              <img src="<?php echo $static_path; ?>/advance/img/001.jpg">
            </li>
            <li>
              <img src="<?php echo $static_path; ?>/advance/img/002.jpg">
            </li>
            <li>
              <img src="<?php echo $static_path; ?>/advance/img/003.jpg">
            </li>
          </ul>
        </div>
      </div>
      <div class="flex-mask">
        <div class="diagnose logvilad" >
          <div class="image-wrapper"><img src="<?php echo $static_path; ?>/advance/img/diagnose.png" alt=""></div>
          <div class="diagnose-text">Get Started</div>
        </div>
        <div class="flex-phone-wrapper">
          <span>400&#45;920&#45;2069</span>
        </div>
      </div>
    </div>
  </div>
    <div class="mobile-header mb--s mt--s">
      <div class="image-wrapper">
        <img src="<?php echo $static_path; ?>/advance/img/444.jpg" alt="">
      </div>
    </div>
    <div class="mobile-diagnose logvilad">
      <div class="diagnose-text">Get Started</div>
    </div>


<?php if($service_id == 1): ?>
<!--服务1-->
<div class="expert-opinion-wrapper" id="Gemomao">
      <div class="expert-section expert-section-1">
        <h2 id="diagnose"><span class="title">For anyone in a medical crisis, what matters is time with the doctor. Our Physician Case Managers offer patients unlimited access to their doctor to understand what’s happening, how to navigate the system, and get the best answers to their biggest questions.
</span></h2>
        <div class="expert-sub expert-sub-1">
          <h3><span>Global Expert Medical Opinion（GEMO)</span></h3>
          <div class="expert-feature-wrapper clearfix">
            <div class="expert-feature clearfix">
              <div class="image-wrapper"><img src="<?php echo $static_path; ?>/advance/img/icon/1.png" alt=""></div>
              <div class="feature-caption">
                <span class="feature-title">
                Personal Health Advisor
                </span>
                <span>You will be assigned a dedicated Physician Case Manager who would take sufficient time and attention to understand and collect your medical history and help you list the most critical questions requesting experts’ advice.</span>
                <!-- <span>The average practice for more than 10 years</span> -->
              </div>
            </div>
            <div class="expert-feature clearfix">
              <div class="image-wrapper"><img src="<?php echo $static_path; ?>/advance/img/icon/2.png" alt=""></div>
              <div class="feature-caption">
              <span class="feature-title">
              Expert review
              </span>
              <span>A global clinical committee searches and select top specialists around the world. This team collaborates to determine the correct diagnosis and the optimal plan for treatment.</span>
              </div>
            </div>
            <div class="expert-feature clearfix">
              <div class="image-wrapper"><img src="<?php echo $static_path; ?>/advance/img/icon/3.png" alt=""></div>
              <div class="feature-caption">
              <span class="feature-title">
              Medical orientation
              </span>
              <span class="special-caption">The Physician Case Manager is available on demand to help you and your family understand the course of treatment, what to expect, and what are the likely results.
A case is considered complete only once every question is answered to the patient’s satisfaction.
</span>
              </div>
            </div>
          </div>
        </div>
        <div class="expert-sub expert-sub-2">
          <h3><span>Some examples of international authoritative specialist</span></h3>
          <div class="expert-main-example">
            <div class="image-wrapper">
              <img src="<?php echo $static_path; ?>/advance/img/expert-opinion01.jpg" alt="">
            </div>
            <div class="expert-info-wrapper">
              <span class="expert-remark expert-remark-1" style="letter-spacing:3px;">“When you have concerns about your diagnosis, your prognosis, or the range of treatment options available to you — that is the time to ask for more information. An Expert Medical Opinion provides checks and balances of all the medical information that impacts your care.”
              </span>
              <span class="expert-info">Theodore Steinman, MD</span>
              <span class="expert-info">Clinical Professor of Medicine</span>
              <span class="expert-info">Harvard Medical School</span>
            </div>
          </div>
        </div>
        <div class="expert-example-wrapper clearfix">
          <div class="expert special-expert">
            <div class="image-wrapper">
              <img src="<?php echo $static_path; ?>/advance/img/portrait/potrait01.png" alt="">
            </div>
            <span>Theodore I. Steinman, &nbsp;M.D.</span>
            <div class="expert-details">
              <span class="expert-margin">
              </span>
              <span class="expert-name">Theodore I. Steinman, &nbsp;M.D.</span>
              <span class="expert-info"><span>Harvard Medical School&nbsp;Professor of Clinical Medicine</span>
              <span>Beth&nbsp;Israel&nbsp;Deaconess&nbsp;Medical center</span>
              <span>Brigham&amp;Women&apos;s&nbsp;Hospital&nbsp;Chief physician</span></span>
            </div>
          </div>   
          <div class="expert">
            <div class="image-wrapper">
              <img src="<?php echo $static_path; ?>/advance/img/portrait/potrait02.png" alt="">
            </div>
            <span class="special-expert-name">Monica&nbsp;Castiglione&#8208;Gertsch,&nbsp;M.D.</span>
            <div class="expert-details">
              <span class="expert-margin">
              </span>
              <span class="expert-name">Monica&nbsp;Castiglione&#8208;Gertsch,&nbsp;M.D.</span>
              <span class="expert-info">University of Geneva Hospital, Director of Cancer - Gynecology Director, Breast Health Center，Brustzentrum Hirslanden &nbsp;Swiss Zurich Advisor.</span>
            </div>
          </div>
          <div class="expert">
            <div class="image-wrapper">
              <img src="<?php echo $static_path; ?>/advance/img/portrait/potrait03.png" alt="">
            </div>
            <span>FRANCO&nbsp;M.&nbsp;MUGGIA,&nbsp;M.D.</span>
            <div class="expert-details">
              <span class="expert-margin">
              </span>
              <span class="expert-name">FRANCO&nbsp;M.&nbsp;MUGGIA,&nbsp;M.D.</span>
              <span class="expert-info">Perimutter Cancer Institute, Gynecological Cancer, Breast Cancer, Professor of Blood and Oncology.</span>
            </div>
          </div>
          <div class="expert">
            <div class="image-wrapper">
              <img src="<?php echo $static_path; ?>/advance/img/portrait/potrait04.png" alt="">
            </div>
            <span>DONALD&nbsp;I.&nbsp;ABRAMS,&nbsp;M.D.</span>
            <div class="expert-details">
              <span class="expert-margin">
              </span>
              <span class="expert-name">DONALD&nbsp;I.&nbsp;ABRAMS,&nbsp;M.D.</span>
              <span class="expert-info"><span>University of California, San Francisco, professor of medicine.Director of Blood and Oncology,San Francisco General Hospital.UCSF Osher Center of the Union Medical Oncology Director.</span>
            </div>
          </div>
          <div class="expert expert-next">
            <div class="image-wrapper">
              <img src="<?php echo $static_path; ?>/advance/img/portrait/potrait05.png" alt="">
            </div>
            <span>ELLIOT&nbsp;S.&nbsp;KRAMES,&nbsp;M.D.</span>
            <div class="expert-details">
            <span class="expert-margin">
              </span>
              <span class="expert-name">ELLIOT&nbsp;S.&nbsp;KRAMES,&nbsp;M.D.</span>
              <span class="expert-info"><span>Honorary Director of International Society for Neuromedicine.</span><span>Learn Journal:Honorary editor of the "Neural Regulation".</span></span>
            </div>
          </div>
        </div>
        <div class="expert-example-caption">
          <span>We have a balanced global network of over 50,000 top experts</span>
        </div>
      </div>
      <div class="expert-section expert-section-2">
        <div class="expert-sub expert-sub-5"></div>
        <div class="diagnose-process-wrapper2 clearfix">
          <div class="diagnose-step">
            <div class="step-wrapper">
              <div class="diagnose-step-num">1</div>
              <div class="diagnose-step-context">
                <div class="diagnose-step-text">
                  <span class="step-title">When to use GEMO?</span>
                  <ul style="padding-left: 15px;">
                    <li>When diagnosed with critical illness defined by the insurance program</li>
                    <li>When you need to make a critical medical decision, such as surgery</li>
                    <li>When you need to sort second opinions regarding treatment alternatives</li>
                    <li>When you’d like to validate a diagnosis</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="diagnose-step">
            <div class="step-wrapper">
              <div class="diagnose-step-num">2</div>
              <div class="diagnose-step-context">
                <div class="diagnose-step-text">
                  <span class="step-title">What is not included?</span>
                  <ul style="padding-left: 15px;">
                    <li>Medical emergency and accidents</li>
                    <li style="list-style: none;">&nbsp;</li>
                    <li style="list-style: none;">&nbsp;</li>
                    <li style="list-style: none;">&nbsp;</li>
                    <li style="list-style: none;">&nbsp;</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php endif; if($service_id == 2): ?>
<!--服务2-->
   <!-- <div class="pressure-management-wrapper">
      <div class="pressure-section pressure-section-1">
        <h2 id="pressure"><span class="title">专属心理和职业教练疏导</span></h2>
        <div class="pressure-sub pressure-sub-1">
          <div class="image-outter-wrapper">
            <div class="image-wrapper">
              <img src="<?php echo $static_path; ?>/advance/img/icon/11.png" alt="">
            </div>
          </div>
          <div class="pressure-caption pressure-caption-1">
            <span>专属心理和职业教练疏导（电话、网络平台）</span>
            <span>书面关爱和压力平衡建议及计划</span>
          </div>
        </div>
        <div class="pressure-feature-wrapper">
          <div class="pressure-image-m1">
            <img src="<?php echo $static_path; ?>/advance/img/pressure1-min-m.jpg" alt="">
          </div>
          <div class="pressure-image-1">
            <div class="image-inner-wrapper">
              <img src="<?php echo $static_path; ?>/advance/img/pressure1-min.jpg" alt="">
            </div>
          </div>
          <div class="pressure-caption-2 flicker-fix">
            <div>对于企业来说，一个身心平衡健康的工作团队，是绩效和工作效率的保障。员工心理上的压力与焦虑常常会导致工作失误或事故，并进一步引起一系列身体上的疾病。无数案例证明及时的专业心理疏导能帮助员工有效地解除压力和焦虑，保持思维和判断的清晰度，减少压力导致的失眠、恐惧、抑郁等困扰。</div>
          </div>
        </div>
        <div class="pressure-sub-2">
          <div class="pressure-bar"></div>
          <div class="pressure-caption-3 flicker-fix">
            <div>当今社会，人们被来自职场、家庭、环境的压力重重包围着。如何时时保持清晰的头脑和最佳的身心状态，是完成各种角色所要履行职责的先决条件。</div>
            <div>当你感到紧张、压力大、焦虑不安而不知所措的时候，你可能需要从外部的视角来审视你的情况，与我们的心理咨询师或职业教练沟通可能正是你所需要的。</div>
          </div>
        </div>
        <div class="pressure-sub-3 clearfix">
          <div class="pressure-caption-4 flicker-fix">
            <div>联系汇医，我们的私人健康顾问将在24小时内联系你，他们将根据你的情况联系专属心理咨询师或资深职场教练。这些专业的疏导师会了解你的压力状况，通过电话及网络平台，提供三次针对性的疏导，并根据你的需要出具书面的身心平衡计划。</div>
          </div>
          <div class="pressure-image-2">
            <img src="<?php echo $static_path; ?>/advance/img/pressure2-min.jpg" alt="">
          </div>
        </div>
      </div>
    </div> -->
<div class="expert-opinion-wrapper" id="Cpmao">
      <div class="expert-section expert-section-1">
        <h1 id="diagnose"><span class="titles">Diabetes</span><br/><span class="titles">Care Program</span></h1>
        <div class="expert-sub-2">
          <div style="width: 100%;height: auto;">
            <div class="center-left"></div>
            <div class="center-right">
              <div class="topbar"></div>
              <p class="center-text">There are so many things that you need to re-adjust once diagnosed with diabetes.</p>
              <div class="bottombar"><div class="bottombar1"></div><div class="bottombar2"></div></div>
            </div>
            <div class="clearfix"></div>
          </div>

      <div class="diagnose-step-text-new clearfix ">
        <ul>
            <li class="question-img"><img src="<?php echo $static_path; ?>/advance/img/icon/ICONS-01.png" alt=""></li>
            <li>Can I continue with my favorite sports?</li>
            <li>What should I avoid if I'm taking medication?</li>
            <li>How do I manage a stable blood sugar level?</li>
            <li>How do I eat healthy without compromising taste?</li>
        </ul>
      </div>

      <!-- 图片长图 -->

      <div class="expert-main-example-new">
            <div class="image-wrapper">
              <img src="<?php echo $static_path; ?>/advance/img/expert-opinion02.jpg" alt="banner">
            </div>
      </div>
      <!-- 文字介绍 -->
      <div class="expert-example-caption">
        <p class="text1">Reach out to Advance Medical Diabetes Care program, we will assign a licensed physician as your Personal Health Advisor, who will 
        provide sufficient time and attention to take care of your needs. After a clinical conversation, a series of assessment will be carried out. Within days you will receive a tailored Diabetes Care Plan, explained by your health advisor.
        </p>
        <br/>
        <p class="text2">After that，a licensed nurse will follow up with you to support you in  achieving your goals，answering questions，clearing doubts， and most importantly，keeping you moving forward.</p>
      </div>
      <br/>
      <br/>
      <!-- 分类介绍 -->
      <p class="expert-text3">Simply Call Us at XXX,and leave the rest to our professional medical and wellness team!</p>
      <br/>
      <!-- 分类三小类 -->
      <div class="expert-feature-wrapper-new expert-feature-wrapper-new-bgcolor clearfix ">
            <div class="expert-feature-new clearfix ">
              <div class="image-wrapper-new"><img src="<?php echo $static_path; ?>/advance/img/icon/ICONS-03.png" alt=""></div>
              <div class="feature-caption-new">
                <span class="feature-title-new">
                Request
                </span>
                <span class="feature-title-new hidden-sm hidden-xs">
                &nbsp;
                </span>
                <span class="feature-title-news">Questions</span>
                <span class="feature-title-news">Test results</span>
                <span class="feature-title-news">Diagnosis</span>
              </div>
            </div>
            <div class="expert-feature-new clearfix">
              <div class="image-wrapper-new"><img src="<?php echo $static_path; ?>/advance/img/icon/ICONS-04.png" alt=""></div>
              <div class="feature-caption-new">
              <span class="feature-title-new">
              Clinical
              </span>
              <span class="feature-title-new">
              Conversation
              </span>
              <span class="feature-title-news hidden-sm hidden-xs">&nbsp;</span>
              <span class="feature-title-news">A doctor calls you</span>
              <span class="feature-title-news">back within 24 hours*</span>
              </div>
            </div>
            <div class="expert-feature-new clearfix">
              <div class="image-wrapper-new"><img src="<?php echo $static_path; ?>/advance/img/icon/ICONS-05.png" alt=""></div>
              <div class="feature-caption-new">
              <span class="feature-title-new">
              Personalized
              </span>
              <span class="feature-title-new">
              Care Plan
              </span>
              <span class="feature-title-news">A comprehensive plan</span>
              <span class="feature-title-news">including medical precautions, </span>
              <span class="feature-title-news">diet solutions and active living altematives</span>
              </div>
            </div>
      </div>
      <br/>
      <!-- 单小图 -->
      <div class="expert-feature-wrapper-three clearfix ">
            
            <div class="expert-feature-center expert-feature-three clearfix">
              <div class="image-wrapper-three"><img src="<?php echo $static_path; ?>/advance/img/icon/ICONS-02.png" alt=""></div>
              <div class="feature-caption-three">
                <p class="feature-title-three">
                A nurse follows up for six months
                </p>
              </div>
            </div>
            
      </div>
    </div>
        
        

      </div>

    </div>
<?php endif; ?>




<div class="bottom-nav-wrapper clearfix">
      <ul class="bottom-nav">
        <li><a href="http://advance-medical.net/about">About AdvanceMedical</a></li>
        <li><a href="<?php echo url('/services/1'); ?>#Gemomao">Expert Medical Opinion</a></li>
        <li><a href="<?php echo url('/services/2'); ?>#Cpmao">Diabetes Management Program</a></li>
<!--         <li><a href="" class="special-text">xxxxxx</a></li> -->
      </ul>
    </div>
    <div class="medical-footer">
      <div class="medical-footer-text">The independent advisory services delivered to you is not a medical diagnosis, nor does it incur any form of treatment.</div>
      <div class="medical-footer-text"><a href="http://www.miitbeian.gov.cn" style="color: white;text-decoration: none;">沪ICP备16015507号-1</a></div>
    </div>
  </div>
  <div class="app-mask">
  </div>
    <!--弹出-->
  <div class="mobile-form-outter-wrapper">
    <div class="mobile-form-wrapper">
      <div class="mobile-form-home-header">
          <div class="mobile-home-header-text">Choose a category of advice</div>
          <span class="mobile-close-button"><span>&#10006;</span></span>
      </div>
      <div class="m-form-choice-wrapper">
        
        <?php if(is_array($service_list) || $service_list instanceof \think\Collection || $service_list instanceof \think\Paginator): $i = 0; $__LIST__ = $service_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sl): $mod = ($i % 2 );++$i;if(in_array(($sl['id']), explode(',',"1,2"))): ?>
                <a type="button" class="btn m-btn-medical <?php echo $sl['mobile_style']; ?>" href="<?php echo url('/mobile_form/'.$sl['id']); ?><?php echo $sl['m_id_name']; ?>"><?php echo $sl['typeename']; ?></a>
         <?php endif; endforeach; endif; else: echo "" ;endif; ?>

      </div>
    </div>
  </div>
    <!--登录-->
  <div class="form-outter-wrapper">
    <div class="form-diagnose">
      <div class="image-wrapper"><img src="<?php echo $static_path; ?>/advance/img/diagnose.png" alt=""></div>
      <div class="form-diagnose-text">Get Started</div>
    </div>
    <div class="form-inner-wrapper">
      <div class="form-home-header">
        <div class="home-header-text">Please select your category<span class="image-wrapper"><img src="<?php echo $static_path; ?>/advance/img/form-arrow.png" alt=""></span></div>
        <span class="close-button"><span>&#10006;</span></span>
      </div>
      <div class="form-choice-wrapper">
          <?php if(is_array($service_list) || $service_list instanceof \think\Collection || $service_list instanceof \think\Paginator): $i = 0; $__LIST__ = $service_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sl): $mod = ($i % 2 );++$i;if(in_array(($sl['id']), explode(',',"1,3"))): ?>
           <button type="button" class="btn btn-medical <?php echo $sl['pc_style']; ?>"><?php echo $sl['typeename']; ?></button>
          <?php endif; endforeach; endif; else: echo "" ;endif; ?>

      </div>
      <div class="form-wrapper">
        <div class="form-feedback-wrapper">
          <div class="form-feedback">
            <p>We will contact you as soon as possible.</p>
            <button class="btn form-feedback-btn">I know</button>
          </div>
        </div>
        <div class="medical-form-header">
          <div class="close-button form-close-button"><span>&#10006;</span></div>
          <div class="form-step-indicator clearfix"><!--
              --><div><span>Patient information</span></div><!--
              --><div><span>Applicant information</span></div><!--
              --><div><span>Description</span></div><!--
          --></div>
        </div>
          <form autocomplete="off" class="medical-form form-horizontal" role="form" method="post" >
          <input type="hidden" id="form-type" name="case_type" value="">
          <div class="form-section">
            <div class="form-group">
              <label for="patient-name" class="col-xs-4 col-sm-3 control-label medical-label">Patient Name</label>
              <div class="col-xs-8 col-sm-9">
                <input type="text" class="form-control" id="patient-name" name="username">
              </div>
            </div>
            <div class="form-group date-select">
              <label for="birth-date" class="col-xs-4 col-sm-3 control-label medical-label">Date of Birth</label>
              <div class="col-xs-8 col-sm-9">
                <input type="text" class="form-control" id="patient-birth" name="birthday" data-field="date" readonly="">
                <div class="box-container"><div id="dtBox"></div></div>
              </div>
            </div>
            <div class="form-group">
              <label for="patient-gender" class="col-xs-4 col-sm-3 control-label medical-label">Patient Sex</label>
              <div class="col-xs-8 col-sm-9">
                <div class="col-xs-6 col-sm-4 gender-single">
                  <label for="patient-gender1"><input type="radio" name="sex" id="patient-gender1" value="1"><span>male</span></label>
                </div>
                <div class="col-xs-6 col-sm-4 gender-single">
                  <label for="patient-gender2"><input type="radio" name="sex" id="patient-gender2" value="0"><span>female</span></label>
                </div>
                <div class="col-xs-12 gender-error"></div>
              </div>
            </div>
          </div>
          <div class="form-section">
           <div class="form-group">
              <label for="" class="col-xs-6 col-sm-4 control-label medical-label">Are you the patient</label>
              <div class="col-xs-6 col-sm-8 relation-between">
                <div class="col-xs-6 col-sm-6 relation-single">
                  <label for="is-patient-self1"><input type="radio" name="isme" id="is-patient-self1" value="1" checked><span>Yes</span></label>
                </div>
                <div class="col-xs-6 col-sm-6 relation-single">
                  <label for="is-patient-self2"><input type="radio" name="isme" id="is-patient-self2" value="0"><span>No</span></label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="other-relation" class="col-xs-5 col-sm-4 control-label medical-label">Your relation with the patient</label>
              <div class="col-xs-7 col-sm-8">
                <select id="other-relation" disabled="" name="relationship" class="not-mandatory">
                  <option value=""></option>
                  <option value="parents">parents</option>
                <option value="child">child</option>
                <option value="spouse">spouse</option>
                <option value="other">other</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="applicant-name" class="col-xs-5 col-sm-4 control-label medical-label">Name of applicant</label>
              <div class="col-xs-7 col-sm-8">
                <input type="text" class="form-control" id="applicant-name" name="applicant_name">
              </div>
            </div>
              <div class="form-group">
              <label for="country" class="col-xs-5 col-sm-4 control-label medical-label">Country</label>
              <div class="col-xs-7 col-sm-8">
                <select id="country" name="country" >
                  <?php if(is_array($country_list) || $country_list instanceof \think\Collection || $country_list instanceof \think\Paginator): $i = 0; $__LIST__ = $country_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cl): $mod = ($i % 2 );++$i;?>
                    <option  value="<?php echo $cl['value']; ?>" ><?php echo $cl['name']; ?></option>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="user-address" class="col-xs-5 col-sm-4 control-label medical-label"><span class="has-width">Address</span></label>
              <div class="col-xs-7 col-sm-8">
                <div class="col-xs-4 col-sm-4 address-choose">
                  <select id="province" name="province">
                      <option value="0">Province</option>
                       <?php if(is_array($area) || $area instanceof \think\Collection || $area instanceof \think\Paginator): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                         <option  value="<?php echo $vo['id']; ?>" ><?php echo $vo['area_name']; ?></option>
                         <?php endforeach; endif; else: echo "" ;endif; ?>
                  </select>
                </div>
                <div class="col-xs-4 col-sm-4 address-choose">
                  <select id="city" name="city">
                      <option value="0">City</option>
                  
                  </select>
                </div>
                <div class="col-xs-4 col-sm-4 address-choose">
                  <select id="district" name="district">
                      <option value="0">District</option>
                  
                  </select>
                </div>
                <div class="col-xs-12 col-sm-12 address-details">
                  <input type="text" class="form-control" id="address-details" name="address" placeholder="Detailed address">
                </div>
              </div>
            </div>
            <div class="form-group" >
              <label for="user-zip" class="col-xs-5 col-sm-4 control-label medical-label"><span class="has-width">Postal Code</span></label>
              <div class="col-xs-7 col-sm-8">
                <input type="text" class="form-control" id="zip_code" name="zip_code">
              </div>
            </div>
            <div class="form-group">
              <label for="user-first-phone" class="col-xs-5 col-sm-4 control-label medical-label"><span class="has-width">Preferred Telephone Number</span></label>
              <div class="col-xs-7 col-sm-8">
                <input type="text" class="form-control" id="user-first-phone" name="preferred_phone">
              </div>
            </div>
            <div class="form-group">
              <label for="user-second-phone" class="col-xs-5 col-sm-4 control-label medical-label"><span class="has-width">Alternative Telephone Number</span></label>
              <div class="col-xs-7 col-sm-8">
                <input type="text" class="form-control" id="user-second-phone" name="standby_phone">
              </div>
            </div>
            <div class="form-group">
              <label for="user-email" class="col-xs-5 col-sm-4 control-label medical-label"><span class="has-width"><span class="little-character">E&#45;mail </span></span></label>
              <div class="col-xs-7 col-sm-8">
                <input type="text" class="form-control" id="user-email" name="email">
              </div>
            </div>
            <div class="form-group">
              <label for="user-time" class="col-xs-5 col-sm-4 col-md-4 col-lg-4 control-label medical-label special-label">Convenient Time to be Contacted
</label>
              <div class="col-sm-8 col-md-8 col-lg-8 user-time">
                <div class="user-time-wrapper">
                  <div class="time-wrapper"><div class="time-inner-wrapper"><label><input type="checkbox" name="preferred_time" value="9am-12am"><span>9am-12am</span></label></div><div class="time-inner-wrapper"><label><input type="checkbox" name="preferred_time" value="12am-3pm"><span>12am-3pm</span></label></div></div>
                  <div class="time-wrapper"><div class="time-inner-wrapper"><label><input type="checkbox" name="preferred_time" value="3pm-6pm"><span>3pm-6pm</span></label></div><div class="time-inner-wrapper"><label><input type="checkbox" name="preferred_time" value="6pm-9pm"><span>6pm-9pm</span></label></div></div>
                </div>
                <div class="user-time-error"></div>
              </div>
            </div>
          </div>
          <div class="form-section">
            <div class="form-group">
              <label class="col-xs-12 col-sm-12 control-label medical-label change-label">Please briefly describe your diagnosis and questions</label>
            </div>
            <div class="form-group">
              <div class="col-xs-12 col-sm-12">
                <textarea class="info-details" name="illness"></textarea>
              </div>
            </div>
            <a href="javascript:;" class="a-upload">
                <input type="file" name="upload_file" id="upload_file">Upload my medical history
            </a><span id="upload_result"></span>
            <p>File only supports a single JPG, PDF, JPEG, PNG, DOC, ZIP format, multiple files please compressed ZIP upload, the maximum upload size of 10M</p>
            <div class="form-group optional-checkbox">
              <div class="col-sm-12">
                <input type="checkbox" id="doctor-checkbox" name="doctor_checkbox">
                <label for="doctor-checkbox">My current treatment doctor's information (optional)</label>
              </div>
            </div>
            <div class="form-group doctor-group">
              <label for="doctor-name" class="col-xs-5 col-sm-4 control-label medical-label">Doctor name</label>
              <div class="col-xs-7 col-sm-8">
                <input type="text" class="form-control doctor-name doctor"  name="treatment_doctor">
              </div>
            </div>
            <div class="form-group doctor-group">
              <label for="doctor-hospital" class="col-xs-5 col-sm-4 control-label medical-label">Hospital</label>
              <div class="col-xs-7 col-sm-8">
                <input type="text" class="form-control doctor-hospital doctor"  name="treatment_hospital">
              </div>
            </div>
            <div class="form-group doctor-group">
              <label for="doctor-major" class="col-xs-5 col-sm-4 control-label medical-label">Specialist</label>
              <div class="col-xs-7 col-sm-8">
                <input type="text" class="form-control doctor-major doctor"  name="specialty">
              </div>
            </div>
          </div>
          <div class="checkbox-wrapper">
            <div class="form-group">
              <div class="col-sm-12">
                <input type="checkbox" id="contract-checkbox" name="contract-checkbox" checked="">
                <label for="contract-checkbox">I have already read and accept the consent terms</label><span class="contract-click">Authorization agreement</span>
              </div>
            </div>
          </div>
          <div class="contract-check-error"></div>
          <div class="form-navigation clearfix">
            <button type="button" class="back-to-home btn btn-navigate pull-left">Back</button>
            <button type="button" class="previous btn btn-navigate pull-left">Prev</button>
            <button type="button" class="next btn btn-navigate pull-right">Next</button>
            <input type="submit" value="Submit" class="btn btn-navigate pull-right submit-btn">
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="contract-context">
    <div class="contract-header">
      <span>Consent Terms</span><span class="contract-close-button"><i class="fa fa-times"></i></span>
    </div>
    <div class="contract-para" id="contract-para">
      <div class="para-outter-wrapper"><p>The information provided above is true. I understood the services of Expert Medical Opinion and Diabetes Care Program, and agree to below terms:</p></div>
      <div class="para-outter-wrapper"><span>1、</span><p>All the personal and medical data, referred to as "CONFIDENTIAL INFORMATION" contained in this enrollment agreement, or provided to ADVANCE MEDICAL/ALLIANZ MALAYSIA in any manner, in relation to your case, will be used with the only purpose of delivering the service required and may be shared with relevant experts and medical institutions when needed.
      </p></div>
      <div class="para-outter-wrapper"><span>2、</span><p>Your data will be anonymized, to protect your privacy. Your data will be used in a proper and secured manner.
      </p></div>
      <div class="para-outter-wrapper"><span>3、</span><p>You hereby accept that ALLIANZ MALAYSIA, or its authorized partner, ADVANCE MEDICAL and its employees get in touch with you in order to obtain the necessary information to provide you with the service requested.
      </p></div>
      <div class="para-outter-wrapper"><span>4、</span><p>You hereby agree to provide all relevant personal and medical data and you grant ADVANCE MEDICAL permission to use and disclose this information as described to fulfill the service requested. 
      </p></div>
      <div class="para-outter-wrapper"><span>5、</span><p>The physician rendering the advisory services indicated above will not examine you in person, or have any information beyond what you provide. The services delivered to you is not a medical diagnosis, nor does it incur any form of treatment. The information contained in the Expert Medical Opinion Report or Diabetes Care Report provides alternative perspectives and shall not be used to substitute for your physician’s recommendations. 
      </p></div>
      <div class="para-outter-wrapper"><span>6、</span><p>After receiving the report, you make relevant decisions and choices out of your own judgment and will. ALLIANZ MALAYSIA/ADVANCE MEDICAL will not make biased recommendations and hence not responsible for the consequences of your decision.
      </p></div>
    </div>
  </div>
   
    
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/vendor/jquery-1.12.0.min.js?_=<?php echo $site_version; ?>"></script>
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/vendor/jquery.validate.min.js?_=<?php echo $site_version; ?>"></script>
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/vendor/jquery.flexslider.js?_=<?php echo $site_version; ?>"></script>
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/vendor/jquery.city.select.min.js?_=<?php echo $site_version; ?>"></script>
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/vendor/perfect-scrollbar.min.js?_=<?php echo $site_version; ?>"></script>
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/vendor/perfect-scrollbar.jquery.min.js?_=<?php echo $site_version; ?>"></script>
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/vendor/DateTimePicker.min.js?_=<?php echo $site_version; ?>"></script>
  <!--[if lt IE 9]>
    <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/vendor/DateTimePicker-ltie9.min.js"></script>
  <![endif]-->
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/vendor/DatetimePicker-i18n-zh-CN.js?_=<?php echo $site_version; ?>"></script>
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/main.js?_=<?php echo $site_version; ?>"></script>
  <script type="text/javascript" src="<?php echo $static_path; ?>/advance/js/forms.js?_=<?php echo $site_version; ?>"></script>

 
  <script type="text/javascript">
      window.__addurl__='<?php echo url('Index/addCase'); ?>';
      window.__loginurl__='<?php echo url('Login/index'); ?>';
    $(function(){
        


        function isChina(){
             var country_val=$("select[name='country']").val();
             if(country_val!=1){
                 $("#province").hide();
                 $("#city").hide();
                 $("#district").hide();
                 $("#zip_code").parent().parent().hide();
                 
             }else{
                 $("#province").show();
                 $("#city").show();
                 $("#district").show();
                 $("#zip_code").parent().parent().show();
             }
         }
            

    isChina();

      $("select[name='country']").change(function(){
          
            isChina();
      });
  
      
      function getcity(id){
          		var current_province_id=id;
                  
		
		$.ajax({
			url:"<?php echo url('@module/cases/Interfaces/getCity'); ?>",
			data:{ParentId:current_province_id},
			dataType:'json',
			type:'post',
                        async: false,
			success:function(re){
				var html='<option value="0">Please choose</option>';
                                $("[name='district']").html(html);
				var item=re.data;
				for(var i in item){
					html +='<option value="'+item[i]['id']+'" >'+item[i]['area_name']+'</option>';
				}
				$("[name='city']").html(html);
                                
			}
		})
      }
      
      
      function getdistrict(id){
          		var current_city=id;
		$.ajax({
			url:"<?php echo url('@module/cases/Interfaces/getDistrict'); ?>",
			data:{ParentId:current_city},
			dataType:'json',
			type:'post',
			success:function(re){
				var html='<option value="0">Please choose</option>';
				var item=re.data;
				for(var i in item){
					html +='<option value="'+item[i]['id']+'" >'+item[i]['area_name']+'</option>';
				}
				$("[name='district']").html(html);
			}
		})
      }
      	$("[name='province']").change(function(){
		$("[name='city']").html('<option value="0">Please choose</option>');
                getcity($(this).val());
                $("[name='district']").val();
	})
	$("[name='city']").change(function(){
		$("[name='district']").html('<option value="0">Please choose</option>');

                getdistrict($(this).val());
	})
	var pro_id=$("[name='province']").val();
        if(pro_id>0){
            $("[name='city']").html('<option value="0">Please choose</option>');
            getcity($("[name='province']").val());
            $("[name='district']").html('<option value="0">Please choose</option>');
            getdistrict($("[name='province']").val());
        }


});
 $.each($('.logvilad'),function(i){
     $(this).click(function(){
         if(<?php echo $userid; ?>==0){
             window.location.href='<?php echo url('Login/index'); ?>';
         }
     })
     
 })

// 上传文件
	$('#upload_file').on('change', function(){
		
		var uploadFile = $(this).get(0).files[0];
		
		if(typeof uploadFile == 'undefined'){
			return false;
		}
		
		var formData = new FormData();
		
		formData.append('upload_file', uploadFile);
		var ajaxOption = {
			url 	: '<?php echo url("advance/Upload/upload"); ?>',
			type	: 'post',
			data	: formData,
			dataType: 'json',
			timeout	: 0,
			processData : false,
			contentType : false,
			success	: function(res){
				
				if(res.code == 1){
					$('#upload_result').html('<span >['+res.data.hash+'.'+res.data.ext+']</span>');
				       $('#upload_file').before('<input type="hidden" value="'+res.data.url+'" name="options"/>');
				}else{
					$('#upload_result').html('<span >['+res.msg+']</span>');
				}
			},
			error : function(xhr){
				
				$('#upload_result').html('<span >[Network error]</span>');
			}
		};
		$.ajax(ajaxOption);
	});
       
</script>
  
</body>
</html>


