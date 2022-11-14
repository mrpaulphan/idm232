<?php
$navigation_items = [
    [
        'title' => 'Users',
        'url' => site_url() . '/admin/users',
    ],
    [
        'title' => 'Services',
        'url' => site_url() . '/admin/services',
    ],
    [
        'title' => 'Search',
        'url' => site_url() . '/admin/search',
    ],

];
?>
<div class="mb-8">
  <div class="sm:hidden">
    <label for="tabs" class="sr-only">Select a tab</label>
    <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
    <select id="tabs" name="tabs"
      class="block w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
      <option selected>My Account</option>

      <option>Company</option>

      <option>Team Members</option>

      <option>Billing</option>
    </select>
  </div>
  <div class="hidden sm:block">
    <nav class="isolate flex divide-x divide-gray-200 rounded-lg shadow" aria-label="Tabs">
      <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
      <?php
      foreach ($navigation_items as $nav_item) {
          echo "
          <a href='{$nav_item['url']}' class='text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center hover:bg-gray-50 focus:z-10'>
            <span>{$nav_item['title']}</span>
          </a>
          ";
      }
?>
    </nav>
  </div>
</div>