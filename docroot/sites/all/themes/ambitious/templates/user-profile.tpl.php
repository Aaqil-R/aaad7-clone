<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<section class="top-header">
			<div class="top-header-inner">
				<ul class="page-links">
					<li><a href="#" title="Home">Home</a></li>
					<li><a href="#" title="Understanding autism">Understanding autism</a></li>
					<li><a href="#" title="Talk to others">Talk to others</a></li>
				</ul>
			</div>
		</section>
		<main id="main" role="main">

			<nav id="sidebar">
				<ul>
					<li><a href="#profile" class="active">My profile</a></li>
					<li><a href="#edit">Edit profile</a></li>
					<li><a href="#reset">Reset password</a></li>
				</ul>
			</nav>

			<div class="profile-body">
				<div class="holder">
		               <header>
		                	<h1>My profile</h1>
		                	<span class="member-since">
		                		Member since 19 December 2014
		                	</span>
		               </header>
		               <div class="profile-main">
		               		<section class="profile-info">
		               			<img class="profile-picture" alt="Profile image" src="images/profile-picture.jpg" width="200" height="200">
				               	<h3>Anna76</h3>
				               	<dl>
				               		<dt>Name:</dt>
				               		<dd>Anna Smith</dd>

				               		<dt>Email:</dt>
				               		<dd>anna76@gmail.com</dd>

				               		<dt>Location:</dt>
				               		<dd>Hampshire</dd>

				               		<dt>No. of posts:</dt>
				               		<dd>92</dd>

				               		<dt>Links:</dt>
				               		<dd>
				               			<strong>
				               				<a href="http://weare.thesmallaxe.com/blog/">Blog</a> / <a href="https://twitter.com/">Twitter</a>
				               			</strong>
				               		</dd>

				               		<dt>Signature:</dt>
				               		<dd>Anna - Community champion</dd>

				               	</dl>
			               	</section>
			               	<section class="about-me">
			               		<h2>About me</h2>
			               		<p>
			               			At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.
			               		</p>
			               		<a href="#" class="btn btn-red" title="Edit your profile">
			               			<span>
			               				Edit your profile <em class="icon-Rightarrow"></em>
			               			</span>
			               		</a>
		               		</section>
		               		<section class="connect">
			               		<h3>Connect for faster login</h3>
			               		<a href="#" class="btn btn-facebook" title="Facebook">
			               			<span>
			               				Facebook <em class="icon-Facebook"></em>
			               			</span>
			               		</a>
			               		<a href="#" class="btn btn-twitter" title="Twitter">
			               			<span>
			               				Twitter <em class="icon-Twitter"></em>
			               			</span>
			               		</a>
			               		<a href="#" class="btn btn-google" title="Google">
			               			<span>
			               				Google <em class="icon-google"></em>
			               			</span>
			               		</a>
		               		</section>
     			               	<section class="recent-activity">
     			               		<h2>Recent Activity</h2>
     			               		<ul class="tabs">
     			               			<li>
     			               				<a href="#" class="active"><strong>12</strong> Comments</a>
     			               			</li>
     			               			<li>
     			               				<a href="#"><strong>10</strong> Bookmarks</a>
     			               			</li>
     			               			<li>
     			               				<a href="#"><strong>27</strong> Messages</a>
     			               			</li>
     			               		</ul>
     			               		<div id="comments" class="clearfix">
     			               			<article id="comment-1" class="comment first">
     			               				<div class="comment-left">
     			               					<img class="profile-picture small" alt="Profile image" src="images/profile-picture-molly.jpg" width="60" height="60">
     			               					<h4><a href="#">Molly</a></h4>
     			               					<span class="time-ago">5 hours ago</span>
     			               				</div>
     			               				<div class="comment-body">
     			               					Mollis blandit vitae dis amet dis nostra curabitur class curabitur cubilia metus arcu dignissim quam suspendisse a sed lobortis arcu malesuada gravida enim parturient a at molestie. A odio condimentum litora egestas a euismod consectetur accumsan dapibus parturient consequat lectus vestibulum suspendisse scelerisque parturient justo a at.
     			               				</div>
     			               			</article>
     			               			<article id="comment-2" class="comment">
     			               				<div class="comment-left">
     			               					<img class="profile-picture small" alt="Profile image" src="images/profile-picture-mikes.jpg" width="60" height="60">
     			               					<h4><a href="#">MikeS</a></h4>
     			               					<span class="time-ago">12 hours ago</span>
     			               				</div>
     			               				<div class="comment-body">
     			               					Praesent ante vitae a nam suscipit hac nam nam a a laoreet convallis morbi torquent nullam. Tincidunt tincidunt curae a tempus duis diam per a at est accumsan laoreet nam risus eu bibendum mollis suspendisse sociosqu sociis velit a.
     			               				</div>
     			               			</article>
     			               			<article id="comment-3" class="comment">
     			               				<div class="comment-left">
     			               					<img class="profile-picture small" alt="Profile image" src="images/profile-picture-dave.jpg" width="60" height="60">
     			               					<h4><a href="#">Dave</a></h4>
     			               					<span class="time-ago">2 days ago</span>
     			               				</div>
     			               				<div class="comment-body">
     			               					Per adipiscing ultrices ad a eleifend dolor in morbi commodo cum suscipit vestibulum parturient feugiat consequat leo. Suspendisse condimentum cursus mauris parturient eu accumsan mus dui a faucibus a tristique scelerisque adipiscing a ac nibh aptent fermentum condimentum.
     			               				</div>
     			               			</article>
     			               		</div>
     		               		</section>


		               </div>
				</div>
			</div>

		</main>
<div class="profile"<?php print $attributes; ?>>
  <?php print render($user_profile); ?>
</div>
