<?php
/*
Template Name: Default Two Col Page
*/
?>
<?php get_header() ?>


<div id="content">
<div id="content_container">



		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>


			<div class="entry-content">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:' ), 'after' => '</div>' ) ); ?>
			</div><!-- .entry-content -->


				<?php
				error_reporting(E_ALL);
				include("/home/cathol15/public_html/wordpress/wp-content/themes/ccdofw.org/php-form-builder-class/class.form.php");

				if(isset($_POST["cmd"]) && in_array($_POST["cmd"], array("submit_0"))) {
					$form = new form("googlespreadsheets_" . substr($_POST["cmd"], -1));
					if($form->validate()) {
						if($form->sendToGoogleSpreadsheet("kientran@gmail.com", "ewqjklcxzo0", "ccfw_newsletter_signup_form", ""))
						    echo "Congratulations! The information you enter has been sent your Google Docs spreadsheet.";
						else
							echo "Oops! The following error has occurred while sending information to your Google Docs spreadsheet.  " .  $form->getGoogleSpreadsheetError();
					}	
					else
						$form->renderAjaxErrorResponse();
					exit();
				}
				elseif(!isset($_GET["cmd"]) && !isset($_POST["cmd"])) {
					$title = "Google Spreadsheets";

					$form = new form("googlespreadsheets_0");
					$form->setAttributes(array(
						"map" => array(3, 3, 1, 3),
						"width" => 550,
						"ajax" => 1,
						"jsIncludesPath" => "/wp-content/themes/ccdofw.org/php-form-builder-class/includes"
					));

					if(!empty($_GET["errormsg_0"]))
						$form->errorMsg = filter_var(stripslashes($_GET["errormsg_0"]), FILTER_SANITIZE_SPECIAL_CHARS);

					$form->addHidden("cmd", "submit_0");
					$form->addSelect("Title:", "Title", "", array("Mr.", "Mrs.", "Ms.", "Mr. & Mrs.", 
						"Dr. & Mrs.", "Dr. & Mr.", "Dr. & Dr.", "Rev.", "Fr.", "Sr.", "Br.", "Rev. Fr.",
						"RR.", "Msgr.", "Ep."));
					$form->addTextbox("First Name:", "FName");
					$form->addTextbox("Last Name:", "LName");
					$form->addTextbox("Spouse:", "Spouse");
					$form->addTextbox("Phone Number:", "Phone");
					$form->addTextbox("Employer:", "Employer");
					$form->addTextbox("Address:", "Address");
					$form->addTextbox("City:", "City");
					$form->addState("State:", "State");
					$form->addTextbox("Zip Code:", "Zip");
					$form->addEmail("Email:", "Email");
					$form->addRadio("Interested in Volunteering?", "VolunteerYesNo", "", array("Yes"=> "Yes", "No" => "No"));
					$form->addRadio("Do you want a physical copy of the newsletter?", "PhysicalYesNo", "", array("Yes"=> "Yes", "No" => "No"));
					$form->addRadio("Do you want an email copy of the newsletter?", "EmailYesNo", "", array("Yes"=> "Yes", "No" => "No"));
					$form->addButton();
					$form->render();

					include("../footer.php");
				}
				?>

</div>
</div>



<?php get_sidebar() ?>

<?php get_footer() ?>
