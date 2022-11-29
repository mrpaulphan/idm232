<?php
if (!isset($services)) {
    echo '$services variable is not defined. Please check the code.';
}
?>
<table class="min-w-full divide-y divide-gray-300">
  <thead class="bg-gray-50">
    <tr>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">ID</th>
      <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Name
      </th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Price</th>
      <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Image</th>
      <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
        <span class="sr-only">Edit</span>
      </th>
    </tr>
  </thead>
  <tbody class="divide-y divide-gray-200 bg-white">
    <?php
    // Cant combine functions with string so we have to assign the function to a variable here.
    $site_url = site_url();
while ($services_row = mysqli_fetch_array($services)) {
    echo "
              <tr>
                <td class='whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6'>{$services_row['id']}</td>
                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$services_row['name']}</td>
                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'>{$services_row['price']}</td>
                <td class='whitespace-nowrap px-3 py-4 text-sm text-gray-500'><img src='{$site_url}{$services_row['image_path']}' alt=''></td>
                <td class='relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6'>
                  <a href='{$site_url}/admin/services/edit.php?id={$services_row['id']}' class='text-indigo-600 hover:text-indigo-900'>Edit</a>
                  <a href='{$site_url}/admin/services/delete.php?id={$services_row['id']}' class='text-indigo-600 hover:text-indigo-900'>Delete</a>
                </td>
              </tr>";
}
?>
  </tbody>
</table>