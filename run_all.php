<?php include "header.php";
include"config.inc.php";

 ?>
<link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

<style>
.container1 {
  position: relative;
  width: 50%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #008CBA;
  overflow: hidden;
  width: 0;
  height: 100%;
  transition: .5s ease;
}

.container:hover .overlay {
  width: 100%;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  white-space: nowrap;
}
</style>



<div class="site-section" style="font-family: 'Kanit', sans-serif;
">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="site-section-heading text-center">งานวิ่งทั้งหมด</h2>
       </div>
</div>
<br />


 <div class="site-section">
      <div class="container">
<div class="row">
       <div class="row mb-5">
	   
	   
<?php 
include"config.inc.php";
$i=0;
$sql_running_event = "SELECT * FROM tbl_running_event , tbl_user where tbl_running_event.id_user=tbl_user.id_user  ORDER BY tbl_running_event.id_running_event ASC"; 
$query_running_event = $conn->query($sql_running_event); 
while($result_running_event = $query_running_event->fetch_assoc()){
$i++;
?>	
	   <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <div class="media-with-text mb-5">
              <div class="mb-4">
                <a href="run_detail.php?id_running_event=<?php echo $result_running_event['id_running_event'];?>">
				<img src="blackoffice/photo_running_event/<?=$result_running_event['photo_running_event'];?>"  width="350" height="400"/> 
				
                </a>
				
				
				
              </div>
              <h2 class="h5 mb-2">
			
			  <?php 
			    $detail_topic=nl2br($result_running_event['name_running_event']);
				echo iconv_substr($detail_topic,0,35,'UTF-8');
			  ?>
			  </h2>
              <span class="mb-3 d-block post-date"><a href="#"><?php echo $result_running_event['date_running_event'];?></a></span>
              <p>
			  <?php 
			    $detail_message=nl2br($result_running_event['detail_running_event']);
				echo iconv_substr($detail_message,0,80,'UTF-8');
			  ?>
			  </p>
            </div>
          </div>
		  
		  <?php }?>
			

             


         




              
            </div>
          </div>
        </div>
      </div>
    </div>




    </div>
	    </div>
    
    
    

    

   <?php include"footer.php";?>