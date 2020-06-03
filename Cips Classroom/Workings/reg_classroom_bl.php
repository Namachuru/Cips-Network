<?php
	
	include "db_connect.php";
	
	
	$query = "SELECT * FROM cipsregistered";
	
	$query2 = "SELECT * FROM cipsstudents";
	
	

	if ($results_fen = mysqli_query($connect, $query2)){

		//success
	
	}
	
	else if (!$results_fen)
{

    		echo ("Error1: ". mysqli_error($connect));
    		exit();

	}

	

	if ($results2 = mysqli_query($connect, $query))
{

		//success
	
	}
	
	else if (!$results2)
{

    		echo ("Error2: ". mysqli_error($connect));

    		exit();

	}
	
	//Variables
	
	$sdentName = $_POST ["name"];
	
	$sdentSurname = $_POST ["surname"];
	
	$regno = $_POST ["regno"];
	
	$ebrno = $_POST ["ebrino"];


	while ($row = mysqli_fetch_array($results2))
{

		$sname = $row ["s_name"];

		$ssname = $row ["ss_name"];

		$sregno = $row ["reg_no"];

		$sebrno = $row ["ebr_no"];



                if ($sname == $sdentName)
{

                	while ($row2 = mysqli_fetch_array($results_fen)){
				$studentName = $row2 ["stdname"];

				$pass = $row2 ["binarylogic"];

				
				if ($studentName == $sdentName)
{

                                	if ($regno == $sregno){

                                        	if ($ebrno == $sebrno){

                                                	if ($sdentSurname = $ssname)
{

                                                                if ($pass == 1)
{

                                                                        include "binary logic.html";
								}
								
								else{
	
								echo ("error1");
								}

							}

							else

							{
	
							//error unforseen

							}

						}

						else

						{
	
						//error unforseen
						}

					}

					else

					{	

						//error unforseen

					}

				}

				else

				{
	
				//error loop conditions unfulfilled

				}

			}//end while

                	mysqli_free_result($results_fen);

		}//end if

		else

		{
			//error
		}

	}//end while

?>