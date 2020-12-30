<?php
/*
Template Name: Health Score Calc
*/
?>

<style type="text/css">
	
	#health-score-page .tatsu-section-overlay{
		background: linear-gradient(0.47deg, #131336 1.22%, rgba(14, 14, 41, 0) 98.59%);
	}


	.custom-ul-style{
 		list-style-type: none;
    	margin-left: 0px;
    	display: flex;
    	justify-content: center;
    	padding-left: 0px;
 	 }
 	 .custom-ul-style li{
 	 	padding-left: 20px;
 	 }
 	 .custom-ul-style li label{
 	 	font-size: 15px;
 	 }
	.heading-text{
	 	font-size: 1.8em;
	 }
	.main-heading{
		margin-top: -5px;
	}
	
	.custom-grid-1{
		width: 100%;
		height: 201px;
		left: 464px;
		background: #FFFFFF;
		box-shadow: 0px 17px 10.0172px rgba(116, 115, 224, 0.035), 0px 142px 80px rgba(116, 115, 224, 0.07);
		border-radius: 10px;
		display: flex;
		padding-top: 55px;
    	padding-left: 60px;
		margin-bottom: 15px;
	 }
	.custom-grid-2{
		text-align: center;
    	padding-top: 40px;
    	padding-left: 38px;
    	padding-right: 38px;
		width: 100%;
		height: 245px;
		left: 464px;
		top: 210px;
		background: #FFFFFF;
		box-shadow: 0px 17px 10.0172px rgba(116, 115, 224, 0.035), 0px 142px 80px rgba(116, 115, 224, 0.07);
		border-radius: 10px;
		margin-bottom: 15px;
	}
	.custom-grid-3{
		text-align: center;
    	padding-top: 40px;
    	padding-left: 38px;
    	padding-right: 38px;
		width: 100%;
		height: 280px;
		left: 464px;
		top: 465px;
		background: #FFFFFF;
		box-shadow: 0px 17px 10.0172px rgba(116, 115, 224, 0.035), 0px 142px 80px rgba(116, 115, 224, 0.07);
		border-radius: 10px;
		margin-bottom: 15px;
	}
	.custom-grid-4{
		text-align: center;
    	padding-top: 40px;
    	padding-left: 38px;
    	padding-right: 38px;
		width: 100%;
		height: 245px;
		left: 464px;
		top: 720px;
		background: #FFFFFF;
		box-shadow: 0px 17px 10.0172px rgba(116, 115, 224, 0.035), 0px 142px 80px rgba(116, 115, 224, 0.07);
		border-radius: 10px;
		margin-bottom: 15px;
	}
	.custom-grid-5{
		text-align: center;
    	padding-top: 40px;
    	padding-left: 38px;
    	padding-right: 38px;
		width: 100%;
		height: 245px;
		left: 464px;
		top: 975px;
		background: #FFFFFF;
		box-shadow: 0px 17px 10.0172px rgba(116, 115, 224, 0.035), 0px 142px 80px rgba(116, 115, 224, 0.07);
		border-radius: 10px;
		margin-bottom: 15px;
	}
	.custom-grid-6{
		text-align: center;
    	padding-top: 40px;
    	padding-left: 38px;
    	padding-right: 38px;
		width: 100%;
		height: 245px;
		left: 464px;
		top: 1230px;
		background: #FFFFFF;
		box-shadow: 0px 17px 10.0172px rgba(116, 115, 224, 0.035), 0px 142px 80px rgba(116, 115, 224, 0.07);
		border-radius: 10px;
		margin-bottom: 15px;
	}
	.custom-grid-7{
		text-align: center;
    	padding-top: 40px;
    	padding-left: 38px;
    	padding-right: 38px;
		width: 100%;
		height: 245px;
		left: 464px;
		top: 1485px;
		background: #FFFFFF;
		box-shadow: 0px 17px 10.0172px rgba(116, 115, 224, 0.035), 0px 142px 80px rgba(116, 115, 224, 0.07);
		border-radius: 10px;
		margin-bottom: 15px;
	}
	.custom-grid-8{
		text-align: center;
    	padding-top: 40px;
    	padding-left: 38px;
    	padding-right: 38px;
		width: 100%;
		height: 245px;
		left: 464px;
		top: 1740px;
		background: #FFFFFF;
		box-shadow: 0px 17px 10.0172px rgba(116, 115, 224, 0.035), 0px 142px 80px rgba(116, 115, 224, 0.07);
		border-radius: 10px;
		margin-bottom: 15px;
	}
	.custom-grid-9 {
		text-align: center;
    	padding-top: 40px;
    	padding-left: 38px;
    	padding-right: 38px;
	    width: 100%;
	    height:230px;
	    left: 464px;
	    top: 1996px;
	    background: #FFFFFF;
	    box-shadow: 0px 17px 10.0172px rgba(116, 115, 224, 0.035), 0px 142px 80px rgba(116, 115, 224, 0.07);
	    border-radius: 10px;
	}	
	.custom-grid-1-box{
		width: 292px;
		height: 77px;
		top: 615px;
	}
	.custom-grid-1-1{
		left: 520px;
	}
	.custom-grid-1-2{
		left: 686px;
	}
	.custom-grid-1-3{
		left: 852px;
	}
	.custom-grid-1-4{
		left: 1018px;
	}
	.custom-grid-1-box input,select{
		width: 80%;
	}
	.content-text-p{
		font-size: 18px;
	}
	.content-text-p span{
		font-size: 14px;
	}
	.custom-grid-1-1 li, .custom-grid-1-2 li{
			list-style-type: none;
		}

	@media(max-width: 1024px){
		.custom-grid-1,.custom-grid-2,.custom-grid-3,
		.custom-grid-4,.custom-grid-5,.custom-grid-6,
		.custom-grid-7,.custom-grid-8,.custom-grid-9{
			height: auto;
		}
		.custom-grid-9{height: 310px;}
		.custom-grid-1{height: 200px;}
		.custom-ul-style{
			display: inline;
		}
		.custom-ul-style{
			display: flex;
		}
	}

	@media(max-width: 468px){
		.custom-grid-1,.custom-grid-2,.custom-grid-3,
		.custom-grid-4,.custom-grid-5,.custom-grid-6,
		.custom-grid-7,.custom-grid-8,.custom-grid-9{
			width: auto;
		}
		.custom-grid-1-1,.custom-grid-1-2,
		.custom-grid-1-3,.custom-grid-1-4{
			left: 0px;
		}
		.custom-grid-9 input{
			text-align: left!important;
		}
		.custom-grid-9{
			height: 176px!important;
		}
		.custom-grid-1-1 li, .custom-grid-1-2 li{
			list-style-type: none;
		}
		.custom-grid-1{
			height: auto;
		    display: block;
		    padding-bottom: 35px;
		    padding-top: 35px;
		    padding-left: 20px;
		}
		.custom-grid-1-box{
			height: auto;
			width: 100%;
			margin-top: 20px;
			margin-left: 26px;
		}
		.custom-grid-2,.custom-grid-3,
		.custom-grid-4,.custom-grid-5,.custom-grid-6,
		.custom-grid-7,.custom-grid-8,.custom-grid-9{
			height: auto;
			padding:12px;
			text-align: left;
			padding-left: 20px;
		}
		.custom-ul-style{
			display: inline;
		}
		.custom-ul-style li {
    		padding-left: 0px;
    		margin-bottom: 0px;
		}
		.content-text-p{margin-bottom: 5px;}
		.content-text-p,.custom-ul-style,.heading-text {
	        text-align: left;	
		}
		.custom-ul-style div{
				display: block !important;
		}
		.custom-ul-style-smok{
			display: block!important;
		}
	}

</style>

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
<script type="text/javascript">
	
			(function( jQuery ) {
			'use strict';

			
			 jQuery(document).ready(function(){
			// validate contact form on keyup and submit
			jQuery("#calculator").validate({
				//set the rules for the field names
				rules: {
					member_age: {
						required: true,
						maxlength: 3,
						min: 13
					},
					member_weight: {
						required: true,
						minlength: 2,
						min: 50
					},
					member_height_in: {
						required: true
					},
					member_waist_in: {
						required: true
					},
					member_score_sleep: {
						required: true
					},
					member_score_exercise: {
						required: true
					},
					member_score_smoking: {
						required: true
					},
					member_score_alcohol: {
						required: true
					},
					member_score_diet: {
						required: true
					},
					member_score_nutrition: {
						required: true
					},
					member_score_emotional: {
						required: true
					},
				},
				//set messages to appear inline
				messages: {
					member_age: {
						required: "<strong>Age</strong> is required",
						min: "<span style='color:#d9362c'>Age must be 13 or older</span>",
						maxlength: "<span style='color:#d9362c'>Age must be 3 digits or less</span>"
					},
					member_weight: {
						required: "<strong>Weight</strong> is required",
						minlength: "<span style='color:#d9362c'>Please enter a weight greater<br> than 50 lbs.</span>",
						min: "<span style='color:#d9362c'>Please enter a weight greater<br> than 50 lbs.</span>"
					},
					member_height_in: {
						required: "<strong>Height in inches</strong> is required.",
						max: "Please enter a value less than 12"
					},
					member_waist_in: "<strong>Waist</strong> size is required",
					member_score_sleep: "<strong>Sleep</strong> is required",
					member_score_exercise: "<strong>Exercise</strong> is required",
					member_score_smoking: "<strong>Smoking</strong> is required",
					member_score_alcohol: "<strong>Alcohol</strong> is required",
					member_score_diet: "<strong>Diet</strong> is required",
					member_score_nutrition: "<strong>Nutrition</strong> is required",
					member_score_emotional: "<strong>Emotional Well-being</strong> is required",
				},
				errorContainer: "#messageBox",
				errorLabelContainer: "#messageBox ul",
				wrapper: "li",
				errorElement: "span",
					});
				});
				})( jQuery );



		function healthcalc (form) {
			
			/* Set default values */
			var age = 0;
			var weight = 0;
			var heightInches = 0;
			var waistInches = 0;
			var sleep = 0;
			var exercise = 0;
			var smoking = 0;
			var alcohol = 0;
			var diet = 0;
			var nutrition = 0;
			var emotional = 0;
			
			
			/* Check form values and set variable to form values */
			
			/* Age */
			var age = jQuery("#member_age").val();
			
			
			/* Weight */
			var weight = jQuery("#member_weight").val();
			
			
			/* Height */
			var heightInches = jQuery("#member_height_in").val();
			
			
			/* Healthy Weight Minimum */
			var healthyWeightMin = Math.round( ( 18.5 / 703 ) * ( heightInches * heightInches ) );
			
			
			/* Healthy Weight Maximum */
			var healthyWeightMax = Math.round( ( 24.9 / 703 ) * ( heightInches * heightInches ) );
			
			
			/* Waist */
			var waistInches = jQuery("#member_waist_in").val();
			
			
			/* Waist Points */
			var waistPoints = Math.round( ( 11 - ( Math.abs( ( waistInches / heightInches ) - .45 ) * 60 ) ) * 100 ) / 100;
			
			
			/* BMI */
			var bmi = ( weight / ( heightInches * heightInches ) ) * 703;
			
			
			/* BMI Points */
			var bmiPoints = 11 - Math.abs( bmi - 21.7 );
			
			
			/* Sleep */
			if ( ( jQuery(".member_score_sleep:checked").val() - 0 ) ) {
			
				var sleep = jQuery(".member_score_sleep:checked").val() - 0;
				
			}
			
			
			/* Exercise */
			if ( ( jQuery(".member_score_exercise:checked").val() - 0 ) ) {
			
				var exercise = jQuery(".member_score_exercise:checked").val() - 0;
				
			}
			
			
			/* Smoking */
			if ( ( jQuery(".member_score_smoking:checked").val() - 0 ) ) {
			
				var smoking = jQuery(".member_score_smoking:checked").val() - 0;
				
			}
			
			
			/* Alcohol */
			if ( ( jQuery(".member_score_alcohol:checked").val() - 0 ) ) {
			
				var alcohol = jQuery(".member_score_alcohol:checked").val() - 0;
				
			}
			
			
			/* Diet */
			if ( ( jQuery(".member_score_diet:checked").val() - 0 ) > 0 ) {
			
				var diet = jQuery(".member_score_diet:checked").val() - 0;
				
			}
			
			
			/* Nutrition */
			if ( ( jQuery(".member_score_nutrition:checked").val() - 0 ) ) {
			
				var nutrition = jQuery(".member_score_nutrition:checked").val() - 0;
				
			}
			
			
			/* Emotional */
			if ( ( jQuery(".member_score_emotional:checked").val() - 0 ) ) {
			
				var emotional = jQuery(".member_score_emotional:checked").val() - 0;
				
			}
			
			
			/* Total Score */
			var scoreTotal = Math.round((sleep + exercise + alcohol + smoking + diet + nutrition + emotional + bmiPoints + waistPoints)*10)/10;
			
			
			/* Health Risk */
			var scoreRisk = Math.round((100 - scoreTotal)*10)/10;
			

			/* Send values to modal if all questions have been answered */
			if (weight > 0 && heightInches > 0 && waistInches > 0 && sleep && exercise && alcohol && smoking != null && diet && nutrition && emotional) {
			
				jQuery("#js-modal-health-score").html(scoreTotal);
				jQuery("#js-modal-health-risk").html('According to your health score, you have a ' + scoreRisk + '% risk of developing a lifestyle related disease such as heart disease, cancer, or diabetes.');
				
			} else {
			
				jQuery("#js-modal-health-score").html('???');
				jQuery("#js-modal-health-risk").html('Please fill out the form completely to see your health score.');
				
			}
			
			
			/* Output all values to .diagnostic-panel. Remove for production */
			jQuery("#js-member-age").html(age);
			jQuery("#js-member-weight").html(weight);
			jQuery("#js-member-weight-min").html(healthyWeightMin);
			jQuery("#js-member-weight-max").html(healthyWeightMax);
			jQuery("#js-member-height-in").html(heightInches);
			jQuery("#js-member-waist-in").html(waistInches);
			jQuery("#js-member-waist-points").html(waistPoints);
			jQuery("#js-member-bmi").html(bmi);
			jQuery("#js-member-bmi-points").html(bmiPoints);
			jQuery("#js-member-sleep").html(sleep);
			jQuery("#js-member-exercise").html(exercise);
			jQuery("#js-member-smoking").html(smoking);
			jQuery("#js-member-alcohol").html(alcohol);
			jQuery("#js-member-diet").html(diet);
			jQuery("#js-member-nutrition").html(nutrition);
			jQuery("#js-member-emotional").html(emotional);
			jQuery("#js-member-score-total").html(scoreTotal);
			jQuery("#js-member-score-total-input").val(scoreTotal);
			jQuery("#js-member-score-risk").html(scoreRisk);

		}

</script>	

<div class="main-custom-box">
		<!-- This file should primarily consist of HTML with a little bit of PHP. -->
		<form id="calculator" method="post" action="#" novalidate="novalidate">
				<input type="hidden" name="XID" value="fa26f30afb4cf1ec4d0398ef13454794eef4879f">

				<div class="hiddenFields">
					<input type="hidden" name="error_page" value="http://newstartclub.com/my-health/calculator-error">
				</div>
				<div class="sub-custom-box">
				<div class="grid custom-grid-1 custom-grid-box">
					<div class="custom-grid-1-1 custom-grid-1-box">
						<label for="member_age">Age</label><br>
						<input type="text" placeholder="yrs" pattern="[0-9]*" class="input valid" name="member_age" id="member_age" value="" size="3" onblur="healthcalc(this.form)">		
					</div>
					<div class="custom-grid-1-2 custom-grid-1-box">				
						<label for="member_weight">Weight</label><br>
						<input type="text" placeholder="lbs" pattern="[0-9]*" class="input" name="member_weight" id="member_weight" value="" size="5" onblur="healthcalc(this.form)">
					</div>
					<div class="custom-grid-1-3 custom-grid-1-box">				
						<label for="member_height_in">Height</label><br>
						<select class="input" name="member_height_in" id="member_height_in" onblur="healthcalc(this.form)">
									<option value="">ft./in.</option>
									<optgroup label="3 foot">
										<option value="36">3' 0"</option>
										<option value="37">3' 1"</option>
										<option value="38">3' 2"</option>
										<option value="39">3' 3"</option>
										<option value="40">3' 4"</option>
										<option value="41">3' 5"</option>
										<option value="42">3' 6"</option>
										<option value="43">3' 7"</option>
										<option value="44">3' 8"</option>
										<option value="45">3' 9"</option>
										<option value="46">3' 10"</option>
										<option value="47">3' 11"</option>
									</optgroup>
									<optgroup label="4 foot">
										<option value="48">4' 0"</option>
										<option value="49">4' 1"</option>
										<option value="50">4' 2"</option>
										<option value="51">4' 3"</option>
										<option value="52">4' 4"</option>
										<option value="53">4' 5"</option>
										<option value="54">4' 6"</option>
										<option value="55">4' 7"</option>
										<option value="56">4' 8"</option>
										<option value="57">4' 9"</option>
										<option value="58">4' 10"</option>
										<option value="59">4' 11"</option>
									</optgroup>
									<optgroup label="5 foot">
										<option value="60">5' 0"</option>
										<option value="61">5' 1"</option>
										<option value="62">5' 2"</option>
										<option value="63">5' 3"</option>
										<option value="64">5' 4"</option>
										<option value="65">5' 5"</option>
										<option value="66">5' 6"</option>
										<option value="67">5' 7"</option>
										<option value="68">5' 8"</option>
										<option value="69">5' 9"</option>
										<option value="70">5' 10"</option>
										<option value="71">5' 11"</option>
									</optgroup>
									<optgroup label="6 foot">
										<option value="72">6' 0"</option>
										<option value="73">6' 1"</option>
										<option value="74">6' 2"</option>
										<option value="75">6' 3"</option>
										<option value="76">6' 4"</option>
										<option value="77">6' 5"</option>
										<option value="78">6' 6"</option>
										<option value="79">6' 7"</option>
										<option value="80">6' 8"</option>
										<option value="81">6' 9"</option>
										<option value="82">6' 10"</option>
										<option value="83">6' 11"</option>
									</optgroup>
									<optgroup label="7 foot">
										<option value="84">7' 0"</option>
										<option value="85">7' 1"</option>
										<option value="86">7' 2"</option>
										<option value="87">7' 3"</option>
										<option value="88">7' 4"</option>
										<option value="89">7' 5"</option>
										<option value="90">7' 6"</option>
										<option value="91">7' 7"</option>
										<option value="92">7' 8"</option>
										<option value="93">7' 9"</option>
										<option value="94">7' 10"</option>
										<option value="95">7' 11"</option>
									</optgroup>
									<optgroup label="8 foot">
										<option value="96">8' 0"</option>
										<option value="97">8' 1"</option>
										<option value="98">8' 2"</option>
										<option value="99">8' 3"</option>
										<option value="100">8' 4"</option>
										<option value="101">8' 5"</option>
										<option value="102">8' 6"</option>
										<option value="103">8' 7"</option>
										<option value="104">8' 8"</option>
										<option value="105">8' 9"</option>
										<option value="106">8' 10"</option>
										<option value="107">8' 11"</option>
									</optgroup>
								</select>
					</div>
					<div class="custom-grid-1-4 custom-grid-1-box">				
						<label for="member_waist_in">Waist Size</label><br>
						<input type="text" placeholder="in" pattern="[0-9]*" class="input" name="member_waist_in" id="member_waist_in" value="" size="3" onblur="healthcalc(this.form)">
					</div>
			
				</div>

				<div class="grid custom-grid-2">
					<h2 class="heading-text"><img src="https://www.newstart.com/wp-content/uploads/2020/05/sleep-moon.png" alt="Sleep">&nbsp;Sleep</h2>
					<p class="content-text-p">How many hours do you usually sleep per night?</p>
					<ul class="custom-ul-style">
						<li><label><input type="radio" name="member_score_sleep" class="member_score_sleep" value="5" onclick="healthcalc(this.form)"> <span>5 hours or less</span></label></li>
						<li><label><input type="radio" name="member_score_sleep" class="member_score_sleep" value="9" onclick="healthcalc(this.form)"> <span>6 hours</span></label></li>
						<li><label><input type="radio" name="member_score_sleep" class="member_score_sleep" value="11" onclick="healthcalc(this.form)"> <span>7-8 hours</span></label></li>
						<li><label><input type="radio" name="member_score_sleep" class="member_score_sleep" value="7" onclick="healthcalc(this.form)"> <span>9 hours or more</span></label></li>
					</ul>
				</div>

				<div class="grid custom-grid-3">
					<h2 class="heading-text"> <img src="https://www.newstart.com/wp-content/uploads/2020/05/yoga-pose.png" alt="Exercise">&nbsp;Exercise</h2>
					<p class="content-text-p">How often do you get vigorous physical activity for at least 20-30 minutes? <br><span>(Examples: Brisk walking, gardening, jogging, sports, swimming, or cycling.)</span></p>
					<ul class="custom-ul-style">
						<li><label><input type="radio" name="member_score_exercise" class="member_score_exercise" value="13" onclick="healthcalc(this.form)"> <span>Daily</span></label></li>
						<li><label><input type="radio" name="member_score_exercise" class="member_score_exercise" value="11" onclick="healthcalc(this.form)"> <span>Most every day</span></label></li>
						<li><label><input type="radio" name="member_score_exercise" class="member_score_exercise" value="7" onclick="healthcalc(this.form)"> <span>Less than 3 times a week</span></label></li>
						<li><label><input type="radio" name="member_score_exercise" class="member_score_exercise" value="5"	 onclick="healthcalc(this.form)"> <span>Rarely</span></label></li>
					</ul>
				</div>

				<div class="grid custom-grid-4">
					<h2 class="heading-text"> <img src="https://www.newstart.com/wp-content/uploads/2020/05/Group.png" alt="Alcohol Use">&nbsp;Alcohol Use</h2>
					<p class="content-text-p">How many servings of alcohol do you drink in a week?</p>
					<ul class="custom-ul-style">
						<li><label><input type="radio" name="member_score_alcohol" class="member_score_alcohol" value="11" onclick="healthcalc(this.form)"> <span>None</span></label></li>
						<li><label><input type="radio" name="member_score_alcohol" class="member_score_alcohol" value="9" onclick="healthcalc(this.form)"> <span>1-2 Servings</span></label></li>
						<li><label><input type="radio" name="member_score_alcohol" class="member_score_alcohol" value="5" onclick="healthcalc(this.form)"> <span>3-10 Servings</span></label></li>
						<li><label><input type="radio" name="member_score_alcohol" class="member_score_alcohol" value="1" onclick="healthcalc(this.form)"> <span>Over 10 Servings</span></label></li>
					</ul>
				</div>

				<div class="grid custom-grid-5">
					<h2 class="heading-text"> <img src="https://www.newstart.com/wp-content/uploads/2020/05/Smoking-area.png" alt="Smoking History">&nbsp;Smoking History</h2>
					<ul class="custom-ul-style custom-ul-style-smok" style="display: inline-block;">
						<div style="display: flex;justify-content: center;">
							<li><label><input type="radio" name="member_score_smoking" class="member_score_smoking" value="11" onclick="healthcalc(this.form)"> <span>I have never smoked</span></label></li>
							<li><label><input type="radio" name="member_score_smoking" class="member_score_smoking" value="9" onclick="healthcalc(this.form)"> <span>I have quit smoking</span></label></li>
						</div>
						<div style="display: flex;justify-content: center;">
							<li><label><input type="radio" name="member_score_smoking" class="member_score_smoking" value="3" onclick="healthcalc(this.form)"> <span>I smoke less than 1 pack a day</span></label></li>
							<li><label><input type="radio" name="member_score_smoking" class="member_score_smoking" value="0" onclick="healthcalc(this.form)"> <span>I smoke more than 1 pack a day</span></label></li>
						</div>
					</ul>
				</div>

				<div class="grid custom-grid-6">
					<h2 class="heading-text"> <img src="https://www.newstart.com/wp-content/uploads/2020/05/healthy-diet.png" alt="Diet">&nbsp;Diet</h2>
					<p class="content-text-p">How often do you eat only plant-based foods? (No meat or dairy products.)</p>
					<ul class="custom-ul-style">
						<li><label><input type="radio" name="member_score_diet" class="member_score_diet" value="11" onclick="healthcalc(this.form)"> <span>Almost Every Day</span></label></li>
						<li><label><input type="radio" name="member_score_diet" class="member_score_diet" value="9" onclick="healthcalc(this.form)"> <span>Sometimes</span></label></li>
						<li><label><input type="radio" name="member_score_diet" class="member_score_diet" value="5" onclick="healthcalc(this.form)"> <span>Rarely or never</span></label></li>
					</ul>
					
				</div>

				<div class="grid custom-grid-7">
					<h2 class="heading-text"><img src="https://www.newstart.com/wp-content/uploads/2020/05/healthy-food.png" alt="Nutrition">&nbsp;Nutrition</h2>
					<p class="content-text-p">How often do you eat foods containing refined sugar or oil?</p>
					<ul class="custom-ul-style">
						<li><label><input type="radio" name="member_score_nutrition" class="member_score_nutrition" value="6" onclick="healthcalc(this.form)"> <span>Almost every day</span></label></li>
						<li><label><input type="radio" name="member_score_nutrition" class="member_score_nutrition" value="8" onclick="healthcalc(this.form)"> <span>Once in a while</span></label></li>
						<li><label><input type="radio" name="member_score_nutrition" class="member_score_nutrition" value="10" onclick="healthcalc(this.form)"> <span>Rarely or never</span></label></li>
					</ul>
				</div>

				<div class="grid custom-grid-8">
					<h2 class="heading-text"><img src="https://www.newstart.com/wp-content/uploads/2020/05/mood.png" alt="Emotional Well-being">&nbsp;Emotional Well-being</h2>
					<p class="content-text-p">How was your sense of emotional well-being this past week?</p>
					<ul class="custom-ul-style">
						<li><label><input type="radio" name="member_score_emotional" class="member_score_emotional" value="11" onclick="healthcalc(this.form)"> <span>Happy</span></label></li>
						<li><label><input type="radio" name="member_score_emotional" class="member_score_emotional" value="9" onclick="healthcalc(this.form)"> <span>Up and down</span></label></li>
						<li><label><input type="radio" name="member_score_emotional" class="member_score_emotional" value="7" onclick="healthcalc(this.form)"> <span>Sad</span></label></li>
						<li><label><input type="radio" name="member_score_emotional" class="member_score_emotional" value="5" onclick="healthcalc(this.form)"> <span>Depressed</span></label></li>
					</ul>
				</div>

				<div class="grid custom-grid-9">
					<h2 class="heading-text">Total Score</h2>
					<input type="text" name="member_score_total" value="" class="hiddens" id="js-member-score-total-input" placeholder="calculate" disabled="" style="
    text-align: center;">

				</div>

				<div class="grid custom-grid-10">
						<div class="center">
							<!-- <button type="submit" class="super secondary button" id="calculate"><span>Calculate</span></button> -->
						</div>

				</div>		
			</div>				
		</form>

</div>		     
