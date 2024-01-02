
<div class="flex items-center justify-center h-screen bg-gray-900">
    <div id="register-form" class="bg-gray-900 h-90 md:h-90">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl overflow-hidden">
            <div class="md:flex w-full">
                <div class="w-full md:w-full py-10 px-5 md:px-10">
                    <div class="text-center mb-5">
                        <h1 class="font-bold text-2xl text-gray-700">REGISTER</h1>
                        <p>Enter your information to register</p>
                    </div>
                    <form action="" method="POST">
                        <!-- form inputs -->
                        <div class="flex -mx-3">
                            <div class="w-1/2 px-3 mb-3">
                                <label for="" class="text-xs font-semibold px-1">First name</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                    <input name="f-name" type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John">
                                </div>
                            </div>
                            <div class="w-1/2 px-3 mb-5">
                                <label for="" class="text-xs font-semibold px-1">Last name</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                    <input name="l-name" type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="Smith">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <label for="" class="text-xs font-semibold px-1">Email</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-email-outline text-gray-400 text-lg"></i></div>
                                    <input name="reg_email" type="email" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="johnsmith@example.com">
                                </div>
                            </div>
                        </div>
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-12">
                                <label for="" class="text-xs font-semibold px-1">Password</label>
                                <div class="flex">
                                    <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-lock-outline text-gray-400 text-lg"></i></div>
                                    <input name="reg_password" type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="************">
                                </div>
                            </div>
                        </div>
                        <!-- Submit button -->
                        <div class="flex -mx-3">
                            <div class="w-full px-3 mb-5">
                                <button type="submit" name="submit_r" class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">REGISTER NOW</button>
                            </div>
                        </div>

                        <!-- Login link -->
                        <div class="text-sm font-display font-semibold text-gray-700 text-center">
                            Already have an account? <a href="index.php?page=login" id="login" class="cursor-pointer text-indigo-600 hover:text-indigo-800">Login!</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
