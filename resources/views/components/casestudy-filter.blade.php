<form method="get" action="/case-studies/" class="bg-turq-900 py-6 px-4 text-lg mt-8">

  <h4 class="text-xl font-bold mb-6">Filter Case Studies</h4>

  <div class="mb-4">

    <?php $casestudy_category = get_query_var( 'casestudy_category' ); ?>
    <label for="casestudy_category" class="text-lg block font-bold mb-2">By Project or State</label>
    <select name="casestudy_category" id="casestudy_category" class="w-full h-10 bg-gray-800 px-2">
      <option value selected>All</option>

      <?php foreach ( get_terms( [
        'taxonomy' => 'casestudy_category',
        'parent'   => 0,
      ] ) as $term ) : ?>
      <option
        value="<?= $term->slug; ?>" <?= $casestudy_category === $term->slug ? 'selected' : '' ?>><?= $term->name; ?></option>

      <?php foreach (
      get_terms( [
        'taxonomy' => 'casestudy_category',
        'parent'   => $term->term_id,
      ] ) as $subterm
      ) : ?>
      <option
        value="<?= $subterm->slug; ?>" <?= $casestudy_category === $subterm->slug ? 'selected' : '' ?>>
        - <?= $subterm->name; ?></option>
      <?php endforeach; ?>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="mb-4 relative">
    <div class="search-field">
      <label for="casestudy_q" class="text-lg block font-bold mb-2">Search</label>
      <input type="text" name="casestudy_q" id="casestudy_q" placeholder="Institution, Grant .."
             value="<?= esc_attr( get_query_var( 'casestudy_q' ) ); ?>" class="w-full h-10 bg-white px-2">
    </div>
  </div>

  <div class="">
    <input type="submit" class="btn oeg cursor-pointer" value="Search">
  </div>
</form>
