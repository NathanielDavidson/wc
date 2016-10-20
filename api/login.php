<?php 
    require_once ('../vendor/autoload.php');
    session_start();
    //starts session and grabs facebooks(composers) autoloaders
    $fb = new Facebook\Facebook([
        'app_id'=>'1773451242931017',
        'app_secret'=> '74656c1a602d2c78ce7da86f189d9c99',
        'default_graph_version'=>'v2.5'
    ]);

    $redirecTo = 'https://winarycode-masloph.c9users.io/wc/api/login.php';
    //will need to change redirect above when migrating to AWS 
    $helper = $fb->getRedirectLoginHelper();
    try{
        $accessToken = $helper->getAccessToken();
    }
    catch(Facebooks\Exceptions\FacebookResponseException $e){
        echo "Error" . $e->getMessage();
        exit;
    }
    catch(Facebook\Exceptions\FacebookSDKException $e){
        echo " FB SDK ERR". $e->getMessage();
        exit;
    }
    if (isset($accessToken)) {
	  	//logged in
	  	$fb->setDefaultAccessToken($accessToken);
		try {
		  $response = $fb->get('/me?fields=email,name');
		  $userNode = $response->getGraphUser();
		}catch(Facebook\Exceptions\FacebookResponseException $e) {
		  echo 'error: ' . $e->getMessage();
		  exit;
		} catch(Facebook\Exceptions\FacebookSDKException $e) {
		  echo 'SDK error: ' . $e->getMessage();
		  exit;
		}
		// Payload, where we could see if its in database, if not insert.
		echo 'Name: ' . $userNode->getName().'<br>';
		echo 'User ID: ' . $userNode->getId().'<br>';
		echo 'Email: ' . $userNode->getProperty('email').'<br><br>';
		$fbPhoto = 'https://graph.facebook.com/'.$userNode->getId().'/picture?width=400';
		echo "<img src='$fbPhoto' /><br><br>";
		
	}else{
		$permissions  = ['email'];
		$loginUrl = $helper->getLoginUrl($redirecTo,$permissions);
		echo '<a href="' . $loginUrl . '">Log in</a>';
	}


















?>