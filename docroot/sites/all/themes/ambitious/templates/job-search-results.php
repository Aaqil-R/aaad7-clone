<?php 
  //echo $t->field_closing_date['und'][0]['value']; 
  //$job_title = $t->title;
  $job_image = $imageURL . "/sites/default/files/styles/tile_image/public/" . $t->field_featured_image['und'][0]['filename'];
  $closing_date = $t->field_closing_date['und'][0]['value'];
?>


    <div class="post card card--item" style="">
      <section class="job-card">
          <div> 
            <a href="/vacancies/test-vacancy">
              <img typeof="foaf:Image" src="<?php echo $job_image; ?>" alt="">
            </a>
          </div>
          <div class="content">
            <h3 <?php print $title_attributes; ?>>
              <a href="<?php print $url; ?>"><?php print $title; ?></a>
            </h3>
            <div class="close-date">
              Closing Date: 
                <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-11-12T00:00:00+00:00"><?php echo $closing_date; ?></span>
            </div>
          </div>
      </section>
    </div>

