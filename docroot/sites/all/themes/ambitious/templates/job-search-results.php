<?php 
  //echo $t->field_closing_date['und'][0]['value']; 
  //$job_title = $t->title;

  // $image = $t->field_featured_image[LANGUAGE_NONE][0]['uri'];
  // $job_image = $imageURL . "/sites/default/files/styles/tile_image/public/" . $t->field_featured_image['und'][0]['filename'];
   $closing_date = $t->field_closing_date['und'][0]['value'];

  //dpr($t);

?>

<?php 
$nowtime = time();
$close_date = date_create($closing_date);
$close_date_unix = date_timestamp_get($close_date);
if ($nowtime < $close_date_unix ) {
?>
    <div class="post card card--item" style="">
      <section class="job-card">
          <div> 
            <a href="/vacancies/test-vacancy">
              <?php
                $getitemsimage = field_get_items('node', $t ,'field_featured_image');      
                $viewitemsimage = field_view_value('node', $t ,'field_featured_image'
                , $getitemsimage[0]
                , array('settings' => array('image_style' => 'tile_image')));
                print render($viewitemsimage);
              ?>
            </a>
          </div>
          <div class="content">
            <h3 <?php print $title_attributes; ?>>
              <a href="<?php print $url; ?>"><?php print $title; ?></a>
            </h3>
            <div class="close-date">
              Closing Date: <span class="date-display-single" property="dc:date" datatype="xsd:dateTime" content="2015-11-12T00:00:00+00:00"><?php echo date("Y-m-d",$close_date_unix); ?></span>
            </div>
          </div>
      </section>
    </div>
<?php    } ?>

