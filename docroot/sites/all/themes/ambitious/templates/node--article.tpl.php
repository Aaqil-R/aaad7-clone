<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */

/* variables */ 
  
  $node = node_load(arg(1)); 
  $links = sharethis_node_view($node, 'full', 'en');
?> 
		<!-- contain main informative part of the site -->
		<section class="article">
		 <div class="article-left">
           <section class="article-left-holder">
		   <!-- article -->
             <article>
               <header>
                 <h1><?php print $title; ?></h1>
				<?php if ($content['field_standfirst']) : ?> 
                 	<h2 class="subheading"><?php print render($content['field_standfirst']); ?></h2>
                <?php endif; ?> 
                 <div class="article-info">
				   <cite>
				      <span>By Martyn, <em>Community Champion</em></span>
				      <a href="#" class="first" title="@martyn71">@martyn71</a>
					  <a href="#" title="email the author">email the author</a>
				   </cite>
			       <a href="#" class="btn btn-green btn-right" title="Share"><span>Share <em class="icon-Share"></em></span></a>
                 </div>
               </header>
			   <section class="visual">
			     <div class="img-holder">
			       <img src="images/img25.jpg" alt="image description">
			       <a href="#" class="btn-gray-perv" title="Leftarrow"><span class="icon-Leftarrow"></span></a>
			       <a href="#" class="btn-gray-next" title="Rightarrow"><span class="icon-Rightarrow"></span></a>
			     </div>
			     <div class="holder">
			       <span class="pic-caption">Photo caption goes here lorem ipsum dolor est amet it.</span>
			       <span class="pic-by">&copy; Photo by <a href="#" title="Derek Hall">Derek Hall</a>.</span>
			     </div> 
			  </section>
			  <?php print $content['body']; ?>
               <footer>
			     <div class="article-info">
			       <div class="article-updated">
				     <strong>Last updated: <time pubdate="pubdate">22 December 2014</time></strong>
					 <div class="article-tags">
					   <span>Tags: </span>
					   <ul class="tags">
					     <li><a href="#" title="For parents and carers">For parents and carers,</a></li>
						 <li class="tag-last"><a href="#" title="diagnosis">diagnosis </a></li>
					 </div>
				   </div>
                   <a href="#" class="btn btn-green btn-right" title="Share"><span>Share <em class="icon-Share"></em></span></a>
                 </div>
              </footer>
          </article>
	      <!-- comment columns -->
		<section class="comment-block">
		    <h4>Add a new comment</h4>
			<form action="#" class="comments">
					<fieldset>
						<legend class="hidden">Your name:</legend>
						<label for="name">Your name: </label>
						<strong id="name">Sarah</strong>
					</fieldset>
					<fieldset>
						<legend class="hidden">Your comment:</legend>
						<label for="message" class="label-block">Your comment:<span class="required">*</span></label>
						<div class="form-element"><textarea id="message"></textarea></div>
					</fieldset>
					<fieldset class="submit-actions">
						<legend class="hidden">Submit actions</legend>
						<label for="submit" class="hidden">Submit</label>
						<input type="submit" id="submit" class="btn btn-gray btn-left" value="Submit" />
						<label for="preview" class="hidden">Preview</label>
						<input type="submit" id="preview" class="btn btn-gray btn-left bt-left" value="Preview" />
					</fieldset>
				</form>
		</section>
		<section class="comment-list">
		   <h4>3 comments <a href="#" title="Read our guidelines">Read our guidelines</a></h4>
		   <ul class="comment-listing">
		     <li>
			   <div class="comment-left">
			     <div class="comment-img-holder">
				   <img src="images/img22.jpg" alt="Sarah" />
				 </div>
			     <cite>Sarah</cite>
			     <time pubdate="pubdate">Thursday <br>20 Nov 2014 <br>23:54</time>
			     <a href="#" title="permalink">permalink</a>
			   </div>
			   <div style="" class="comment-right">
			     <p>This is an example comment, lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
				  <div class="links">
				    <ul>
					  <li><a href="#" title="Reply">Reply</a></li>
					</ul>
				  </div>
			   </div>
			<ul class="comment-listing children">
		     <li>
			   <div class="comment-left">
			     <div class="comment-img-holder">
				   <img src="images/img23.jpg" alt="Molly" />
				 </div>
			     <cite>Molly</cite>
			     <time pubdate="pubdate">Friday <br>21 Nov 2014 <br>09:24</time>
			     <a href="#" title="permalink">permalink</a>
			   </div>
			   <div style="" class="comment-right">
			     <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
				  <div class="links">
				    <ul>
					  <li><a href="#" title="Reply">Reply</a></li>
					</ul>
				  </div>
			   </div>
			   <ul class="comment-listing children">
		     <li>
			   <div class="comment-left">
			     <div class="comment-img-holder">
				   <img src="images/img24.jpg" alt="Dave" />
				 </div>
			     <cite>Dave</cite>
			     <time pubdate="pubdate">Friday <br>21 Nov 2014 <br>13:07</time>
			     <a href="#" title="permalink">permalink</a>
			   </div>
			   <div style="" class="comment-right">
			     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
				  <div class="links">
				    <ul>
					  <li><a href="#" title="Reply">Reply</a></li>
					</ul>
				  </div>
			   </div>
			 </li>
		   </ul>
			 </li>
		   </ul>
			 </li>
		   </ul>
		</section>
		<!-- action columns -->
		<section class="action-block">
			<div class="holder">
				<!-- action symptoms -->
				<div class="block-symptoms lavender-box">
					<strong class="text">
						<span>Does my child </span><br><span class="add"> have autism?</span>
					</strong>
					<a href="#" class="btn btn-transparent" title="See symptoms">See symptoms <em class="icon-Rightarrow"></em></a>
				</div>
				<!-- action inspire -->
				<div class="block-blog magenta-box">
					<strong class="title">Struggling <br> with<br> bullying?</strong>
					<a href="#" class="btn btn-transparent" title="Read the blog">Read the blog<em class="icon-Rightarrow"></em></a>
				</div>
			</div>
		</section>
		</div>
		<!-- article right column -->
		<div class="article-right">
		<h2>You may also like</h2>
		<div class="posts-columns">
				<!-- post column -->
				<div class="col">
					<!-- post block -->
					<section class="post">
						<div class="img-holder">
							<img src="images/img04.jpg" alt="image description">
						</div>
						<div class="info add">
							<h3><a href="#" title="Nicky: Life with two daughters with autism">Nicky: Life with two daughters with autism</a></h3>
						</div>
					</section>
					<!-- post block -->
					<section class="post">
						<div class="img-holder">
							<img src="images/img05.jpg" alt="image description">
						</div>
						<div class="info add">
							<h3><a href="#" title="Article title here">Article title here</a></h3>
						</div>
					</section>
					<!-- post block -->
					<section class="post">
						<div class="img-holder">
							<img src="images/img07.jpg" alt="image description">
						</div>
						<div class="info add">
							<h3><a href="#" title="everydayautism">#everydayautism</a></h3>
							<span class="cite"><strong>- <a href="#" title="Colin">Colin</a></strong>  (via Twitter)</span>
						</div>
					</section>
				</div>
			</div>
		</div>
		</section>
