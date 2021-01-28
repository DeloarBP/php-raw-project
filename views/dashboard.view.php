<?php require('../views/partials/head.php'); ?>
<?php require('../views/partials/nav.php'); ?>

<!--table--section-->
<main class="mx-auto max-w-7xl mt-28">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex justify-end mb-3">
        <a href="/issue/create" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            create issue
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
                                User Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Dept Name
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Issue description
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Issue date
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action taken
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Action Date
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Status
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="">Edit</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        <?php $item = 0 ?>
                        <?php foreach ($issues as $issue) : ?>
                        <?php $item ++ ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p> <?= $item ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p> <?= $issue->user_name ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p> <?= $issue->dept_name ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p> <?= $issue->issue_description ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p> <?= $issue->issue_date ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <p> <?= $issue->action_taken ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <p> <?= $issue->action_date ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <p> <?= $issue->status ?></p>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <a class="px-2 py-2 bg-red-500 hover:bg-red-700 text-white rounded-md" href="<?= 'delete/?'. $issue->id ?>">Delete</a>
                                </td>
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
<!--end--table-->
<?php require('../views/partials/footer.php'); ?>
