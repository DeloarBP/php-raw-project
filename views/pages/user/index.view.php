<?php require('../views/partials/head.php'); ?>
<?php require('../views/partials/nav.php'); ?>
<main class="mx-auto max-w-7xl mt-28">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex justify-end mb-3">
        <a href="/user/create" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            create user
        </a>
    </div>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                SL NO
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                First Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Last Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Role
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                   <p> <?= $user->id ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p> <?= $user->first_name ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p> <?= $user->last_name ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p> <?= $user->email ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <p> <?= $user->role ?></p>
                            </tr>
                        <?php endforeach; ?>
                        <!-- More rows... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php require('../views/partials/footer.php'); ?>
