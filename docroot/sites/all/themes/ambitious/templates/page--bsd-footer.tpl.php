

    </div> 
  </div>
  <!-- main container of all the page elements -->
  <div id="wrapper-footer">
    <div id="wrapper" class="page"> 
      <footer id="footer">
          <div class="holder">
    		<div class="logo">
          <a href="www.ambitiousaboutautism.org.uk" title="Ambitious About Autism"><img src="http://thesmallaxe.github.io/aaa-frontend/images/logo-footer.png" alt="Ambitious About Autism"></a>
        </div>
    		<div class="right-footer">
              <?php print render($page['footer_right']); ?>
            </div><!-- /footer Right --> 
            <div class="company-info">          
              <?php print render($page['footer_copyright']); ?>
              <span class="design-by">Designed by <a href="https://www.bluestatedigital.com" target="_blank">Blue State Digital</a>. Built by <a href="http://weare.thesmallaxe.com" target="_blank">The Small Axe</a>.</span>            </div><!-- /footer copyright -->              
          </div>      
        </footer> <!-- /footer -->
        <a accesskey="t" href="#wrapper" class="accessibility">Back to top</a>  
    </div>
  </div>
  <?php print render($user_picture); ?>
  <?php print render($page['bottom']); ?>
