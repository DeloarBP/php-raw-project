

<?php require('../views/partials/head.php'); ?>
<?php require('../views/partials/nav.php'); ?>

<!--user-create-->
<main class="mx-auto max-w-7xl mt-28 px-6">

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Create User</h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="/store" method="POST">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label class="block text-sm font-medium text-gray-700">User Name</label>
                                    <input type="text" name="user_name"   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label  class="block text-sm font-medium text-gray-700">Dept Name</label>
                                    <select  name="dept_name" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="it">IT</option>
                                        <option value="account">Account</option>
                                        <option value="finance">Finance</option>
                                    </select>
                                </div>


                                <div class="col-span-6">
                                    <label for="about" class="block text-sm font-medium text-gray-700">
                                        Issue Descriptions
                                    </label>
                                    <div class="mt-1">
                                        <textarea name="issue_description" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                    </div>
                                </div>


                                <div class="col-span-6">
                                    <label  class="block text-sm font-medium text-gray-700">Action Taken</label>
                                    <input type="text" name="action_taken"   class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>


                                <div class="col-span-6">
                                    <label  class="block text-sm font-medium text-gray-700">Status</label>
                                    <input type="text" name="status"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>


                                <div class="col-span-6 sm:col-span-3">
                                    <label  class="block text-sm font-medium text-gray-700">Issue Date</label>
                                    <input type="date" name="issue_date"  autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label  class="block text-sm font-medium text-gray-700">Action Date</label>
                                    <input type="date" name="action_date" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</main>
<!--user--create->

<?php require('../views/partials/footer.php'); ?>
