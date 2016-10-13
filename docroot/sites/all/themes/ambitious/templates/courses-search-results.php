<?php 
  if(!empty($t->field_event_date['und'][0]['value2'])){
    $close_date_unix = $t->field_event_date['und'][0]['value2'];  
  }
  else{
    $close_date_unix = $t->field_event_date['und'][0]['value'];  
  }


  //initializing the salary/location/commitment

  $location = "";

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
  //if (time() < $close_date_unix) {
    //  $closed_date_caption = 'Closing Date: ' . date("Y-m-d",$close_date_unix);
     // $closed_date_class = "date-display-single";

      // if (isset($t->field_location[und][0][value])) {
     //   $location = 'Location: ' . $t->field_location[und][0][value];
    // } 
      
//  }
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
        <div class="job-location">
            <span class="<?php print $closed_date_class?>" ><?php print $location; ?></span>
        </div>
      </div>
  </section>
</div>
