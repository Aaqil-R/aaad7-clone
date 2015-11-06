<?php 
  $close_date_unix = date_timestamp_get(date_create($t->field_closing_date['und'][0]['value']));

  // initialize closed date caption
  $closed_date_caption = "Closed for applications";
  $closed_date_class = "date-display-single closed";

  // check if close date has passed
  // if closed date has passed then 
  // show text "Closed for applications"
  // in red.
  // if not closed the render as date.
  if (time() < $close_date_unix) {
      $closed_date_caption = 'Closing Date: ' . date("Y-m-d",$close_date_unix);
      $closed_date_class = "date-display-single";
  }
?>
<div class="post card card--item" style="">
  <section class="job-card">
      <div> 
        <a href="/vacancies/test-vacancy">
          <?php

            $viewitemsimage = array();

            if(isset($t->field_featured_image)){
              $getitemsimage = field_get_items('node', $t ,'field_featured_image');
              $viewitemsimage = field_view_value('node'
                , $t 
                ,'field_featured_image'
                , $getitemsimage[0]
                , array('settings' => array('image_style' => 'tile_image')));

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
      </div>
  </section>
</div>