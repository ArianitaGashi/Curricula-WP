<?php
/*
Template Name: About Us
Template Post Type: page
*/
?>

<?php get_header(); ?>
<section>
  <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 gap-4 md:grid-cols-4 md:items-center md:gap-8">
      <div class="md:col-span-1">
        <div class="max-w-prose md:max-w-none">
          <h2 class="text-2xl font-semibold text-gray-900 sm:text-3xl">
            Empowering the Next Generation of Digital Creators.
          </h2>

          <p class="mt-4 text-gray-700">
            At Digital School, we believe that learning technology should be creative, fun, and future-focused.
Our mission is to help students of all ages discover the power of programming, design, and digital thinking through interactive, project-based learning.
          </p>
        </div>
      </div>

      <div class="md:col-span-3">
        <img
          src="<?php echo esc_url( get_theme_file_uri('images/aboutus.webp') ); ?>" alt="About Us"
          class="rounded"
        />
      </div>
    </div>
  </div>
</section>

<div class="space-y-2">
  <details class="group [&amp;_summary::-webkit-details-marker]:hidden">
    <summary class="flex cursor-pointer items-center justify-between gap-4 rounded-lg border border-gray-200 bg-white px-4 py-3 font-medium text-gray-900 hover:bg-gray-50">
      <span>What are the basic features?</span>

      <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </summary>

    <div class="p-4">
      <p class="text-gray-700">
        Digital School is a modern programming school dedicated to teaching coding and technology skills to students of all ages. It offers a structured curriculum that progresses from beginner to advanced levels, focusing on hands-on, project-based learning. Students learn popular programming languages such as Scratch, Python, JavaScript, and HTML/CSS, while developing creativity, problem-solving, and logical thinking skills. With experienced instructors, small class sizes, and an interactive learning environment, Digital School ensures each student receives personalized attention and support. The school also provides online learning tools, progress tracking, and certificates of completion, helping students build a strong foundation for future studies or careers in technology.
      </p>
    </div>
  </details>

  <details class="group [&amp;_summary::-webkit-details-marker]:hidden">
    <summary class="flex cursor-pointer items-center justify-between gap-4 rounded-lg border border-gray-200 bg-white px-4 py-3 font-medium text-gray-900 hover:bg-gray-50">
      <span>How do I get started?</span>

      <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </summary>

    <div class="p-4">
      <p class="text-gray-700">
        Getting started with Digital School is simple! Here’s a clear step-by-step guide you can use: <br>

<strong>Explore Our Programs</strong><br>
Visit our course catalog to find the right program based on your age, skill level, or interests — whether it’s coding for beginners, web development, or robotics.<br>

<strong>Register Online or In Person</strong><br>
Complete a quick registration form on our website or visit one of our centers to sign up. Our team will help you choose the best class schedule for you.<br>

<strong>Join Your First Class</strong><br>
Once enrolled, you’ll receive your class schedule and login details for our online platform. You’ll be ready to start coding and exploring new projects right away!<br>

<strong>Track Your Progress</strong><br>
As you learn, you’ll earn certificates, complete hands-on projects, and see your progress grow week by week.<br>
      </p>
    </div>
  </details>

  <details class="group [&amp;_summary::-webkit-details-marker]:hidden">
    <summary class="flex cursor-pointer items-center justify-between gap-4 rounded-lg border border-gray-200 bg-white px-4 py-3 font-medium text-gray-900 hover:bg-gray-50">
      <span>What support options are available?</span>

      <svg class="size-5 shrink-0 transition-transform duration-300 group-open:-rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
      </svg>
    </summary>

    <div class="p-4">
      <p class="text-gray-700">
        Digital School provides a variety of support options to help students succeed. Our instructors offer one-on-one guidance during and after class to ensure every concept is understood. Students and parents can reach out through our online platform for help with lessons, assignments, or technical issues. We also provide regular progress updates, feedback sessions, and mentoring to keep learners motivated. Additionally, our help desk and administrative team are always available to assist with scheduling, registration, and general inquiries.
      </p>
    </div>
  </details>
</div>


<?php get_footer(); ?>
