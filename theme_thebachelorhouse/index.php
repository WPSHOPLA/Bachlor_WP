<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php if ( have_posts() ) : ?>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php // get_template_part( 'content', get_post_format() ); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						<?php if ( is_single() ) : ?>
						<?php the_date('j M', '<span class="post-date">', '</span>'); ?>
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php else : ?>
						<h1 class="entry-title">
							<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						</h1>
						<?php endif; // is_single() ?>

						<div class="entry-meta">
							<?php twentythirteen_entry_meta(); ?>
							<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<?php if ( is_search() ) : // Only display Excerpts for Search ?>
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->
					<?php else : ?>
					<div class="entry-content">
						<?php
							/* translators: %s: Name of current post */
							the_content( sprintf(
								__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentythirteen' ),
								the_title( '<span class="screen-reader-text">', '</span>', false )
							) );

							wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) );
						?>
					</div><!-- .entry-content -->
					<?php endif; ?>

					<footer class="entry-meta">
						<?php if ( comments_open() && ! is_single() ) : ?>
							<div class="comments-link">
								<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
							</div><!-- .comments-link -->
						<?php endif; // comments_open() ?>

						<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
							<?php get_template_part( 'author-bio' ); ?>
						<?php endif; ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

			<?php endwhile; ?>

			<?php //twentythirteen_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
			
			<div class="main-container member-container">
			    <div class="member-page">
			        <div class="outer-blog">         
			            <div class="blog-center-start-today">
			                <span>Possibilities are always endless. Start today.</span>
			            </div>
			            <div class="blog-cat-outer">
			                <div class="blog-cat-inner">
			                    <h2 class="story-sm wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.75s; animation-name: fadeIn;">Our Story</h2>
			                    <h2 class="media-sm wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.75s; animation-name: fadeIn;">News And Media</h2>
			                    <h2 class="faq-sm wow fadeIn" data-wow-duration="2s" data-wow-delay=".75s" style="visibility: visible; animation-duration: 2s; animation-delay: 0.75s; animation-name: fadeIn;"> <a href="http://www.thebachelorhouse.com/faqs/">FAQS</a></h2>
			                </div>
			                <div class="blog-cat-detail">
			                    <span>Tell Us about You</span>
			                    <p>Please complete the details below and one of our team will get in touch with you.Or you can just give us a call on +66 892278923 (Bangkok) or +852 2682 6430for a chat with one of our friendly and experienced Consultants.</p>
			                </div>
			            </div>
			            <div class="contct-form7-shrtcode">
			                <div role="form" class="wpcf7" id="wpcf7-f368-p12-o1" lang="en-US" dir="ltr">
			                    <div class="screen-reader-response"></div>
			                    <form action="/membership/#wpcf7-f368-p12-o1" method="post" class="wpcf7-form" enctype="multipart/form-data" novalidate="novalidate">
			                        <div style="display: none;">
			                            <input type="hidden" name="_wpcf7" value="368">
			                            <input type="hidden" name="_wpcf7_version" value="4.5.1">
			                            <input type="hidden" name="_wpcf7_locale" value="en_US">
			                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f368-p12-o1">
			                            <input type="hidden" name="_wpnonce" value="ec9ef79b70">
			                        </div>
			                        <div class="input-box">
			                            <span class="wpcf7-form-control-wrap first-name"><input type="text" name="first-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="First Name"></span>
			                            <br>
			                            <span class="wpcf7-form-control-wrap last-name"><input type="text" name="last-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Last Name"></span>
			                            <br>
			                            <span class="wpcf7-form-control-wrap your-country"><select name="your-country" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="Country">Country</option><option value="Aruba">Aruba</option><option value="Afghanistan">Afghanistan</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Åland Islands">Åland Islands</option><option value="Albania">Albania</option><option value="Andorra">Andorra</option><option value="United Arab Emirates">United Arab Emirates</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="American Samoa">American Samoa</option><option value="Antarctica">Antarctica</option><option value="French Southern Territories">French Southern Territories</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Burundi">Burundi</option><option value="Belgium">Belgium</option><option value="Benin">Benin</option><option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option><option value="Burkina Faso">Burkina Faso</option><option value="Bangladesh">Bangladesh</option><option value="Bulgaria">Bulgaria</option><option value="Bahrain">Bahrain</option><option value="Bahamas">Bahamas</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Saint Barthélemy">Saint Barthélemy</option><option value="Belarus">Belarus</option><option value="Belize">Belize</option><option value="Bermuda">Bermuda</option><option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option><option value="Brazil">Brazil</option><option value="Barbados">Barbados</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bhutan">Bhutan</option><option value="Bouvet Island">Bouvet Island</option><option value="Botswana">Botswana</option><option value="Central African Republic">Central African Republic</option><option value="Canada">Canada</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Switzerland">Switzerland</option><option value="Chile">Chile</option><option value="China">China</option><option value="Côte d'Ivoire">Côte d'Ivoire</option><option value="Cameroon">Cameroon</option><option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option><option value="Congo">Congo</option><option value="Cook Islands">Cook Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Cape Verde">Cape Verde</option><option value="Costa Rica">Costa Rica</option><option value="Cuba">Cuba</option><option value="Curaçao">Curaçao</option><option value="Christmas Island">Christmas Island</option><option value="Cayman Islands">Cayman Islands</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Germany">Germany</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Denmark">Denmark</option><option value="Dominican Republic">Dominican Republic</option><option value="Algeria">Algeria</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="Eritrea">Eritrea</option><option value="Western Sahara">Western Sahara</option><option value="Spain">Spain</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Finland">Finland</option><option value="Fiji">Fiji</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="France">France</option><option value="Faroe Islands">Faroe Islands</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Gabon">Gabon</option><option value="United Kingdom">United Kingdom</option><option value="Georgia">Georgia</option><option value="Guernsey">Guernsey</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Guinea">Guinea</option><option value="Guadeloupe">Guadeloupe</option><option value="Gambia">Gambia</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Greece">Greece</option><option value="Grenada">Grenada</option><option value="Greenland">Greenland</option><option value="Guatemala">Guatemala</option><option value="French Guiana">French Guiana</option><option value="Guam">Guam</option><option value="Guyana">Guyana</option><option value="Hong Kong">Hong Kong</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Honduras">Honduras</option><option value="Croatia">Croatia</option><option value="Haiti">Haiti</option><option value="Hungary">Hungary</option><option value="Indonesia">Indonesia</option><option value="Isle of Man">Isle of Man</option><option value="India">India</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Ireland">Ireland</option><option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option><option value="Iraq">Iraq</option><option value="Iceland">Iceland</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Japan">Japan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Cambodia">Cambodia</option><option value="Kiribati">Kiribati</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Korea, Republic of">Korea, Republic of</option><option value="Kuwait">Kuwait</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Lebanon">Lebanon</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Saint Lucia">Saint Lucia</option><option value="Liechtenstein">Liechtenstein</option><option value="Sri Lanka">Sri Lanka</option><option value="Lesotho">Lesotho</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Latvia">Latvia</option><option value="Macao">Macao</option><option value="Saint Martin (French part)">Saint Martin (French part)</option><option value="Morocco">Morocco</option><option value="Monaco">Monaco</option><option value="Moldova, Republic of">Moldova, Republic of</option><option value="Madagascar">Madagascar</option><option value="Maldives">Maldives</option><option value="Mexico">Mexico</option><option value="Marshall Islands">Marshall Islands</option><option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Myanmar">Myanmar</option><option value="Montenegro">Montenegro</option><option value="Mongolia">Mongolia</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Mozambique">Mozambique</option><option value="Mauritania">Mauritania</option><option value="Montserrat">Montserrat</option><option value="Martinique">Martinique</option><option value="Mauritius">Mauritius</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Mayotte">Mayotte</option><option value="Namibia">Namibia</option><option value="New Caledonia">New Caledonia</option><option value="Niger">Niger</option><option value="Norfolk Island">Norfolk Island</option><option value="Nigeria">Nigeria</option><option value="Nicaragua">Nicaragua</option><option value="Niue">Niue</option><option value="Netherlands">Netherlands</option><option value="Norway">Norway</option><option value="Nepal">Nepal</option><option value="Nauru">Nauru</option><option value="New Zealand">New Zealand</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Panama">Panama</option><option value="Pitcairn">Pitcairn</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Palau">Palau</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Poland">Poland</option><option value="Puerto Rico">Puerto Rico</option><option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option><option value="Portugal">Portugal</option><option value="Paraguay">Paraguay</option><option value="Palestine, State of">Palestine, State of</option><option value="French Polynesia">French Polynesia</option><option value="Qatar">Qatar</option><option value="Réunion">Réunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Sudan">Sudan</option><option value="Senegal">Senegal</option><option value="Singapore">Singapore</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option><option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option><option value="Solomon Islands">Solomon Islands</option><option value="Sierra Leone">Sierra Leone</option><option value="El Salvador">El Salvador</option><option value="San Marino">San Marino</option><option value="Somalia">Somalia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Serbia">Serbia</option><option value="South Sudan">South Sudan</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Suriname">Suriname</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Sweden">Sweden</option><option value="Swaziland">Swaziland</option><option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option><option value="Seychelles">Seychelles</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Chad">Chad</option><option value="Togo">Togo</option><option value="Thailand">Thailand</option><option value="Tajikistan">Tajikistan</option><option value="Tokelau">Tokelau</option><option value="Turkmenistan">Turkmenistan</option><option value="Timor-Leste">Timor-Leste</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Tuvalu">Tuvalu</option><option value="Taiwan, Province of China">Taiwan, Province of China</option><option value="Tanzania, United Republic of">Tanzania, United Republic of</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="United States">United States</option><option value="Uzbekistan">Uzbekistan</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Viet Nam">Viet Nam</option><option value="Vanuatu">Vanuatu</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="Samoa">Samoa</option><option value="Yemen">Yemen</option><option value="South Africa">South Africa</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option></select></span>
			                        </div>
			                        <div class="input-box">
			                            <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email"></span>
			                            <br>
			                            <span class="wpcf7-form-control-wrap your-tel"><input type="text" name="your-tel" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Telephone"></span>
			                            <br>
			                            <span class="photo-file"><br>
			<label><small>Attach Photo</small><br>
			<span class="wpcf7-form-control-wrap your-file"><input type="file" name="your-file" size="40" class="wpcf7-form-control wpcf7-file" aria-invalid="false"></span>
			                            <br>
			                            </label>
			                            <br>
			                            </span>
			                        </div>
			                        <div class="input-box">
			                            <span class="wpcf7-form-control-wrap your-age"><select name="your-age" class="wpcf7-form-control wpcf7-select" aria-invalid="false"><option value="Age Range">Age Range</option><option value="18-25">18-25</option><option value="26-30">26-30</option><option value="31-35">31-35</option><option value="36-40">36-40</option><option value="41-45">41-45</option><option value="46-50">46-50</option><option value="51-60">51-60</option><option value="70 or above">70 or above</option></select></span>
			                            <br>
			                            <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="Your Message"></textarea></span>
			                        </div>
			                        <div class="con-sub">
			                            <input type="submit" value="SUBMIT" class="wpcf7-form-control wpcf7-submit"><img class="ajax-loader" src="http://www.thebachelorhouse.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;">
			                        </div>
			                        <div class="wpcf7-response-output wpcf7-display-none"></div>
			                    </form>
			                </div>
			            </div>
			        </div>
			        <div class="home-journey-outer">
			            <img src="http://www.thebachelorhouse.com/wp-content/uploads/2016/10/journey-banner.jpg" alt="journey-banner" class="alignnone size-full wp-image-234" srcset="http://www.thebachelorhouse.com/wp-content/uploads/2016/10/journey-banner.jpg 1800w, http://www.thebachelorhouse.com/wp-content/uploads/2016/10/journey-banner-300x146.jpg 300w, http://www.thebachelorhouse.com/wp-content/uploads/2016/10/journey-banner-768x374.jpg 768w, http://www.thebachelorhouse.com/wp-content/uploads/2016/10/journey-banner-1024x499.jpg 1024w" sizes="(max-width: 1800px) 100vw, 1800px">
			            <div class="row">
			                <div class="home-where-you-are col-sm-12 col-md-12 col-lg-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeIn;">
			                    <h4>For the young and ambitious gay men in asia</h4>
			                    <div class="where-conunty"><a class="active" id="anc_bangkok" href="javascript:void(0)">BANGKOK</a> / <a id="anc_hongkong" href="javascript:void(0)">HONG KONG</a></div>
			                    <div id="address_bangkok">
			                        59/70, Soi Aree, Sukhumvit 26, Klongtoei, Bangkok, Thailand
			                    </div>
			                    <div id="address_hongkong" style="display:none;">
			                        122 Queens Road, Hong Kong Island, Hong Kong
			                    </div>
			                    <p><a href="#" class="start-btn">START YOUR JOURNEY</a></p>
			                </div>
			            </div>
			        </div>
			    </div>
</div>


		</div><!-- #content -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->


<?php get_footer(); ?>
