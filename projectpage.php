<?php include'head.php' ?>

<body class="projectpage">
    <?php include'header.php'?>
        <?php  
			$path = $_SERVER["QUERY_STRING"];
			$extention = array("jpg","png");
			$img = "$path/main.png";
			$info = "$path/info.txt";
			$fo = fopen($info,'r');
			$lines = file($info);
			$id=$lines[1]; 
			fclose($fo);

			$pre = ($id-1);
			function find_project_for_id($find_id) {

			# the found project ... (empty until we find it)
			$found_project = "";

			# look in every project folder ...
			foreach (glob("projects/*/", GLOB_ONLYDIR) as $directory) {
				$project_file = "$directory/info.txt";

				# read information file
				$lines = file($project_file);

				# line 1 is the ID ...
				$project_id = $lines[1];
	
				# if this is the ID we're looking for, put it in $found_project
				# and then jump out of the loop
				if ($project_id == $find_id) {
					$found_project = $directory;
					break;
				}
			}
		return $found_project;
		}
		?>
		<div class="projectdetial">
            <div id="mainpic" class="col-sm-8">
                <img src="<?php echo $img?>" alt="">
            </div>
            <div id="projectinfo" class="col-sm-4">
                <div id="description">
                    <h3>
                        <?php
						$fo = fopen($info,'r');
						$lines = file($info);
						echo $lines[0]; 
						fclose($fo);
					?>
                    </h3>
                    <div>
                        <?php						
						echo nl2br(join(array_slice($lines,2)));
						?>
                    </div>
                </div>
				</div>
                <div id="previousproject">
                    <?php 
					if(($id-1)!=0){
					echo
					"<a href=\"projectpage.php?" . find_project_for_id($id-1) . "\" alt=\"\"> &#10096</a>";}	
					else{
					echo "<span style='color:#353535'>&#10096</span>";}
					?>
                </div>
                <div id="nextproject">
                    <?php 
					if(($id+1)!=11){
					echo
					"<a href=\"projectpage.php?" . find_project_for_id($id+1) . "\" alt=\"\"> &#10097</a>";}	
					else{
					echo "<span style='color:#353535'>&#10097</span>";}
				?>
                </div>

</body>

</html>