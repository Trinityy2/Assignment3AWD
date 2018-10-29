<head>
  <style>
    <?php include "event.css"; ?>
  </style>
</head>
<body>

  <div class="wrap">

    <?php while ( have_posts() ) : the_post(); ?>
      <h1> <?php echo wp_title(); ?> </h1>

      <div class="eventBox">
        <p class="video"> Video here </p>
        <p class="quickInfo"> Additional Information here </p>
        <p class="restrictions"> Restrictions here </p>
        <button class="purchase"> Buy Now </button>
        <p class="description"> This is a description with a lot of text: blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah </p>
        <p class="dateTime"> Date & Time </p>
        <p class="location"> Location </p>
      </div>

      <div class="share">
        Sharing is Caring
      </div>

      <div class="more">
        <h2> Check out some other events! </h2>
        <div class="moreItem">
          <p class="moreImage"> Image here </p>
          <h3 class="itemHeader"> </h3>
        </div>
      </div>

    <?php endwhile; ?>
  </div><!-- .wrap -->

</body>
