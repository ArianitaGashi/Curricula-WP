<?php get_header(); ?>

<main>
    <section class="hero">
    <img class="hero-banner" 
         src="<?php echo esc_url( get_theme_file_uri('images/banner.png') ); ?>" 
         alt="Site banner">
</section>

    <section class="features">
        <br>
        <h2 id="heading">Why Choose Us?</h2>
        <br>
        <ul>
            <li>
                <img src="<?php echo esc_url( get_theme_file_uri('images/project.png') ); ?>" alt="Hands-On, Project-Based Learning">
                <span>Project-Based Learning</span>
            </li>
            
            <li>
                <img src="<?php echo esc_url( get_theme_file_uri('images/ins.png') ); ?>" alt="Expert Instructors Who Inspire">
                <span>Instructors Who Inspire</span>
            </li>
             
            <li>
                <img src="<?php echo esc_url( get_theme_file_uri('images/digital.png') ); ?>" alt="Future-Ready Digital Skills">
                <span>Future-Ready Digital Skills</span>
            </li>

            <li>
                <img src="<?php echo esc_url( get_theme_file_uri('images/online.png') ); ?>" alt="Flexible Learning: Online or In-Person">
                <span>Online or In-Person</span>
            </li>

        </ul>
    </section>
<br>
<section class="section-pad">
  <h2 id="curricula-heading">Curriculum by Age</h2>
  <br>

  <ul class="curricula-grid">
    <!-- 8–11 -->
    <li class="card">
      <h3 class="card-title">
        <span class="label">CURRICULUM FOR THE GROUP AGE</span>
        <span class="age">8–11 years</span>
      </h3>
      <ul class="card-points">
        <li><strong>Content:</strong> Learning the logic and basic concepts of programming</li>
        <li><strong>Period:</strong> September – July (10 months / academic year)</li>
        <li><strong>Intensity:</strong> 3 academic hours per week</li>
        <li><strong>Group:</strong> 8–16 students</li>
        <li><strong>Method:</strong> Online or Physically</li>
      </ul>
    </li>

    <!-- 12–15 -->
    <li class="card">
      <h3 class="card-title">
        <span class="label">CURRICULUM FOR THE GROUP AGE</span>
        <span class="age">12–15 years</span>
      </h3>
      <ul class="card-points">
        <li><strong>Content:</strong> Basics of web and mobile application development</li>
        <li><strong>Period:</strong> September – July (10 months / academic year)</li>
        <li><strong>Intensity:</strong> 3 academic hours per week</li>
        <li><strong>Group:</strong> 8–16 students</li>
        <li><strong>Method:</strong> Online or Physically</li>
      </ul>
    </li>

    <!-- 16–18 -->
    <li class="card">
      <h3 class="card-title">
        <span class="label">CURRICULUM FOR THE GROUP AGE</span>
        <span class="age">16–18 years</span>
      </h3>
      <ul class="card-points">
        <li><strong>Content:</strong> Advanced Web and Mobile Application Development</li>
        <li><strong>Period:</strong> September – July (10 months / academic year)</li>
        <li><strong>Intensity:</strong> 3 academic hours per week</li>
        <li><strong>Group:</strong> 8–16 students</li>
        <li><strong>Method:</strong> Online or Physically</li>
      </ul>
    </li>
  </ul>
</section>


</main>

<?php get_footer(); ?>