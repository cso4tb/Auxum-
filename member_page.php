<?php 
	session_start();
?>
<!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>AUXUM</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">

	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Logo -->
						<a href="index.html" id="logo">	<img src="logotp3.png" width=240 height=55 > </img> </a>

					<!-- Nav -->
						<nav id="nav">
							<ul>								
								<li>
								<li><a href="index.html">AUXUM Sign Up</a></li>
								<li>
									<a href="#">Other Tests</a>
									<ul>
										<li><a href="#">AP Chemistry</a></li>
										<li><a href="#">AP Calculus AB</a></li>
										<li><a href="#">AP Literature</a></li>
										<li>
											<a href="#">AP Languages</a>
											<ul>
												<li><a href="#">Latin</a></li>
												<li><a href="#">Spanish</a></li>
												<li><a href="#">German</a></li>
												<li><a href="#">French</a></li>
												<li><a href="#">Chineese</a></li>
											</ul>
										</li>
										<li><a href="#">AP Physics</a></li>
									</ul>
								</li>
								<li><a href="right-sidebar.html">AUXUM Usage</a></li>
								<li class="current"><a href="member_page.php">Test Preparation</a></li>
								<li><a href="logout.php">Log Out</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<section class="wrapper style1">
					<div class="container">
						


						<?php if(isset($_SESSION['logged in']) && $_SESSION['logged in'] == 'true'): ?>
						<div class="row 200%">
							<div class="3u 12u(narrower)">
								<div id="sidebar1">

									<!-- Sidebar 1 -->									
										<section>
											<h3>Past Lesson Timeline </h3>
											<p>To view your past lesson statistics and timeline, select the past lesson report button below. </p>
											<footer>
												<a href="pastlessontime.html" class="button">Past Lesson Timeline</a>
											</footer>
										</section>

										<section>
											<h3>View Past Lesson Proficiencies</h3>
											<ul class="links">
												<li><a href="#">Lesson 1: Fertile Crescent</a></li>
												<li><a href="#">Lesson 2: Sub-Saharan Africa</a></li>
												<li><a href="#">Lesson 3: Japaneese Empire</a></li>
												<li><a href="#">Lesson 4: Ancient China </a></li>
												<li><a href="#">Lesson 5: Ancient India</a></li>
												<li><a href="#">Lesson 6: Latin America</a></li>
											</ul>
											<footer>
												<a href="lessonprogress.html" class="button">Past Lesson Scores</a>
											</footer>
										</section>

								</div>
							</div>
							<div class="6u 12u(narrower) important(narrower)">
								<div id="content">

									<!-- Content -->

										<article>
											<header>
												<h2>The French Revolution</h2>
												<br>
												<p>Lesson 7</p>
											</header>

											<span class="image featured"><img src="images/frenchy.jpeg" alt="" /></span>

											<p>Key Themes to focus on: 
												Nationalism, Revolution, and Reform
												Andrea, Voltaire, Universal Toleration</p>

											<h3>THE FRENCH REVOLUTION AT VERSAILLES: RISE OF THE THIRD ESTATE</h3>
											<p>France’s population had changed considerably since 1614. The non-aristocratic members of the Third Estate now represented 98 percent of the people but could still be outvoted by the other two bodies. In the lead-up to the May 5 meeting, the Third Estate began to mobilize support for equal representation and the abolishment of the noble veto–in other words, they wanted voting by head and not by status. While all of the orders shared a common desire for fiscal and judicial reform as well as a more representative form of government, the nobles in particular were loath to give up the privileges they enjoyed under the traditional system. 						By the time the Estates-General convened at Versailles, the highly public debate over its voting process had erupted into hostility between the three orders, eclipsing the original purpose of the meeting and the authority of the man who had convened it. On June 17, with talks over procedure stalled, the Third Estate met alone and formally adopted the title of National Assembly; three days later, they met in a nearby indoor tennis court and took the so-called Tennis Court Oath (“serment du jeu de paume”), vowing not to disperse until constitutional reform had been achieved. Within a week, most of the clerical deputies and 47 liberal nobles had joined them, and on June 27 Louis XVI grudgingly absorbed all three orders into the new assembly.</p>

											<h3>THE FRENCH REVOLUTION HITS THE STREETS: THE BASTILLE AND THE GREAT FEAR</h3>
											<p>On June 12, as the National Assembly (known as the National Constituent Assembly during its work on a constitution) continued to meet at Versailles, fear and violence consumed the capital. Though enthusiastic about the recent breakdown of royal power, Parisians grew panicked as rumors of an impending military coup began to circulate. A popular insurgency culminated on July 14 when rioters stormed the Bastille fortress in an attempt to secure gunpowder and weapons; many consider this event, now commemorated in France as a national holiday, as the start of the French Revolution. 						The wave of revolutionary fervor and widespread hysteria quickly swept the countryside. Revolting against years of exploitation, peasants looted and burned the homes of tax collectors, landlords and the seigniorial elite. Known as the Great Fear (“la Grande peur”), the agrarian insurrection hastened the growing exodus of nobles from the country and inspired the National Constituent Assembly to abolish feudalism on August 4, 1789, signing what the historian Georges Lefebvre later called the “death certificate of the old order.”</p>

											<h3>THE FRENCH REVOLUTION’S POLITICAL CULTURE: DRAFTING A CONSTITUTION</h3>
											<p>On August 4, the Assembly adopted the Declaration of the Rights of Man and of the Citizen (“Déclaration des droits de l’homme et du citoyen”), a statement of democratic principles grounded in the philosophical and political ideas of Enlightenment thinkers like Jean-Jacques Rousseau (1712-1778). The document proclaimed the Assembly’s commitment to replace the ancien régime with a system based on equal opportunity, freedom of speech, popular sovereignty and representative government. 					Drafting a formal constitution proved much more of a challenge for the National Constituent Assembly, which had the added burden of functioning as a legislature during harsh economic times. For months, its members wrestled with fundamental questions about the shape and expanse of France’s new political landscape. For instance, who would be responsible for electing delegates? Would the clergy owe allegiance to the Roman Catholic Church or the French government? Perhaps most importantly, how much authority would the king, his public image further weakened after a failed attempt to flee in June 1791, retain? Adopted on September 3, 1791, France’s first written constitution echoed the more moderate voices in the Assembly, establishing a constitutional monarchy in which the king enjoyed royal veto power and the ability to appoint ministers. This compromise did not sit well with influential radicals like Maximilien de Robespierre (1758-1794), Camille Desmoulins (1760-1794) and Georges Danton (1759-1794), who began drumming up popular support for a more republican form of government and the trial of Louis XVI.</p>
										</article>

								</div>
							</div>
							<div class="3u 12u(narrower)">
								<div id="sidebar2">

									<!-- Sidebar 2 -->

										<section>
											<h3>Complete Future Lessons</h3>
											<ul class="links">
												<li><a href="#">Lesson 8: Brittish Colonization</a></li>
												<li><a href="#">Lesson 9: Latin America </a></li>
												<li><a href="#">Lesson 10: China's Empire </a></li>
												<li><a href="#">Lesson 11: Industrial Revolution</a></li>
												<li><a href="#">Lesson 12: World War I </a></li>
												<li><a href="#">Lesson 13: World War II </a></li>
											</ul>
											<footer>
												<a href="futurelesson.html" class="button">Completion Timeline</a>
											</footer>
										</section>

										<section>
											<h3>Modifying your Schedule</h3>
											<p>The completion of your lesson is optimized according to your needs, test date, and the amount of time you have availible to study before the test date. If your test date or your schedule before the test changes, your study plan can be modified according to these changes. Click the button below to enter any chnages into your study plan. </p>
											<footer>
												<a href="modsched.html" class="button">Modify Schedule</a>
											</footer>
										</section>

								</div>
							</div>
						</div>


						
					</div>
				</section>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<link href="src/jquery.stepProgressBar.css" rel="stylesheet" type="text/css">
						<style>
						body { background-color:#fafafa;}
						.container { margin:15px auto 30px auto;}
						.btn { display:inline-block; margin:10px;}
						</style>
						<h1>Test Preparation Progress</h1>
						<div id="myGoal"></div>
						</div>
					</div>



					<!-- Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>

					<!-- Copyright -->
				
						<div class="copyright">
							<ul class="menu">
								<li>&copy; AUXUM. All rights reserved</li><li><a href=""></a></li>
							</ul>
						</div>
						<?php else: ?>
							<p>Please log in to view this page.</p>
						<?php endif ?>
				</div>

		</div>

						<script src="http://code.jquery.com/jquery-1.12.2.min.js"></script>
						<script src="src/jquery.stepProgressBar.js"></script>
						<script>
						$('#myGoal').stepProgressBar({
						  currentValue: 40,
						  steps: [
						    { value: 10 },
						    {
						      topLabel: 'Half-way Mark',
						      value: 50,
						      bottomLabel: '50%'
						    },
						    {
						      value: 80,
						      bottomLabel: 'Learning Complete, Review Only Point'
						    },
						    {  
						      value: 100, 
						      bottomLabel: 'Test Preparation Complete',
						      mouseOver: function() { alert('mouseOver'); },
						      click: function() { alert('click'); }
						    }
						  ],
						  unit: '%'
						});

						        $('#get-current-value-btn').click(function() {
						          alert($('#myGoal').stepProgressBar('getCurrentValue'));
						        });
						        $('#set-current-value-btn').click(function() {
						          $('#myGoal').stepProgressBar('setCurrentValue', 50);
						        });
						        $('#find-step-btn').click(function() {
						          console.log($('#myGoal').stepProgressBar('findStep', 50));
						        });
						        $('#add-step-btn').click(function() {
						          $('#myGoal').stepProgressBar('addStep', {value: 25});
						        });
						        $('#remove-step-btn').click(function() {
						          $('#myGoal').stepProgressBar('removeStep', 50);
						        });
						</script>

						<script type="text/javascript">

						  var _gaq = _gaq || [];
						  _gaq.push(['_setAccount', 'UA-36251023-1']);
						  _gaq.push(['_setDomainName', 'jqueryscript.net']);
						  _gaq.push(['_trackPageview']);

						  (function() {
						    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
						    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
						    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
						  })();

						</script>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>