<head>
  <style>
    <?php include "event.css"; ?>
  </style>
</head>
<body>
  <header>

  </header>

  <div class="wrap">

    <?php while ( have_posts() ) : the_post(); ?>
      <h1> <?php echo wp_title(); ?> </h1>

      <div class="eventBox">
        <iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/4S3PD9k8dmo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> </iframe>
        <p class="quickInfo">
          <?php echo get_field("director"); ?> ||
          <?php echo get_field("year_of_release"); ?> ||
          <?php echo get_field("duration"); ?> min ||
          <?php echo get_field("available_subtitles"); ?> ||
          <?php echo get_field("genre"); ?>
        </p>
        <p class="restrictions">
          <?php echo get_field("restrictions"); ?>
        </p>
        <button class="purchase"> Buy Now </button>
        <section class="description">
          <?php the_content(); ?>
        </section>
        <p class="dateTime">
          <b>Date and Time: </b> <br>
          <?php $date = get_field('date', false, false);
          $date = new DateTime($date);
          echo $date->format('F d Y');
           ?>, <?php echo get_field("time"); ?>
        </p>
        <p class="location"> Location </p>
      </div>

      <div class="share">
        Sharing is Caring
        <!-- Share items here -->
      </div>

      <div class="more">
        <h2> Check out some other events! </h2>
        <div class="moreItem">
          <p class="moreImage"> Image here </p>
          <p class="moreType"> film </p>
          <button class="moreBuyNow"> Buy Now! </button>
          <h3 class="moreTitle"> The name of the Event </h3>
          <p class="moreDescription"> The description of the event and stuff goes in here </p>
          <p class="moreRestrictions"> The restrictions of the event here </p>
        </div>
      </div>

    <?php endwhile; ?>
  </div><!-- .wrap -->

</body>
