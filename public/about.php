<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple House Template</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
    <link href="css/templatemo-style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->

<body>
    <?php
					$i=0;
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "corpus_test";

					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) 
					{
					die("Connection failed: ".$conn->connect_error);
					}
					
					$sql = "SELECT Id_meal,meal_name,meal_description,img_link FROM Meal";
					//$sql = "SELECT Id_meal,meal_name,meal_description,img_link FROM Meal WHERE ";


					$result = $conn->query($sql);
					$items = array();

					 while($row = $result->fetch_assoc()) {
					
						$items[] = $row;
						
						 }
						// var_dump($items);
				  ?>

    <div class="container">
        <!-- Top box -->
        <!-- Logo & Site Name -->
        <div class="placeholder">
            <div class="parallax-window" data-parallax="scroll" data-image-src="img/macro-photograph-black-dark.jpg">
                <div class="tm-header">
                    <div class="row tm-header-inner">
                        <div class="col-md-6 col-12">
                            <img src="img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
                            <div class="tm-site-text-box">
                                <h1 class="tm-site-title">Healthy food</h1>
                                <h6 class="tm-site-description">Recommendation</h6>
                            </div>
                        </div>
                        <nav class="col-md-6 col-12 tm-nav">
                            <ul class="tm-nav-ul">
                                <li class="tm-nav-li"><a href="index.php" class="tm-nav-link ">1</a></li>
                                <li class="tm-nav-li"><a href="about.php" class="tm-nav-link active">2</a></li>
                                <li class="tm-nav-li"><a href="contact.html" class="tm-nav-link">3</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
	</div>

        <main>
            <header class="row tm-welcome-section">
                <h2 class="col-12 text-center tm-section-title">Welcome to Simple House</h2>
                <p class="col-12 text-center"> Total 3 HTML pages are included in this template. Header image has a
                    parallax effect. You can feel free to download, edit and use this TemplateMo layout for your
                    commercial or non-commercial websites.</p>
            </header>

            <div class="tm-paging-links">
                <nav>
                    <ul>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link active">dessert</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">Salad</a></li>
                        <li class="tm-paging-item"><a href="#" class="tm-paging-link">meal</a></li>
                    </ul>
                </nav>
            </div>

            <!-- Gallery -->
            <div class="row tm-gallery">
                <!-- gallery page 1 -->
						<div id="tm-gallery-page-dessert" class="tm-gallery-page">
							<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">

						
							<figure>
									<img src="<?php echo $items[$i] ["img_link"];?>" alt="Image"
										class="img-fluid tm-gallery-img" />
									<figcaption>
										<h4 class="tm-gallery-title"><?php echo $items[$i] ["meal_name"]; ?></h4>
										<p class="tm-gallery-description"><?php echo $items[$i] ["meal_description"]; $i++;  ?>
										</p>

										<form method="post" action=" " >


											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-danger ">
													<input type="radio" name="options" onclick="addtoRate(5,1)" id="option1" autocomplete="off"
														value="Bad"> Bad
												</label>
												<label class="btn btn-warning active">
													<input type="radio" name="options" onclick="addtoRate(5,2)"  id="option2" autocomplete="off" checked
														value="Normal"> Normal
												</label>
												<label class="btn btn-success">
													<input type="radio" name="options" onclick="addtoRate(5,3)"  id="option3" autocomplete="off"
														value="Good"> Good
												</label>


											</div>   <br>

										</form>
						
									</figcaption>
							</figure>
							</article>
						
						
						
						
						
							<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
								<figure>
									<img src="<?php echo $items[$i] ["img_link"];?>" alt="Image" class="img-fluid tm-gallery-img" />
									<figcaption>
										<h4 class="tm-gallery-title"><?php echo $items[$i] ["meal_name"]; ?></h4>
										<p class="tm-gallery-description"><?php echo $items[$i] ["meal_description"]; $i++;  ?></p>
										<form method="post" action=" " name="form3">


											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-danger ">
													<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
													Bad
												</label>
												<label class="btn btn-warning active">
													<input type="radio" name="options" id="option2" autocomplete="off" checked
														value="Normal"> Normal
												</label>
												<label class="btn btn-success">
													<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
													Good
												</label>

											</div>
											<br>



										</form>
									</figcaption>
								</figure>
							</article>
							<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
								<figure>
									<img src="<?php echo $items[$i] ["img_link"];?>" alt="Image" class="img-fluid tm-gallery-img" />
									<figcaption>
										<h4 class="tm-gallery-title"><?php echo $items[$i] ["meal_name"]; ?></h4>
										<p class="tm-gallery-description"><?php echo $items[$i] ["meal_description"]; $i++; ?> </p>
										<form method="post" action=" " name="form3">


											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-danger ">
													<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
													Bad
												</label>
												<label class="btn btn-warning active">
													<input type="radio" name="options" id="option2" autocomplete="off" checked
														value="Normal"> Normal
												</label>
												<label class="btn btn-success">
													<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
													Good
												</label>

											</div>
											<br>



										</form>
									</figcaption>
								</figure>
							</article>
							<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
								<figure>
									<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
									<figcaption>
										<h4 class="tm-gallery-title">Aliquam sagittis</h4>
										<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
											amet tellus accumsan</p>
										<form method="post" action=" ">


											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-danger ">
													<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
													Bad
												</label>
												<label class="btn btn-warning active">
													<input type="radio" name="options" id="option2" autocomplete="off" checked
														value="Normal"> Normal
												</label>
												<label class="btn btn-success">
													<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
													Good
												</label>

											</div>
											<br>



										</form>
									</figcaption>
								</figure>
							</article>
							<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
								<figure>
									<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
									<figcaption>
										<h4 class="tm-gallery-title">Maecenas eget justo</h4>
										<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
											amet tellus accumsan</p>
										<form method="post" action=" ">


											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-danger ">
													<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
													Bad
												</label>
												<label class="btn btn-warning active">
													<input type="radio" name="options" id="option2" autocomplete="off" checked
														value="Normal"> Normal
												</label>
												<label class="btn btn-success">
													<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
													Good
												</label>

											</div><br>



										</form>
									</figcaption>
								</figure>
							</article>
							<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
								<figure>
									<img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
									<figcaption>
										<h4 class="tm-gallery-title">Quisque et felis eros</h4>
										<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
											amet tellus accumsan</p>
										<form method="post" action=" ">


											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-danger ">
													<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
													Bad
												</label>
												<label class="btn btn-warning active">
													<input type="radio" name="options" id="option2" autocomplete="off" checked
														value="Normal"> Normal
												</label>
												<label class="btn btn-success">
													<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
													Good
												</label>

											</div><br>


										</form>
									</figcaption>
								</figure>
							</article>
							<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
								<figure>
									<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
									<figcaption>
										<h4 class="tm-gallery-title">Sed ultricies dui</h4>
										<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
											amet tellus accumsan</p>
										<form method="post" action=" ">


											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-danger ">
													<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
													Bad
												</label>
												<label class="btn btn-warning active">
													<input type="radio" name="options" id="option2" autocomplete="off" checked
														value="Normal"> Normal
												</label>
												<label class="btn btn-success">
													<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
													Good
												</label>

											</div><br>


										</form>
									</figcaption>
								</figure>
							</article>
							<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
								<figure>
									<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
									<figcaption>
										<h4 class="tm-gallery-title">Donec porta consequat</h4>
										<p class="tm-gallery-description">Nam in suscipit nisi, sit amet consectetur metus. Ut sit
											amet tellus accumsan</p>
										<form method="post" action=" ">


											<div class="btn-group btn-group-toggle" data-toggle="buttons">
												<label class="btn btn-danger ">
													<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
													Bad
												</label>
												<label class="btn btn-warning active">
													<input type="radio" name="options" id="option2" autocomplete="off" checked
														value="Normal"> Normal
												</label>
												<label class="btn btn-success">
													<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
													Good
												</label>

											</div><br>


										</form>
									</figcaption>
								</figure>
							</article>
						</div><br> 
					

					<!-- gallery page 2
					<div id="tm-gallery-page-salad" class="tm-gallery-page">
			
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">dessert Menu One</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>


								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Second Title dessert</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Third dessert Item</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Superior dessert</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Sed ultricies dui</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Maecenas eget justo</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
					</div>
				 -->

					<!-- gallery page 2 -->
					<div id="tm-gallery-page-salad" class="tm-gallery-page hidden">
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Salad Menu One</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>


								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Second Title Salad</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Third Salad Item</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/01.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Superior Salad</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Sed ultricies dui</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Maecenas eget justo</h4>
									<p class="tm-gallery-description">Proin eu velit egestas, viverra sapien eget, consequat
										nunc. Vestibulum tristique</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
					</div> <!-- gallery page 2 -->

					<!-- gallery page 3 -->
					<div id="tm-gallery-page-meal" class="tm-gallery-page hidden">
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/08.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">meal One</h4>
									<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient
										montes, nascetur ridiculus mus.</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/07.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">meal Second</h4>
									<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient
										montes, nascetur ridiculus mus.</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/06.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Third Soft meal</h4>
									<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient
										montes, nascetur ridiculus mus.</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/05.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Aliquam sagittis</h4>
									<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient
										montes, nascetur ridiculus mus.</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/04.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Maecenas eget justo</h4>
									<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient
										montes, nascetur ridiculus mus.</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>
						<article class="col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item">
							<figure>
								<img src="img/gallery/03.jpg" alt="Image" class="img-fluid tm-gallery-img" />
								<figcaption>
									<h4 class="tm-gallery-title">Quisque et felis eros</h4>
									<p class="tm-gallery-description">Orci varius natoque penatibus et magnis dis parturient
										montes, nascetur ridiculus mus.</p>
									<form method="post" action=" ">


										<div class="btn-group btn-group-toggle" data-toggle="buttons">
											<label class="btn btn-danger ">
												<input type="radio" name="options" id="option1" autocomplete="off" value="Bad">
												Bad
											</label>
											<label class="btn btn-warning active">
												<input type="radio" name="options" id="option2" autocomplete="off" checked
													value="Normal"> Normal
											</label>
											<label class="btn btn-success">
												<input type="radio" name="options" id="option3" autocomplete="off" value="Good">
												Good
											</label>

										</div><br>


									</form>
								</figcaption>
							</figure>
						</article>

					</div>
            <!-- gallery page 3 -->
		   
				<!-- <div class="tm-section tm-container-inner">
				
					<div class="row">











						<div class="col-md-6">
							<figure class="tm-description-figure">
								<img src="img/img-01.jpg" alt="Image" class="img-fluid" />
							</figure>
						</div>
						<div class="col-md-6">
							<div class="tm-description-box">
								<h4 class="tm-gallery-title">Maecenas nulla neque</h4>
								<p class="tm-mb-45">Redistributing this template as a downloadable ZIP file on any template
									collection site is strictly prohibited. You will need to <a rel="nofollow"
										href="https://templatemo.com/contact">talk to us</a> for additional permissions about our
									templates. Thank you.</p>
								<a href="about.html" class="tm-btn tm-btn-default tm-right">Read More</a>
							</div>
						</div>
					</div>
				</div> -->
				<button  formaction="test.php" class=" btn-primary mb-2 btn-block">Next</button>
    	</main>

			<footer class="tm-footer text-center">
				<p>Copyright &copy; 2020 Simple House

					| Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p>
			</footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
	var selected_items =[];
	function addtoRate (id,val)
	{

		let new_rate ={id:id,val:val};
        var index = null;
		searched_item = selected_items.filter(function(item,i) {
			index =i;
			return item.id == id;
		})
		console.log("searched_items "+searched_item);
        
		if(!searched_item.length){
            selected_items.push(new_rate);
		}else{
			if((searched_item[0].val != val)){
				console.log('index'+index)
				selected_items.splice(index,0)
			}
		}
		console.log(selected_items);
   
	}
    $(document).ready(function() {
        // Handle click on paging links
        $('.tm-paging-link').click(function(e) {
            e.preventDefault();

            var page = $(this).text().toLowerCase();
            $('.tm-gallery-page').addClass('hidden');
            $('#tm-gallery-page-' + page).removeClass('hidden');
            $('.tm-paging-link').removeClass('active');
            $(this).addClass("active");
        });

    });

    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <?php mysqli_close($conn); ?>
	
</body>

</html>