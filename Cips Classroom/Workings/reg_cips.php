<?php
	
	include ("db_connect.php");
	
	$denfrice = "SELECT * FROM cipsstudents";

 
	$results_fen = mysqli_query($connect, $denfrice);

        

	//Variables

	$StudentName = $_POST ["name"];

	$StudentSurname = $_POST ["surname"];

	$email = $_POST ["e-mail"];

	$box = $_POST ["boxno"];

	$city = $_POST ["city"];
	$country = $_POST ["country"];
	$mobile = $_POST ["mobile"];

	$guardname = $_POST ["nameGuard"];

	$guardsname
 = $_POST ["snameGuard"];
	$guardbox = $_POST ["boxnoGuard"];

	$gcity = $_POST ["cityGuard"];
	$gcountry = $_POST ["countryGuard"];
	$guardmobile = $_POST ["mobileGuard"];
	
        
	$webk = $_POST ["yesWeb"];

	$webknow = $_POST ["webKnow"];

	$compk = $_POST ["yesComp"];

        $compknow = $_POST ["compKnow"];

	
$if = $_POST ["Internet_Foundations"];

	$ct = $_POST ["Computers_Today"];
 
	$sm = $_POST ["Storage_Media"];


	$bl = $_POST ["Binary_Logic"];
	$bc = $_POST ["Binary_Computing"];

	$cp = $_POST ["Computer_Planning"];

	$wd = $_POST ["Website_Design"];

 
       $paymod = $_POST ["payme"];

        $web_k = false;

        $comp_k = false;

        
$internet_foundations = false;

	$computers_today = false;

	$storage_media = false;

	$binary_logic = false;

	$binary_computing = false;

	$computer_planning = false;

	$website_design = false;


        

	if ($if == "on")
{

        	$internet_foundations = true; 
	
	}

	else{

		$internet_foundations = false;
	
	}
	if ($ct == "on"){

        	$computers_today = true;
 
	}

	else{

		$computers_today = false;

	}

	if ($sm == "on")
{

		$storage_media = true;
 
	}

	else{

		$storage_media = false;

	}

	if ($bl == "on"){

		$binary_logic = true;
 	
}

	else{

		$binary_logic = false;

	}

	if ($bc == "on"){

		$binary_computing = true;
 
	}

	else
{

		$binary_computing = false;

	}

	if ($cp == "on")
{

		$computer_planning = true;
 
	}
	else{

		$computer_planning = false;

	}

        if ($wd == "on")
{

		$website_design = true;
 
	}

	else{

		$website_design = false;

	}

	

        if ($webk == "on"){

         	$web_k = true; 

	}

	else{

		$web_k = false;

	}

        if ($compk == "on")
{

               	$comp_k = true;
	}

	else
{

		$comp_k = false;

	}


	
	$namepri = $_POST ["NameP"];

	$priapp = $_POST ["Pdoa"];

	$priterm = $_POST ["Pdoc"];

	$namesec = $_POST ["NameS"];

	$secapp = $_POST ["Sdoa"];

	$secterm = $_POST ["Sdoc"];

	$nametert = $_POST ["NameT"];

	$tertapp = $_POST ["Tdoa"];

	$tertterm = $_POST ["Tdoc"];
	$nametertm = $_POST ["NameTM"];

	$tertmapp = $_POST ["TMdoa"];

	$tertmterm = $_POST ["TMdoc"];

	$nametertp = $_POST ["NameTPHD"];

	$tertpapp = $_POST ["TPHDdoa"];

	$tertpterm = $_POST ["TPHDdoc"];

	$netfound = false;


	
	$target_dir = "Uploads/";

	$passPic = $target_dir . basename($_FILES["PassPhoto"]["name"]);

	$IDSamp = $target_dir . basename($_FILES["IDSample"]["name"]);

	$certpri = $target_dir . basename($_FILES["CertPri"]["name"]);

	$certpri2 = $target_dir . basename($_FILES["CertPri2"]["name"]);

	$certsec = $target_dir . basename($_FILES["CertSec"]["name"]);

	$certsec2 = $target_dir . basename($_FILES["CertSec2"]["name"]);

	$certcollegeb = $target_dir . basename($_FILES["CertCollegeB"]["name"]);
	$certcollegetm = $target_dir . basename($_FILES["CertCollegeTM"]["name"]);

	$certcollegetphd = $target_dir . basename($_FILES["CertCollegeTPHD"]["name"]);

	
	$goalSt = true;

	
$regnoStr = "@@£@@";

	$ebrnoStr = "@@*@@";


	$ebrA = mt_rand(2, 246);

	$ebrB = mt_rand(3, 12);
	
		
	if ($ebrA <= 9)
{

		if ($ebrB <= 9){

                       $ebrnoStr = "00" . $ebrA . "0" . mt_rand(0,9) . "00" . $ebrB . "00";
		}

		else{

                       $ebrnoStr = "00" . $ebrA . "0" . mt_rand(0,9) . "0" . $ebrB . "00";

		}

	}
	
		if ($ebrA >= 10 && $ebrA <= 99)
{

		if ($ebrB <= 9){

                       $ebrnoStr = "0" . $ebrA . "0" . mt_rand(0,9) . "00" . $ebrB . "00";

		}

		else{

                       $ebrnoStr = "0" . $ebrA . "0" . mt_rand(0,9) . "0" . $ebrB . "00";

		}
	}


	if ($ebrA >= 100 && $ebrA <= 246)
{

		if ($ebrB <= 9){

                       $ebrnoStr = $ebrA . "0" . mt_rand(0,9) . "00" . $ebrB . "00";

		}

		else{

                       $ebrnoStr = $ebrA . "0" . mt_rand(0,9) . "0" . $ebrB . "00";

		}

	}

	

	$myfile = fopen("regfile.txt", "r") or die("Unable to open file!");


	$String = substr($StudentName,0,1);
	$String2 = substr($StudentSurname,0,1);

	$file = fread($myfile,filesize("regfile.txt"));

	$num = substr($file , 4, 4);

	$num2 = substr($file, 11, 2);

	$num = ++$num;

	$num2 = ++$num2;
	fclose($myfile);

	if ($num <= 9){

               if ($num2 <= 9){
			$regnoStr = "CAC-000" . $num . "-" . $String . $String2 . "0" . $num2;


			$myfile = fopen("regfile.txt", "w") or die("Unable to open file!");

			$txt = $regnoStr;

			fwrite($myfile, $txt);

			fclose($myfile);

		}

		else
{

			$regnoStr = "CAC-000" . $num . "-" . $String . $String2 . $num2;

			$myfile = fopen("regfile.txt", "w") or die("Unable to open file!");

			$txt = $regnoStr;

			fwrite($myfile, $txt);

			fclose($myfile);

		}

	}

	else if ($num > 9 && $num < 100){

		if ($num2 == 21)
{

			$num2 = 1;

		}

		else if ($num2 <= 9)
{
			$regnoStr = "CAC-00" . $num . "-" . $String . $String2 . "0" . $num2;


			$myfile = fopen("regfile.txt", "w") or die("Unable to open file!");

			$txt = $regnoStr;

			fwrite($myfile, $txt);

			fclose($myfile);

		}

		else

		{

			$regnoStr = "CAC-00" . $num . "-" . $String . $String2 . $num2;

			
$myfile = fopen("regfile.txt", "w") or die("Unable to open file!");

			$txt = $regnoStr;
			fwrite($myfile, $txt);

			fclose($myfile);

		}

	}

	else if ($num>=100 && $num<1000){
		if ($num2 == 21)
{

			$num2 = 1;

		}

		if ($num2 <= 9){

			$regnoStr = "CAC-0" . $num . "-" . $String . $String2 . "0" . $num2;

		
	$myfile = fopen("regfile.txt", "w") or die("Unable to open file!");

			$txt = $regnoStr;

			fwrite($myfile, $txt);

			fclose($myfile);

		}

		else
{

			$regnoStr = "CAC-0" . $num . "-" . $String . $String2 . $num2;

			$myfile = fopen("regfile.txt", "w") or die("Unable to open file!");
			$txt = $regnoStr;

			fwrite($myfile, $txt);

			fclose($myfile);

		}
			
	}

	else if ($num<=1000 && $num<10000)
{

                if ($num2 == 21){

			$num2 = 1;

		}

		if ($num2 <= 9){

			$regnoStr = "CAC-" . $num . "-" . $String . $String2 . "0" . $num2;
	
		$myfile = fopen("regfile.txt", "w") or die("Unable to open file!");

			$txt = $regnoStr;

			fwrite($myfile, $txt);

			fclose($myfile);

		}

		else
{

			$regnoStr = "CAC-" . $num . "-" . $String . $String2 . $num2;
			$myfile = fopen("regfile.txt", "w") or die("Unable to open file!");

			$txt = $regnoStr;

			fwrite($myfile, $txt);

			fclose($myfile);

		}

	}



	while ($row = mysqli_fetch_array($results_fen))
{

               	$stuname = $row ["stdname"];

		$stusname = $row["stdsname"];

		$stuemail = $row ["email"];

		

		if ($stuname == $StudentName && $stusname == $StudentSurname && $stuemail == $email)
{

			echo ("You cannot register someone who is already a member.");

			echo ("<br/><br/><a href = 'http://www.cipsclassroom.co.tz/Registration.html'>back</a>");

			$goalSt = false;

		}

		else if ($StudentName == "" || $StudentSurname == "" || $email == "" || $box == "" || $mobile == "" || $guardname == "" || $guardbox == "" || $guardmobile == "" || $namepri == "" || $priapp == "" || $priterm == "" || $certpri == "" || $paymod == "" || !is_uploaded_file($_FILES['PassPhoto']['tmp_name']) || !is_uploaded_file($_FILES['IDSample']['tmp_name'])){

			echo ("Make sure you enter all fields.");

			$goalSt = false;
			echo ("<br/><br/><a href = 'http://www.cipsclassroom.co.tz/Registration.html'>back</a>");

		}

		else if ($internet_foundations == false && $computers_today = false && $storagemedia == false && $binary_logic == false && $binary_computing == false && $computer_planning == false&& $website_design == false){

			echo ("Make sure you check the subjects you want to take.");

			$goalSt = false;

			echo ("<br/><br/><a href = 'http://www.cipsclassroom.co.tz/Registration.html'>back</a>");

		}

		else{

			//goalstate true

		}

	}
	mysqli_free_result($results_fen);


	if ($goalSt){

               	//Enter the Student into the database

		$sqlit = 'INSERT INTO cipsstudents (stdname, stdsname, email, boxno, stdcity, stdcountry, mobileno, guardnme, guardsname, guardboxno, gcity, gcountry, guardmobileno, webc, webknow, compc, compknow, internetfoundations, computerstoday, storagemedia, binarylogic, binarycomputing, computerplanning, websitedesign, payby, priname, priapp, priterm, secname, secapp, secterm, tertname, tertapp, tertterm, tertmname, tertmapp, tertmterm, tertpname, tertpapp, tertpterm) VALUES ("' . $StudentName . '", "' . $StudentSurname . '", "' . $email . '", "' . $box . '", "' . $city . '", "' . $country . '", "' . $mobile . '", "' . $guardname . '", "' . $guardsname . '", "' . $guardbox . '", "' . $gcity . '", "' . $gcountry . '", "' . $guardmobile . '", "' . $web_k . '", "' . $webknow . '", "' . $comp_k . '", "' . $compknow . '", "' . $internet_foundations . '", "' . $computers_today . '", "' . $storage_media . '", "' . $binary_logic . '", "' . $binary_computing . '", "' . $computer_planning . '", "' . $website_design . '", "' . $paymod . '", "' . $namepri . '", "' . $priapp . '", "' . $priterm . '", "' . $namesec . '", "' . $secapp . '", "' . $secterm . '", "' . $nametert . '", "' . $tertapp . '", "' . $tertterm . '", "' . $nametertm . '", "' . $tertmapp . '", "' . $tertmterm . '", "' . $nametertp . '", "' . $tertpapp . '", "' . $tertpterm . '")';

		$sqli2 = 'INSERT INTO cipsregistered (s_name, ss_name, reg_no, ebr_no) VALUES ("' . $StudentName . '", "' . $StudentSurname . '", "' . $regnoStr . '", "' . $ebrnoStr . '")';

		$result_ausep = mysqli_query ($connect, $sqlit);

		$result_ausep_2 = mysqli_query ($connect, $sqli2);

                
 		if ($result_ausep && $result_ausep_2)
{

                       if(move_uploaded_file($_FILES["CertPri"]["tmp_name"], $certpri))
{

 				move_uploaded_file($_FILES["CertPri2"]["tmp_name"], $certpri2);
				move_uploaded_file($_FILES["CertSec"]["tmp_name"], $certsec);

				move_uploaded_file($_FILES["CertSec2"]["tmp_name"], $certsec2);
						move_uploaded_file($_FILES["CertCollegeB"]["tmp_name"], $certcollegeb);

				move_uploaded_file($_FILES["CertCollegeTM"]["tmp_name"], $certcollegetm);

                                move_uploaded_file($_FILES["CertCollegeTPHD"]["tmp_name"], $certcollegetphd);

				move_uploaded_file($_FILES["PassPhoto"]["tmp_name"], $passPic);

				move_uploaded_file($_FILES["IDSample"]["tmp_name"], $IDSamp);
				echo ("<br/>You have successfully registered with Cips Classroom.");

				echo ("<br/>Make sure you make your payments promptly so that you can start lessons.");

				echo ("<br/>Internet Foundations:       $ 16.50");
				echo ("<br/>Computers Today:            $  9.50");
				echo ("<br/>Storage Media:              $ 14.00");

				echo ("<br/>Binary Logic:               $  9.00");
				echo ("<br/>Binary Computing:           $  9.00"); 
				echo ("<br/>Computer Planning:          $  8.00");
				echo ("<br/>Website Design:             $ 30.00");

                                				echo ("<br/>Pay all the classes you wish to attend, you will not be able to start unless you have paid up in full.");
						echo ("<br/>M-Pessa - 0758 301 361");

				echo ("<br/>Tigo Pessa - 0675 381 925");

				echo ("<br/><br/><a href='http://www.cipsclassroom.co.tz'>Home</a>");

			}

 			else{

 				echo "Problem uploading file";

 			}

		}

	}

	else
{

		echo ("There is a problem with your registration, go back and fill it again.");

	}

	mysqli_close ($connect);

?>