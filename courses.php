<?php
	include_once 'navbar.php';
?>

<!-- packages section starts  -->

<section class="courses" id="courses">

    <h1 class="heading subheading">popular <span> courses </span></h1>

<!-- filter form section starts  -->

<div class="form-container" data-aos="zoom-in">

    <form action="">
		<span>Filter by:</span>
        <div class="inputBox">            
            <select name="level" id="level">
            	<option label="Level"></option>
            	<option value="beginner">Beginner</option>
            	<option value="mixed">Mixed</option>
            	<option value="intermediate">Intermediate</option>
            	<option value="advanced">Advanced</option>
            </select>
        </div>

        <div class="inputBox">
             <select name="subject" id="subject">
             	<option label="Subject"></option>
             	<option value="computer science">Computer Science</option>
            	<option value="data science">Data Science</option>
            	<option value="infomation technology">Information Technology</option>
            </select>
        </div>

        <div class="inputBox">
             <select name="duration" id="duration" >
             	<option label="Duration"></option>
            	<option value="Less Than 2 Hours">Less Than 2 Hours</option>
            	<option value="1-4 weeks">1-4 Weeks</option>
            	<option value="1-3 months">1-3 Months</option>
            	<option value="3+ months">3+ Months</option>
            </select>
        </div>

        <input type="submit" value="search" class="btn">

    </form>

</div>

    <div class="box-container">

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/p-1.jpg" alt="Images">
            </div>
            <div class="content">
            	<p>Machine Learning</p>
                <div class="price"> $ 89.99 <span>$ 99.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> Enroll now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/p-2.jpg" alt="Images">
            </div>
            <div class="content">
            	<p>Applied Data Science with Python</p>
                <div class="price"> $ 89.99 <span>$ 99.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> Enroll now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/p-3.png" alt="Images">
            </div>
            <div class="content">
            	<p>IBM Data Science</p>
                <div class="price"> $ 89.99 <span>$ 99.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> enroll now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/p-4.jpg" alt="Images">
            </div>
            <div class="content">
            	<p>Java Programming: From Beginner to Expert</p>
                <div class="price"> $ 89.99 <span>$ 99.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> enroll now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/p-5.jpg" alt="Images">
               
            </div>
            <div class="content">
            	<p>HTML, CSS and JavaScript</p>
                <div class="price"> $ 89.99 <span>$ 99.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> enroll now</a>
            </div>
        </div>

        <div class="box" data-aos="fade-up">
            <div class="image">
                <img src="images/p-6.png" alt="Images">
               
            </div>
            <div class="content">
            	<p>C++ Programming Complete Course</p>
                <div class="price"> $ 89.99 <span>$ 99.99</span> </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vero, vitae.</p>
                <a href="#" class="btn"> enroll now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- review section starts  -->

<section class="feedbacks" id="feedbacks">

    <h1 class="heading">  <span>Feedbacks</span> </h1>

    <div class="box-container" data-aos="zoom-in">

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">

            <h3>Light Yagami</h3>
            <img src="images/light.jpg" class="user" alt="">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus.</p>
            </div>
        </div>

        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            
            <h3>Lelouch Lamperounge</h3>
            <img src="images/lelouch.jpg" class="user" alt="">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus.</p>
            
            </div>
        </div> 
        
        <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <h3>Ayanokouji Kiyotaka</h3>
            <img src="images/ayanokyoji.jpg" class="user" alt="">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus.</p>    
        </div>

        </div>

          <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <h3>Senku Ishigami</h3>
            <img src="images/senku.jpg" class="user" alt="">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus.</p>    
        </div>

        </div>

          <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <h3>Shikamaru Nara</h3>
            <img src="images/shikamaru.jpg" class="user" alt="">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus.</p>    
        </div>

        </div>

          <div class="box">
            <img src="images/quote-img.png" alt="" class="quote">
            <h3>Norman</h3>
            <img src="images/norman.jpg" class="user" alt="">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi nulla sit libero nemo fuga sequi nobis? Necessitatibus.</p>    
        </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<?php
	include_once 'footer.php';
?>
