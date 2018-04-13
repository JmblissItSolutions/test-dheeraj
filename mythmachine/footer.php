<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					echo et_get_footer_credits();
				?>
                <div id="footer-bottom-right">
                
					<a href="/terms-and-conditions/">Terms and Conditions | </a><a href="/privacy-policy/">Privacy Policy</a>
                </div>
                
                
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<!-- terms pop up content -->
		<div class="pop-up">
            	<div class="pop-box">
            	<div class="cross-btn"></div>
            	<div class="pop-contnt">
            	  <h3>Myth Machine Terms of use</h3>
                    <p><label for="agreed" class="btn-accpt reader-btn">Accept</label></p>
            	  <p>Welcome to MythMachine.com, the website and online service of Myth Machine LLC (together with its affiliates, "Myth Machine""we," or "us"). This page explains the terms by which you may use our service. By accessing or using the Myth Machine services, website and software provided through or in connection with the service ("Service"), you signify that you have read, understood, and agree to be bound by this Terms of Use Agreement, the Myth Machine Privacy Policy, the MythMachine.com Conditions of Use, and the other applicable rules, policies and terms posted on the MythMachine.com website or provided with the Service (collectively, this "Agreement"), whether or not you are a registered user of our Service.</p>
            	 <p>
            	 	We reserve the right to amend this Agreement at any time in our sole discretion by posting the revised Agreement on the MythMachine.com website. Your continued use of the Service after any such changes constitutes your acceptance of the revised Agreement. This Agreement applies to all visitors, users, and others who access the Service ("Users").
            	 </p>
            	 <p><strong>1. Use of Our Service</strong></p>
            	 <p>Myth Machine provides a place for you to discover, read, and talk about books with friends and our community.</p>
            	 <p>You do not have to register in order to visit Myth Machine. To access certain features of the Service, though, including creating "bookmarks" to organize what you've read, posting book reviews, and commenting on other members' reviews, you will need to register with Myth Machine and create a "Member" account. Your account gives you access to the services and functionality that we may establish and maintain from time to time and in our sole discretion.</p>
            	 <p>You may never use another Member’s account without permission. You are responsible for maintaining the confidentiality of your account and password and for restricting access to your account, and you agree to accept responsibility for all activities that occur under your account or password. You agree to notify Myth Machine immediately of any breach of security or unauthorized use of your account.</p>
            	 <p>You may change the settings on your My Account page to control your profile and how other members communicate with you. By providing Myth Machine your email address you consent to our using the email address in accordance with our Privacy Policy.</p>
            	 <p>Subject to your compliance with this Agreement and your payment of any applicable fees, we grant you a limited, non-exclusive, non-transferable, non-sublicensable license to access and make personal and non-commercial use of the Service. This license does not include any resale or commercial use of any part of the Service, or its contents; any collection and use of any book listings, descriptions, reviews or other material included in the Service; any derivative use of any part of the Service or its contents; any downloading, copying, or other use of account information for the benefit of any third party; or any use of data mining, robots, or similar data gathering and extraction tools. All rights not expressly granted to you in this Agreement are reserved and retained by us or our licensors, suppliers, publishers, rightsholders, or other content providers. No part of the Service may be reproduced, duplicated, copied, sold, resold, visited, or otherwise exploited for any commercial purpose without our express written consent. You may not frame or utilize framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, page layout, or form) of Myth Machine without our express written consent. You may not use any meta tags or any other "hidden text" utilizing our name or trademarks without our express written consent. You may not misuse the Service. You may use the Service only as permitted by law. The licenses granted by us terminate if you do not comply with this Agreement.</p>
            	 <p>In order to protect our Members from unsolicited advertising or solicitation, Myth Machine reserves the right to restrict the number of communications that a Member may send to other Members in any 24-hour period to a number that Myth Machine deems appropriate in its sole discretion.</p>
            	 <p>Myth Machine may permanently or temporarily terminate, suspend, or otherwise refuse to permit your access to the Service without notice and liability for any reason, including if in Myth Machine' sole determination you violate any provision of this Agreement, or for no reason. Upon termination for any reason or no reason, you continue to be bound by this Agreement.</p>	
            	 <p>The Service is subject to scheduled and unscheduled service interruptions. All aspects of the Service are subject to change or elimination at Myth Machine‘s sole discretion. You agree that Myth Machine will not be liable to you for any interruption of the Service, delay or failure to perform.</p>
            	 <p>You are solely responsible for your interactions with other Myth Machine Users. We reserve the right, but have no obligation, to monitor disputes between you and other Users. Myth Machine shall have no liability for your interactions with other Users, or for any User’s action or inaction.</p>	
            	 <p><strong>2. User Content</strong></p>
            	 <p>Some areas of the Service may allow Users to upload, publish, display, link to or otherwise make available (hereinafter, "post") reviews, comments, questions, highlights, and other information including Users’ names, voices and likenesses ("User Content"). You are solely responsible for your User Content. You agree not to post User Content that is illegal, obscene, threatening, defamatory, invasive of privacy, infringing of intellectual property rights (including publicity rights), or otherwise injurious to third parties or objectionable, and does not consist of or contain software viruses, political campaigning, commercial solicitation, chain letters, mass mailings, or any form of "spam" or unsolicited commercial electronic messages. You may not use a false e-mail address, impersonate any person or entity, or otherwise mislead as to the origin of content. You hereby represent that you are the owner of all the copyright rights with respect to, or that you have the legal right to post, your User Content, and that you have the power to grant the license granted below. Myth Machine reserves the right to monitor, reject and/or remove any User Content at any time. For example, Myth Machine may, but is not obligated to, reject and/or remove any User Content that Myth Machine believes, in its sole discretion, violates these provisions.</p>	
            	 <p>Myth Machine takes no responsibility and assumes no liability for any User Content that you or any other Users or third parties post or send over the Service. You understand and agree that any loss or damage of any kind that occurs as a result of the use of any User Content that you post is solely your responsibility. Myth Machine is not responsible for any public display or misuse of your User Content. You understand and acknowledge that you may be exposed to User Content that is inaccurate, offensive, indecent, or objectionable, and you agree that Myth Machine shall not be liable for any damages you allege to incur as a result of such User Content. Myth Machine may provide tools for you to remove some User Content, but does not guarantee that all or any User Content will be removable.</p>
            	 <p><strong>3. License Grant</strong></p>	
            	 <p>By posting any User Content on the Service, you expressly grant to Myth Machine a nonexclusive, royalty-free, perpetual, irrevocable, and fully sublicensable right to use, reproduce, modify, adapt, publish, perform, translate, create derivative works from, distribute, and display such content throughout the world in any media. You represent and warrant that you own or otherwise control all of the rights to the content that you post; that the content is accurate; that use of the content you supply does not violate this policy and will not cause injury to any person or entity; and that you will indemnify Myth Machine for all claims resulting from content you supply. If you submit User Content via the “Author Portal” or “Blog” features, our Terms of Use for Writers apply to that User Content.</p>
            	 <p><strong>4. Our Proprietary Rights</strong></p>
            	 <p>Except for your User Content, the Service and all materials therein or transferred thereby, including, without limitation, software, images, text, graphics, illustrations, logos, patents, trademarks, service marks, copyrights, photographs, audio, videos, music, and User Content (the "Myth Machine Content"), and all intellectual property Rights related thereto, are the exclusive property of Myth Machine and its licensors. Except as explicitly provided herein, nothing in this Agreement shall be deemed to create a license in or under any such intellectual property Rights, and you agree not to sell, license, rent, modify, distribute, copy, reproduce, transmit, publicly display, publicly perform, publish, adapt, edit or create derivative works from any materials or content accessible on the Service. Use of the Myth Machine Content or materials on the Service for any purpose not expressly permitted by this Agreement is strictly prohibited.</p>
            	 <p>You may choose to or we may invite you to submit comments or ideas about the Service, including without limitation about how to improve the Service or our products ("Ideas"). By submitting any Idea, you agree that your disclosure is gratuitous, unsolicited and without restriction and will not place Myth Machine under any fiduciary or other obligation, and that we are free to use the Idea without any additional compensation to you, and/or to disclose the Idea on a non-confidential basis or otherwise to anyone. You further acknowledge that, by acceptance of your submission, Myth Machine does not waive any rights to use similar or related ideas previously known to Myth Machine, or developed by its employees, or obtained from sources other than you.</p>
            	 <p><strong>5. Eligibility</strong></p>
            	 <p>This Service is intended solely for Users who are thirteen (13) years of age or older, and any registration, use or access to the Service by anyone under 13 is unauthorized, unlicensed, and in violation of this Agreement. If you are under 18 years of age you may use the Service only if you either are an emancipated minor or possess legal parental or guardian consent, and are fully able and competent to enter into the terms, conditions, obligations, affirmations, representations, and warranties set forth in this Agreement, and to abide by and comply with this Agreement.</p>
            	 <p><strong>6. Paid Services</strong></p>
            	 <p>Billing Policies. Certain aspects of the Service may be provided for a fee or other charge. These fees and charges, if any, are described on the website. If you elect to use paid aspects of the Service, you agree to the pricing, payment and billing policies applicable to such fees and charges, posted at the website. Myth Machine may add new services for additional fees and charges, or amend fees and charges for existing services, at any time in its sole discretion.</p>
            	 <p>No Refunds. You may cancel your Myth Machine Account at any time; however, there are no refunds for cancellation. As permitted under the terms of this Agreement, Myth Machine has the right at any time for any reason or no reason to suspend or terminate your Account, terminate this Agreement, and/or refuse any and all current or future use of the Service without notice, refund, obligation, or liability to you. In the event that Myth Machine suspends or terminates your Myth Machine Account or this Agreement, you understand and agree that you shall receive no refund or exchange for any unused time on a subscription, any license or subscription fees for any portion of the Service, any content or data associated with your Myth Machine Account, or for anything else. You acknowledge that Myth Machine has the perpetual and irrevocable right to delete any or all of your content and data from Myth Machine's servers and from the Service, whether intentionally or unintentionally, and for any reason or no reason, without any liability of any kind to you or any other party.</p>
            	 <p><strong>7. Copyright Complaints</strong></p>
            	 <p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible via the Service, please send us the following information:</p>
            	 <ul>
            	 	<li>An electronic or physical signature of a person authorized to act on behalf of the copyright owner;</li>
            	 	<li>A description of the copyrighted work that you claim has been infringed upon;</li>
            	 	<li>A description of the material that is claimed to be infringing and where it is located on the Service;</li>
            	 	<li>Your address, telephone number, and e-mail address; 
            	 	 <span>A statement that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law; and
    A statement, made under penalty of perjury, that the above information is accurate, and that you are the copyright owner or are authorized to act on behalf of the owner.
</span>
            	 	</li>            	 	          	 	
            	 </ul>

<address>
 <p>
 <strong>Copyright Agent Attn:</strong>
DMCA Notice
Myth Machine LLC
3501 W Elder, Suite 208, Boise, ID 83705</p>
<p>
<strong>Email:</strong><a href="mailto:copyright@mythmachine.com">copyright@MythMachine.com</a></p>
<p><strong>Telephone:</strong> <a href="tel:2087401317">(208) 740-1317</a>
  </p>
</address>
            	 <p>Please note that this procedure is exclusively for notifying Myth Machine and its affiliates that your copyrighted material has been infringed.</p>

            	 <p><strong>8. Third-Party Websites, Advertisers or Services</strong></p>
            	 <p>Myth Machine may contain links to third-party websites, advertisers, or services that are not owned or controlled by Myth Machine. Myth Machine has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party websites or services. If you access a third party website from Myth Machine, you do so at your own risk, and you understand that this Agreement and Myth Machine’ Privacy Policy do not apply to your use of such sites. You expressly relieve Myth Machine from any and all liability arising from your use of any third-party website or services or third party owned content.</p>
            	 <p>Additionally, your dealings with or participation in promotions of advertisers found on Myth Machine, including payment and delivery of goods, and any other terms (such as warranties) are solely between you and such advertisers. You agree that Myth Machine shall not be responsible for any loss or damage of any sort relating to your dealings with such advertisers.</p>
            	 <p>We encourage you to be aware of when you leave the Service, and to read the terms and conditions and privacy policy of any third-party website or service that you visit.</p>
            	 <p><strong>9. Indemnity</strong></p>
            	 <p>You agree to defend, indemnify and hold harmless Myth Machine and its subsidiaries, agents, managers, and other affiliated companies, and their employees, contractors, agents, officers and directors, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney's fees) arising from: (i) your use of and access to the Service, including any data or content transmitted or received by you; (ii) your violation of any term of this Agreement, including without limitation your breach of any of the representations and warranties above; (iii) your violation of any third-party right, including without limitation any right of privacy, publicity rights or intellectual property rights; (iv) your violation of any law, rule or regulation of the United States or any other country; (v) any claim or damages that arise as a result of any of your User Content or any that are submitted via your account; or (vi) any other party’s access and use of the Service with your unique username, password or other appropriate security code.</p>
            	 <p><strong>10. Disclaimers of Warranties and Limitation of Liability</strong></p>
            	 <p class="cplz-font">THE SERVICE AND ALL INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) AND OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE ARE PROVIDED ON AN "AS IS" AND "AS AVAILABLE" BASIS, UNLESS OTHERWISE SPECIFIED IN WRITING. MYTH MACHINE MAKES NO REPRESENTATIONS OR WARRANTIES OF ANY KIND, EXPRESS OR IMPLIED, AS TO THE OPERATION OF THE SERVICE, OR THE INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE, UNLESS OTHERWISE SPECIFIED IN WRITING. YOU EXPRESSLY AGREE THAT YOUR USE OF THE SERVICE IS AT YOUR SOLE RISK.</p>
            	 <p class="cplz-font">TO THE FULL EXTENT PERMISSIBLE BY APPLICABLE LAW, MYTH MACHINE DISCLAIMS ALL WARRANTIES, EXPRESS OR IMPLIED, INCLUDING, BUT NOT LIMITED TO, IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. MYTH MACHINE DOES NOT WARRANT THAT THE SERVICE, INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE, MYTH MACHINE’S SERVERS OR ELECTRONIC COMMUNICATIONS SENT FROM MYTH MACHINE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. MYTH MACHINE WILL NOT BE LIABLE FOR ANY DAMAGES OF ANY KIND ARISING FROM THE USE OF THE SERVICE, OR FROM ANY INFORMATION, CONTENT, MATERIALS, PRODUCTS (INCLUDING SOFTWARE) OR OTHER SERVICES INCLUDED ON OR OTHERWISE MADE AVAILABLE TO YOU THROUGH THE SERVICE, INCLUDING, BUT NOT LIMITED TO DIRECT, INDIRECT, INCIDENTAL, PUNITIVE, AND CONSEQUENTIAL DAMAGES, UNLESS OTHERWISE SPECIFIED IN WRITING. CERTAIN STATE LAWS DO NOT ALLOW LIMITATIONS ON IMPLIED WARRANTIES OR THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS, EXCLUSIONS, OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MIGHT HAVE ADDITIONAL RIGHTS</p>

            	 <p>Assignment. This Agreement, and any rights and licenses granted hereunder, may not be transferred or assigned by you, but may be assigned by Myth Machine without restriction.</p>

            	 <p>Disputes/Binding Arbitration. Any dispute or claim arising from or relating to this Agreement or a Kindle, any Reading Application, the Software, the Digital Content or the Service is subject to the binding arbitration, governing law, disclaimer of warranties, limitation of liability and all other terms in the Myth Machine Conditions of Use. You agree to those terms by entering into this Agreement or using a Kindle, any Reading Application, or the Service</p>
            	 <p>No Waiver. No waiver of any term of this Agreement shall be deemed a further or continuing waiver of such term or any other term, and Myth Machine' failure to assert any right or provision under this Agreement shall not constitute a waiver of such right or provision.</p>
            	 <p>Please <a href="mailto:copyright@MythMachine.com">contact us</a> with any questions regarding this Agreement.</p>
            	 </div>           	 
            	</div>
            </div>

<!-- terms pop up content end -->

<script>
jQuery(document).ready(function(){
    jQuery(".simple-post-tax-wrap h3").click(function(){
        jQuery("ul.simple-post-tax-check-list").toggle("slow");
		
    });
	jQuery( ".simple-post-tax-wrap h3" ).click(function() {
  jQuery( this ).toggleClass( "arrows" );
 });
 
 
 jQuery( "#bp-avatar-upload a" ).click(function() {
  jQuery(".bp-avatar").toggleClass( "disply-click");
  jQuery(".bp-avatar-status").toggleClass( "disply-click");
 });
 
 jQuery( " #bp-avatar-upload a" ).click(function() {
  jQuery(".bp-avatar").removeClass( "disply-click");
  jQuery(".bp-avatar-status").removeClass( "disply-click");
 });
 	
});

</script>

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
<link rel='stylesheet' id='divi-style-css'  href='/wp-content/themes/mythmachine/custom.css' type='text/css' media='all' />
<!-- <script type="text/javascript" src="/wp-content/themes/mythmachine/js/GScroll.js"></script>
 <script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.single-book-text').GScroll();
        jQuery('<a href=""></a>')
    });
</script> -->

</body>
</html>