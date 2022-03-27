<?php 
    session_start();

	include("config.php");
    if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$network_topology = $_POST['network_topology'];
        $type_network = $_POST['type_network'];
        $cabling_structure = $_POST['cabling_structure'];
        $isolated_network = $_POST['isolated_network'];
        $proxy_config = $_POST['proxy_config'];
        $power_backup = $_POST['power_backup'];
        $type_structured_network = $_POST['type_structured_network'];
        $LAN = $_POST['LAN'];
        $clg_network = $_POST['clg_network'];

        if(!empty($network_topology) &&!empty($type_network) &&!empty($cabling_structure) &&!empty($isolated_network) 
        && !empty($proxy_config) &&!empty($power_backup) &&!empty($type_structured_network)&&!empty($LAN)&&!empty($clg_network))
        {   //save to database
			//$user_id = random_num(20);
			$query = "insert into network_details(network_topology,type_network,cabling_structure,isolated_network,proxy_config,
            power_backup,type_structured_network,LAN,clg_network) 
            values ('$network_topology','$type_network','$cabling_structure','$isolated_network','$proxy_config','$power_backup',
            '$type_structured_network','$LAN','$clg_network')";

			mysqli_query($con, $query);

			header("Location: Other_info.php");
			die;
		}
        else
		{
			echo "<script> alert('Please enter the details required');window.location='Network_details.php'</script>";
		}
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../CSS/index.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Test-Centre Audit</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Forms</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Basic details</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="./Basic_details.php">Detail 1</a>
                        </li>
                        <li>
                            <a href="#">Detail 2</a>
                        </li>
                        <li>
                            <a href="#">Detail 3</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="./Desktop_config.php">Desktop Configuration</a>
                </li>
                <li>
                    <a href="./Power_backup.php">Power backup</a>
                </li>
                <li>
                <a href="./Backup_internet.php">Backup internet </a>
                </li>
                <li>
                    <a href="./Internet_line1.php">Internet Line</a>
                </li>
                <li>
                    <a href="./Network_details.php">Network Details</a>
                </li>
                <li>
                    <a href="./Other_info.php">Other Information</a>
                </li>
            </ul>

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="#" class="download">SAVE</a>
                </li>
                <!-- <li>
                    <a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a>
                </li> -->
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <h2 id="heading">Network Details</h2><hr>

            <form id="form" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Network Topology</label>
                        <input type="text" class="form-control" id="inputEmail4" name="network_topology"placeholder="Network Topology">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Type of Network Switch</label>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="type_network" id="flexRadioDefault1" value="10/100 Mbps">10/100 Mbps
                        <br>
                        <input class="form-check-input" type="radio" name="type_network" id="flexRadioDefault1" value="100/1000 Mbps">100/1000 Mbps
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Is Network Cabling Structured</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="cabling_structure" value="Yes" id="flexRadioDefault1">YES
                            <br>
                            <input class="form-check-input" type="radio" name="cabling_structure" value="No" id="flexRadioDefault1">NO
                        </div>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Isolated Network for Labs</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="isolated_network" value="Yes" id="flexRadioDefault1">YES
                            <br>
                            <input class="form-check-input" type="radio" name="isolated_network" value="No" id="flexRadioDefault1">NO
                        </div>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Proxy Configured in the Network</label>
                        <input type="text " class="form-control" id="inputEmail4" name="proxy_config" placeholder="Proxy Configured ">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Power Back up for Network Devices</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="power_backup" value="Yes"id="flexRadioDefault1">YES
                            <br>
                            <input class="form-check-input" type="radio" name="power_backup" value="No"id="flexRadioDefault1">NO
                        </div>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Type of structured network cabling available</label>
                        <input type="text" class="form-control" id="inputEmail4" name="type_structured_network"
                         placeholder="eg. CAT 5/6...">
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Are all Labs on Single or Multiple LAN's</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="LAN" value="Single" id="flexRadioDefault1">Single<br>
                            <input class="form-check-input" type="radio" name="LAN" value="Multiple" id="flexRadioDefault1">Multiple<br>
                            <input class="form-check-input" type="radio" name="LAN" value="Both" id="flexRadioDefault1">Both
                        </div>
                    </div>
                    
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">College Network in-</label>
                        <div class="form-check">
                            <input type="radio"  class="form-check-input" id="inputEmail4" value="Domain" name="clg_network">Domain
                            <br>
                            <input type="radio" class="form-check-input" id="inputEmail4" value="Workgroup" name="clg_network">Workgroup
                        </div>
                    </div>
                    
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>