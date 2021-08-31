<?php
error_reporting(0);
include('admin/connect.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Present Plus</title>
    <link href="cssxy/bootstrap.css" rel="stylesheet">

    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
        <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>


</head>

<body>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <h1 class="mt-4 mb-3">Privacy <small>Policy</small></h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Privacy Policy</li>
        </ol>
            <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
        else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
        <!-- Content Row -->
        <form name="donar" method="post">
                
                    <center><h4>Privacy Policy</h4></center>
                   <p>Shakij Mahamud built the Present Plus app as a Free app. This SERVICE is provided by Shakij Mahamud at no cost and is intended for use as is.

This page is used to inform visitors regarding my policies with the collection, use, and disclosure of Personal Information if anyone decided to use my Service.

If you choose to use my Service, then you agree to the collection and use of information in relation to this policy. The Personal Information that I collect is used for providing and improving the Service. I will not use or share your information with anyone except as described in this Privacy Policy.

The terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, which is accessible at Present Plus unless otherwise defined in this Privacy Policy.<br><br>
<b>Information Collection and Use</b><br>
For a better experience, while using our Service, I may require you to provide us with certain personally identifiable information, including but not limited to user account to verify,the users pass is encrypted by the authority its not readable. The information that I request will be retained on your device and is not collected by me in any way.

The app does use third party services that may collect information used to identify you.

Link to privacy policy of third party service providers used by the app <br><br>
<li><a href="https://policies.google.com/privacy" target="_blank">Google Play Services</a></li><br>
<b>Log Data</b><br><br>
I want to inform you that whenever you use my Service, in a case of an error in the app I collect data and information (through third party products) on your phone called Log Data. This Log Data may include information such as your device Internet Protocol (“IP”) address, device name, operating system version, the configuration of the app when utilizing my Service, the time and date of your use of the Service, and other statistics.<br><br>
<b>Cookies</b><br><br>
Cookies are files with a small amount of data that are commonly used as anonymous unique identifiers. These are sent to your browser from the websites that you visit and are stored on your device's internal memory.

This Service does not use these “cookies” explicitly. However, the app may use third party code and libraries that use “cookies” to collect information and improve their services. You have the option to either accept or refuse these cookies and know when a cookie is being sent to your device. If you choose to refuse our cookies, you may not be able to use some portions of this Service.<br><br>

<strong>Service Providers</strong><br><br>
<p>
                    I may employ third-party companies
                    and individuals due to the following reasons:
                  </p>
                  <li>To facilitate our Service;</li>
                  <li>To provide the Service on our behalf;</li>
                  <li>To perform Service-related services; or</li>
                  <li>To assist us in analyzing how our Service is used.</li><br>
                  <p>
                    I want to inform users of this
                    Service that these third parties have access to your
                    Personal Information. The reason is to perform the tasks
                    assigned to them on our behalf. However, they are obligated
                    not to disclose or use the information for any other
                    purpose.
                  </p>
 <p><strong>Security</strong></p>
 <p>
                    I value your trust in providing us
                    your Personal Information, thus we are striving to use
                    commercially acceptable means of protecting it. But remember
                    that no method of transmission over the internet, or method
                    of electronic storage is 100% secure and reliable, and
                    I cannot guarantee its absolute security.
                  </p>
<p><strong>Links to Other Sites</strong></p>                  
<p>
                    This Service may contain links to other sites. If you click
                    on a third-party link, you will be directed to that site.
                    Note that these external sites are not operated by
                    me. Therefore, I strongly advise you to
                    review the Privacy Policy of these websites.
                    I have no control over and assume no
                    responsibility for the content, privacy policies, or
                    practices of any third-party sites or services.
                  </p>
<p><strong>Children’s Privacy</strong></p>
<p>
                    These Services do not address anyone under the age of 13.
                    I do not knowingly collect personally
                    identifiable information from children under 13. In the case
                    I discover that a child under 13 has provided
                    me with personal information,
                    I immediately delete this from our servers. If you
                    are a parent or guardian and you are aware that your child
                    has provided us with personal information, please contact
                    me so that I will be able to do
                    necessary actions.
                  </p>
<p><strong>Changes to This Privacy Policy</strong></p>
                    I may update our Privacy Policy from
                    time to time. Thus, you are advised to review this page
                    periodically for any changes. I will
                    notify you of any changes by posting the new Privacy Policy
                    on this page. These changes are effective immediately after
                    they are posted on this page.
                  </p>
<p><strong>Contact Us</strong></p>
<p>
                    If you have any questions or suggestions about
                    my Privacy Policy, do not hesitate to contact
                    me at <br><br>
                    <b>developer.shakij@gmail.com
                  </p>
            </div>

        <!-- /.row -->
</form>   
        <!-- /.row -->
</div>


</body>

</html>