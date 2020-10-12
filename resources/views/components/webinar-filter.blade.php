<form method="get" action="/webinars" class="bg-turq-900 py-6 px-4 text-lg mt-8">

  <h4 class="text-xl font-bold mb-6">Filter Webinars</h4>

  <div class="mb-4">
    <?php $webinar_year = get_query_var( 'webinar_year' ); ?>

    <label for="webinar_year" class="text-lg block font-bold mb-2">Year</label>
    <select name="webinar_year" id="webinar_year" class="w-full h-10 bg-gray-900 px-2">
      <option value selected>- Year</option>
      <option value="2013" <?= $webinar_year === '2013' ? 'selected' : '' ?>>2013</option>
      <option value="2014" <?= $webinar_year === '2014' ? 'selected' : '' ?>>2014</option>
      <option value="2015" <?= $webinar_year === '2015' ? 'selected' : '' ?>>2015</option>
      <option value="2016" <?= $webinar_year === '2016' ? 'selected' : '' ?>>2016</option>
      <option value="2017" <?= $webinar_year === '2017' ? 'selected' : '' ?>>2017</option>
      <option value="2018" <?= $webinar_year === '2018' ? 'selected' : '' ?>>2018</option>
      <option value="2019" <?= $webinar_year === '2019' ? 'selected' : '' ?>>2019</option>
      <option value="2020" <?= $webinar_year === '2020' ? 'selected' : '' ?>>2020</option>
    </select>
  </div>

  <div class="mb-4">
    <?php $webinar_category = get_query_var( 'webinar_category' ); ?>
    <label for="webinar_category" class="text-lg block font-bold mb-2">Category</label>
    <select name="webinar_category" id="webinar_category" class="w-full h-10 bg-gray-900 px-2">
      <option value selected>- Category</option>
      <?php foreach ( get_terms( 'webinar_category' ) as $term ) : ?>
      <option
        value="<?= $term->slug; ?>" <?= $webinar_category === $term->slug ? 'selected' : '' ?>><?= $term->name; ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="mb-4 relative">
    <div class="search-field">
      <label for="webinar_q" class="text-lg block font-bold mb-2">Search</label>
      <input type="text" name="webinar_q" id="webinar_q" placeholder="Title, presenter, topic .."
             value="<?= esc_attr( get_query_var( 'webinar_q' ) ); ?>" class="w-full h-10 bg-white px-2">
    </div>
  </div>

  <div class="">
    <input type="submit" class="btn oeg cursor-pointer" value="Search">
  </div>
</form>
