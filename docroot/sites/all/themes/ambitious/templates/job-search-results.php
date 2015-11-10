<?php 
  $close_date_unix = date_timestamp_get(date_create($t->field_closing_date['und'][0]['value']));

  //initializing the salary/location/commitment
  $salary = "";
  $job_location = "";
  $job_commitment = "";
  $commitment = "Not Mentioned";

  // initialize closed date caption
  $closed_date_caption = "Closed for applications";
  $closed_date_class = "date-display-single closed";

  // check if close date has passed
  // if closed date has passed then 
  // show text "Closed for applications"
  // in red.
  // if not closed the render as date.
  // also checks whether the other fields 
  // are popluated and prints them.
  if (time() < $close_date_unix) {
      $closed_date_caption = 'Closing Date: ' . date("Y-m-d",$close_date_unix);
      $closed_date_class = "date-display-single";

      if (isset($t->field_salary[und][0][value])) {
        $salary = 'Salary: ' . $t->field_salary[und][0][value];
      } 
      else {
        $salary = 'Salary: ' . $commitment;
      }

      if (isset($t->field_vacancy_location[und][0][value])) {
        $job_location = 'Location: ' . $t->field_vacancy_location[und][0][value];
      } 
      else {
        $job_location = 'Location: ' . $commitment;
      }

      if(isset($t->field_time_commitment[und][1][value])) {
        $commitment = "Full Time & Part Time" ;
        $job_commitment = 'Commitment: ' .  $commitment;
      } 
      else {
        if($t->field_time_commitment[und][0][value] == 1) {
          $commitment = "Full Time" ;
        }
        elseif ($t->field_time_commitment[und][0][value] == 2){
          $commitment = "Part Time";
        }
        $job_commitment = 'Commitment: ' . $commitment;
      }
  }
?>
<div class="post card card--item" style="">
  <section class="job-card">
      <div> 
        <a href="<?php print $url; ?>">
          <?php

            $viewitemsimage = array();

            if(isset($t->field_featured_image)){
              $getitemsimage = field_get_items('node', $t ,'field_featured_image');
              $viewitemsimage = field_view_value('node'
                , $t 
                ,'field_featured_image'
                , $getitemsimage[0]
                , array('settings' => array('image_style' => 'tile_image')));

              if(!isset($viewitemsimage['#item']))
                  {  
                   //rendering the default image
                   $viewitemsimage = field_view_field('node', $t, 'field_featured_image', array('settings' => array('image_style' => 'tile_image')));
                  }

              print render($viewitemsimage);
            } 

          ?>
        </a>
      </div>
      <div class="content">
        <h3 <?php print $title_attributes; ?>>
          <a href="<?php print $url; ?>"><?php print $title; ?></a>
        </h3>
        <div class="close-date">
            <span class="<?php print $closed_date_class?>" property="dc:date" datatype="xsd:dateTime" content="2015-11-12T00:00:00+00:00"><?php print $closed_date_caption; ?></span>
        </div>
        <div class="salary">
            <span class="<?php print $closed_date_class?>" ><?php print $salary; ?></span>
        </div>
        <div class="job-location">
            <span class="<?php print $closed_date_class?>" ><?php print $job_location; ?></span>
        </div>
        <div class="job-commitment">
            <span class="<?php print $closed_date_class?>" ><?php print $job_commitment; ?></span>
        </div>
      </div>
  </section>
</div>